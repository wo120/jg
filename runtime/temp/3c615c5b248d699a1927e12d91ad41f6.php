<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\phpstudy\WWW\changcheng\public/../application/admin\view\news\cc_add.html";i:1546658865;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>长城后台系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="__ADMIN_CSS__/font.css">
    <link rel="stylesheet" href="__ADMIN_CSS__/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="__ADMIN_LIB__/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="__ADMIN_JS__/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--百度富文本编辑器-->
     <script type="text/javascript" charset="utf-8" src="__ADMIN_DIT__/ueditor.config.js"></script>
     <script type="text/javascript" charset="utf-8" src="__ADMIN_DIT__/ueditor.all.min.js"> </script>
     <script type="text/javascript" charset="utf-8" src="__ADMIN_DIT__/zh-cn.js"></script>
    <style>
        body{
            font-size: 12px;
        }
        #editor{
            width: 80%;
            margin-left: 20px;
        }

        #en_editor{
            width: 80%;
            margin-left: 20px;
        }
        .layui-form-label{
            width: 100px;
        }

    </style>
</head>

<body>
<form class="layui-form" method="post" enctype="multipart/form-data">
<div class="x-body">


        <div class="layui-form-item">
            <label for="nper" class="layui-form-label">
                <span class="x-red">*</span>期数
            </label>

            <!--<div class="layui-input-inline"  style="width: 15%" >-->
                <!--<select name="nper_time">-->
                    <!--<option>&#45;&#45;请选择&#45;&#45;</option>-->
                    <!--<?php $__FOR_START_29424__=2012;$__FOR_END_29424__=2099;for($i=$__FOR_START_29424__;$i < $__FOR_END_29424__;$i+=1){ ?>-->
                    <!--<option value="<?php echo $i; ?>年"><?php echo $i; ?>年</option>-->
                    <!--<?php } ?>-->
                <!--</select>-->
            <!--</div>-->
            <div class="layui-input-inline">
                <input class="layui-input" placeholder="xxx年" name="nper_time" id="year" style="width: 50%" >
            </div>
            <div class="layui-form-mid" style="margin-left: -95px;">
                年
            </div>

            <div class="layui-input-inline" style="margin-left: -76px;">
                <input type="text" id="nper" name="nper" required="" lay-verify="required" style="width: 30%"
                       autocomplete="off" class="layui-input" >
            </div>
            <div class="layui-form-mid" style="margin-left: -135px;">
                期
            </div>

        </div>

        <div class="layui-form  layui-col-md12 x-so" >
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>时间
            </label>
            <div class="layui-input-inline">
                <input class="layui-input" placeholder="发布时间" name="time" id="time" >
            </div>
        </div>

        <!--活动图片-->
      <div class="layui-form-item">
                <label for="username" class="layui-form-label">
                    <span class="x-red">*</span>首图
                </label>

            <button type="button" class="layui-btn" id="test1">
                <i class="layui-icon">&#xe67c;</i>上传图片
            </button>
        </div>
    <input type="hidden" id="imgArr" name="imgArr" >   <!-- 隐藏域-->


        <div class="layui-form-item">
            <label for="username" class="layui-form-label" >
                <span class="x-red">*</span>文章标题
            </label>
            <div class="layui-input-inline" >
                <input type="text" id="title" name="title" required="" lay-verify="required"
                       autocomplete="off" class="layui-input"  style="width: 200%;">
            </div>

        </div>

    <div class="layui-form-item">
        <label for="username" class="layui-form-label">
            <span class="x-red">*</span> 英文文章标题
        </label>

        <div class="layui-input-inline">
            <input type="text" id="en_title" name="en_title" required="" lay-verify="required"
                   autocomplete="off" class="layui-input" style="width: 200%;" >
        </div>
    </div>


        <div class="layui-form-item layui-form-text" >
            <label for="desc" class="layui-form-label">
                文章详情
            </label>
            <div class="layui-input-block">
                <script id="editor" type="text/plain" name="editor" class="editor" ></script>
            </div>
        </div>


        <div class="layui-form-item layui-form-text" >
            <label for="desc" class="layui-form-label">
                英文文章详情
            </label>
            <div class="layui-input-block">
                <script id="en_editor" type="text/plain" name="en_editor" class="editor"></script>
            </div>
        </div>


       <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
           <button  class="layui-btn" lay-filter="add" lay-submit="">添加</button>
       </div>

 </div>


</form>


<script src="__ADMIN_JS__/jquery.min.js"></script>

        <script>
         // 实例化编辑器
         var ue = UE.getEditor('editor',{
             //focus时自动清空初始化时的内容
             autoClearinitialContent:true,
             //默认的编辑区域高度
             initialFrameHeight:500
         });//初始化对象


         var uee = UE.getEditor('en_editor',{
             //focus时自动清空初始化时的内容
             autoClearinitialContent:true,
             //默认的编辑区域高度
             initialFrameHeight:500
         });//初始化对象




         layui.use(['laydate','form','layer','upload'], function(){
        $ = layui.jquery;
        var laydate = layui.laydate;
        var form = layui.form
            ,layer = layui.layer;
        var upload = layui.upload;

        //默认值




        //执行一个laydate实例
        laydate.render({elem: '#time'});
        laydate.render({elem: '#year' ,type: 'year'});

        //单文件上传
         var uploadInst = upload.render({
             elem: '#test1' //绑定元素
             ,url: "<?php echo url('admin/news/cc_upload'); ?>" //上传接口
             ,done: function(res){
                 console.log(res);  //上传完毕回调
                 console.log(res.code);  //上传完毕回调

                 if(res.code == 200)
                 {
                     $('#imgArr').val(res.data);
                     alert("文件选择成功");
                 }


             }
             ,error: function(){
                 console.log(res)
                 layer.msg(res.msg, {icon: 1});
             }
         });

        //监听提交
        form.on('submit(add)', function(data){
            var dataArr = data.field;

            console.log(dataArr);

            //发异步，把数据提交给php

                $.ajax({
                    url:'<?php echo url("admin/news/cc_go"); ?>',
                    type:'POST',
                    data:{"data":dataArr},

                    success:function(data){
                        console.log(data)
                        if(data == 1){

                            layer.alert("增加成功", {icon: 6}, function () {
                                var index = parent.layer.getFrameIndex(window.name);  // 获得frame索引
                                parent.layer.close(index); //关闭当前frame
                                parent.location.href="cc_news";
//
                            });

//                            layer.msg('删除成功', {icon: 1});
                        }else{
                            layer.msg('添加失败', {icon: 1});

                        }
                    }
                });




            return false;
        });
    });
</script>


</body>

</html>