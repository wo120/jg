<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"E:\phpstudy\WWW\changcheng\public/../application/home\view\about\social.html";i:1547544728;s:75:"E:\phpstudy\WWW\changcheng\public/../application/home\view\public\foot.html";i:1547540777;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="__HOME_CSS__/reset.css">
    <link rel="stylesheet" href="__HOME_CSS__/responsible.css">
    <title>新闻</title>
</head>

<body>
    <div class="box">
        <header>
            <div class="container">
                <img src="__HOME_STATIC__/img/2.png" alt class="logo">
                <nav>
                    <a href="<?php echo url('index/index'); ?>">首页</a>
                    <a href="<?php echo url('about/index'); ?>" class="active">关于长城</a>
                    <a href="<?php echo url('product/index'); ?>">产品中心</a>
                    <a href="<?php echo url('news/index'); ?>">新闻资讯</a>
                    <a href="<?php echo url('culture/index'); ?>">企业文化</a>
                    <a href="<?php echo url('resume/index'); ?>">人力资源</a>
                    <a href="<?php echo url('contact/index'); ?>">联系我们</a>
                </nav>
                <div class="btn-wrap">
                        <i class="iconfont icon-Group-"></i>
                        <div class="lang-switch">
                            <img src="__HOME_STATIC__/img/eng.png" width="30" height="30" alt="">
                            <span>En</span>
                        </div>
                    </div>
            </div>
        </header>
        <div class="sect1">
            <div class="container">
                <img src="__HOME_STATIC__/img/responsible.png" width="1200" height="630" alt>
            </div>
        </div>
        <div class="sect2">
            <div class="container">
                <h1>社会责任</h1>
                <h2>SOCIAL RESPONSIBILITY</h2>
                <p>长城换向器创立以来一直致力于社会责任和企业发展紧密联系在一起，
                    <br>这体现了长城人的远大抱负和高度使命，这离不开党的改革开放路线，
                    <br>离不开社会各界的鼎力支持，
                    <br>用心付出，责任至上。
                </p>
            </div>
        </div>
        <div class="sect3">
            <div class="container">
                <ul>
                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li>
                        <img src="__BASE_URL__/<?php echo $vo['img']; ?>" alt="">
                        <h1><?php echo $vo['title']; ?></h1>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <!-- 底部菜单 -->
        <!-- 底部菜单 -->
<footer>
    <div class="container">
        <img src="__HOME_STATIC__/img/2.png" alt class="logo">
        <div class="content">
            <nav>
                <ul class="active">
                    <h2>首页</h2>
                </ul>
                <ul>
                    <h2>关于长城</h2>
                    <li>公司简介</li>
                    <li>发展历程</li>
                    <li>领导关怀</li>
                    <li>资质证书</li>
                    <li>企业视频</li>
                    <li>社会责任</li>
                </ul>
                <ul>
                    <h2>产品中心</h2>
                    <li>汽车工业</li>
                    <li>家用电器</li>
                    <li>电动工具</li>
                    <li>摩托车和电动车</li>
                    <li>其他产品目录</li>
                </ul>
                <ul>
                    <h2>新闻资讯</h2>
                    <li>公司新闻</li>
                    <li>行业讯息</li>
                    <li>媒体报道</li>
                </ul>
                <ul>
                    <h2>企业文化</h2>
                    <li>节日活动</li>
                    <li>公司文化</li>
                    <li>职工之家</li>
                    <li>拓展训练</li>
                    <li>公益活动</li>
                </ul>
                <ul>
                    <h2>人力资源</h2>
                    <li>人才理念</li>
                    <li>人才培养</li>
                    <li>岗位招聘</li>
                </ul>
                <ul>
                    <h2>联系我们</h2>
                    <li>联系我们</li>
                    <li>在线留言</li>
                </ul>
            </nav>
            <div class="right">
                <ul>
                    <li><i class="iconfont icon-weibo"></i></li>
                    <li><i class="iconfont icon-weixin"></i></li>
                    <li><i class="iconfont icon-qq"></i></li>
                </ul>
                <p>
                    浙江长城换向器有限公司<br>
                    浙江省温州市瑞安市经济开发区经济大道511号
                    <br>
                    E-mail:cgw@chinacgw.cn
                </p>
            </div>
            <img src="" alt="" class="qrcode">
        </div>
        <span class="copyright">
                Copyright 2014 浙江长城换向器有限公司 浙ICP备13037331号
            </span>
    </div>
    <div class="bottom"></div>
</footer>

<link rel="stylesheet" href="__HOME_STATIC__/fonts/iconfont.css">
<script>
    $(function(){
        $('header .btn-wrap .lang-switch').click(function(){
            let href = location.href;
            if (href.indexOf('changcheng_en') == -1) {
                href = href.replace('changcheng','changcheng_en')
            }else{
                href = href.replace('changcheng_en','changcheng')
            }
            location.href = href;
            
        })
    })
</script>
    </div>
</body>

</html>