<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"E:\phpstudy\WWW\changcheng\public/../application/home\view\news\index.html";i:1547540368;s:75:"E:\phpstudy\WWW\changcheng\public/../application/home\view\public\foot.html";i:1547536072;}*/ ?>
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
                        <a href="javascript:;" class="active">长城报</a>
                        <a href="javascript:;">公司新闻</a>
                      <a href="javascript:;">行业讯息</a>
                      <a href="javascript:;">媒体报导</a>
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
                                <a href="<?php echo url('news/detail'); ?>?id=<?php echo $c['id']; ?>"> <img src="__BASE_URL__/<?php echo $c['index_img']; ?>" alt=""></a>
                                <div class="text">
                                    <h1><?php echo $c['nper']; ?></h1>
                                    <h2><?php echo $c['time']; ?></h2>
                                </div>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div class="container2">
                        <ul class="news">
                            <?php if(is_array($cc) || $cc instanceof \think\Collection || $cc instanceof \think\Paginator): $i = 0; $__LIST__ = $cc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                            <li>
                                <a href="<?php echo url('news/detail'); ?>?id=<?php echo $c['id']; ?>"> <img src="__BASE_URL__/<?php echo $c['index_img']; ?>" alt=""></a>
                                <div class="text">
                                    <h1><?php echo $c['nper']; ?></h1>
                                    <h2><?php echo $c['time']; ?></h2>
                                </div>
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