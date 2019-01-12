<?php
namespace app\admin\controller;

use think\Db;
use think\Request;
use think\Validate;
use think\Session;
use app\admin\model\Resume as ResumeModel;
//发布招聘
class Resume extends BaseController
{

    //招聘列表
    public function lists()
    {
        $job_name   = Request::instance()->param("job_name");  //职位名称
        $time       = Request::instance()->param("time");   //发布时间 e.g. 2018年12月25日
        if(!empty($time))
        {
            $time  = date_format(date_create($time),"Y年m月d日");
        }

        $nickname   = Request::instance()->param("nickname");   //发布时间 e.g. 2018年12月25日
        $phone      = Request::instance()->param("phone");   //发布时间 e.g. 2018年12月25日


        //搜索分页
        $pageParam = ['query' => []];
        $job = new ResumeModel();


        if (!empty($job_name) && empty($time)&& empty($nickname)&& empty($phone)) {
            $job->where('job_name', '=', $job_name);
            $this->assign('job_name', $job_name);
            $pageParam['query']['job_name'] = $job_name;
        }

        if (empty($job_name) && !empty($time)&& empty($nickname)&& empty($phone)) {
            $job->where('time', '=', $time);
            $this->assign('time', $time);
            $pageParam['query']['time'] = $time;
        }

        if (empty($job_name) && empty($time)&& !empty($nickname)&& empty($phone)) {
            $job->where('nickname', 'like', $nickname."%");
            $this->assign('nickname', $nickname);
            $pageParam['query']['nickname'] = $nickname;
        }

        if (empty($job_name) && empty($time)&& empty($nickname)&& !empty($phone)) {
            $job->where('phone', '=', $phone);
            $this->assign('phone', $phone);
            $pageParam['query']['phone'] = $phone;
        }



        $list = $job->order('id desc')->paginate(20, false, $pageParam);


        $lists = $list->toArray();
//        dd($lists);

        $listCount = $lists['data'];

        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);



        $leng = count($listCount);  //统计数据条数

        $this->assign('leng', $leng);



        return $this->fetch();


    }

    //招聘添加
    public function add()
    {
        return $this->fetch();
    }



    //简历添加
//    public function add_go()
//    {
//        $data   = Request::instance()->post();
//        $tmp_data = $data['data'];
//
//
//
//        $job_name       = $tmp_data['job_name'];
//        $job_address  = $tmp_data['job_address'];
//        $branch      = $tmp_data['branch'];
//        $work_years   = $tmp_data['work_years'];
//        $education   = $tmp_data['education'];
//        $job_num   = $tmp_data['job_num'];
//        $claim   = $tmp_data['claim'];
//        $start_time = date("Y-m-d");
//
//
//        $arr = compact('job_name','job_address','branch','work_years','work_years','education','job_num','claim','start_time');
//        $res = Db::table('job')->insert($arr);
//
//        return $res?1:0;
//
//    }

    //长城报修改
    public function edit()
    {
        $id  = Request::instance()->param("id");
        $data = Db::table('resume')->where('id',$id)->find();

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


        $arr = compact('job_name','job_address','branch','work_years','work_years','education','job_num','claim','start_time');

        $res = Db::table('resume')->where('id',$id)->update($arr);

        return  $res?1:0;
    }



    //长城删除
    public function del()
    {
        $id   = Request::instance()->post('id');

        $res = Db::table('resume')->where('id',$id)->delete();
        return $res?1:0;
    }
    //批量删除
    public function dels()
    {
        $data  = Request::instance()->param();
        $ids = $data['ids'];
//        dd($ids);
        $res  = Db::table('resume')->where('id','in',$ids)->delete();
        return $res? 1 :  0;
    }


    //查看简历
    public  function show(){
        $id   = Request::instance()->get('id');
        $data = Db::table('resume')->where('id',$id)->find();

        //教育经验|工作经验|获奖记录|证书|技能

        if(!empty($data['education_undergo']))
        {
            $data['education_undergo'] = json_decode($data['education_undergo'],true);
        }

        if(!empty($data['jobs_undergo']))
        {
            $data['jobs_undergo'] = json_decode($data['jobs_undergo'],true);
        }

        if(!empty($data['award_record']))
        {
            $data['award_record'] = json_decode($data['award_record'],true);
        }


        $this->assign('data',$data);
        return $this->fetch();
    }



    //教育经历  测试
    public function lang()
    {
        $data = Db::table('resume')->where('id',8)->find();
        $education_undergo = $data['education_undergo'];
        dd($education_undergo);

        $this->assign('education_undergo',$education_undergo);
        $this->assign('data',$data);
        return $this->fetch();
    }






















}
