<?php
namespace app\admin\controller;

use think\Db;
use think\Request;
use think\Validate;
use think\Session;
use app\admin\model\News as NewsModel;
//新闻
class News extends BaseController
{

    //长城报
    public function cc_news()
    {
        $time = Request::instance()->param("time");  //时间
//        $title   = Request::instance()->param("title"); //标题
        $nper = Request::instance()->param("nper");   //期数


        //搜索分页
        $pageParam = ['query' => []];
        $news = new NewsModel();


        if (!empty($time) && empty($nper)) {
            $news->where('name', '=', $time);
            $this->assign('time', $time);
            $pageParam['query']['time'] = $time;
        }

        if (empty($time) && !empty($nper)) {
            $news->where('nper', '=', $nper);
            $this->assign('nper', $nper);
            $pageParam['query']['nper'] = $nper;
        }
//    if (empty($time) && empty($title) && !empty($nper))
//        {
//            $news->where('type', '=',$nper);
//            $this->assign('nper', $nper);
//            $pageParam['query']['nper'] = $nper;
//        }

//        $list = $news->order('id desc')->where('type', 1)->paginate(20, false, $pageParam);
        $list = $news->order('id desc')->where('type', 1)->paginate(20,false,['query'=>request()->param()])->each(function($item, $key){
            $base_url = config('base_url');
            $base_url = $base_url['url'];
            $item['index_img'] = $base_url.'/'.$item["index_img"]; //给数据集追加字段num并赋值
            return $item;
        });

        $listCount = $list->toArray();
        $listCount = $listCount['data'];

        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);

        //查询日期
        $times = $news->group('time')->field('time')->select();
        //查询活动期数
        $npers = $news->group('nper')->field('nper')->select();


        $leng = count($listCount);  //统计数据条数
        $this->assign('leng', $leng);
        $this->assign('times', $times);
        $this->assign('npers', $npers);


