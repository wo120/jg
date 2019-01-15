<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\phpstudy\WWW\changcheng\public/../application/admin\view\news\hy_news.html";i:1547536072;}*/ ?>
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
        <a href="">新闻管理</a>
        <a>
          <cite>行业新闻</cite></a>
      </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
</div>
<div class="x-body">
    <div class="layui-row">
        <form class="layui-form layui-col-md12 x-so">
            <div class="layui-input-inline">
                <select name="time">
                    <option value="">时间</option>
                    <?php if(is_array($times) || $times instanceof \think\Collection || $times instanceof \think\Paginator): $i = 0; $__LIST__ = $times;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $t['time']; ?>"><?php echo $t['time']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>

            <input class="layui-input" placeholder="新闻标题" name="title" id="title">


            <!--<input type="text" name="name"  placeholder="请输入活动名称" autocomplete="off" class="layui-input">-->
            <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
    </div>
    <xblock>
        <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
        <button class="layui-btn" onclick='x_admin_show("添加行业资讯","<?php echo url('admin/news/hy_add'); ?>")'><i class="layui-icon"></i>添加</button>
        <span class="x-right" style="line-height:40px">共有数据：<?php echo $leng; ?> 条</span>
    </xblock>

    <table class="layui-table">
        <thead>
        <tr>
            <th>
                <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
            </th>

            <th>ID</th>
            <th>时间</th>
            <th>图片</th>
            <th>标题</th>
            <!--<th>内容</th>-->
            <th >操作</th>
        </tr>
        </thead>
        <tbody id="x-img">
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <tr>
            <td>
                <div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id='<?php echo $v['id']; ?>' name="ids"><i class="layui-icon">&#xe605;</i></div>
            </td>

            <td><?php echo $v['id']; ?></td>

            <td><?php echo $v['time']; ?></td>
            <td>  <img  src="<?php echo $v['index_img']; ?>" width="200" height="100" alt=""></td>
            <!--<td>  <img  src="__BASE_URL__/<?php echo $v['index_img']; ?>" width="200" height="100" alt=""></td>-->
            <td><?php echo $v['title']; ?></td>
            <!--<td><?php echo $v['content']; ?></td>-->



            <td class="td-manage">
                <a title="详情"  onclick='x_admin_show("查看","<?php echo url('admin/activity/show'); ?>?id=<?php echo $v['id']; ?>")' href="javascript:;">
                <i class="layui-icon">&#xe63c;</i>

                </a>
                <a title="编辑"  onclick='x_admin_show("编辑","<?php echo url('admin/news/hy_edit'); ?>?id=<?php echo $v['id']; ?>")' href="javascript:;">
                <i class="layui-icon">&#xe642;</i>
                </a>
                <a title="删除" onclick="hy_news_del(this,'<?php echo $v['id']; ?>')" href="javascript:;">
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
    layui.use(['laydate','layer'] ,function(){
        var laydate = layui.laydate;
        layer.ready(function(){ //为了layer.ext.js加载完毕再执行
            layer.photos({
                photos: '#x-img'
                //,shift: 5 //0-6的选择，指定弹出图片动画类型，默认随机
            });
        });

        //执行一个laydate实例
        laydate.render({
            elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
            elem: '#end' //指定元素
        });
    });

    /*用户-停用*/
    function member_stop(obj,id){
        layer.confirm('确认要停用吗？',function(index){

            if($(obj).attr('title')=='启用'){

                //发异步把用户状态进行更改
                $(obj).attr('title','停用')
                $(obj).find('i').html('&#xe62f;');

                $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已停用');
                layer.msg('已停用!',{icon: 5,time:1000});

            }else{
                $(obj).attr('title','启用')
                $(obj).find('i').html('&#xe601;');

                $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已启用');
                layer.msg('已启用!',{icon: 5,time:1000});
            }

        });
    }

    /*用户-删除*/
    function hy_news_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            //发异步删除数据

            $.ajax({
                url:'<?php echo url("admin/news/hy_news_del"); ?>',
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
                url:'<?php echo url("admin/news/hy_dels"); ?>',
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
<script>var _hmt = _hmt || []; (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
})();</script>
</body>

</html>