<?php
namespace app\admin\controller;

use think\Db;
use think\Request;
use think\Validate;
use think\Session;
class Index extends BaseController
{
    public function index()
    {
        $uname  = Session::get('username');
        $this->assign('username',$uname);
       return $this->fetch();
    }
    //首页欢迎页
    public  function welcome()
    {
        $time  = date('Y-m-d H:i:s',time());
        $uname  = Session::get('username');

        //数据统计  总浏览数  今日留言数   收到的简历数
        $total_message = Db::table('message')->count();
        $time_tmp = date('Y年m月d日');
        $new_message = Db::table('message')->where('time',$time_tmp)->count();

        $resume = Db::table('resume')->count();

        $this->assign('new_message',$new_message);
        $this->assign('resume',$resume);
        $this->assign('total_message',$total_message);
        $this->assign('username',$uname);
        $this->assign('time',$time);
        return $this->fetch();
    }




}
