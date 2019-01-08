<?php
namespace app\admin\controller;

use think\Db;
use think\Request;
use think\Validate;
use think\Session;
use think\Controller;
class Login  extends Controller
{
	//后台登录
    public function index()
    {
        $token = $this->request->token('__token__', 'sha1');
        Session::set('token',$token);

        $this->assign('token', $token);
        return $this->fetch();

    }

    //生成token  加密
    public function getToken($openid)
    {
    	$salt = "jiguanghulian@qiye.com@88866";

    	$signStr = substr(md5(md5(crypt($openid.$salt,$salt)).$salt),0,32);

        return $signStr;

    }


    //验证登录
    public function login()
    {
        $username  = Request::instance()->post("username");
        $pwd       = Request::instance()->post("pwd");
        $token     = Request::instance()->post("__token__");  //dd($token);

        if(empty($username) || empty($pwd))
        {
            $this->error('账号或密码不为空');
        }


        $getToken  = Session::get('token');  //dd($getToken);

        if($token != $getToken)
        {
            $this->error('登陆令牌错误');
        }


        $newPwd   = $this->getToken($pwd);

        $adminArr = Db::table("admin")->field('id,username,pwd')->where('username',$username)->find();
        if(empty($adminArr)){
            $this->error('用户名或密码错误');
        }
        elseif($newPwd != $adminArr['pwd'])
        {
            $this->error('用户名或密码错误');
        }else{
        //登录
        $res1 = Session::set('username',$username);
        $res1 = Session::set('uid',$adminArr['id']);
        $this->redirect('admin/index/index');
        }

     

    }

    //退出登录
    public  function outlogin()
    {
        Session::delete('username');
        $this->redirect('admin/login/index');

    }

    //修改密码
    public function updata_pwd()
    {
        $user = Session::get('username');
        $this->assign('user',$user);
        return  view('pwd');
    }



}
