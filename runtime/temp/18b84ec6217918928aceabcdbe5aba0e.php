<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\phpstudy\WWW\changcheng\public/../application/admin\view\resume\show.html";i:1547197838;}*/ ?>
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
        <a href="">招聘管理</a>
        <a>
          <cite>简历管理</cite></a>
      </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
</div>
<div class="x-body">

    <table class="layui-table">
        <tbody>
        <tr>
            <th style="background-color:red;color: white ">应聘岗位</th>
            <td><?php echo $data['job_name']; ?></td>
            <th style="background-color:red;color: white ">填表日期</th>
            <td><?php echo $data['time']; ?></td>
            <th>期望年薪 </th>
            <td><?php echo $data['hope_year_salary']; ?></td>
        </tr>
        </tbody>
    </table>
    <fieldset class="layui-elem-field layui-field-title site-title">
        <legend><a name="templet">基本情况</a></legend>
    </fieldset>


    <table class="layui-table" style="table-layout:fixed">
        <tbody >
        <tr>
            <td>姓名</td>
            <td><?php echo $data['nickname']; ?></td>
            <td>性别</td>
            <td>
                <?php if(($data['sex'] == 1)): ?> 男
                <?php elseif($data['sex'] == 2): ?> 女
                <?php endif; ?>
            </td>
            <th>籍贯 </th>
            <td><?php echo $data['birthplace']; ?></td>
            <th>民族 </th>
            <td><?php echo $data['nation']; ?></td>
        </tr>

        <tr>
            <td>身高</td>
            <td><?php echo $data['height']; ?></td>
            <td>出生年月</td>
            <td><?php echo $data['birth_date']; ?></td>
            <th>婚否 </th>
            <td>  <?php if(($data['marriage'] == 1)): ?> 已婚
                <?php elseif($data['marriage'] == 2): ?> 未婚
                <?php elseif($data['marriage'] == 3): ?> 离异
                <?php endif; ?></td>
            <th>职称 </th>
            <td><?php echo $data['job_title']; ?></td>
        </tr>

        <tr>
            <td>政治面貌</td>
            <td><?php echo $data['political']; ?></td>
            <td>手机号码</td>
            <td><?php echo $data['phone']; ?></td>
            <th>其他联系方式 </th>
            <td><?php echo $data['tall']; ?></td>
            <th>E-mail </th>
            <td><?php echo $data['email']; ?></td>
        </tr>
        </tbody>
    </table>

    <fieldset class="layui-elem-field layui-field-title site-title">
        <legend><a name="templet">教育经历</a></legend>
    </fieldset>
    <!--school_time  school major education-->
    <table class="layui-table" style="table-layout:fixed">
        <tr>
            <th>起止时间</th>
            <th>毕业院校</th>
            <th>专业</th>
            <th>学历</th>
        </tr>

        <?php if(is_array($data['education_undergo']) || $data['education_undergo'] instanceof \think\Collection || $data['education_undergo'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['education_undergo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo $vo['school_time']; ?></td>
            <td><?php echo $vo['school']; ?></td>
            <td><?php echo $vo['major']; ?></td>
            <td><?php echo $vo['education']; ?></td>

        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>

    </table>

    <fieldset class="layui-elem-field layui-field-title site-title">
        <legend><a name="templet">  工作经历（按先近后远填最近三家）</a></legend>
    </fieldset>
    <table class="layui-table" style="table-layout:fixed">
        <?php if(is_array($data['jobs_undergo']) || $data['jobs_undergo'] instanceof \think\Collection || $data['jobs_undergo'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['jobs_undergo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <tr>
            <th>起止时间</th>
            <th>公司名称</th>
            <th>所任岗位/职务</th>
            <th>月薪水平</th>
        </tr>
        <tr>
            <td><?php echo $v['gs_time']; ?></td>
            <td><?php echo $v['gs_name']; ?></td>
            <td><?php echo $v['job_name']; ?></td>
            <td><?php echo $v['money']; ?></td>
        </tr>
        <tr>
            <th>历任职务/
                主要工作业绩描述/
                离职原因
            </th>
            <td  colspan="3">
                <?php echo $v['suffer']; ?>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
    <fieldset class="layui-elem-field layui-field-title site-title">
        <legend><a name="templet">获奖记录</a></legend>
    </fieldset>
    <table class="layui-table" style="table-layout:fixed">

        <tr>
            <th>年份</th>
            <th>颁奖机构</th>
            <th>奖项名称</th>
        </tr>


        <?php if(is_array($data['award_record']) || $data['award_record'] instanceof \think\Collection || $data['award_record'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['award_record'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo $val['year']; ?></td>
            <td><?php echo $val['prize']; ?></td>
            <td><?php echo $val['name']; ?></td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </table>

    <fieldset class="layui-elem-field layui-field-title site-title">
        <legend><a name="templet">其他</a></legend>
    </fieldset>
    <table class="layui-table" style="table-layout:fixed">

        <tr>
            <th>持有的职业资格证件及取证时间</th>
            <th>核心技能及专长自述</th>
        </tr>


        <tr>
            <td><?php echo $data['cert']; ?></td>
            <td><?php echo $data['skill']; ?></td>
        </tr>
    </table>

</div>
<script>
    layui.use('laydate', function(){
        var laydate = layui.laydate;

        //执行一个laydate实例
        laydate.render({
            elem: '#time' //指定元素
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
    function job_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            //发异步删除数据

            $.ajax({
                url:'<?php echo url("admin/resume/del"); ?>',
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
                url:'<?php echo url("admin/resume/dels"); ?>',
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