<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"C:\git\project\public/../application/home\view\culture\index.html";i:1547444187;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="__HOME_CSS__/reset.css">
    <link rel="stylesheet" href="__HOME_CSS__/buzCulture.css">
    <title>企业文化</title>
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
                        <a href="<?php echo url('news/index'); ?>" >新闻资讯</a>
                        <a href="<?php echo url('culture/index'); ?>" class="active">企业文化</a>
                        <a href="<?php echo url('resume/index'); ?>">人力资源</a>
                        <a href="<?php echo url('contact/index'); ?>">联系我们</a>
                    </nav>
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
                        <a href class="active">节日活动</a>
                        <a href>公司文化</a>
                        <a href>职工之家</a>
                        <a href>拓展训练</a>
                        <a href>工艺活动</a>
                    </nav>
                    </div>
                </div>
                <div class="sect3">
                    <div class="container">
                        <h1>FESTIVAL <span>EVENT</span></h1>
                        <p>节日活动</p>
                        <ul>
                            <?php if(is_array($act) || $act instanceof \think\Collection || $act instanceof \think\Paginator): $i = 0; $__LIST__ = $act;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <li>
                                <img src="__BASE_URL__/<?php echo $v['img']; ?>" alt="">
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
              </div>
</body>

</html>