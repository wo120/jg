<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\phpstudy\WWW\changcheng\public/../application/admin\view\activity\add.html";i:1533693802;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>嗡嗡后台系统</title>
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
        #editor{
            width: 80%;
            margin-left: 20px;
        }
        .layui-form-label{
            width: 100px;
        }

    </style>
</head>

<body>
<div class="x-body">
    <form class="layui-form" method="post" enctype="multipart/form-data">
        <!--活动图片-->
        <div class="layui-form-item">

            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>图片上传
            </label>

        <button type="button" class="layui-btn" id="test1">
            <i class="layui-icon">&#xe67c;</i>上传图片
        </button>



        <input type="hidden" id="arrId" name="arrId" >   <!-- 隐藏域-->
        </div>

        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>活动名称
            </label>
            <div class="layui-input-inline">
                <input type="text" id="name" name="name" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form  layui-col-md12 x-so" >
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>活动时间
            </label>
            <div class="layui-input-inline">
                <input class="layui-input" placeholder="活动时间" name="start" id="start" >
                <input class="layui-input" placeholder="结束时间" name="end" id="end" >
            </div>
        </div>
        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>活动类型
            </label>
            <div class="layui-input-inline">
                <select id="type" name="type" class="valid" lay-filter="type">
                    <option value="1">线上活动</option>
                    <option value="2">线下活动</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item layui-hide" id="address-div">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>活动地址
            </label>
            <div class="layui-input-inline">
                <input type="text" id="act_address" name="act_address" 
                       autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label for="is_need_money" class="layui-form-label">
                <span class="x-red">*</span>活动是否收费
            </label>
          <!--   <div class="layui-input-inline">
                <input type="checkbox" name="is_need_money" id="is_need_money" lay-filter="is_need_money"  lay-text="收费|不收"  checked="" lay-skin="switch" >
            </div> -->

                 <div class="layui-input-inline">
                <select id="is_need_money" name="is_need_money" class="valid" lay-filter="is_need_money">
                    <option value="1">收费</option>
                    <option value="2">不收</option>
                </select>
            </div>
        </div>
        
        <div class="layui-form-item " id="money-div">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>收费价格
            </label>
            <div class="layui-input-inline">
                <input type="text" id="money" name="money"  
                       autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item " id="money-div">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>活动人数限制
            </label>
            <div class="layui-input-inline">
                <input type="text" id="limit" name="limit"  
                       autocomplete="off" class="layui-input">
            </div>
        </div>

      <!--   <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>活动状态
            </label>
            <div class="layui-input-inline">
                <select id="state" name="state" class="valid" lay-filter="state">
                    <option value="1">未开始</option>
                    <option value="2">可报名</option>
                    <option value="2">已结束</option>
                </select>
            </div>
        </div> -->

        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>是否显示
            </label>
            <div class="layui-input-inline">
                <input type="checkbox" name="is_display"  lay-text="显示|不显"  checked="" lay-skin="switch" lay-filter="is_display">
            </div>
        </div>




<div class="layui-form-item layui-form-text">
    <label for="desc" class="layui-form-label">
        活动介绍
    </label>
    <div class="layui-input-block">
        <!--<textarea placeholder="请输入内容" id="desc" name="desc" class="layui-textarea"></textarea>-->
        <script id="editor" type="text/plain" style="height: 300px" ></script>

    </div>
</div>
<div class="layui-form-item">
    <label for="L_repass" class="layui-form-label">
    </label>
    <button  class="layui-btn" lay-filter="add" lay-submit="">
        增加
    </button>
</div>
</form>
</div>
<script src="__ADMIN_JS__/jquery.min.js"></script>

<script>
// 实例化编辑器
    var ue = UE.getEditor('editor');


    layui.use(['laydate','form','layer','upload'], function(){
        $ = layui.jquery;
        var laydate = layui.laydate;
        var form = layui.form
            ,layer = layui.layer;
        var upload = layui.upload;

        //默认值
        // $("#is_need_money").val("1");
        


        //执行一个laydate实例
        laydate.render({elem: '#start' });
        //执行一个laydate实例
        laydate.render({elem: '#end'});

        //文件上传
        var uploadInst = upload.render({
            elem: '#test1' //绑定元素
            ,url: "<?php echo url('admin/activity/upload'); ?>" //上传接口
            ,done: function(res){
                console.log(res);  //上传完毕回调
                console.log(res.code);  //上传完毕回调

                if(res.code == 200)
                {
                    $('#arrId').val(res.data);
                    alert("文件选择成功");
                }


            }
            ,error: function(){
                console.log(res)
                layer.msg(res.msg, {icon: 1});
            }
        });


        //监听复选框 -活动是否收费
        form.on('select(is_need_money)', function(data){
            console.log(data.elem.checked); //开关是否开启，true或者false

            // if(data.elem.checked == true)
            // {
            //     $('#money-div').removeClass('layui-hide');
            // }else {
            //     $('#money-div').addClass('layui-hide');
            // }

               if(data.value == 1)
            {
                $('#money-div').removeClass('layui-hide');
            }else {
                $('#money-div').addClass('layui-hide');
            }

        });
        //监听复选框 - 活动是否是线下活动
        form.on('select(type)', function(data){
            console.log(data.value); //开关是否开启，true或者false

            if(data.value == 2)
            {
                $('#address-div').removeClass('layui-hide');
            }else {
                $('#address-div').addClass('layui-hide');
            }

        });

        //监听提交
        form.on('submit(add)', function(data){
            var display_type = '<?php echo $display_type; ?>';
            var dataArr = data.field;

console.log(dataArr);

            var arr_id = $('#arrId').val();

            //发异步，把数据提交给php
            if(display_type != 2) {
//                name  start   end  type 2为线上活动  is_need_money:no   money  is_display  editorValue==>content

                $.ajax({
                    url:'<?php echo url("admin/activity/add_go"); ?>',
                    type:'POST',
                    data:{"data":dataArr,
                            "arr_id":arr_id},

                    success:function(data){
                         console.log(data)
                        if(data == 1){

                            layer.alert("增加成功", {icon: 6}, function () {
                                var index = parent.layer.getFrameIndex(window.name);  // 获得frame索引
                                parent.layer.close(index); //关闭当前frame
                                parent.location.href="/admin/activity/lists";
//
                            });

//                            layer.msg('删除成功', {icon: 1});
                        }else{
                            layer.msg('添加失败', {icon: 1});

                        }
                    }
                });










            }else {
                //从左侧菜单过来的
                $.ajax({
                    url:'<?php echo url("admin/activity/add_go"); ?>',
                    type:'POST',
                    data:{"data":dataArr,
                        "arr_id":arr_id},
                    success:function(data){
                         console.log(data)
                        if(data == 1){

                            layer.open({title: '信息',content: '添加成功'});

//                            layer.msg('删除成功', {icon: 1});
                        }else{
                            layer.msg('添加失败', {icon: 1});

                        }
                    }
                });




            }
            return false;
        });
    });
</script>
<script>var _hmt = _hmt || []; (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
})();</script>
</body>

</html>