<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Andaz Xmas 小游戏</title>
    <meta http-equiv="Cache-Control" content="max-age=3600">
    <meta name="MobileOptimized" content="240">
    <meta name="apple-touch-fullscreen" content="YES">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="<?=$this->config->base_url()?>/public/css/shake.css">
    <script type="text/javascript" src="<?=$this->config->base_url()?>/public/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?=$this->config->base_url()?>/public/js/christmassnow.js"></script>
    <script>
        $(document).ready(function() {
            $('body').christmassnow({
                snowflaketype: 23, // 1 to 25 types of flakes are available change the number from 1 to 25. each one contain different images.
                snowflakesize: 2, //snowflakesize is 1 then it get the size of the image as random , if the snowflakesize is 2 means size of the image as custom
                snowflakedirection: 1, // 1 means default no wind (top to bottom), 2 means random, 3 means left to right and 4 means  right to left
                snownumberofflakes: 4, // number of flakes is user option
                snowflakespeed: 10, // falling speed of flake 10 sec is default
                flakeheightandwidth:30 // if you are mention that option flakesize is 2 then this flakeheightandwidth should work values are in pixels 16*16.
            });
        });
    </script>

    <script type="text/javascript">
        var shareData = {
            "img_url": "http://182.92.64.207/andaz/public/images/img.jpg",
            "img_width": "200",
            "img_height": "200",
            "link": "http://elle.cnhtk.cn/friend?uid=<?=$this->session->userdata('elle_wechat_id')?>",
            "desc":  "摇一摇 赢大奖 #ShakeYourANdAZTree #GetYourFabPrize",
            "title": "摇一摇 赢大奖 #ShakeYourANdAZTree #GetYourFabPrize"
        };
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
            WeixinJSBridge.call('hideToolbar');

            WeixinJSBridge.on('menu:share:timeline', function () {
                shareData.title = "摇一摇 赢大奖 #ShakeYourANdAZTree #GetYourFabPrize";
                WeixinJSBridge.invoke('shareTimeline',shareData, function (res) {
                    _report('send_msg', res.err_msg);
                });
            });

            //发送给好友
            WeixinJSBridge.on('menu:share:appmessage', function () {
                shareData.title = "摇一摇 赢大奖 #ShakeYourANdAZTree #GetYourFabPrize";
                WeixinJSBridge.invoke('sendAppMessage', shareData, function (res) {
                    _report('send_msg', res.err_msg);
                })
            });
        }, false);
    </script>
</head>
<body>
<audio src="<?=$this->config->base_url()?>public/music/1.mp3" autoplay="autoplay" loop="loop">
</audio>
<!--雪花-->
<div class="drop"></div>
<div class="contain">
    <div class="home">
        <img src="<?=$this->config->base_url()?>/public/images/cuxiao.jpg"/>
        <div class="row"><a href="<?=$this->config->base_url()?>start"><img src="<?=$this->config->base_url()?>/public/images/row.png"/></a></div>

    </div>
</div>
<div style="display: none;">
    <script src="http://s11.cnzz.com/stat.php?id=1253957603&web_id=1253957603" language="JavaScript"></script>
</div>
</body>
</html>
