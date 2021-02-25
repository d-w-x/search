<?php
//禁用错误报告
error_reporting(0);
$t = htmlspecialchars($_GET["t"]);
$q = htmlspecialchars($_POST["q"]);
if (empty($q)) {
} else {
    if ($t == "b") {
        echo '<script>window.location.href="//www.baidu.com/s?ie=utf-8&word=' . $q . '";</script>';
    } else {
        //默认谷歌
        echo '<script>window.location.href="https://www.google.com/search?hl=zh&q=' . $q . '";</script>';
    }
};
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="referrer" content="no-referrer"/>
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" href="icon/logo.svg?v=1.0.1" sizes="280x280"/>
    <link rel="apple-touch-icon-precomposed" href="icon/logo.svg?v=1.0.1"/>
    <meta name="msapplication-TileImage" content="icon/logo.svg?v=1.0.1"/>
    <link rel="shortcut icon" href="icon/32.png?v=1.0.1"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes"><!--UC强制全屏-->
    <meta name="browsermode" content="application"><!--UC应用模式-->
    <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
    <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
    <title>个人站点导航</title>
    <link href="style.css?t=<?php echo date("ymdhi"); ?>" rel="stylesheet">
    <!--    阿里字体-->
    <script src="//at.alicdn.com/t/font_2385149_k27utm4suta.js"></script>
    <script src="sou.js?t=<?php echo date("ymdhi"); ?>"></script>
    <script src="https://widget.qweather.net/simple/static/js/he-simple-common.js?v=2.0"></script>
</head>

