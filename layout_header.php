
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台管理系统</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,header-user-scalable=no"/>
    <meta content="telephone=no,email=no" name="format-detection" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
    <meta name="renderer" content="webkit">
    <script type="text/javascript" src="dest/lib/jquery-2.1.4.js"></script>


    <link rel="stylesheet" href="dest/css/init.css"/>
    <link rel="stylesheet" href="dest/lib/iconfont/iconfont.css"/>
    <link rel="stylesheet" href="dest/css/spriter.css"/>

    <link rel="stylesheet" href="dest/css/global.css"/>



    <link rel="stylesheet" href="lib/prism/prism.css"/>
    
    


    <style>
        /*@charset "UTF-8";*/
        body{font-family: "Microsoft YaHei","Arial",sans-serif;color:#464646;}

        /*头部*/
        .header{height:60px;padding:0 20px;background:#f5f5f5;border-bottom:1px solid #e6e6e6;position: fixed;top: 0;width: 100%;z-index: 20}
        .header-logo{display:block;float:left;height: 100%;}
        .header-logo img{vertical-align: middle;margin-top: 10px;}

        .header-user {position:relative;float:right;width:170px;height: 100%;padding-left:10px;padding-top:7px;box-sizing:border-box;border-left: 1px solid #dee1ea;font-size: 12px;color: #585b5d;}
        .header-user img{display:inline-block;vertical-align: middle;}
        .header-user p{display:inline-block;padding:0 10px;}
        .header-user span{display:inline-block;width:10px;height:10px;background:url(img/icon_arrow.png) no-repeat center;}

        .header-user-name{display:inline-block;cursor:pointer;}
        .header-user-avatar {width: 45px;height: 45px;}
        .header-user-more {display:none;position:absolute;top:45px;right:20px;width:100px;border:1px solid #e4e4e4;border-radius:3px;background:#fff;color: #000;text-align: left;  }
        .header-user-more a{line-height:20px;color:#585b5d;display: block;padding: 6px 0 6px 16px;}
        .header-user-more a:hover{color:#db2828;}
        .header-user-uparrow {position: absolute;top: -8px;right: 8px;}


        .header-rt{float:right;position:relative;height: 100%;;width:6.7%;border-left:1px solid #dee1ea;}
        .header-rt a{display:block;height: 100%;}
        .header-rt .num{position:absolute;width:18px;height:18px;top:10px;right:20px;line-height:18px;font-size:13px;color:#fff;text-align:center;background:url(img/mail_msg.png);}


        .header-mail{background:url(img/mail.png) no-repeat center;}
        .header-msg{background:url(img/signal.png) no-repeat center;}


        .header-msg .num{background:url(img/signal_msg.png);}
        .header-mail .num{background:url(img/mail_msg.png);}


        /*侧边栏*/


        .aside{width:220px;position:fixed;height:100%;top:61px;bottom:0;left:0;background:#444d58;border-right:1px solid #e6e6e6;z-index: 102;overflow-x: hidden;}
        .aside-con{height: 100%; overflow: auto;overflow-x: hidden;}
        .aside-head{height:60px;line-height:60px;color:#fff;background:url(img/icon_menu_arrow.png) no-repeat 192px;border-bottom:1px solid #353b45;}

        .aside span{display:block;text-indent:55px;cursor: pointer}

        .aside-body{display:none;}
        .aside-body a{display:block;width:100%;line-height:41px;text-indent:55px;color:#9ca3ac;background:#353b45;cursor: pointer}
        .aside-body a:hover,.aside-body a.cur{color:#fff;background:#777f89;}
        .aside-sy{background:url(img/user.png) no-repeat 20px center;}


        .content {margin: 10px 20px 20px 240px;padding-top: 61px}

    </style>



</head>
<body>
<div class="header">
    <a href="#" class="header-logo"><img src="img/logo.png"></a>


    <div class="header-user">
        <img class="header-user-avatar" src="img/head_user.png">
        <div class="header-user-name"><p>管理员</p><span></span></div>

        <div class="header-user-more">
            <img src="img/sign_out_bg.png" alt="" class="header-user-uparrow">
            <a href="#" >
                <img src="img/switch_icon.png" alt="" class=""> 关于我们
            </a>
<!--            <a href="#" class="header-user-quit">-->
<!--                <img src="img/sign_out_icon.png" alt="" class=""> 退出-->
<!--            </a>-->
        </div>
    </div>
    <div class="header-rt header-mail "><a href="#"><div class="num">2</div></a></div>
    <div class="header-rt header-msg "><a href="#"><div class="num">6</div></a></div>
</div>

<div class="aside">
    <div class="aside-con">
        <p class="aside-head"><span class="aside-sy">首页</span></p>
        <p class="aside-head"><span class="aside-sy">样式</span></p>
        <div class="aside-body">
            <a href="base.php" >基础css</a>
            <a href="text.php" >文字</a>
            <a href="button.php" >按钮</a>
            <a href="tip.php" >提示</a>
            <a href="from.php" >表单元素</a>
            <a href="progress.php" >进度条</a>
        </div>
        <p class="aside-head"><span class="aside-sy">结构</span></p>
        <div class="aside-body">
            <a href="header.php" >header</a>
            <a href="asdie.php" >侧边栏</a>
            <a href="nav.php" >导航</a>
            <a href="tab.php" >标签页</a>
            <a href="panel.php" >面板</a>
            <a href="title.php" >标题</a>
        </div>
        <p class="aside-head"><span class="aside-sy">插件</span></p>
        <div class="aside-body">
            <a href="loading.php" >载入、等待</a>
            <a href="imgview.php" >图片</a>
            <a href="tree.php" >树</a>
            <a href="pop.php" >弹窗</a>
            <a href="table.php" >表格</a>
            <a href="table.php" >文件上传</a>
        </div>
        <p class="aside-head"><span class="aside-sy">函数</span></p>
        <div class="aside-body">
            <a href="format.php" >格式化</a>
            <a href="console.php" >页面控制台</a>
        </div>
        <p class="aside-head"><span class="aside-sy">封装</span></p>
        <div class="aside-body">
            <a href="map.php" >地图</a>
            <a href="icon.php" >图标</a>
            <a href="ajax.php" >Ajax</a>
            <a href="chart.php" >图表</a>
            <a href="time.php" >时间选择器</a>
        </div>


    </div>
</div>

<div class="content">









