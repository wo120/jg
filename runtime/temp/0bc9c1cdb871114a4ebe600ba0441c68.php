<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\phpstudy\WWW\changcheng\public/../application/admin\view\job\add.html";i:1547178874;}*/ ?>
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
        <label for="username" class="layui-form-label" >
            <span class="x-red">*</span>岗位名称
        </label>
        <div class="layui-input-inline" >
            <input type="text" id="job_name" name="job_name" required="" lay-verify="required"
                   autocomplete="off" class="layui-input"  style="width: 200%;">
        </div>
    </div>

    <div class="layui-form-item">
        <label for="username" class="layui-form-label" >
            <span class="x-red">*</span>英文岗位名称
        </label>
        <div class="layui-input-inline" >
            <input type="text" id="en_job_name" name="en_job_name" required="" lay-verify="required"
                   autocomplete="off" class="layui-input"  style="width: 200%;">
        </div>
    </div>

    <div class="layui-form-item">
        <label for="username" class="layui-form-label" >
            <span class="x-red">*</span>工作地点
        </label>
        <div class="layui-input-inline" >
            <input type="text" id="job_address" name="job_address" required="" lay-verify="required"
                   autocomplete="off" class="layui-input" >
        </div>
    </div>

    <div class="layui-form-item">
        <label for="username" class="layui-form-label" >
            <span class="x-red">*</span>英文 工作地点
        </label>
        <div class="layui-input-inline" >
            <input type="text" id="en_job_address" name="en_job_address" required="" lay-verify="required"
                   autocomplete="off" class="layui-input" >
        </div>
    </div>

        <div class="layui-form-item">
            <label for="username" class="layui-form-label" >
                <span class="x-red">*</span>部门
            </label>
            <div class="layui-input-inline" >
                <input type="text" id="branch" name="branch" required="" lay-verify="required"
                       autocomplete="off" class="layui-input"  style="width: 200%;">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="username" class="layui-form-label" >
                <span class="x-red">*</span>英文部门
            </label>
            <div class="layui-input-inline" >
                <input type="text" id="en_branch" name="en_branch" required="" lay-verify="required"
                       autocomplete="off" class="layui-input"  style="width: 200%;">
            </div>
        </div>

    <div class="layui-form-item">
        <label for="username" class="layui-form-label">
            <span class="x-red">*</span> 工作年限
        </label>

        <div class="layui-input-inline">
            <input type="text" id="work_years" name="work_years" required="" lay-verify="required"
                   autocomplete="off" class="layui-input" style="width: 200%;" >
        </div>
    </div>

    <div class="layui-form-item">
        <label for="username" class="layui-form-label">
            <span class="x-red">*</span> 英文工作年限
        </label>

        <div class="layui-input-inline">
            <input type="text" id="en_work_years" name="en_work_years" required="" lay-verify="required"
                   autocomplete="off" class="layui-input" style="width: 200%;" >
        </div>
    </div>

    <div class="layui-form-item">
        <label for="username" class="layui-form-label">
            <span class="x-red">*</span> 学历要求
        </label>

        <div class="layui-input-inline">
            <input type="text" id="education" name="education" required="" lay-verify="required"
                   autocomplete="off" class="layui-input" style="width: 200%;" >
        </div>
    </div>

    <div class="layui-form-item">
        <label for="username" class="layui-form-label">
            <span class="x-red">*</span> 英文学历要求
        </label>

        <div class="layui-input-inline">
            <input type="text" id="en_education" name="en_education" required="" lay-verify="required"
                   autocomplete="off" class="layui-input" style="width: 200%;" >
        </div>
    </div>

    <div class="layui-form-item">
        <label for="username" class="layui-form-label">
            <span class="x-red">*</span> 招聘人数
        </label>

        <div class="layui-input-inline">
            <input type="number" id="job_num" name="job_num" required="" lay-verify="required"
                   autocomplete="off" class="layui-input" >
        </div>
    </div>

    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">任职要求</label>
        <div class="layui-input-block">
            <textarea name="claim" placeholder="任职要求" class="layui-textarea"></textarea>
        </div>
    </div>

    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">英文任职要求</label>
        <div class="layui-input-block">
            <textarea name="en_claim" placeholder="任职要求" class="layui-textarea"></textarea>
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



        //监听提交
        form.on('submit(add)', function(data){
            var dataArr = data.field;
            var claim   = dataArr.claim;
            var en_claim   = dataArr.en_claim;
            claim    = claim.replace(/\n|\r\n/g,"<br>");
            en_claim = en_claim.replace(/\n|\r\n/g,"<br>");
            dataArr.claim = claim;
            dataArr.en_claim = en_claim;


            console.log(dataArr);
            //发异步，把数据提交给php

                $.ajax({
                    url:'<?php echo url("admin/job/add_go"); ?>',
                    type:'POST',
                    data:{"data":dataArr},

                    success:function(data){
                        console.log(data)
                        if(data == 1){

                            layer.alert("增加成功", {icon: 6}, function () {
                                var index = parent.layer.getFrameIndex(window.name);  // 获得frame索引
                                parent.layer.close(index); //关闭当前frame
                                parent.location.href="lists";
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