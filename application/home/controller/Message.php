<?php
namespace app\home\controller;

use think\Db;
use think\Request;
use think\Validate;
use think\Session;
use app\home\model\Resume as ResumeModel;
use app\home\model\TrieTree;
//留言
class Message extends BaseController
{

    public function index()
    {
        return $this->fetch();
        //表单中加入token     {:token()}
    }


    //留言提交
    public function add()
    {
        $tmp   = Request::instance()->post();
        //1.验证参数
        $rule = [
            'gs_name|公司名称' => ['require','min' => 3, 'max' =>60,'token'],   //防csrf攻击
            'nickname|昵称'    => ['require','chsAlpha','min' => 3, 'max' =>24], //汉字字母
            'phone|手机号码'   => ['number','require','min' => 11, 'max' =>11,],
            'qq|QQ号码'        => ['number','min' => 6, 'max' =>15],
            'title|主题'        => ['chsAlphaNum','require','min' => 3, 'max' =>13],//汉字 字母 数字
            'content|留言内容' => ['chsDash','require','min' => 6, 'max' =>600], //汉字、字母、数字和下划线_及破折号-
        ];
        $messages = [
            'gs_name.require' => '公司名称不能为空',
            'nickname.min' => '用户的长度最少必须是3个字符',
            'nickname.max' => '用户的长度最多必须是24个字符',
            'phone' => '手机格式错误',
            'qq' => 'QQ格式错误',
            'title' => '主题必须为汉字字母或者数字',
            'content'=>'留言只能由 汉字、字母、数字和下划线_及破折号- 组成,最少6个汉字'
        ];

        $validate = new validate($rule, $messages);
        $validate ->scene('message',['gs_name','nickname','phone','qq','title','content']);
        $res = $validate->scene('message')->check($tmp);
        if(!$res)
        {
            //可以优化  return $validate->getError();
             $this->error( $validate->getError());
        }

        $gs_name   = $tmp['gs_name'];
        $gs_name   = $this->form_check($gs_name); //2. 安全处理

        $nickname = $tmp['nickname'];
        $nickname   = $this->form_check($nickname);

        $phone = $tmp['phone'];
        $phone   = $this->form_check($phone);

        $qq = $tmp['qq'];
        $qq = $this->form_check($qq);

        $title = $tmp['title'];
        $title   = $this->form_check($title);

        $content = $tmp['content'];
        $content   = $this->form_check($content);

        //3. 敏感词过滤
        $content = (new TrieTree($content))->endString;

        $time  = date('Y年m月d日');


        $data = compact('gs_name','nickname','phone','qq','title','nation','content','time');
        $res = Db::table('message')->insert($data);
        if($res)
        {
            $this->success('提交成功', 'home/contact/index');
        }else{
            $this->error('新增失败');
        }



    }




    //查看简历
    public  function show(){
        $id   = Request::instance()->get('id');
        $data = Db::table('resume')->where('id',$id)->find();

        //教育经验|工作经验|获奖记录|证书|技能

        if(!empty($data['education_undergo']))
        {
            $data['education_undergo'] = json_decode($data['education_undergo'],true);
        }

        if(!empty($data['jobs_undergo']))
        {
            $data['jobs_undergo'] = json_decode($data['jobs_undergo'],true);
        }

        if(!empty($data['award_record']))
        {
            $data['award_record'] = json_decode($data['award_record'],true);
        }



        if(!empty($data['cert']))
        {
            $data['cert'] = json_decode($data['cert'],true);
        }

        if(!empty($data['skill']))
        {
            $data['skill'] = json_decode($data['skill'],true);
        }
//dd($data['jobs_undergo']);
        $this->assign('data',$data);
        return $this->fetch();
    }

