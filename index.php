<?php
    require_once './Core.php';
?>

<!DOCTYPE html>
<html lang="">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
        <title>SHIGERU or NIGHT ~ 夜かと思ったら松崎しげるだった ~</title>
        <meta charset="utf-8">
        <meta keyword="松崎しげる, 夜" />
        <meta name="description" content="SHIGERU or NIGHT ~ 夜かと思ったら松崎しげるだった ~" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta property="og:title" content="SHIGERU or NIGHT ~ 夜かと思ったら松崎しげるだった ~" />
        <meta property="og:description" content="SHIGERU or NIGHT ~ 夜かと思ったら松崎しげるだった ~" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://shigeru-or-night.com/" />
        <meta property="og:image" content="http://shigeru-or-night.com/img/ogp.png" />
        <meta property="og:locale" content="ja_JP" />
        <link rel="stylesheet" href="./css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/default.css">
        <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="./favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
        <link rel="manifest" href="./favicon/manifest.json">
    </head>
    <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4&appId=456977077797158";
          fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
        <center>
            <div class="container">
            <img class="title" width="300px" height="150px" src="./img/title.png" />
            <!--<p id="text">Startボタンを押してください</p>-->
            <p><div id="imgWrapper" width="300px" height="450px">
                <img width="300px" height="450px" id="questionImg0" src="./img/firstImg.png"/>
                <img style="display:none;" class="questionImg" id="questionImg1" src="./img/questionImg/question1.png"/>
                <img style="display:none;" class="questionImg" id="questionImg2" src="./img/questionImg/question2.png"/>
                <img style="display:none;" class="questionImg" id="questionImg3" src="./img/questionImg/question3.png"/>
                <img style="display:none;" class="questionImg" id="questionImg4" src="./img/questionImg/question4.png"/>
                <img style="display:none;" class="questionImg" id="questionImg5" src="./img/questionImg/question5.png"/>
            </div></p>
            <div id="buttonWrapper">
                <img class="Button" id="startButton" src="./img/startButton.png" width="300px" height="66px"/>
                <img style="display:none;" id="theAnswerIs" src="./img/theAnswerIs.png" width="300px" height="66px"/>
                <img style="display:none;" class="Button" id="nextButton" src="./img/nextButton.png" width="300px" height="66px"/>
                <img style="display:none;" class="ctlButton" id="nightButton" src="./img/nightButton.png" width="140px" height="66px"/>
                <img style="display:none;" class="ctlButton" id="shigeruButton" src="./img/shigeruButton.png" width="140px" height="66px"/>
                <img style="display:none;" class="Button" id="tweetButton" src="./img/tweetButton.png" width="300px" height="66px"/>
            </div>
            </div>
            <ul class="snsContainer">
                <li id="fbItem"><div class="fb-like" data-href="http://shigeru-or-night.com/" data-colorscheme="dark" data-ref="S" data-layout="button_count" data-share="false"></div></li>
                <li id="twitterItem"><a href="https://twitter.com/share" class="twitter-share-button" data-text="【SHIGERU or NIGHT | 夜かと思ったら松崎しげるだった】正解数は君の心のなかにある! http://twitter.com/daichi000daichi/status/640514950100684804/photo/1" data-lang="ja">ツイート</a></li>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                <li id="hatenaItem"><a href="http://b.hatena.ne.jp/entry/http://shigeru-or-night.com/" class="hatena-bookmark-button" data-hatena-bookmark-title="【SHIGERU or NIGHT | 夜かと思ったら松崎しげるだった】" data-hatena-bookmark-layout="standard-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></li>
            </ul>
            <font size="2">Copyright (C) <?php echo date("Y"); ?> <a href="https://twitter.com/intent/user?user_id=3310629558">だいち</a> & <a href=https://twitter.com/intent/user?user_id=1413010957"">くず</a> All rights reserved.</font>
        </center>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/main.js"></script>
    </body>
</html>
