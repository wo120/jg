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

        //数据统计  会员数  首页显示会员数  有效会员数  //今日新增会员  昨日新增会员   
//        $menber_num = Db::table('userlist')->count();
//        $show_num   = Db::table('userlist')
//                ->join('userphoto', 'userlist.id=userphoto.userid')
//                ->field('userphoto.imgURL')
//                ->group('userphoto.userid')
//                ->where('userlist.display',1)
//                ->count();
//        $has_num =  Db::table('userlist')
//                ->where('phone','not null')
//                ->count();

//        $this->assign('has_num',$has_num);
//        $this->assign('show_num',$show_num);
//        $this->assign('menber_num',$menber_num);
        $this->assign('username',$uname);
        $this->assign('time',$time);
        return $this->fetch();
    }

    //更改前端启动页
    public function update_start_photo()
    {
         //查询启动图
        $imgArr = Db::table("start_photo")->where('id',1)->find();
        $img    = "https://www.wengwenglove.com/".$imgArr['img'];


        $this->assign("data",$img);
        return $this->fetch();
    }

    //更改图片
    public function update_start_photo_go(Request $request)
    {
        //文件上传
        $file = $request->file('file');
  // dd($file);
        // $info = $file->rule('uniqid')->validate(['ext'=>'gif,jpg,jpeg'])->move($file);

        if($file){

            $info = $file->rule('uniqid')->validate(['size'=>6000000000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'static/home/img');
            if($info){
                // 成功上传后 获取上传信息    //文件入库
                $img =  $info->getSaveName();
                
                //拼接
                $img = 'static/home/img/'.$img;
                // dd($img);//static/home/img/5b435a211859f.png

                //数据库修改
                $res = Db::table("start_photo")->where('id',1)->update(['img'=>$img]);
      

                if ($res){

                    // $data = ['code'=>200,'mag'=>'文件上传ok','data'=>$img];
                    // return json_encode($data);
                    // return   $this->redirect('admin/index/index');
                    header("refresh:1;url=http://wengwenglove.com/admin/index/update_start_photo.html"); print('启动图修改成功,请稍等...'); 
                }





            }else{
                // 上传失败获取错误信息
                $info_error =  json($info->getError());
                $data = ['code'=>4001,'mag'=>$info_error];
                return json_encode($data);
            }
        }



    }

}
