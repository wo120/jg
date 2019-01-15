<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"C:\git\project\public/../application/home\view\contact\index.html";i:1547444187;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="__HOME_CSS__/reset.css">
    <link rel="stylesheet" href="__HOME_CSS__/contactus.css">
    <title>新闻</title>
    <style>
        .sect4 .btn-wrap {
            text-align: center;
            margin: 65px 0;
        }

        .sect4 .btn-wrap button {
            font-size: 18px;
            color: #fff;
            width: 170px;
            height: 55px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .sect4 .btn-wrap button:active {
            opacity: .6
        }

        .sect4 .btn-wrap button.submit {
            background: #d82128
        }

        .sect4 .btn-wrap button:last-child {
            margin-left: 100px
        }

    </style>
</head>

<body>
        <div class="box">
            <header>
                <div class="container">
                    <img src="__HOME_STATIC__/img/1.png" alt class="logo">
                    <nav>
                        <a href="<?php echo url('index/index'); ?>">首页</a>
                        <a href="<?php echo url('about/index'); ?>" >关于长城</a>
                        <a href="<?php echo url('product/index'); ?>" >产品中心</a>
                        <a href="<?php echo url('news/index'); ?>" >新闻资讯</a>
                        <a href="<?php echo url('culture/index'); ?>">企业文化</a>
                        <a href="<?php echo url('resume/index'); ?>">人力资源</a>
                        <a href="<?php echo url('contact/index'); ?>" class="active">联系我们</a>
                    </nav>
                </div>
            </header>
                <div class="sect1">
                  <div class="container">
                    <div class="text">
                      <h1>CONTACT US</h1>
                      <h2>联系我们</h2>
                    </div>
                  </div>
                </div>
                <div class="sect2">
                  <div class="container">
                    <nav>
                      <a href class="active">联系我们</a>
                      <a href>在线留言</a>
                    </nav>
                  </div>
                </div>
                <!-- 联系我们 -->
                <div class="sect3" style="display:none">
                  <div class="container">
                    <h1>
                      CONTACT
                      <span>US</span>
                    </h1>
                    <h2>联系我们</h2>
                    <div class="cont">
                        <div class="td">
                            <h3>地址</h3>
                            <p>浙江省瑞安市经济开发区开发区大道511号(325200)</p>
                        </div>
                        <div class="td">
                            <h3>总机</h3>
                            <p>86-577-65156888</p>
                        </div>
                        <div class="td">
                            <h3>国外市场</h3>
                            <p>86-577-65156880/65156881</p>
                        </div>
                        <div class="td">
                            <h3>国内市场</h3>
                            <p>86-577-65156788</p>
                        </div>
                        <div class="td">
                            <h3>人力资源科</h3>
                            <p>58850555-8018</p>
                        </div>
                        <div class="td">
                            <h3>网址</h3>
                            <p>http://www.chinacgw.cn</p>
                        </div>
                        <div class="td">
                            <h3>E-mail</h3>
                            <p>cgw@chinacgw.cn</p>
                        </div>
                        <div class="td">
                            <h3>传真</h3>
                            <p>86-577-65156688</p>
                        </div>
                    </div>
                    <div class="addr">address</div>
                  </div>
                </div>
                <!-- 在线留言 -->
                    <form action ="<?php echo url('home/message/add'); ?>" autocomplete="on" method="post" class="sect4">
                        <?php echo token(); ?>
                  <div class="container">
                      <h1>
                      ONLINE 
                      <span>MESSAGE</span>
                    </h1>
                    <h2>联系我们</h2>

                    <div class="cont">

                        <div class="td">
                            <span>公司名称</span>
                            <input type="text" name="gs_name">
                        </div>
                        <div class="td">
                            <span>您的称呼</span>
                            <input type="text" name="nickname">
                        </div>
                        <div class="td">
                            <span>联系电话</span>
                            <input type="text" name="phone">
                        </div>
                        <div class="td">
                            <span>QQ号码</span>
                            <input type="text" name="qq">
                        </div>
                        <div class="td">
                            <span>您的主题</span>
                            <input type="text" name="title">
                        </div>
                    </div>

                    <div class="liuyan">
                        <p>留言内容：</p>
                        <textarea name="content"></textarea>
                    </div>
                  </div>
                        <div class="btn-wrap">
                            <button class="submit">提交</button>
                            <button type="reset">取消</button>
                        </div>
                </form>
                </div>
              </div>
</body>

</html>