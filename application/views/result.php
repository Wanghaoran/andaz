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
        //分享层
        /*
        function showInfo(){
            $(".jpbox").hide();
            $("#popDiv1").show();
        }

        function closeInfo(){
            $("#popDiv1").hide();
            $(".jpbox").show();
        }
        */

        //分享层
        function showShare(){
            $(".jpbox").hide();
            $("#popDiv2").show();
        }

        function closeShare(){
            $("#popDiv2").hide();
            $(".jpbox").show();
        }

        //活动规则
        function showActive(){
            $(".jpbox").hide();
            $("#popDiv3").show();
        }

        function closeActive(){
            $("#popDiv3").hide();
            $(".jpbox").show();
        }
    </script>

    <script type="text/javascript">
        var shareData = {
            "img_url": "http://182.92.64.207/andaz/public/images/img.jpg",
            "img_width": "200",
            "img_height": "200",
            "link": "http://182.92.64.207/andaz/",
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
<!--pop start-->
<!--
<div id="popDiv1" class="mydiv1">
    <img src="<?=$this->config->base_url()?>/public/images/img_info.png"/>
    <a href="javascript:closeInfo();" class="close1" title="关闭"></a>
    <div class="infobox">
        <ul>
            <li><input type="text" class="inputclass1"/></li>
            <li><input type="text" class="inputclass2"/></li>
        </ul>
    </div>
</div>
-->
<!--pop end-->
<!--pop start-->
<div id="popDiv2" class="mydiv2">
    <img src="<?=$this->config->base_url()?>/public/images/img_share.png"/>
    <a href="javascript:closeShare();" class="close2" title="关闭"></a>
</div>
<!--pop end-->
<!--pop start-->
<div id="popDiv3" class="mydiv3">
    <img src="<?=$this->config->base_url()?>/public/images/img_hdgz.png"/>
    <a href="javascript:closeActive();" class="close3" title="关闭"></a>
</div>
<!--pop end-->
<!--雪花-->
<div class="drop"></div>
<div class="contain">
    <div class="jiangpin">
        <img src="<?=$this->config->base_url()?>/public/images/bodybg.jpg"/>
        <div class="jpbox">
            <img src="<?=$this->config->base_url()?>/public/images/jpimg.png"/>
            <div class="jpimg">
                <img src="<?=$this->config->base_url()?>/public/images/gift_<?=$gift?>.jpg"/>
            </div>
            <div class="jpbtn">
                <a href="<?=$this->config->base_url()?>"><img src="<?=$this->config->base_url()?>/public/images/btn_zlyc.png"/></a>
                <a href="javascript:showShare();"><img src="<?=$this->config->base_url()?>/public/images/btn_fxhy.png"/></a>
                <a href="javascript:showActive();" class="last"><img src="<?=$this->config->base_url()?>/public/images/btn_hdgz.png"/></a>
            </div>
        </div>
    </div>
</div>
<div style="display: none;">
    <script src="http://s11.cnzz.com/stat.php?id=1253957603&web_id=1253957603" language="JavaScript"></script>
</div>

</body>
</html>
