<?php
namespace app\home\controller;

use think\Db;
use think\Request;
use think\Validate;
use think\Session;
use app\home\model\Resume as ResumeModel;
//首页
class Index extends BaseController
{
    //首页
    public function index()
    {
        //查询3条新闻资讯
        $data =  Db::table('news')->order('id desc')->limit(3)->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function test()
    {
        $mongo = config('mongodb_yun');
        $gsArr =  Db::connect($mongo)->table('table')->where('id',1)->select();
        if(empty($gsArr))
        {
            $res = Db::connect($mongo)->table('table')->insert(['id'=>1,'num'=>1]);
            return $res?1:0;
        }



    }





























}
