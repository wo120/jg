<?php
namespace app\home\controller;

use think\Db;
use think\Request;
use think\Validate;
use think\Session;
use app\home\model\Resume as ResumeModel;
//新闻中心
class News extends BaseController
{
    //首页
    public function index()
    {
        //查询年数
        $year = Db::table('news')->field('year')->group('year')->order('year desc')->where('type',1)->select();
        $this->assign('year',$year);

        //判断是否为查询
        $year  = Request::instance()->get('year');
        if(!empty($year)){
            $cc = Db::table('news')->order('time desc')->where('type',1)->where('year',$year)->select();

        }else{
            $cc = Db::table('news')->order('time desc')->where('type',1)->select();
        }
        $this->assign('cc',$cc);
        return $this->fetch();



    }

    //新闻详情页
    public function details()
    {
        $id   = Request::instance()->get('id');
        $data = Db::table('news')->where('id',$id)->find();


        $this ->assign('data',$data);
        return $this->fetch();
    }

































}
