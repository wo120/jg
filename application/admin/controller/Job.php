<?php
namespace app\admin\controller;

use think\Db;
use think\Request;
use think\Validate;
use think\Session;
use app\admin\model\Job as JobModel;
//发布招聘
class Job extends BaseController
{

    //招聘列表
    public function lists()
    {
        $job_name   = Request::instance()->param("job_name");  //职位名称
        $start_time = Request::instance()->param("start_time");   //发布时间


        //搜索分页
        $pageParam = ['query' => []];
        $job = new JobModel();


        if (!empty($job_name) && empty($start_time)) {
            $job->where('job_name', '=', $job_name);
            $this->assign('job_name', $job_name);
            $pageParam['query']['job_name'] = $job_name;
        }

        if (empty($job_name) && !empty($start_time)) {
            $job->where('start_time', '=', $start_time);
            $this->assign('start_time', $start_time);
            $pageParam['query']['start_time'] = $start_time;
        }

        $list = $job->order('id desc')->paginate(20, false, $pageParam);


        $listCount = $list->toArray();
        $listCount = $listCount['data'];

        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);

        //查询活动期数
        $times = $job->group('start_time')->field('start_time')->select();


        $leng = count($listCount);  //统计数据条数

        $this->assign('leng', $leng);
        $this->assign('times', $times);



        return $this->fetch();


    }

    //招聘添加
    public function add()
    {
        return $this->fetch();
    }



    //简历添加
    public function add_go()
    {
        $data   = Request::instance()->post();
        $tmp_data = $data['data'];

        $job_name       = $tmp_data['job_name'];
        $job_address  = $tmp_data['job_address'];
        $branch      = $tmp_data['branch'];
        $work_years   = $tmp_data['work_years'];
        $education   = $tmp_data['education'];
        $job_num   = $tmp_data['job_num'];
        $claim   = $tmp_data['claim'];
        $start_time = date("Y-m-d");

        //英文部分
        $en_job_name    = $tmp_data['en_job_name'];
        $en_job_address = $tmp_data['en_job_address'];
        $en_branch      = $tmp_data['en_branch'];
        $en_work_years  = $tmp_data['en_work_years'];
        $en_education   = $tmp_data['en_education'];
        $en_claim       = $tmp_data['en_claim'];


        $arr = compact('job_name','job_address','branch','work_years','work_years','education','job_num','claim','start_time',
            'en_job_name','en_job_address','en_branch','en_work_years','en_education','en_claim');
        $res = Db::table('job')->insert($arr);

        return $res?1:0;

    }

    //长城报修改
    public function edit()
    {
        $id  = Request::instance()->param("id");
        $data = Db::table('job')->where('id',$id)->find();
//        replace(/\n|\r\n/g,"<br>");
//        $data['claim'] = str_replace("<br>",'\n/g',  $data['claim']);
//        $data['en_claim'] =  str_replace("<br>",'\r\n/g',  $data['en_claim']);


        $this ->assign('data',$data);
        return $this->fetch();
    }

    //长城修改
    public function edit_go()
    {

        $data   = Request::instance()->post();
        $tmp_data = $data['data'];
        $id       = $tmp_data['id'];

        $job_name       = $tmp_data['job_name'];
        $job_address  = $tmp_data['job_address'];
        $branch      = $tmp_data['branch'];
        $work_years   = $tmp_data['work_years'];
        $education   = $tmp_data['education'];
        $job_num   = $tmp_data['job_num'];
        $claim   = $tmp_data['claim'];
        $start_time = date("Y-m-d");

        //英文
        //英文部分
        $en_job_name    = $tmp_data['en_job_name'];
        $en_job_address = $tmp_data['en_job_address'];
        $en_branch      = $tmp_data['en_branch'];
        $en_work_years  = $tmp_data['en_work_years'];
        $en_education   = $tmp_data['en_education'];
        $en_claim       = $tmp_data['en_claim'];


        $arr = compact('job_name','job_address','branch','work_years','work_years','education','job_num','claim','start_time',
            'en_job_name','en_job_address','en_branch','en_work_years','en_education','en_claim');

        $res = Db::table('job')->where('id',$id)->update($arr);

        return  $res?1:0;
    }

    //修改时的文件上传
    public function edit_up(Request $request)
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
    public function del()
    {
        $id   = Request::instance()->post('id');

        $res = Db::table('job')->where('id',$id)->delete();
        return $res?1:0;
    }
    //批量删除
    public function dels()
    {
        $data  = Request::instance()->param();
        $ids = $data['ids'];
//        dd($ids);
        $res  = Db::table('job')->where('id','in',$ids)->delete();
        return $res? 1 :  0;
    }






















}
