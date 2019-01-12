<?php
namespace app\admin\controller;


use app\admin\service\Token;
use think\Controller;
use think\Db;
use think\Session;

class BaseController extends Controller
{



    //验证token是否过期  参数 code，token
    public  function  check_tokens($phone , $token)
    {


        //数据库中取token
        $arr = Db::table("member")->field("m_id,utoken_time,utoken")->where('mobile_phone','=',$phone)->find();
        if(!$arr)
        {
            return json_return('4003','token过期');
        }
        //验证token的过期时间   3306
        $last_time = $arr['utoken_time'];
        $time = time();
        if($last_time+3600 < $time)
        {
//            上次登陆时间+3306
            return json_return('4003','token过期');
        }

        //token 是否存在
        if($arr['utoken'] != $token )
        {
            return json_return('4004','token不正确');
        }


    }

    //初始化 启动的方法
    public function _initialize()
    {
        //防非法登录
//        $this->check_login();

        //检测权限
//        $this->check_auth();


    }

    //防非法登录
    public function check_login()
    {
        $username = Session::has('username');
        if(empty($username))
        {
            $this->redirect('admin/login/index');

        }

    }






}