<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"E:\phpstudy\WWW\changcheng\public/../application/admin\view\index\index.html";i:1546649869;s:78:"E:\phpstudy\WWW\changcheng\public/../application/admin\view\public\header.html";i:1541208864;s:76:"E:\phpstudy\WWW\changcheng\public/../application/admin\view\public\left.html";i:1546865324;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>长城商城后台系统</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="__ADMIN_CSS__/font.css">
    <link rel="stylesheet" href="__ADMIN_CSS__/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="__ADMIN_LIB__/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="__ADMIN_JS__/xadmin.js"></script>

</head>
<body>
<!-- 顶部开始 -->
<div class="container">
    <div class="logo"><a href="./index.html">乐智玩具-商城管理后台系统</a></div>
<div class="left_open">
    <i title="展开左侧栏" class="iconfont">&#xe699;</i>
</div>
<ul class="layui-nav left fast-add" lay-filter="">
    <li class="layui-nav-item">
        <a href="javascript:;">+新增</a>
        <dl class="layui-nav-child"> <!-- 二级菜单 -->
            <dd><a onclick="x_admin_show('资讯','http://www.baidu.com')"><i class="iconfont">&#xe6a2;</i>资讯</a></dd>
            <dd><a onclick="x_admin_show('图片','http://www.baidu.com')"><i class="iconfont">&#xe6a8;</i>图片</a></dd>
            <dd><a onclick="x_admin_show('用户','http://www.baidu.com')"><i class="iconfont">&#xe6b8;</i>用户</a></dd>
        </dl>
    </li>
</ul>
<ul class="layui-nav right" lay-filter="">
    <li class="layui-nav-item">
        <a href="javascript:;"><?php echo $username; ?></a>
        <dl class="layui-nav-child"> <!-- 二级菜单 -->
            <dd><a href="<?php echo url('admin/login/index'); ?>">切换帐号</a></dd>
            <!--<dd><a href="<?php echo url('admin/login/updata_pwd'); ?>">修改密码</a></dd>-->
            <dd><a href="<?php echo url('admin/login/outlogin'); ?>">退出</a></dd>
        </dl>
    </li>
    <li class="layui-nav-item to-index"><a href="/">前台首页</a></li>
</ul>
</div>
<!-- 顶部结束 -->
<!-- 中部开始 -->
<!-- 左侧菜单开始 -->
<div class="left-nav">
    <div id="side-nav">
    <ul id="nav">
        <li>
            <a href="javascript:;">
                <i class="iconfont">&#xe6f6;</i>
                <cite>新闻管理</cite>
                <i class="iconfont nav_right">&#xe697;</i>
            </a>
            <ul class="sub-menu">
                <li>
                    <a _href="<?php echo url('admin/news/cc_news'); ?>">
                        <i class="iconfont">&#xe6a7;</i>
                        <cite>长城报</cite>

                    </a>
                </li >

                <li>
                    <a _href="<?php echo url('admin/news/gs_news'); ?>">
                        <i class="iconfont">&#xe6a7;</i>
                        <cite>公司新闻</cite>

                    </a>
                </li >

                <li>
                    <a _href="<?php echo url('admin/news/hy_news'); ?>">
                        <i class="iconfont">&#xe6a7;</i>
                        <cite>行业资讯</cite>

                    </a>
                </li >
                <li>
                    <a _href="<?php echo url('admin/news/mt_news'); ?>">
                        <i class="iconfont">&#xe6a7;</i>
                        <cite>媒体报导</cite>

                    </a>
                </li >

            </ul>
        </li>

        <li>
            <a href="javascript:;">
                <i class="iconfont">&#xe6b8;</i>
                <cite>招聘管理</cite>
                <i class="iconfont nav_right">&#xe697;</i>
            </a>
            <ul class="sub-menu">
                <li>
                    <a _href="<?php echo url('admin/job/lists'); ?>">
                        <i class="iconfont">&#xe6a7;</i>
                        <cite>发布招聘</cite>

                    </a>
                </li >

                <li>
                    <a _href="<?php echo url('admin/resume/lists'); ?>">
                        <i class="iconfont">&#xe6a7;</i>
                        <cite>简历管理</cite>

                    </a>
                </li >


            </ul>
        </li>



        <li>
            <a href="javascript:;">
                <i class="iconfont">&#xe69b;</i>
                <cite>留言管理</cite>
                <i class="iconfont nav_right">&#xe697;</i>
            </a>
            <ul class="sub-menu">
                <li>
                    <a _href="<?php echo url('admin/message/lists'); ?>">
                        <i class="iconfont">&#xe6a7;</i>
                        <cite>留言列表</cite>
                    </a>
                </li >
            </ul>
        </li>



    </ul>
</div>
</div>
<!-- <div class="x-slide_left"></div> -->
<!-- 左侧菜单结束 -->
<!-- 右侧主体开始 -->
<div class="page-content">
    <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
        <ul class="layui-tab-title">
            <li class="home"><i class="layui-icon">&#xe68e;</i>我的桌面</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <iframe src="<?php echo url('admin/index/welcome'); ?>" frameborder="0" scrolling="yes" class="x-iframe"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="page-content-bg"></div>
<!-- 右侧主体结束 -->
<!-- 中部结束 -->
<!-- 底部开始 -->
<div class="footer">
    <!--<div class="copyright">Copyright ©2017 极光互联提供技术支持</div>-->
</div>
<!-- 底部结束 -->
<script>
    //百度统计可去掉
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>
</html>