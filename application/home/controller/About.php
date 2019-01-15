<?php
namespace app\home\controller;

use think\Db;
use think\Request;
use think\Validate;
use think\Session;
use app\home\model\Resume as ResumeModel;
//关于长城
class About extends BaseController
{
    //关于长城
    public function index()
    {
        //查询领导关怀
        $leader = Db::table('about')->where('type',1)->select();
        $this->assign('data',$leader);


        return $this->fetch();
    }

    //资质证书
    public function cert()
    {
        $data = Db::table('about')->where('type',2)->select();
        foreach ($data as $k=>$v)
        {
            $tmp = $k%2;
            if($tmp == 0)
            {
                $arr['left'][] = $v;
            }else{
                $arr['right'][] = $v;
            }
        }
        $this->assign('data',$arr);
//        dd($arr);
        return $this->fetch();
    }
    //社会责任
    public function social()
    {
        $data = Db::table('about')->where('type',3)->select();
        $this->assign('data',$data);

        return $this->fetch();
    }





























}