        return $this->fetch();


    }

    //长城报添加
    public function cc_add()
    {
        return $this->fetch();
    }



    //长城报 图片上传
    public  function  cc_upload(Request $request)
    {
        //文件上传
        $file = $request->file('file');
        if($file){
            $info = $file->validate(['size'=>60000000000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'uploads/news');

            if($info){

                $image = \think\Image::open(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());

                // 按照原图的比例生成一个最大为600*600的缩略图替换原图
                $image->thumb(1400, 1080)->save(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());
                // 成功上传后 获取上传信息    //文件入库
                $imgs =  $info->getSaveName();
                $img = str_replace("\\","/",$imgs);  //转义
                //拼接
                $img = 'uploads/news/'.$img;

                if ($imgs){
                    $data = ['code'=>200,'mag'=>'文件上传ok','data'=>$img];
                    return json_encode($data);
                }

            }else{
                // 上传失败获取错误信息
                echo "header('Content-type:text/html;charset=utf-8')";
                dd($file->getError());
                $info_error =  json($info->getError());
                $data = ['code'=>4001,'mag'=>$info_error];
                return json_encode($data);
            }
        }

    }

    //长城报添加
    public function cc_go()
    {
        $data   = Request::instance()->post();
        $tmp_data = $data['data'];


        $nper_time  = $tmp_data['nper_time'].'年';  //2018年
        $year =  $tmp_data['nper_time'];
        $nper_tmp       = $tmp_data['nper'];   //1

        $nper       = $nper_time.$nper_tmp.'期';

        $time       = $tmp_data['time'];
        $index_img  = $tmp_data['imgArr'];
        $title      = $tmp_data['title'];
        $en_title   = $tmp_data['en_title'];

        $content     = preg_replace('/\"/', "'", $tmp_data['editor']);
        $en_content  = preg_replace('/\"/', "'", $tmp_data['en_editor']);


        $type   = 1; //长城报

        //简介
        $summary    = mb_substr($content,0,120);
        $en_summary = mb_substr($en_content,0,120);


        $arr = compact('year','type','nper','title','time','content','en_content','summary','en_summary','index_img','title','en_title');
        $res = Db::table('news')->insert($arr);

        return $res?1:0;

    }

    //长城报修改
    public function cc_edit()
    {
        $id  = Request::instance()->param("id");
        $data = Db::table('news')->where('type',1)->where('id',$id)->find();

        $data['nper_time'] = substr($data['nper'],0,4);
        $data['nper'] = substr($data['nper'],7,1);
        $url = config('base_url');
        $base_url = $url['url'];

        $data['index_img'] = $base_url.'/'.$data['index_img'];

        $this ->assign('data',$data);
        return $this->fetch();
    }

    //长城修改
    public function cc_up()
    {

        $data   = Request::instance()->post();
        $tmp_data = $data['data'];

        $id = $tmp_data['id'];
        $nper_time  = $tmp_data['nper_time'].'年';  //2018年
        $nper_tmp       = $tmp_data['nper'];   //1

        $nper       = $nper_time.$nper_tmp.'期';

        $time       = $tmp_data['time'];
        $title      = $tmp_data['title'];
        $en_title   = $tmp_data['en_title'];

        $content     = preg_replace('/\"/', "'", $tmp_data['editor']);
        $en_content  = preg_replace('/\"/', "'", $tmp_data['en_editor']);

        $type   = 1; //长城报

        $arr = compact('type','nper','title','time','content','en_content','summary','en_summary','title','en_title');
        $res = Db::table('news')->where('id',$id)->where('type',$type)->update($arr);

        return  $res?1:0;
    }

    //修改时的文件上传
    public function cc_edit_up(Request $request)
    {

        //文件上传
        $file = $request->file('file');
        $id  = Request::instance()->param("id");

        if($file){
            $info = $file->validate(['size'=>60000000000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'uploads/news');

            if($info){

                $image = \think\Image::open(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());

                // 按照原图的比例生成一个最大为600*600的缩略图替换原图
                $image->thumb(1400, 1080)->save(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());
                // 成功上传后 获取上传信息    //文件入库
                $imgs =  $info->getSaveName();
                $img = str_replace("\\","/",$imgs);  //转义
                //拼接
                $img = 'uploads/news/'.$img;

                if ($imgs){
                    $res = Db::table('news')->where('id',$id)->update(['index_img'=>$img]);
                    $url = config('base_url');
                    $base_url = $url['url'];

                    $index_img = $base_url.'/'.$img;
                    $data = ['code'=>200,'url'=>$index_img];
                    return $res?$data:0;
                }

            }else{
                // 上传失败获取错误信息
                echo "header('Content-type:text/html;charset=utf-8')";
                dd($file->getError());
                $info_error =  json($info->getError());
                $data = ['code'=>4001,'mag'=>$info_error];
                return json_encode($data);
            }
        }

    }

    //长城删除
    public function cc_news_del()
    {
        $id   = Request::instance()->post('id');

        $res = Db::table('news')->where('type',1)->where('id',$id)->delete();
        return $res?1:0;
    }
    //批量删除
    public function cc_dels()
    {
        $data  = Request::instance()->param();
        $ids = $data['ids'];
//        dd($ids);
        $res  = Db::table('news')->where('type',1)->where('id','in',$ids)->delete();
        return $res? 1 :  0;
    }




    //公司新闻
    public function gs_news()
    {
        $time = Request::instance()->param("time");  //时间
        $title   = Request::instance()->param("title"); //标题
//        $nper = Request::instance()->param("nper");   //期数


        //搜索分页
        $pageParam = ['query' => []];
        $news = new NewsModel();


        if (!empty($time) && empty($title)) {
            $news->where('name', '=', $time);
            $this->assign('time', $time);
            $pageParam['query']['time'] = $time;
        }

        if (empty($time) && !empty($title)) {
            $news->where('title', '=', $title);
            $this->assign('title', $title);
            $pageParam['query']['title'] = $title;
        }
//    if (empty($time) && empty($title) && !empty($nper))
//        {
//            $news->where('type', '=',$nper);
//            $this->assign('nper', $nper);
//            $pageParam['query']['nper'] = $nper;
//        }

//        $list = $news->order('id desc')->where('type', 1)->paginate(20, false, $pageParam);
        $list = $news->order('id desc')->where('type', 2)->paginate(20,false,['query'=>request()->param()])->each(function($item, $key){
            $base_url = config('base_url');
            $base_url = $base_url['url'];
            $item['index_img'] = $base_url.'/'.$item["index_img"]; //给数据集追加字段num并赋值
            return $item;
        });

        $listCount = $list->toArray();
        $listCount = $listCount['data'];

        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);

        //查询日期
        $times = $news->group('time')->field('time')->select();


        $leng = count($listCount);  //统计数据条数
        $this->assign('leng', $leng);
        $this->assign('times', $times);



        return $this->fetch();


    }

    //公司添加
    public function gs_add()
    {
        return $this->fetch();
    }

    //公司 图片上传
    public  function  gs_upload(Request $request)
    {
        //文件上传
        $file = $request->file('file');
        if($file){
            $info = $file->validate(['size'=>60000000000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'uploads/news');

            if($info){

                $image = \think\Image::open(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());

                // 按照原图的比例生成一个最大为600*600的缩略图替换原图
                $image->thumb(1400, 1080)->save(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());
                // 成功上传后 获取上传信息    //文件入库
                $imgs =  $info->getSaveName();
                $img = str_replace("\\","/",$imgs);  //转义
                //拼接
                $img = 'uploads/news/'.$img;

                if ($imgs){
                    $data = ['code'=>200,'mag'=>'文件上传ok','data'=>$img];
                    return json_encode($data);
                }

            }else{
                // 上传失败获取错误信息
                echo "header('Content-type:text/html;charset=utf-8')";
                dd($file->getError());
                $info_error =  json($info->getError());
                $data = ['code'=>4001,'mag'=>$info_error];
                return json_encode($data);
            }
        }

    }

    //公司添加
    public function gs_go()
    {
        $data   = Request::instance()->post();
        $tmp_data = $data['data'];

        $time       = $tmp_data['time'];
        $index_img  = $tmp_data['imgArr'];
        $title      = $tmp_data['title'];
        $en_title   = $tmp_data['en_title'];


        $content     = preg_replace('/\"/', "'", $tmp_data['editor']);
        $en_content  = preg_replace('/\"/', "'", $tmp_data['en_editor']);


        $type   = 2; //长城报

        //简介
        $summary    = mb_substr($content,0,120);
        $en_summary = mb_substr($en_content,0,120);

        $year =    date('Y');
        $arr = compact('year','type','title','time','content','en_content','summary','en_summary','index_img','title','en_title');
        $res = Db::table('news')->insert($arr);

        return $res?1:0;

    }

    //公司修改
    public function gs_edit()
    {
        $id  = Request::instance()->param("id");
        $data = Db::table('news')->where('type',2)->where('id',$id)->find();

        $url = config('base_url');
        $base_url = $url['url'];

        $data['index_img'] = $base_url.'/'.$data['index_img'];

        $this ->assign('data',$data);
        return $this->fetch();
    }

    //公司修改
    public function gs_up()
    {

        $data   = Request::instance()->post();
        $tmp_data = $data['data'];

        $id = $tmp_data['id'];

        $time       = $tmp_data['time'];
        $title      = $tmp_data['title'];
        $en_title   = $tmp_data['en_title'];

        $content     = preg_replace('/\"/', "'", $tmp_data['editor']);
        $en_content  = preg_replace('/\"/', "'", $tmp_data['en_editor']);

        $type   = 2; //公司新闻

        $arr = compact('type','title','time','content','en_content','summary','en_summary','title','en_title');
        $res = Db::table('news')->where('id',$id)->where('type',$type)->update($arr);

        return  $res?1:0;
    }

    //公司修改时的文件上传
    public function gs_edit_up(Request $request)
    {

        //文件上传
        $file = $request->file('file');
        $id  = Request::instance()->param("id");

        if($file){
            $info = $file->validate(['size'=>60000000000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'uploads/news');

            if($info){

                $image = \think\Image::open(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());

                // 按照原图的比例生成一个最大为600*600的缩略图替换原图
                $image->thumb(1400, 1080)->save(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());
                // 成功上传后 获取上传信息    //文件入库
                $imgs =  $info->getSaveName();
                $img = str_replace("\\","/",$imgs);  //转义
                //拼接
                $img = 'uploads/news/'.$img;

                if ($imgs){
                    $res = Db::table('news')->where('id',$id)->update(['index_img'=>$img]);
                    $url = config('base_url');
                    $base_url = $url['url'];

                    $index_img = $base_url.'/'.$img;
                    $data = ['code'=>200,'url'=>$index_img];
                    return $res?$data:0;
                }

            }else{
                // 上传失败获取错误信息
                echo "header('Content-type:text/html;charset=utf-8')";
                dd($file->getError());
                $info_error =  json($info->getError());
                $data = ['code'=>4001,'mag'=>$info_error];
                return json_encode($data);
            }
        }

    }

    //公司删除
    public function gs_news_del()
    {
        $id   = Request::instance()->post('id');

        $res = Db::table('news')->where('type',2)->where('id',$id)->delete();
        return $res?1:0;
    }
    //批量删除
    public function gs_dels()
    {
        $data  = Request::instance()->param();
        $ids = $data['ids'];
//        dd($ids);
        $res  = Db::table('news')->where('type',2)->where('id','in',$ids)->delete();
        return $res? 1 :  0;
    }


//    ===============================
//公司新闻
    public function hy_news()
    {
        $time  = Request::instance()->param("time");  //时间
        $title = Request::instance()->param("title"); //标题
//        $nper = Request::instance()->param("nper");   //期数


        //搜索分页
        $pageParam = ['query' => []];
        $news = new NewsModel();


        if (!empty($time) && empty($title)) {
            $news->where('name', '=', $time);
            $this->assign('time', $time);
            $pageParam['query']['time'] = $time;
        }

        if (empty($time) && !empty($title)) {
            $news->where('title', '=', $title);
            $this->assign('title', $title);
            $pageParam['query']['title'] = $title;
        }
//    if (empty($time) && empty($title) && !empty($nper))
//        {
//            $news->where('type', '=',$nper);
//            $this->assign('nper', $nper);
//            $pageParam['query']['nper'] = $nper;
//        }

//        $list = $news->order('id desc')->where('type', 1)->paginate(20, false, $pageParam);
        $list = $news->order('id desc')->where('type', 3)->paginate(20,false,['query'=>request()->param()])->each(function($item, $key){
            $base_url = config('base_url');
            $base_url = $base_url['url'];
            $item['index_img'] = $base_url.'/'.$item["index_img"]; //给数据集追加字段num并赋值
            return $item;
        });

        $listCount = $list->toArray();
        $listCount = $listCount['data'];

        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);

        //查询日期
        $times = $news->group('time')->field('time')->select();


        $leng = count($listCount);  //统计数据条数
        $this->assign('leng', $leng);
        $this->assign('times', $times);



        return $this->fetch();


    }

    //公司添加
    public function hy_add()
    {
        return $this->fetch();
    }

    //公司 图片上传
    public  function  hy_upload(Request $request)
    {
        //文件上传
        $file = $request->file('file');
        if($file){
            $info = $file->validate(['size'=>60000000000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'uploads/news');

            if($info){

                $image = \think\Image::open(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());

                // 按照原图的比例生成一个最大为600*600的缩略图替换原图
                $image->thumb(1400, 1080)->save(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());
                // 成功上传后 获取上传信息    //文件入库
                $imgs =  $info->getSaveName();
                $img = str_replace("\\","/",$imgs);  //转义
                //拼接
                $img = 'uploads/news/'.$img;

                if ($imgs){
                    $data = ['code'=>200,'mag'=>'文件上传ok','data'=>$img];
                    return json_encode($data);
                }

            }else{
                // 上传失败获取错误信息
                echo "header('Content-type:text/html;charset=utf-8')";
                dd($file->getError());
                $info_error =  json($info->getError());
                $data = ['code'=>4001,'mag'=>$info_error];
                return json_encode($data);
            }
        }

    }

    //行业资讯添加
    public function hy_go()
    {
        $data   = Request::instance()->post();
        $tmp_data = $data['data'];

        $time       = $tmp_data['time'];
        $index_img  = $tmp_data['imgArr'];
        $title      = $tmp_data['title'];
        $en_title   = $tmp_data['en_title'];

        $content     = preg_replace('/\"/', "'", $tmp_data['editor']);
        $en_content  = preg_replace('/\"/', "'", $tmp_data['en_editor']);


        $type   = 3; //行业资讯

        //简介
        $summary    = mb_substr($content,0,120);
        $en_summary = mb_substr($en_content,0,120);

        $year =    date('Y');
        $arr = compact('year','type','title','time','content','en_content','summary','en_summary','index_img','title','en_title');
        $res = Db::table('news')->insert($arr);

        return $res?1:0;

    }

    //行业资讯修改
    public function hy_edit()
    {
        $id  = Request::instance()->param("id");
        $data = Db::table('news')->where('type',3)->where('id',$id)->find();

        $url = config('base_url');
        $base_url = $url['url'];

        $data['index_img'] = $base_url.'/'.$data['index_img'];

        $this ->assign('data',$data);
        return $this->fetch();
    }

    //行业资讯修改
    public function hy_up()
    {

        $data   = Request::instance()->post();
        $tmp_data = $data['data'];

        $id = $tmp_data['id'];

        $time       = $tmp_data['time'];
        $title      = $tmp_data['title'];
        $en_title   = $tmp_data['en_title'];

        $content     = preg_replace('/\"/', "'", $tmp_data['editor']);
        $en_content  = preg_replace('/\"/', "'", $tmp_data['en_editor']);

        $type   = 3; //行业资讯

        $arr = compact('type','title','time','content','en_content','summary','en_summary','title','en_title');
        $res = Db::table('news')->where('id',$id)->where('type',$type)->update($arr);

        return  $res?1:0;
    }

    //行业资讯修改时的文件上传
    public function hy_edit_up(Request $request)
    {

        //文件上传
        $file = $request->file('file');
        $id  = Request::instance()->param("id");

        if($file){
            $info = $file->validate(['size'=>60000000000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'uploads/news');

            if($info){

                $image = \think\Image::open(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());

                // 按照原图的比例生成一个最大为600*600的缩略图替换原图
                $image->thumb(1400, 1080)->save(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());
                // 成功上传后 获取上传信息    //文件入库
                $imgs =  $info->getSaveName();
                $img = str_replace("\\","/",$imgs);  //转义
                //拼接
                $img = 'uploads/news/'.$img;

                if ($imgs){
                    $res = Db::table('news')->where('id',$id)->update(['index_img'=>$img]);
                    $url = config('base_url');
                    $base_url = $url['url'];

                    $index_img = $base_url.'/'.$img;
                    $data = ['code'=>200,'url'=>$index_img];
                    return $res?$data:0;
                }

            }else{
                // 上传失败获取错误信息
                echo "header('Content-type:text/html;charset=utf-8')";
                dd($file->getError());
                $info_error =  json($info->getError());
                $data = ['code'=>4001,'mag'=>$info_error];
                return json_encode($data);
            }
        }

    }

    //行业资讯 删除
    public function hy_news_del()
    {
        $id   = Request::instance()->post('id');

        $res = Db::table('news')->where('type',3)->where('id',$id)->delete();
        return $res?1:0;
    }
    //批量删除
    public function hy_dels()
    {
        $data  = Request::instance()->param();
        $ids = $data['ids'];
//        dd($ids);
        $res  = Db::table('news')->where('type',3)->where('id','in',$ids)->delete();
        return $res? 1 :  0;
    }

//==========================================
//媒体报导
    public function mt_news()
    {
        $time  = Request::instance()->param("time");  //时间
        $title = Request::instance()->param("title"); //标题
//        $nper = Request::instance()->param("nper");   //期数


        //搜索分页
        $pageParam = ['query' => []];
        $news = new NewsModel();


        if (!empty($time) && empty($title)) {
            $news->where('name', '=', $time);
            $this->assign('time', $time);
            $pageParam['query']['time'] = $time;
        }

        if (empty($time) && !empty($title)) {
            $news->where('title', '=', $title);
            $this->assign('title', $title);
            $pageParam['query']['title'] = $title;
        }
//    if (empty($time) && empty($title) && !empty($nper))
//        {
//            $news->where('type', '=',$nper);
//            $this->assign('nper', $nper);
//            $pageParam['query']['nper'] = $nper;
//        }

//        $list = $news->order('id desc')->where('type', 1)->paginate(20, false, $pageParam);
        $list = $news->order('id desc')->where('type', 4)->paginate(20,false,['query'=>request()->param()])->each(function($item, $key){
            $base_url = config('base_url');
            $base_url = $base_url['url'];
            $item['index_img'] = $base_url.'/'.$item["index_img"]; //给数据集追加字段num并赋值
            return $item;
        });

        $listCount = $list->toArray();
        $listCount = $listCount['data'];

        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);

        //查询日期
        $times = $news->group('time')->field('time')->select();


        $leng = count($listCount);  //统计数据条数
        $this->assign('leng', $leng);
        $this->assign('times', $times);



        return $this->fetch();


    }

    //公司添加
    public function mt_add()
    {
        return $this->fetch();
    }

    //公司 图片上传
    public  function  mt_upload(Request $request)
    {
        //文件上传
        $file = $request->file('file');
        if($file){
            $info = $file->validate(['size'=>60000000000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'uploads/news');

            if($info){

                $image = \think\Image::open(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());

                // 按照原图的比例生成一个最大为600*600的缩略图替换原图
                $image->thumb(1400, 1080)->save(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());
                // 成功上传后 获取上传信息    //文件入库
                $imgs =  $info->getSaveName();
                $img = str_replace("\\","/",$imgs);  //转义
                //拼接
                $img = 'uploads/news/'.$img;

                if ($imgs){
                    $data = ['code'=>200,'mag'=>'文件上传ok','data'=>$img];
                    return json_encode($data);
                }

            }else{
                // 上传失败获取错误信息
                echo "header('Content-type:text/html;charset=utf-8')";
                dd($file->getError());
                $info_error =  json($info->getError());
                $data = ['code'=>4001,'mag'=>$info_error];
                return json_encode($data);
            }
        }

    }

    //公司添加
    public function mt_go()
    {
        $data   = Request::instance()->post();
        $tmp_data = $data['data'];

        $time       = $tmp_data['time'];
        $index_img  = $tmp_data['imgArr'];
        $title      = $tmp_data['title'];
        $en_title   = $tmp_data['en_title'];

        $content     = preg_replace('/\"/', "'", $tmp_data['editor']);
        $en_content  = preg_replace('/\"/', "'", $tmp_data['en_editor']);


        $type   = 4; //媒体报导

        //简介
        $summary    = mb_substr($content,0,120);
        $en_summary = mb_substr($en_content,0,120);

        $year =    date('Y');
        $arr = compact('year','type','title','time','content','en_content','summary','en_summary','index_img','title','en_title');
        $res = Db::table('news')->insert($arr);

        return $res?1:0;

    }

    //公司修改
    public function mt_edit()
    {
        $id  = Request::instance()->param("id");
        $data = Db::table('news')->where('type',4)->where('id',$id)->find();

        $url = config('base_url');
        $base_url = $url['url'];

        $data['index_img'] = $base_url.'/'.$data['index_img'];

        $this ->assign('data',$data);
        return $this->fetch();
    }

    //公司修改
    public function mt_up()
    {

        $data   = Request::instance()->post();
        $tmp_data = $data['data'];

        $id = $tmp_data['id'];

        $time       = $tmp_data['time'];
        $title      = $tmp_data['title'];
        $en_title   = $tmp_data['en_title'];

        $content     = preg_replace('/\"/', "'", $tmp_data['editor']);
        $en_content  = preg_replace('/\"/', "'", $tmp_data['en_editor']);

        $type   = 4; //媒体报导

        $arr = compact('type','title','time','content','en_content','summary','en_summary','title','en_title');
        $res = Db::table('news')->where('id',$id)->where('type',$type)->update($arr);

        return  $res?1:0;
    }

    //公司修改时的文件上传
    public function mt_edit_up(Request $request)
    {

        //文件上传
        $file = $request->file('file');
        $id  = Request::instance()->param("id");

        if($file){
            $info = $file->validate(['size'=>60000000000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'uploads/news');

            if($info){

                $image = \think\Image::open(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());

                // 按照原图的比例生成一个最大为600*600的缩略图替换原图
                $image->thumb(1400, 1080)->save(ROOT_PATH.'public'.DS.'uploads/news/'.$info->getSaveName());
                // 成功上传后 获取上传信息    //文件入库
                $imgs =  $info->getSaveName();
                $img = str_replace("\\","/",$imgs);  //转义
                //拼接
                $img = 'uploads/news/'.$img;

                if ($imgs){
                    $res = Db::table('news')->where('id',$id)->update(['index_img'=>$img]);
                    $url = config('base_url');
                    $base_url = $url['url'];

                    $index_img = $base_url.'/'.$img;
                    $data = ['code'=>200,'url'=>$index_img];
                    return $res?$data:0;
                }

            }else{
                // 上传失败获取错误信息
                echo "header('Content-type:text/html;charset=utf-8')";
                dd($file->getError());
                $info_error =  json($info->getError());
                $data = ['code'=>4001,'mag'=>$info_error];
                return json_encode($data);
            }
        }

    }

    //公司删除
    public function mt_news_del()
    {
        $id   = Request::instance()->post('id');

        $res = Db::table('news')->where('type',4)->where('id',$id)->delete();
        return $res?1:0;
    }
    //批量删除
    public function mt_dels()
    {
        $data  = Request::instance()->param();
        $ids = $data['ids'];
//        dd($ids);
        $res  = Db::table('news')->where('type',4)->where('id','in',$ids)->delete();
        return $res? 1 :  0;
    }



























}
