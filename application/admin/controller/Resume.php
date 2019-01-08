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



        if(!empty($data['cert']))
        {
            $data['cert'] = json_decode($data['cert'],true);
        }

        if(!empty($data['skill']))
        {
            $data['skill'] = json_decode($data['skill'],true);
        }
//dd($data['jobs_undergo']);
        $this->assign('data',$data);
        return $this->fetch();
    }

    //教育经历  测试
    public function lang()
    {
        //教育经历
//        $arr[] = ['起止时间'=>'2014年6月到2017月','毕业院校'=>'北大','专业'=>'计算机应用','学历'=>'大专'];
//        $arr[] = ['起止时间'=>'2019年6月到2023月','毕业院校'=>'北大','专业'=>'计算机科学','学历'=>'本科'];
//        $arr[] = ['起止时间'=>'2024年6月到2013月','毕业院校'=>'北大','专业'=>'计算机科学','学历'=>'硕士'];
//
//        $json = json_encode($arr);
//        $res = Db::table('resume')->where('id',1)->update(['education_undergo'=>$json]);
//        var_dump($res);

        //工作经验
//        $arr[] = ['time'=>'2014年6月到2017月','gs_name'=>'北大','job'=>'机械师','money'=>'2000','suffer'=>'从头看下来就发现，这些简历最大的差别其实并非只是所谓的名校加分，而是在于思维，重点院校的学生思学习能力更强，所以对于解决写简历这样的问题，更得心应手；同时良好的教育背景让他们有了更多更好的实习机会，有名企为他们的简历背书。就像前面所说的，这些顶级学府的学生基本上不会愁找不到工作，他们愁的是找什么样的工作。而院校越一般的，真的不论是学习能力也好，还是就业机会也罢，都很难跟优秀的学生去竞争，两者的简历没有太多的可比性。但是普通专科/大学，依然是有好的学生的，只是很难达到那么顶尖的水准，毕竟四大、BAT也不会跑到一个毫无名气的普通学校中去招聘（机会渺茫）。不过就算学校较差，没什么机会进入第一梯队的公司，还是有机会进入第二梯队、第三梯队的；'];
//        $arr[] = ['time'=>'2019年6月到2023月','gs_name'=>'北大','job'=>'机械师','money'=>'2000','suffer'=>'从头看下来就发现，这些简历最大的差别其实并非只是所谓的名校加分，而是在于思维，重点院校的学生思学习能力更强，所以对于解决写简历这样的问题，更得心应手；同时良好的教育背景让他们有了更多更好的实习机会，有名企为他们的简历背书。就像前面所说的，这些顶级学府的学生基本上不会愁找不到工作，他们愁的是找什么样的工作。而院校越一般的，真的不论是学习能力也好，还是就业机会也罢，都很难跟优秀的学生去竞争，两者的简历没有太多的可比性。但是普通专科/大学，依然是有好的学生的，只是很难达到那么顶尖的水准，毕竟四大、BAT也不会跑到一个毫无名气的普通学校中去招聘（机会渺茫）。不过就算学校较差，没什么机会进入第一梯队的公司，还是有机会进入第二梯队、第三梯队的；'];
//        $arr[] = ['time'=>'2024年6月到2013月','gs_name'=>'北大','job'=>'机械师','money'=>'2000','suffer'=>'从头看下来就发现，这些简历最大的差别其实并非只是所谓的名校加分，而是在于思维，重点院校的学生思学习能力更强，所以对于解决写简历这样的问题，更得心应手；同时良好的教育背景让他们有了更多更好的实习机会，有名企为他们的简历背书。就像前面所说的，这些顶级学府的学生基本上不会愁找不到工作，他们愁的是找什么样的工作。而院校越一般的，真的不论是学习能力也好，还是就业机会也罢，都很难跟优秀的学生去竞争，两者的简历没有太多的可比性。但是普通专科/大学，依然是有好的学生的，只是很难达到那么顶尖的水准，毕竟四大、BAT也不会跑到一个毫无名气的普通学校中去招聘（机会渺茫）。不过就算学校较差，没什么机会进入第一梯队的公司，还是有机会进入第二梯队、第三梯队的；'];
//
//        $json = json_encode($arr);
//
//        $res = Db::table('resume')->where('id',1)->update(['jobs_undergo'=>$json]);
//        var_dump($res);

        //获奖记录
        $arr[] = ['time'=>'2014年6月','prize'=>'国际赛车奖','name'=>'国际赛车奖'];
        $arr[] = ['time'=>'2015年6月','prize'=>'国际赛车奖','name'=>'国际自行车奖'];
        $arr[] = ['time'=>'2016年6月','prize'=>'国际赛车奖','name'=>'国际板车奖'];

        $json = json_encode($arr);

        $res = Db::table('resume')->where('id',1)->update(['award_record'=>$json]);
        var_dump($res);


    }






















}
