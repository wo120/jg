<?php
namespace app\admin\controller;

use think\Db;
use think\Request;
use think\Validate;
use think\Session;
use app\admin\model\About as AboutModel;
//关于长城
class About extends BaseController
{
    public function lists()
    {
        $type  = Request::instance()->param("type");   //类型
        $title = Request::instance()->param("title");   //标题


        //搜索分页
        $pageParam = ['query' => []];
        $about = new AboutModel();


        if (!empty($type) && empty($title)) {
            $about->where('type', '=', $type);
            $this->assign('type', $type);
            $pageParam['query']['type'] = $type;
        }

        if (empty($type) && !empty($title)) {
            $about->where('title', '=', $title);
            $this->assign('title', $title);
            $pageParam['query']['title'] = $title;
        }

        $list = $about->order('id desc')->paginate(20, false, $pageParam);


        $listCount = $list->toArray();
        $listCount = $listCount['data'];

        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);


        $leng = count($listCount);  //统计数据条数
        $this->assign('leng', $leng);

        return $this->fetch();


    }

    //企业文化 添加
    public function add()
    {
        return $this->fetch();
    }



    //企业文化 图片上传
    public  function  upload(Request $request)
    {
        //文件上传
        $file = $request->file('file');
        if($file){
            $info = $file->validate(['size'=>600000000000000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'uploads/about');

            if($info){

                $image = \think\Image::open(ROOT_PATH.'public'.DS.'uploads/about/'.$info->getSaveName());

                // 按照原图的比例生成一个最大为600*600的缩略图替换原图
                $image->thumb(1400, 1080)->save(ROOT_PATH.'public'.DS.'uploads/about/'.$info->getSaveName());
                // 成功上传后 获取上传信息    //文件入库
                $imgs =  $info->getSaveName();
                $img = str_replace("\\","/",$imgs);  //转义
                //拼接
                $img = 'uploads/about/'.$img;

                if ($imgs){
                    $data = ['code'=>200,'mag'=>'文件上传ok','data'=>$img];
                    return json_encode($data);
                }

            }else{
                // 上传失败获取错误信息
                echo "header('Content-type:text/html;charset=utf-8')";
                $info_error =  json($info->getError());
                $data = ['code'=>4001,'mag'=>$info_error];
                return json_encode($data);
            }
        }

    }

    //企业文化 添加
    public function add_go()
    {
        $data   = Request::instance()->post();
        $tmp_data = $data['data'];


        $type       = $tmp_data['type'];
        $img        = $tmp_data['imgArr'];
        $title      = $tmp_data['title'];
        $title_en   = $tmp_data['title_en'];
        $sort       = $tmp_data['sort'];
        if(!empty($tmp_data['cert_type'])){
            $cert_type = $tmp_data['cert_type'];
            $arr = compact('type','img','title','title_en','sort','cert_type');
        }else{
            $arr = compact('type','img','title','title_en','sort');
        }

        $res = Db::table('about')->insert($arr);

        return $res?1:0;
    }

    //长城报修改
    public function edit()
    {
        $id  = Request::instance()->param("id");
        $data = Db::table('about')->where('id',$id)->find();

        $url = config('base_url');
        $base_url = $url['url'];

        $data['img'] = $base_url.'/'.$data['img'];

        $this ->assign('data',$data);
        return $this->fetch();
    }

    //长城修改
    public function edit_go()
    {

        $data   = Request::instance()->post();
        $tmp_data = $data['data'];
        $id  = $tmp_data['id'];


        $type       = $tmp_data['type'];
        $title      = $tmp_data['title'];
        $title_en   = $tmp_data['title_en'];
        $sort       = $tmp_data['sort'];
        $update_time = time();




        $arr = compact('type','title','title_en','sort','update_time');
        $res = Db::table('about')->where('id',$id)->update($arr);

        return $res?1:0;
    }

    //修改时的文件上传
    public function edit_up(Request $request)
    {

        //文件上传
        $file = $request->file('file');
        $id  = Request::instance()->param("id");

        if($file){
            $info = $file->validate(['size'=>60000000000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'uploads/culture');

            if($info){

                $image = \think\Image::open(ROOT_PATH.'public'.DS.'uploads/culture/'.$info->getSaveName());

                // 按照原图的比例生成一个最大为600*600的缩略图替换原图
                $image->thumb(1400, 1080)->save(ROOT_PATH.'public'.DS.'uploads/culture/'.$info->getSaveName());
                // 成功上传后 获取上传信息    //文件入库
                $imgs =  $info->getSaveName();
                $img = str_replace("\\","/",$imgs);  //转义
                //拼接
                $img = 'uploads/culture/'.$img;

                if ($imgs){
                    $res = Db::table('about')->where('id',$id)->update(['img'=>$img]);
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
    public function del()
    {
        $id   = Request::instance()->post('id');

        $res = Db::table('about')->where('id',$id)->delete();
        return $res?1:0;
    }
    //批量删除
    public function dels()
    {
        $data  = Request::instance()->param();
        $ids = $data['ids'];
//        dd($ids);
        $res  = Db::table('about')->where('id','in',$ids)->delete();
        return $res? 1 :  0;
    }





























}
