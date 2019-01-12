<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\phpstudy\WWW\changcheng\public/../application/home\view\news\index.html";i:1547175922;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="__HOME_CSS__/reset.css">
    <link rel="stylesheet" href="__HOME_CSS__/news.css">
    <title>新闻</title>
</head>

<body>
        <div>
            <header>
                <div class="container">
                    <img src="__HOME_STATIC__/img/2.png" alt class="logo">
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
                                <li>2018年</li>
                            </ul>
                            <div class="arrow">
                                <img src="__HOME_STATIC__/img/arrow-down.png" alt="">
                            </div>
                        </div>
                        <ul class="news">
                            <li>
                                <img src="__HOME_STATIC__/img/ribao.png" alt="">
                                <div class="text">
                                    <h1>2017年24期</h1>
                                    <h2>2018-08-08</h2>
                                </div>
                            </li>
                            <li>
                                <img src="__HOME_STATIC__/img/ribao.png" alt="">
                                <div class="text">
                                    <h1>2017年24期</h1>
                                    <h2>2018-08-08</h2>
                                </div>
                            </li>
                            <li>
                                <img src="__HOME_STATIC__/img/ribao.png" alt="">
                                <div class="text">
                                    <h1>2017年24期</h1>
                                    <h2>2018-08-08</h2>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
              </div>
</body>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(function () {
// var $contWrap = $('.cont-wrap');
        var $aArr = $('.sect2 nav a').click(function (e) {
            $(this).addClass('active').siblings('a').removeClass('active');
            var index = $aArr.index($(this))

// $contWrap.hide();
// $contWrap.eq(index).show()

// console.log(e,index);
        })
    })
</script>
</html>