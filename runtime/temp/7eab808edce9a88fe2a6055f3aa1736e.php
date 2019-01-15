<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"C:\git\project\public/../application/home\view\resume\send.html";i:1547522725;s:63:"C:\git\project\public/../application/home\view\public\foot.html";i:1547522090;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="__HOME_CSS__/reset.css">
    <link rel="stylesheet" href="__HOME_CSS__/resume.css">
    <style>
        input{font-size: 18px}
        .sect2 .table2 select
        {
            font-size: 18px;
        }
        textarea{
            width: 100%;
            height: 100%;
            font-size: 18px;
        }

    </style>
    <title>新闻</title>
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
                        <a href="<?php echo url('resume/index'); ?>" class="active">人力资源</a>
                        <a href="<?php echo url('contact/index'); ?>">联系我们</a>
                    </nav>
                </div>
            </header>
                <div class="sect1">
                  <div class="container">
                    <div class="text">
                      <h1>HUMAN RESOURCES</h1>
                      <h2>人力资源</h2>
                      <p>德才兼备 以德为本
                        <br>尚贤用能 绩效优先
                      </p>
                    </div>
                  </div>
                </div>
                <div class="sect2">
                    <div class="container">
                        <form action ="<?php echo url('home/resume/add'); ?>" autocomplete="on" method="post" >
                        <?php echo token(); ?>
                        <div class="table table1">
                            <div style="" class="td prim-bg">应聘职位</div>
                            <div style="" class="td"><?php echo $job_name; ?></div>
                            <input type="hidden" value="<?php echo $job_name; ?>" name="job_name_tmp">
                            <div style=""  class="td prim-bg">填表日期</div>
                            <div style="" class="td"><?php echo $time; ?></div>
                            <div style="" class="td">期望年薪</div>
                            <div style="" class="td"> <input type="text" name="hope_year_salary" ></div>
                        </div>
                        <p class="title">基本情况</p>
                        <div class="table table2">
                            <div class="td">姓名</div>
                            <div class="td">
                                <input type="text" name="nickname">
                            </div>
                            <div class="td">性别</div>
                            <div class="td">
                               <select name="sex" id="">
                                   <option value="1">男</option>
                                   <option value="2">女</option>
                               </select>
                            </div>
                            <div class="td">籍贯</div>
                            <div class="td">
                                <input type="text" name="birthplace" >
                            </div>
                            <div class="td">民族</div>
                            <div class="td">
                                <input type="text" name="nation">
                            </div>
                            <div class="td">身高</div>
                            <div class="td">
                                <input type="text" name="height" >
                            </div>
                            <div class="td">出生年月</div>
                            <div class="td">
                                <input type="text" name="birth_date" >
                            </div>
                            <div class="td">婚否</div>
                            <div class="td">
                                <select name="marriage" >
                                    <option value="1">是</option>
                                    <option value="2">否</option>
                                    <option value="3">已离异</option>
                                </select>
                            </div>
                            <div class="td">职称</div>
                            <div class="td">
                                <input type="text" name="job_title" >
                            </div>
                            <div class="td">政治面貌</div>
                            <div class="td">
                                <input type="text" name="political" >
                            </div>
                            <div class="td">手机号码</div>
                            <div class="td">
                                <input type="text" name="phone" >
                            </div>
                            <div class="td">其他联系方式</div>
                            <div class="td">
                                <input type="text" name="tall" >
                            </div>
                            <div class="td">E-mail</div>
                            <div class="td">
                                <input type="text" name="email" >
                            </div>
                        </div>
                        <p class="title">教育经历</p>
                        <div class="table table3">
                            <div class="td">起止时间</div>
                            <div class="td">毕业院校</div>
                            <div class="td">专业</div>
                            <div class="td">学历</div>
                            <div class="td">
                                <input type="text" name="school_time">
                            </div>
                            <div class="td">
                                <input type="text" name="school">
                            </div>
                            <div class="td">
                                <input type="text" name="major">
                            </div>
                            <div class="td">
                                <input type="text" name="education">
                            </div>
                            <div class="td">
                                <input type="text" name="school_time2">
                            </div>
                            <div class="td">
                                <input type="text" name="school2">
                            </div>
                            <div class="td">
                                <input type="text" name="major2">
                            </div>
                            <div class="td">
                                <input type="text" name="education2">
                            </div>
                            <div class="td">
                                <input type="text" name="school_time3">
                            </div>
                            <div class="td">
                                <input type="text" name="school3">
                            </div>
                            <div class="td">
                                <input type="text" name="major3">
                            </div>
                            <div class="td">
                                <input type="text" name="education3">
                            </div>
                        </div>
                        <p class="title">工作经历（按先近后远填最近三家）</p>
                        <div class="table table4">
                            <div class="td">起止时间</div>
                            <div class="td">公司名称</div>
                            <div class="td">所任岗位/职务</div>
                            <div class="td">月薪水平</div>
                            <div class="td">
                                <input type="text" name="gs_time">
                            </div>
                            <div class="td">
                                <input type="text" name="gs_name">
                            </div>
                            <div class="td">
                                <input type="text" name="job_name">
                            </div>
                            <div class="td">
                                <input type="text" name="money">
                            </div>
                        </div>
                        <div class="table table5">
                            <div class="td">
                                历任职务<br>
                                主要工作业绩描述<br>
                                离职原因
                            </div>
                            <div class="td">
                                <!--<input type="text" name="suffer">-->
                                <textarea  name="suffer"></textarea >
                            </div>
                        </div>
                        <div class="table table4">
                            <div class="td">起止时间</div>
                            <div class="td">公司名称</div>
                            <div class="td">所任岗位/职务</div>
                            <div class="td">月薪水平</div>
                            <div class="td">
                                <input type="text" name="gs_time2">
                            </div>
                            <div class="td">
                                <input type="text" name="gs_name2">
                            </div>
                            <div class="td">
                                <input type="text" name="job_name2">
                            </div>
                            <div class="td">
                                <input type="text" name="money2">
                            </div>
                        </div>
                        <div class="table table5">
                            <div class="td">
                                历任职务<br>
                                主要工作业绩描述<br>
                                离职原因
                            </div>
                            <div class="td">
                                <textarea  name="suffer2"></textarea >
                            </div>
                        </div>
                        <div class="table table4">
                            <div class="td">起止时间</div>
                            <div class="td">公司名称</div>
                            <div class="td">所任岗位/职务</div>
                            <div class="td">月薪水平</div>
                            <div class="td">
                                <input type="text" name="gs_time3">
                            </div>
                            <div class="td">
                                <input type="text" name="gs_name3">
                            </div>
                            <div class="td">
                                <input type="text" name="job_name3">
                            </div>
                            <div class="td">
                                <input type="text" name="money3">
                            </div>
                        </div>
                        <div class="table table5">
                            <div class="td">
                                历任职务<br>
                                主要工作业绩描述<br>
                                离职原因
                            </div>
                            <div class="td">
                                <textarea  name="suffer3"></textarea >
                            </div>
                        </div>
                        <p class="title">获奖记录</p>
                        <div class="table table6">
                            <div class="td">年份</div>
                            <div class="td">颁奖机构</div>
                            <div class="td">奖项名称</div>
                            <div class="td">
                                <input type="text" name="year">
                            </div>
                            <div class="td">
                                <input type="text" name="prize">
                            </div>
                            <div class="td">
                                <input type="text" name="name">
                            </div>

                            <div class="td">
                                <input type="text" name="year2">
                            </div>
                            <div class="td">
                                <input type="text" name="prize2">
                            </div>
                            <div class="td">
                                <input type="text" name="name2">
                            </div>

                            <div class="td">
                                <input type="text" name="year3">
                            </div>
                            <div class="td">
                                <input type="text" name="prize3">
                            </div>
                            <div class="td">
                                <input type="text" name="name3">
                            </div>
                        </div>
                        <p class="title">其他</p>
                        <div class="table table7">
                            <div class="td">持有的职业资格证件及取证时间</div>
                            <div class="td">
                                <textarea  name="cert"></textarea >
                            </div>
                            <div class="td">核心技能及专长自述</div>
                            <div class="td">
                                <textarea  name="skill"></textarea >
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <button class="submit">提交申请</button>
                            <button type="reset">取消</button>
                        </div>
                        </form>
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

</html>