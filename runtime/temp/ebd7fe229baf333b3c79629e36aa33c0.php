<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"E:\phpstudy\WWW\changcheng\public/../application/home\view\culture\index.html";i:1547554254;s:75:"E:\phpstudy\WWW\changcheng\public/../application/home\view\public\foot.html";i:1547540777;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="__HOME_CSS__/reset.css">
    <link rel="stylesheet" href="__HOME_CSS__/buzCulture.css">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>

    <title>企业文化</title>
</head>

<body>
    <div>
        <header>
            <div class="container">
                <img src="__HOME_STATIC__/img/1.png" alt class="logo">
                <nav>
                    <a href="<?php echo url('index/index'); ?>">首页</a>
                    <a href="<?php echo url('about/index'); ?>">关于长城</a>
                    <a href="<?php echo url('product/index'); ?>">产品中心</a>
                    <a href="<?php echo url('news/index'); ?>">新闻资讯</a>
                    <a href="<?php echo url('culture/index'); ?>" class="active">企业文化</a>
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
                    <h1>COMPANY CULTURE</h1>
                    <h2>企业文化</h2>
                </div>
                <!-- <div class="fun-wrap">
                      <i>
                        <img src="/static/img/arrow.png" style="transform:rotate(180deg)" alt>
                      </i>
                      <i style="margin-left:50px">
                        <img src="/static/img/arrow.png" alt>
                      </i>
                    </div>-->
            </div>
        </div>
        <div class="sect2">
            <div class="container">
                <nav>
                    <a href="javascript:;" class="active">节日活动</a>
                    <a href="javascript:;">公司文化</a>
                    <a href="javascript:;">职工之家</a>
                    <a href="javascript:;">拓展训练</a>
                    <a href="javascript:;">工艺活动</a>
                </nav>
            </div>
        </div>
        <div class="sect3" style="display: block">
            <div class="container">
                <h1>FESTIVAL <span>EVENT</span></h1>
                <p>节日活动</p>
                <ul>
                    <?php if(is_array($act) || $act instanceof \think\Collection || $act instanceof \think\Paginator): $i = 0; $__LIST__ = $act;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                    <li>
                        <img src="__BASE_URL__/<?php echo $a['img']; ?>" alt="">
                        <p><?php echo $a['title']; ?></p>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="sect3" style="display: none">
            <div class="container">
                <h1>FESTIVAL <span>EVENT</span></h1>
                <p>公司文化</p>
                <ul>
                    <?php if(is_array($gs) || $gs instanceof \think\Collection || $gs instanceof \think\Paginator): $i = 0; $__LIST__ = $gs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?>
                    <li>
                        <img src="__BASE_URL__/<?php echo $g['img']; ?>" alt="">
                        <p><?php echo $g['title']; ?></p>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="sect3" style="display: none">
            <div class="container">
                <h1>FESTIVAL <span>EVENT</span></h1>
                <p>职工之家</p>
                <ul>
                    <?php if(is_array($zg) || $zg instanceof \think\Collection || $zg instanceof \think\Paginator): $i = 0; $__LIST__ = $zg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$z): $mod = ($i % 2 );++$i;?>
                    <li>
                        <img src="__BASE_URL__/<?php echo $z['img']; ?>" alt="">
                        <p><?php echo $z['title']; ?></p>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="sect3" style="display: none">
            <div class="container">
                <h1>FESTIVAL <span>EVENT</span></h1>
                <p>拓展训练</p>
                <ul>
                    <?php if(is_array($tz) || $tz instanceof \think\Collection || $tz instanceof \think\Paginator): $i = 0; $__LIST__ = $tz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?>
                    <li>
                        <img src="__BASE_URL__/<?php echo $t['img']; ?>" alt="">
                        <p><?php echo $t['title']; ?></p>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="sect3" style="display: none">
            <div class="container">
                <h1>FESTIVAL <span>EVENT</span></h1>
                <p>工艺活动</p>
                <ul>
                    <?php if(is_array($gy) || $gy instanceof \think\Collection || $gy instanceof \think\Paginator): $i = 0; $__LIST__ = $gy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?>
                    <li>
                        <img src="__BASE_URL__/<?php echo $g['img']; ?>" alt="">
                        <p><?php echo $g['title']; ?></p>
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
    <script>
        $(function () {
            var $aArr = $('.sect2 nav a').click(function () {
                let index  = $aArr.index($(this));
                $aArr.removeClass('active')
                $(this).toggleClass('active')
                $('.sect3').hide().eq(index).show();

            })
        });
    </script>
</body>

</html>