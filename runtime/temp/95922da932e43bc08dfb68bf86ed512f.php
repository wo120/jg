<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\phpstudy\WWW\changcheng\public/../application/admin\view\message\lists.html";i:1546865478;}*/ ?>
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
    <style>
        /*分页左浮动*/
        ul { white-space:nowrap; }
        li { display:inline;}
        .layui-form-item .layui-input-inline
        {
            float: left;
            width: 190px;
            margin-right: 7px;
        }
    </style>
</head>

<body>
<div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="">首页</a>
        <a href="">留言管理</a>
        <a>
          <cite>查看留言</cite></a>
      </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
</div>
<div class="x-body">
    <div class="layui-row">
        <form class="layui-form layui-col-md12 x-so">

                <input class="layui-input" placeholder="昵称" name="nickname" id="nickname">
                <input class="layui-input" placeholder="填表日期" name="time" id="time">
            <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
    </div>
    <xblock>
        <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
        <button class="layui-btn" onclick='x_admin_show("添加简历","<?php echo url('admin/job/add'); ?>")'><i class="layui-icon"></i>添加</button>
        <span class="x-right" style="line-height:40px">共有数据：<?php echo $leng; ?> 条</span>
    </xblock>

    <table class="layui-table">
        <thead>
        <tr>
            <th>
                <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
            </th>

            <th>ID</th>
            <th>公司名称</th>
            <th>昵称</th>
            <th>电话</th>
            <th>QQ号码</th>
            <th>主题</th>
            <th >留言内容</th>
            <th >留言时间</th>
            <th >编辑</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <tr>
            <td>
                <div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id='<?php echo $v['id']; ?>' name="ids"><i class="layui-icon">&#xe605;</i></div>
            </td>

            <td><?php echo $v['id']; ?></td>
            <td><?php echo $v['gs_name']; ?></td>
            <td><?php echo $v['nickname']; ?></td>
            <td><?php echo $v['phone']; ?></td>
            <td><?php echo $v['qq']; ?></td>
            <td><?php echo $v['title']; ?></td>
            <td><?php echo $v['content']; ?></td>
            <td><?php echo $v['title']; ?></td>
            <td class="td-manage">
                <a title="删除" onclick="message_del(this,'<?php echo $v['id']; ?>')" href="javascript:;">
                    <i class="layui-icon">&#xe640;</i>
                </a>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

    <div id="page">
        <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-0">
            <!-- <span class="layui-laypage-curr"> -->
            <em class="layui-laypage-em"></em>

            <?php echo $page; ?>
        </div>
    </div>


</div>
<script>
    layui.use('laydate', function(){
        var laydate = layui.laydate;

        //执行一个laydate实例
        laydate.render({
            elem: '#time' //指定元素
        });

    });



    /*用户-删除*/
    function message_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            //发异步删除数据

            $.ajax({
                url:'<?php echo url("admin/message/del"); ?>',
                type:'POST',
                data:{"id":id},
                success:function(data){
                    console.log(data);
                    if(data == 1)
                    {
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!',{icon:1,time:1000});
                    }else {
                        layer.msg('删除失败!',{icon:5,time:1000});
                    }
                }
            });


        });
    }



    function delAll (argument) {

        var data = tableCheck.getData();

        layer.confirm('确认要删除吗？'+data,function(index){
            //捉到所有被选中的，发异步进行删除
            console.log(data);
            $.ajax({
                url:'<?php echo url("admin/message/dels"); ?>',
                type:'POST',
                data:{"ids":data},
                success:function(data){
                    console.log(data);
                    if(data == 1)
                    {

                        layer.msg('删除成功', {icon: 1});
                        $(".layui-form-checked").not('.header').parents('tr').remove();
                    }else {
                        layer.msg('删除失败!',{icon:5,time:1000});
                    }
                }
            });



        });
    }
</script>

</body>

</html>