    //教育经历  测试
    public function lang()
    {
        //教育经历
//        $arr[] = ['起止时间'=>'2014年6月到2017月','毕业院校'=>'北大','专业'=>'计算机应用','学历'=>'大专'];
//        $arr[] = ['起止时间'=>'2019年6月到2023月','毕业院校'=>'北大','专业'=>'计算机科学','学历'=>'本科'];
//        $arr[] = ['起止时间'=>'2024年6月到2013月','毕业院校'=>'北大','专业'=>'计算机科学','学历'=>'硕士'];
//
//        $json = json_encode($arr);
//        $res = Db::table('resume')->where('id',1)->update(['education_undergo'=>$json]);
//        var_dump($res);

        //工作经验
//        $arr[] = ['time'=>'2014年6月到2017月','gs_name'=>'北大','job'=>'机械师','money'=>'2000','suffer'=>'从头看下来就发现，这些简历最大的差别其实并非只是所谓的名校加分，而是在于思维，重点院校的学生思学习能力更强，所以对于解决写简历这样的问题，更得心应手；同时良好的教育背景让他们有了更多更好的实习机会，有名企为他们的简历背书。就像前面所说的，这些顶级学府的学生基本上不会愁找不到工作，他们愁的是找什么样的工作。而院校越一般的，真的不论是学习能力也好，还是就业机会也罢，都很难跟优秀的学生去竞争，两者的简历没有太多的可比性。但是普通专科/大学，依然是有好的学生的，只是很难达到那么顶尖的水准，毕竟四大、BAT也不会跑到一个毫无名气的普通学校中去招聘（机会渺茫）。不过就算学校较差，没什么机会进入第一梯队的公司，还是有机会进入第二梯队、第三梯队的；'];
//        $arr[] = ['time'=>'2019年6月到2023月','gs_name'=>'北大','job'=>'机械师','money'=>'2000','suffer'=>'从头看下来就发现，这些简历最大的差别其实并非只是所谓的名校加分，而是在于思维，重点院校的学生思学习能力更强，所以对于解决写简历这样的问题，更得心应手；同时良好的教育背景让他们有了更多更好的实习机会，有名企为他们的简历背书。就像前面所说的，这些顶级学府的学生基本上不会愁找不到工作，他们愁的是找什么样的工作。而院校越一般的，真的不论是学习能力也好，还是就业机会也罢，都很难跟优秀的学生去竞争，两者的简历没有太多的可比性。但是普通专科/大学，依然是有好的学生的，只是很难达到那么顶尖的水准，毕竟四大、BAT也不会跑到一个毫无名气的普通学校中去招聘（机会渺茫）。不过就算学校较差，没什么机会进入第一梯队的公司，还是有机会进入第二梯队、第三梯队的；'];
//        $arr[] = ['time'=>'2024年6月到2013月','gs_name'=>'北大','job'=>'机械师','money'=>'2000','suffer'=>'从头看下来就发现，这些简历最大的差别其实并非只是所谓的名校加分，而是在于思维，重点院校的学生思学习能力更强，所以对于解决写简历这样的问题，更得心应手；同时良好的教育背景让他们有了更多更好的实习机会，有名企为他们的简历背书。就像前面所说的，这些顶级学府的学生基本上不会愁找不到工作，他们愁的是找什么样的工作。而院校越一般的，真的不论是学习能力也好，还是就业机会也罢，都很难跟优秀的学生去竞争，两者的简历没有太多的可比性。但是普通专科/大学，依然是有好的学生的，只是很难达到那么顶尖的水准，毕竟四大、BAT也不会跑到一个毫无名气的普通学校中去招聘（机会渺茫）。不过就算学校较差，没什么机会进入第一梯队的公司，还是有机会进入第二梯队、第三梯队的；'];
//
//        $json = json_encode($arr);
//
//        $res = Db::table('resume')->where('id',1)->update(['jobs_undergo'=>$json]);
//        var_dump($res);

        //获奖记录
        $arr[] = ['time'=>'2014年6月','prize'=>'国际赛车奖','name'=>'国际赛车奖'];
        $arr[] = ['time'=>'2015年6月','prize'=>'国际赛车奖','name'=>'国际自行车奖'];
        $arr[] = ['time'=>'2016年6月','prize'=>'国际赛车奖','name'=>'国际板车奖'];

        $json = json_encode($arr);

        $res = Db::table('resume')->where('id',1)->update(['award_record'=>$json]);
        var_dump($res);


    }

    //过滤特殊字符
    function form_check($text, $tags = null)
    {
        $text    = htmlentities($text); //自己加的
        $text    =    trim($text);
        //完全过滤注释
        $text    =    preg_replace('/<!--?.*-->/','',$text);
        //完全过滤动态代码
        $text    =    preg_replace('/<\?|\?'.'>/','',$text);
        //完全过滤js
        $text    =    preg_replace('/<script?.*\/script>/','',$text);

        $text    =    str_replace('[','&#091;',$text);
        $text    =    str_replace(']','&#093;',$text);
        $text    =    str_replace('|','&#124;',$text);
        //过滤换行符
        $text    =    preg_replace('/\r?\n/','',$text);
        //br
        $text    =    preg_replace('/<br(\s\/)?'.'>/i','[br]',$text);
        $text    =    preg_replace('/(\[br\]\s*){10,}/i','[br]',$text);
        //过滤危险的属性，如：过滤on事件lang js
        while(preg_match('/(<[^><]+)( lang|on|action|background|codebase|dynsrc|lowsrc)[^><]+/i',$text,$mat)){
            $text=str_replace($mat[0],$mat[1],$text);
        }
        while(preg_match('/(<[^><]+)(window\.|javascript:|js:|about:|file:|document\.|vbs:|cookie)([^><]*)/i',$text,$mat)){
            $text=str_replace($mat[0],$mat[1].$mat[3],$text);
        }
        if(empty($tags)) {
            $tags = 'table|td|th|tr|i|b|u|strong|img|p|br|div|strong|em|ul|ol|li|dl|dd|dt|a';
        }
        //允许的HTML标签
        $text    =    preg_replace('/<('.$tags.')( [^><\[\]]*)>/i','[\1\2]',$text);
        $text = preg_replace('/<\/('.$tags.')>/Ui','[/\1]',$text);
        //过滤多余html
        $text    =    preg_replace('/<\/?(html|head|meta|link|base|basefont|body|bgsound|title|style|script|form|iframe|frame|frameset|applet|id|ilayer|layer|name|script|style|xml)[^><]*>/i','',$text);
        //过滤合法的html标签
        while(preg_match('/<([a-z]+)[^><\[\]]*>[^><]*<\/\1>/i',$text,$mat)){
            $text=str_replace($mat[0],str_replace('>',']',str_replace('<','[',$mat[0])),$text);
        }
        //转换引号
        while(preg_match('/(\[[^\[\]]*=\s*)(\"|\')([^\2=\[\]]+)\2([^\[\]]*\])/i',$text,$mat)){
            $text=str_replace($mat[0],$mat[1].'|'.$mat[3].'|'.$mat[4],$text);
        }
        //过滤错误的单个引号
        while(preg_match('/\[[^\[\]]*(\"|\')[^\[\]]*\]/i',$text,$mat)){
            $text=str_replace($mat[0],str_replace($mat[1],'',$mat[0]),$text);
        }
        //转换其它所有不合法的 < >
        $text    =    str_replace('<','&lt;',$text);
        $text    =    str_replace('>','&gt;',$text);
        $text    =    str_replace('"','&quot;',$text);
        //反转换
        $text    =    str_replace('[','<',$text);
        $text    =    str_replace(']','>',$text);
        $text    =    str_replace('|','"',$text);
        //过滤多余空格
        $text    =    str_replace('  ',' ',$text);
        return $text;
    }






















}
