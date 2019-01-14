<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\phpstudy\WWW\changcheng\public/../application/home\view\news\index.html";i:1547285407;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="__HOME_CSS__/reset.css">
    <link rel="stylesheet" href="__HOME_CSS__/news.css">
    <title>新闻</title>
    <style>
        select{width: 100%;height: 100%;
                font-size: 18px;}
    </style>
</head>

<body>
        <div>
            <header>
                <div class="container">
                    <img src="__HOME_STATIC__/img/1.png" alt class="logo">
                    <nav>
                        <a href="<?php echo url('index/index'); ?>">首页</a>
                        <a href="<?php echo url('about/index'); ?>" >关于长城</a>
                        <a href="<?php echo url('product/index'); ?>" >产品中心</a>
                        <a href="<?php echo url('news/index'); ?>" class="active">新闻资讯</a>
                        <a href="<?php echo url('culture/index'); ?>">企业文化</a>
                        <a href="<?php echo url('resume/index'); ?>">人力资源</a>
                        <a href="<?php echo url('contact/index'); ?>">联系我们</a>
                    </nav>
                </div>
            </header>
                <div class="sect1">
                  <div class="container">
                    <div class="text">
                      <h1>NEWS</h1>
                      <h2>新闻资讯</h2>
                    </div>
                    <!-- <div class="fun-wrap">
                      <i>
                        <img src="/static/img/arrow.png" style="transform:rotate(180deg)" alt>
                      </i>
                      <i style="margin-left:50px">
                        <img src="/static/img/arrow.png" alt>
                      </i>
                    </div> -->
                  </div>
                </div>
                <div class="sect2">
                  <div class="container">
                    <nav>
                      <a href class="active">长城报</a>
                      <a href>公司新闻</a>
                      <a href>行业讯息</a>
                      <a href>媒体报导</a>
                    </nav>
                  </div>
                </div>
                <div class="sect3">
                    <div class="container">
                        <div class="select">
                            <ul>
                                <!--<li>2018年</li>-->

                                <li>
                                    <select id="year">
                                        <option value="">--选择年份--</option>
                                        <?php if(is_array($year) || $year instanceof \think\Collection || $year instanceof \think\Paginator): $i = 0; $__LIST__ = $year;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$y): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $y['year']; ?>"><?php echo $y['year'].'年'; ?></option>
                                       <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </li>

                            </ul>
                            <div class="arrow">
                                <img src="__HOME_STATIC__/img/arrow-down.png" alt="">
                            </div>
                        </div>
                        <ul class="news">
                            <?php if(is_array($cc) || $cc instanceof \think\Collection || $cc instanceof \think\Paginator): $i = 0; $__LIST__ = $cc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                            <li>
                                <img src="__BASE_URL__/<?php echo $c['index_img']; ?>" alt="">
                                <div class="text">
                                    <h1><?php echo $c['nper']; ?></h1>
                                    <h2><?php echo $c['time']; ?></h2>
                                </div>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            <!---->
                            <!--<li>-->
                                <!--<img src="__HOME_STATIC__/img/ribao.png" alt="">-->
                                <!--<div class="text">-->
                                    <!--<h1>2017年24期</h1>-->
                                    <!--<h2>2018-08-08</h2>-->
                                <!--</div>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<img src="__HOME_STATIC__/img/ribao.png" alt="">-->
                                <!--<div class="text">-->
                                    <!--<h1>2017年24期</h1>-->
                                    <!--<h2>2018-08-08</h2>-->
                                <!--</div>-->
                            <!--</li>-->
                            <!---->
                        </ul>
                    </div>
                </div>
              </div>
</body>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(function () {

        //监听下拉事件
        $("#year").change(function () {
             var year = $("#year").val();
            window.location.href="<?php echo url('news/index'); ?>?year="+year;



        })
// var $contWrap = $('.cont-wrap');
        var $aArr = $('.sect2 nav a').click(function (e) {
            $(this).addClass('active').siblings('a').removeClass('active');
            var index = $aArr.index($(this))

        })
    })
</script>
</html>