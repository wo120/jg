<?php
namespace app\home\controller;

use think\Db;
use think\Request;
use think\Validate;
use think\Session;
use app\home\model\Resume as ResumeModel;
//企业文化
class Culture extends BaseController
{
    //首页
    public function index()
    {
        //查询节日活动
        $act = Db::table('culture')->where('type',1)->order('sort desc')->select();
        //公司文化
        $gs  = Db::table('culture')->where('type',2)->order('sort desc')->select();
        //职工之家
        $zg = Db::table('culture')->where('type',3)->order('sort desc')->select();
        //拓展训练
        $tz = Db::table('culture')->where('type',4)->order('sort desc')->select();
        //工艺活动
        $gy = Db::table('culture')->where('type',5)->order('sort desc')->select();
        $this->assign('act',$act);
//        dd($act);
        $this->assign('gs',$gs);
        $this->assign('zg',$zg);
        $this->assign('tz',$tz);
        $this->assign('gy',$gy);
        return $this->fetch();
    }































}
