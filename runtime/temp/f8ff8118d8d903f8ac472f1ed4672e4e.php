<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"C:\git\project\public/../application/home\view\product\index.html";i:1547542609;s:63:"C:\git\project\public/../application/home\view\public\foot.html";i:1547537221;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="__HOME_CSS__/reset.css">
    <link rel="stylesheet" href="__HOME_CSS__/productcenter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script>
    <title>新闻</title>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
    <div>
        <header>
            <div class="container">
                <img src="__HOME_STATIC__/img/1.png" alt class="logo">
                <nav>
                    <a href="<?php echo url('index/index'); ?>">首页</a>
                    <a href="<?php echo url('about/index'); ?>">关于长城</a>
                    <a href="<?php echo url('product/index'); ?>" class="active">产品中心</a>
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
                <div class="text">
                    <h1>PRODUCT CENTER</h1>
                    <h2>产品中心</h2>
                </div>
                <div class="fun-wrap">
                    <i onclick="mySwiper.slidePrev();">
                        <img src="__HOME_STATIC__/img/arrow.png" style="transform:rotate(180deg)" alt>
                    </i>
                    <i style="margin-left:50px" onclick="mySwiper.slideNext();">
                        <img src="__HOME_STATIC__/img/arrow.png" alt>
                    </i>
                </div>
            </div>
        </div>
        <div class="sect2">
            <div class="container">
                <h1>汽车工业<span>Auto Industry</span></h1>
            </div>
        </div>
        <div class="sect3">
            <!-- <div class="">
            </div> -->
            <div class="container swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="__HOME_STATIC__/img/goodsImg/电动工具.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="__HOME_STATIC__/img/goodsImg/电动工具.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="__HOME_STATIC__/img/goodsImg/电动工具.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
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
    <script>
        var mySwiper = new Swiper('.swiper-container', {
            autoplay: 5000,//可选选项，自动滑动,
            loop:true,
            pagination : '.swiper-pagination',
        })
    </script>

</body>

</html>