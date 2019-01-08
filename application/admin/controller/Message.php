<?php
namespace app\admin\controller;

use think\Db;
use think\Request;
use think\Validate;
use think\Session;
use app\admin\model\Message as MessageModel;
//留言
class Message extends BaseController
{

    //留言列表
    public function lists()
    {
        $nickname   = Request::instance()->param("nickname");  //昵称
        $time       = Request::instance()->param("time");   //发布时间


        //搜索分页
        $pageParam = ['query' => []];
        $mess = new MessageModel();


        if (!empty($nickname) && empty($time)) {
            $mess->where('nickname', '=', $nickname);
            $this->assign('nickname', $nickname);
            $pageParam['query']['nickname'] = $nickname;
        }

        if (empty($nickname) && !empty($time)) {
            $mess->where('time', '=', $time);
            $this->assign('time', $time);
            $pageParam['query']['time'] = $time;
        }

        $list = $mess->order('id desc')->paginate(20, false, $pageParam);


        $listCount = $list->toArray();
        $listCount = $listCount['data'];

        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);


        $leng = count($listCount);  //统计数据条数
        $this->assign('leng', $leng);

        return $this->fetch();


    }


    //留言删除
    public function del()
    {
        $id   = Request::instance()->post('id');

        $res = Db::table('message')->where('id',$id)->delete();
        return $res?1:0;
    }
    //批量删除
    public function dels()
    {
        $data  = Request::instance()->param();
        $ids   = $data['ids'];
        $res   = Db::table('message')->where('id','in',$ids)->delete();
        return $res? 1 :  0;
    }






















}
