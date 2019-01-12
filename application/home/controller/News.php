<?php
namespace app\home\controller;

use think\Db;
use think\Request;
use think\Validate;
use think\Session;
use app\home\model\Resume as ResumeModel;
//产品中心
class News extends BaseController
{
    //首页
    public function index()
    {
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
