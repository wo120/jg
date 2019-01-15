<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"E:\phpstudy\WWW\changcheng\public/../application/home\view\about\cert.html";i:1547540855;s:75:"E:\phpstudy\WWW\changcheng\public/../application/home\view\public\foot.html";i:1547540777;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="__HOME_CSS__/reset.css">
  <link rel="stylesheet" href="__HOME_CSS__/certificate.css">
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
      </div>
    </header>
    <div class="sect1">
      <div class="container">
        <div class="text">
          <p>长城企业多年来致力于发展成为行业内的优秀标杆企业，也获得了社会各界的认可与各级荣誉。 这些荣誉不仅是长城企业的资质证明，更是政府及业内权威机构的认证和支持，也是长城企业自成立以来交出的一张张显耀的成绩单。
          </p>
        </div>
        <img src="../static/img/honour.jpg" alt="">
      </div>
    </div>
    <div class="sect2">
      <div class="container">
        <nav>
          <a href="javascript:;" class="active">国级荣誉</a>
          <a href="javascript:;">省级荣誉</a>
          <a href="javascript:;">市级荣誉</a>
          <a href="javascript:;">地级荣誉</a>
          <a href="javascript:;">体系证书</a>
          <a href="javascript:;">专利认证</a>
          <a href="javascript:;">重合同</a>
          <a href="javascript:;">优秀供应商荣誉</a>
        </nav>
      </div>
    </div>

    <!-- 人才理念 -->
    <div class="sect3">

      <div class="container" style="display: flex">
        <ul>
          <?php if(is_array($data['left']) || $data['left'] instanceof \think\Collection || $data['left'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['left'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li class="active">
            <div class="bar"><span><?php echo $vo['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $vo['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
        <ul>
          <?php if(is_array($data['right']) || $data['right'] instanceof \think\Collection || $data['right'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['right'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
          <li class="">
            <div class="bar"><span><?php echo $v['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $v['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
      </div>
      <div class="container" style="display: none">
        <ul>
          <?php if(is_array($data['left']) || $data['left'] instanceof \think\Collection || $data['left'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['left'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li class="active">
            <div class="bar"><span><?php echo $vo['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $vo['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
        <ul>
          <?php if(is_array($data['right']) || $data['right'] instanceof \think\Collection || $data['right'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['right'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
          <li class="">
            <div class="bar"><span><?php echo $v['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $v['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
      </div>
      <div class="container" style="display: none">
        <ul>
          <?php if(is_array($data['left']) || $data['left'] instanceof \think\Collection || $data['left'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['left'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li class="active">
            <div class="bar"><span><?php echo $vo['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $vo['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
        <ul>
          <?php if(is_array($data['right']) || $data['right'] instanceof \think\Collection || $data['right'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['right'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
          <li class="">
            <div class="bar"><span><?php echo $v['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $v['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
      </div>
      <div class="container" style="display: none">
        <ul>
          <?php if(is_array($data['left']) || $data['left'] instanceof \think\Collection || $data['left'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['left'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li class="active">
            <div class="bar"><span><?php echo $vo['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $vo['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
        <ul>
          <?php if(is_array($data['right']) || $data['right'] instanceof \think\Collection || $data['right'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['right'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
          <li class="">
            <div class="bar"><span><?php echo $v['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $v['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
      </div>
      <div class="container" style="display: none">
        <ul>
          <?php if(is_array($data['left']) || $data['left'] instanceof \think\Collection || $data['left'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['left'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li class="active">
            <div class="bar"><span><?php echo $vo['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $vo['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
        <ul>
          <?php if(is_array($data['right']) || $data['right'] instanceof \think\Collection || $data['right'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['right'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
          <li class="">
            <div class="bar"><span><?php echo $v['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $v['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
      </div>
      <div class="container" style="display: none">
        <ul>
          <?php if(is_array($data['left']) || $data['left'] instanceof \think\Collection || $data['left'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['left'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li class="active">
            <div class="bar"><span><?php echo $vo['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $vo['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
        <ul>
          <?php if(is_array($data['right']) || $data['right'] instanceof \think\Collection || $data['right'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['right'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
          <li class="">
            <div class="bar"><span><?php echo $v['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $v['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
      </div>
      <div class="container" style="display: none">
        <ul>
          <?php if(is_array($data['left']) || $data['left'] instanceof \think\Collection || $data['left'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['left'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li class="active">
            <div class="bar"><span><?php echo $vo['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $vo['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
        <ul>
          <?php if(is_array($data['right']) || $data['right'] instanceof \think\Collection || $data['right'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['right'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
          <li class="">
            <div class="bar"><span><?php echo $v['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $v['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
      </div>
      <div class="container" style="display: none">
        <ul>
          <?php if(is_array($data['left']) || $data['left'] instanceof \think\Collection || $data['left'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['left'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li class="active">
            <div class="bar"><span><?php echo $vo['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $vo['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
        <ul>
          <?php if(is_array($data['right']) || $data['right'] instanceof \think\Collection || $data['right'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['right'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
          <li class="">
            <div class="bar"><span><?php echo $v['title']; ?></span><img src="__HOME_STATIC__/img/arrow-down.png" alt=""></div>
            <div class="pic">
              <img src="__BASE_URL__/<?php echo $v['img']; ?>" alt="">
            </div>
          </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
      </div>
>>>>>>> b8ad694cce633ee0b02b5651cb85ed10b39dc19a
    </div>
    <!-- 底部菜单 -->
  </div>
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(function () {
      $('.sect3 ul li').click(function () {
        $('.sect3 ul li').removeClass('active')
        $(this).toggleClass('active')
      })

      let $aArr =  $('.sect2 nav a').click(function () {
        console.log(1)
        let index = $aArr.index($(this));
        $aArr.removeClass('active')

        $('.sect3 .container').hide().eq(index).css({
          display:'flex'
        })
        $(this).addClass('active')
      })
    })
  </script>
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
</body>

</html>