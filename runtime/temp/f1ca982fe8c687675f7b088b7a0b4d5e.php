<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"E:\phpstudy\WWW\changcheng\public/../application/home\view\index\index.html";i:1547175493;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="__HOME_CSS__/reset.css">
    <link rel="stylesheet" href="__HOME_CSS__/home.css">
    <title>首页</title>
</head>

<body>
    <div class="box">
        <div class="sect1">
          <header>
            <div class="container">
              <img src="__HOME_STATIC__/img/2.png" alt class="logo">
              <nav>
                  <a href="<?php echo url('index/index'); ?>" class="active">首页</a>
                  <a href="<?php echo url('about/index'); ?>">关于长城</a>
                  <a href="<?php echo url('product/index'); ?>">产品中心</a>
                  <a href="<?php echo url('news/index'); ?>">新闻资讯</a>
                  <a href="<?php echo url('culture/index'); ?>">企业文化</a>
                  <a href="<?php echo url('resume/index'); ?>">人力资源</a>
                  <a href="<?php echo url('contact/index'); ?>">联系我们</a>
              </nav>
            </div>
          </header>

          <div class="cont">
              <div class="container">
                <h2>打造行业领先制造商</h2>
                <div class="line"></div>
                <p>中国智造 · <span>长城换向器</span></p>
    
              </div>
          </div>
        </div>
        <div class="sect2">
            <div class="container">
                <div class="left">
                    <div class="line"></div>
                    <h2>ABOUT US</h2>
                    <p>关于我们</p>
                    <p class="desc">以创新为导向 以精益制产品 以零缺控品质 <br>
                    以诚实做服务；<br>
                    环境方针：遵纪守法、污染预防、节能降耗、 清洁生产；<br>
                    安全方针：恪守法规、保障安全 、预防为主 、关爱健康 。<br>
                    </p>
                    <a href="<?php echo url('about/index'); ?>"><button>READ MORE <i class="iconfont icon-jiantou1"></i></button></a>
                    <video src=""></video>
                </div>
                <div class="right">
                    <img src="__HOME_STATIC__/img/hangpai.jpg" class="aboutus" width="700" height="343" alt="工厂航拍">
                    <ul>
                        <li>
                            <h2>25</h2>
                            <p>成立25周年</p>
                        </li>
                        <li class="line"></li>
                        <li>
                            <h2>5
                                <span>万</span>
                            </h2>
                            <p>5W生产面积</p>
                        </li>
                        <li class="line"></li>
                        <li>
                            <h2>1.2
                                <span style="transform: translate3d(100%,0,0)">亿</span>
                            </h2>
                            <p>年生产规模</p>
                        </li>
                        <li class="line"></li>
                        <li>
                            <h2>500</h2>
                            <p>现有员工</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sect3">
            <div class="container">
                <h2>汽车工业</h2>
                <p>
                    产品应用于ABS电机、冷凝电机、启动电机、<br>
                    油泵、摇窗、鼓风、方向盘助力器等汽车电机上
                </p>
            </div>
        </div>
        <div class="sect4">
            <div class="container">
                <ul class="nav">
                    <li class="active">
                        <i class="iconfont icon-qiche"></i>
                        <span>汽车工业</span>
                    </li>
                    <li>
                        <i class="iconfont icon-electrical-jf"></i>
                        <span>家用电器</span>
                    </li>
                    <li>
                        <i class="iconfont icon-zhuangxiujiajuanzhuangzuantoukaiqiangdadongchuankong"></i>
                        <span>电动工具</span>
                    </li>
                    <li>
                        <i class="iconfont icon-jiaotongdiandongchexianxing"></i>
                        <span>摩托车和电动车</span>
                    </li>
                </ul>
                <div class="cont">
                    <img src="__HOME_STATIC__/img/comp.jpg" width="534" height="534" alt="">
                    <div class="text">
                        <div class="line"></div>
                        <p>PHILANTHROPY</p>
                        <h2>社会责任</h2>
                        <p class="desc">
                            长城换向器创立以来一直致力于社会责任和企业发展紧密联系在一起，这体现了长城人的远大抱负和高度使命，这离不开党的改革开放路线，离不开社会各界的鼎力支持，用心付出，责任至上。
                        </p>
                        <a href="<?php echo url('about/social'); ?>"><button>READ MORE <i class="iconfont icon-jiantou1"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 新闻 -->
        <div class="sect5">
            <div class="container">
                <h2 class="title">新闻资讯
                </h2>
                <ul>
                    <?php foreach($data as $key=>$vo): ?>

                    <li>
                        <img src="__BASE_URL__/<?php echo $vo['index_img']; ?>" alt="">
                        <div class="cont">
                            <a href="<?php echo url('news/details'); ?>?id=<?php echo $vo['id']; ?>"><h2><?php echo $vo['title']; ?></h2></a>
                            <p class="time"><?php echo $vo['time']; ?></p>
                            <div class="line"></div>
                            <p class="desc"></p>
                        </div>
                    </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
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
                  <li>节日活动</li>
                  <li>公司文化</li>
                  <li>职工之家</li>
                  <li>拓展训练</li>
                  <li>公益活动</li>
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
      </div>
    <!--<script src="../dist/home.js"></script>-->
</body>

</html>