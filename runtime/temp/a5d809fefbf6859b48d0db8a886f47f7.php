<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\phpstudy\WWW\changcheng\public/../application/admin\view\login\index.html";i:1546399511;}*/ ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>长城后台系统</title>
    <link rel="stylesheet" href="__ADMIN_CSS__/style.css">
</head>
<body>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <body>
        <div class="cotn_principal">
            <div class="cont_centrar">
                <div class="cont_login">
                    <div class="cont_info_log_sign_up">
                        <div class="col_md_login">
                            <div class="cont_ba_opcitiy">
                                <h2>登录</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur.</p>
                                <button class="btn_login" onclick="cambiar_login()">登录</button>
                            </div>
                        </div>

                    </div>

                    <div class="cont_forms">
                        <form action="<?php echo url('admin/login/login'); ?>" method="post">
                        <div class="cont_img_back_"> <img src="__ADMIN_IMG__/po.jpg" alt="" /> </div>
                        <div class="cont_form_login"> <a href="#" ><i class="material-icons">&#xE5C4;</i></a>
                            <h2>登录</h2>
                            <input type="text" name="username" placeholder="账号" />
                            <input type="password" name="pwd" placeholder="密码" />
                            <input type="hidden" name="__token__" value="<?php echo $token; ?>" />
                            <button class="btn_login" name="submit" id="login">登录</button>
                        </div>
                        </form>

                        <div class="cont_form_sign_up"> <a href="#" ><i class="material-icons">&#xE5C4;</i></a>
                            <h2>注册</h2>
                            <input type="text" placeholder="Email" />
                            <input type="text" placeholder="User" />
                            <input type="password" placeholder="Password" />
                            <input type="password" placeholder="Confirm Password" />
                            <button class="btn_sign_up" onclick="cambiar_sign_up()">登录</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="__ADMIN_JS__/index.js"></script>
        <script src="__ADMIN_JS__/jquery.min.js"></script>
    </body>
</body>
</html>

<script type="text/javascript">

    


</script>