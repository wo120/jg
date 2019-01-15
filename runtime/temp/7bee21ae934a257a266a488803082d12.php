<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"C:\git\project\public/../application/home\view\contact\index.html";i:1547536814;s:63:"C:\git\project\public/../application/home\view\public\foot.html";i:1547537221;}*/ ?>
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
                    <a href="<?php echo url('about/index'); ?>">关于长城</a>
                    <a href="<?php echo url('product/index'); ?>">产品中心</a>
                    <a href="<?php echo url('news/index'); ?>">新闻资讯</a>
                    <a href="<?php echo url('culture/index'); ?>">企业文化</a>
                    <a href="<?php echo url('resume/index'); ?>">人力资源</a>
                    <a href="<?php echo url('contact/index'); ?>" class="active">联系我们</a>
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
                    <h1>CONTACT US</h1>
                    <h2>联系我们</h2>
                </div>
            </div>
        </div>
        <div class="sect2">
            <div class="container">
                <nav>
                    <a href="javascript:;" class="active">联系我们</a>
                    <a href="javascript:;">在线留言</a>
                </nav>
            </div>
        </div>
        <!-- 联系我们 -->
        <div class="sect sect3">
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
                <div class="addr" id="dituContent" style="border:1px solid #cccccc;"></div>
            </div>
        </div>
        <!-- 在线留言 -->
        <form action="<?php echo url('home/message/add'); ?>" autocomplete="on" method="post" class="sect sect4" style="display:none">
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
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(function () {
            var $aArr = $('.sect2 nav a').click(function () {
                let index = $aArr.index($(this))

                // console.log(index)
                $(this).addClass('active').siblings().removeClass('active');
                $('.sect').hide().eq(index).show();
            })
        })
    </script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&amp;v=1.1&amp;services=true"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/getscript?v=1.1&amp;ak=&amp;services=true&amp;t=20130716024058"></script>
    <link rel="stylesheet" type="text/css" href="http://api.map.baidu.com/res/11/bmap.css">
    <div></div>
    <script type="text/javascript">
        //创建和初始化地图函数：
        function initMap() {
            createMap();//创建地图
            setMapEvent();//设置地图事件
            addMapControl();//向地图添加控件
            addMarker();//向地图中添加marker
        }

        //创建地图函数：
        function createMap() {
            var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
            var point = new BMap.Point(120.671618, 27.748332);//定义一个中心点坐标
            map.centerAndZoom(point, 18);//设定地图的中心点和坐标并将地图显示在地图容器中
            window.map = map;//将map变量存储在全局
        }

        //地图事件设置函数：
        function setMapEvent() {
            map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
            map.enableScrollWheelZoom();//启用地图滚轮放大缩小
            map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
            map.enableKeyboard();//启用键盘上下左右键移动地图
        }

        //地图控件添加函数：
        function addMapControl() {
            //向地图中添加缩放控件
            var ctrl_nav = new BMap.NavigationControl({ anchor: BMAP_ANCHOR_TOP_LEFT, type: BMAP_NAVIGATION_CONTROL_LARGE });
            map.addControl(ctrl_nav);
            //向地图中添加缩略图控件
            var ctrl_ove = new BMap.OverviewMapControl({ anchor: BMAP_ANCHOR_BOTTOM_RIGHT, isOpen: 1 });
            map.addControl(ctrl_ove);
            //向地图中添加比例尺控件
            var ctrl_sca = new BMap.ScaleControl({ anchor: BMAP_ANCHOR_BOTTOM_LEFT });
            map.addControl(ctrl_sca);
        }

        //标注点数组
        var markerArr = [{ title: "浙江长城换向器有限公司", content: "浙江省瑞安市经济开发区开发大道511号<br/>总机：86-577-65156888<br/>Http://www.chinacgw.cn<br/>E-mail:cgw@chinacgw.cn", point: "120.671707|27.748157", isOpen: 1, icon: { w: 21, h: 21, l: 0, t: 0, x: 6, lb: 5 } }
        ];
        //创建marker
        function addMarker() {
            for (var i = 0; i < markerArr.length; i++) {
                var json = markerArr[i];
                var p0 = json.point.split("|")[0];
                var p1 = json.point.split("|")[1];
                var point = new BMap.Point(p0, p1);
                var iconImg = createIcon(json.icon);
                var marker = new BMap.Marker(point, { icon: iconImg });
                var iw = createInfoWindow(i);
                var label = new BMap.Label(json.title, { "offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20) });
                marker.setLabel(label);
                map.addOverlay(marker);
                label.setStyle({
                    borderColor: "#808080",
                    color: "#333",
                    cursor: "pointer"
                });

                (function () {
                    var index = i;
                    var _iw = createInfoWindow(i);
                    var _marker = marker;
                    _marker.addEventListener("click", function () {
                        this.openInfoWindow(_iw);
                    });
                    _iw.addEventListener("open", function () {
                        _marker.getLabel().hide();
                    })
                    _iw.addEventListener("close", function () {
                        _marker.getLabel().show();
                    })
                    label.addEventListener("click", function () {
                        _marker.openInfoWindow(_iw);
                    })
                    if (!!json.isOpen) {
                        label.hide();
                        _marker.openInfoWindow(_iw);
                    }
                })()
            }
        }
        //创建InfoWindow
        function createInfoWindow(i) {
            var json = markerArr[i];
            var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>" + json.content + "</div>");
            return iw;
        }
        //创建一个Icon
        function createIcon(json) {
            var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w, json.h), { imageOffset: new BMap.Size(-json.l, -json.t), infoWindowOffset: new BMap.Size(json.lb + 5, 1), offset: new BMap.Size(json.x, json.h) })
            return icon;
        }

        initMap();//创建和初始化地图
    </script>
</body>

</html>