<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"C:\git\project\public/../application/home\view\news\detail.html";i:1547523110;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="__HOME_CSS__/reset.css">
    <!-- <link rel="stylesheet" href="../css/resume.css"> -->
    <title>新闻</title>
    <style>
        .sect1 h1{
            font-size: 32px;
            margin:45px 0 14px
        }
        .time{
            font-size: 20px;
            color: #6B6B6B;
            margin-bottom: 45px;
        }
        .text{
            width: 100%;
            padding: 45px 65px;
            font-size: 24px;
            border-top: 1px solid #AEAEAE
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="sect1">
            <div class="container">
                <h1><?php echo $data['title']; ?></h1>
                <p class="time">
                        时间：<?php echo $data['time']; ?>
                </p>
                <div class="text">
                        <?php echo $data['content']; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>