<body>
    <div id="menu"><i></i></div>
    <div id="list" class="list closed">
        <ul>
            <!------>
            <li class="title">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-profile"></use>
                </svg>
                个人网站
            </li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-aria"></use>
                    </svg>
                    Aria2</a></li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-tanzhen"></use>
                    </svg>
                    探针</a></li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-onedrive"></use>
                    </svg>
                    网盘挂载</a></li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-picbad"></use>
                    </svg>
                    图床</a></li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-cloudreve"></use>
                    </svg>
                    cloudreve</a></li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-bitwarden"></use>
                    </svg>
                    密码管理</a></li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-qbittorrent"></use>
                    </svg>
                    qBitorrent</a></li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-wordpress"></use>
                    </svg>
                    博客</a></li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-nextcloud"></use>
                    </svg>
                    nextcloud</a></li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-checkin"></use>
                    </svg>
                    签到</a></li>
            <!------>
            <li class="title">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-shipin"></use>
                </svg>
                视频媒体
            </li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-youtube"></use>
                    </svg>
                    Youtube</a></li>
            <li><a rel="nofollow" href="https://www.bilibili.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-bili"></use>
                    </svg>
                    哔哩哔哩</a></li>
            <!------>
            <li class="title">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-youxiang"></use>
                </svg>
                邮箱
            </li>
            <li><a rel="nofollow" href="https://mail.google.com/mail/u/0/#inbox" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-gmail"></use>
                    </svg>
                    Gmail</a></li>
            <li><a rel="nofollow" href="https://qiye.163.com/login/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-wangyi"></use>
                    </svg>
                    网易邮箱</a></li>
            <li><a rel="nofollow" href="https://mail.qq.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-QQ"></use>
                    </svg>
                    QQ邮箱</a></li>
            <li><a rel="nofollow" href="https://qiye.aliyun.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-yunyouxiang"></use>
                    </svg>
                    阿里邮箱</a></li>
            <!------>
            <li class="title">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-msg"></use>
                </svg>
                社交资讯
            </li>
            <li><a rel="nofollow" href="https://www.weibo.com" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-weibo"></use>
                    </svg>
                    微博</a></li>
            <li><a rel="nofollow" href="https://www.weibo.com" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-mastodon"></use>
                    </svg>
                    微博</a></li>
            <li><a rel="nofollow" href="https://www.zhihu.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-zhihu"></use>
                    </svg>
                    知乎</a></li>
            <li><a rel="nofollow" href="https://www.v2ex.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-v2ex"></use>
                    </svg>
                    V2EX</a></li>
            <li><a rel="nofollow" href="https://www.instagram.com" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-Instagram"></use>
                    </svg>
                    Instagram</a></li>
            <li><a rel="nofollow" href="https://www.twitter.com" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-twitter"></use>
                    </svg>
                    Twitter</a></li>
            <!------>
            <li class="title">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-gouwuche"></use>
                </svg>
                购物
            </li>
            <li><a rel="nofollow" href="http://https://store.steampowered.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-steam"></use>
                    </svg>
                    蒸汽平台</a></li>
            <li><a rel="nofollow" href="http://www.manmanbuy.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-manmanmai"></use>
                    </svg>
                    慢慢买比价</a></li>
            <li><a rel="nofollow" href="https://www.amazon.cn/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-amazon"></use>
                    </svg>
                    亚马逊</a></li>
            <li><a rel="nofollow" href="https://www.taobao.com" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-taobao"></use>
                    </svg>
                    淘宝网</a></li>
            <li><a rel="nofollow" href="https://www.jd.com" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-jingdong"></use>
                    </svg>
                    京东</a></li>
            <li><a rel="nofollow" href="http://www.dangdang.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-dangdang"></use>
                    </svg>
                    当当</a></li>
            <!------>
            <li class="title">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-search"></use>
                </svg>
                搜索引擎
            </li>
            <li><a rel="nofollow" href="https://www.google.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-google"></use>
                    </svg>
                    Google</a></li>
            <li><a rel="nofollow" href="https://duckduckgo.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-duck"></use>
                    </svg>
                    DuckGo</a></li>
            <li><a rel="nofollow" href="https://www.bing.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-bing"></use>
                    </svg>
                    Bing</a></li>
            <li><a rel="nofollow" href="https://m.baidu.com/?pu=sz%401321_480&wpo=btmfast" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-icon_baidulogo"></use>
                    </svg>
                    百度</a></li>
            <li><a rel="nofollow" href="https://www.dogedoge.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-gougou"></use>
                    </svg>
                    多吉</a></li>
            <!------>
            <li class="title">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-toolset"></use>
                </svg>
                工具
            </li>
            <li><a rel="nofollow" href="https://tools.miku.ac/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-toolset"></use>
                    </svg>
                    Miku工具</a></li>
            <li><a rel="nofollow" href="https://translate.google.cn/?hl=zh-CN" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-translate"></use>
                    </svg>
                    谷歌翻译</a></li>
            <li><a rel="nofollow" href="https://rss.rssforever.com/index.php#f=-3&c=0" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-rss"></use>
                    </svg>
                    RSS 阅读</a></li>
            <li><a rel="nofollow" href="https://javascriptobfuscator.com/Javascript-Obfuscator.aspx" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-jshunxiao"></use>
                    </svg>
                    JS混淆器</a></li>
            <li><a rel="nofollow" href="https://ping.pe" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-wangluo1"></use>
                    </svg>
                    ip地址信息</a></li>
            <li><a rel="nofollow" href="https://ping.chinaz.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-pingup"></use>
                    </svg>
                    站长Ping</a></li>
            <!------>
            <li class="title">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-kongzhitai"></use>
                </svg>
                开发
            </li>
            <li><a rel="nofollow" href="https://github.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-github"></use>
                    </svg>
                    Github</a></li>
            <li><a rel="nofollow" href="https://codepen.io/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-codepen"></use>
                    </svg>
                    Codepen</a></li>
            <li><a rel="nofollow" href="https://www.52pojie.cn/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-theater-masks"></use>
                    </svg>
                    吾爱破解</a></li>
            <li><a rel="nofollow" href="https://msdn.itellyou.cn/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-windows"></use>
                    </svg>
                    MSDN下载</a></li>
            <li><a rel="nofollow" href="https://dash.cloudflare.com/" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-cloudflare"></use>
                    </svg>
                    C. flare</a></li>
        </ul>
    </div>
    <!--天气-->
    <div id="wth">
        <div id="he-plugin-simple"></div>
    </div>
    <div id="content">
        <div class="con">
            <div class="shlogo" style="background: url(icon/logo.svg) no-repeat center/cover;"></div>
            <p class="sou"><span id="hitokoto">:D 获取中... </span><span id="from"></span></p>
            <div class="sou">
                <form action="" method="post" target="_self">
                    <?php
                    if ($t == "b") {
                        echo '<div class="lg" style="background: url(icon/b.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=\';"></div>';
                    } else {
                        //上面知道把默认谷歌改成百度，这里不知道改吗大佬们？。。
                        echo '<div class="lg" style="background: url(icon/g.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=b\';"></div>';
                    }
                    ?>
                    <!--input class="t" type="text" value="" name="t" hidden-->
                    <input id="wd" class="wd" type="text" placeholder="请输入搜索内容" name="q" x-webkit-speech lang="zh-CN"
                           autocomplete="off">
                    <button>
                        <svg class="icon" style=" width: 21px; height: 21px; opacity: 0.5;" aria-hidden="true">
                            <use xlink:href="#icon-search"></use>
                        </svg>
                    </button>
                </form>
                <div id="word"></div>
            </div>
        </div>
        <div class="foot" style="height: 40px;">
            <a href="https://pi.dwxh.xyz:1025/" style="color: #777;">博客</a> |
            <a href="https://github.com/D-W-X/" style="color: #777;">Github</a><br>
            © 2021-<?php echo date("Y") ?> by <a href="https://pi.dwxh.xyz:1025/">dwxh</a> . All rights reserved.
        </div>
    </div>
    <script>
        WIDGET = {
            CONFIG: {
                "modules": "01423",
                "background": 5,
                "tmpColor": "4A4A4A",
                "tmpSize": "14",
                "cityColor": "4A4A4A",
                "citySize": "14",
                "aqiSize": "14",
                "weatherIconSize": "20",
                "alertIconSize": "16",
                "padding": "0px 0px 0px 0px",
                "shadow": "0",
                "language": "zh",
                "borderRadius": 5,
                "fixed": "true",
                "vertical": "middle",
                "horizontal": "center",
                "left": "15",
                "top": "15",
                "key": "b55ea4a09a984b2f981be734414e5b27"
            }
        }
        /*一言*/
        fetch('https://v1.hitokoto.cn/?c=a&c=b&c=c&c=d&c=h&c=i&c=k')
            .then(response => response.json())
            .then(data => {
                document.getElementById('hitokoto').innerText = data.hitokoto;
                if (data.from != null) {
                    document.getElementById('from').innerText = data.from_who == null ? " -- " + data.from : " -- " + data.from + ", " + data.from_who;
                }
            })
            .catch(console.error)
        /*随机bing背景*/
        fetch('./bg/')
            .then(response => response.json())
            .then(res => {
                document.body.style.background = "url(" + res[Math.floor(Math.random() * res.length)] + ") no-repeat center/cover";
            })
            .catch(console.error)
    </script>
    <!--
    作者:D.Young
    主页：https://blog.5iux.cn/
    github：https://github.com/5iux/sou
    日期：2020-11-23
    版权所有，请勿删除
    -->
</body>
</html>