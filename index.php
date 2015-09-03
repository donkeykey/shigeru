<?php
    require_once './Core.php';
?>

<!DOCTYPE html>
<html lang="">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
        <title><?php echo Core::getTitle(); ?></title>
        <meta charset="utf-8">
        <meta keyword="松崎しげる" />
        <meta name="description" content="松崎しげるのゲームの説明" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta property="og:title" content="<?php echo Core::getTitle(); ?>" />
        <meta property="og:description" content="facebookに載せる説明文" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo Core::getUrl(); ?>" />
        <meta property="og:image" content="http://fukase-no-owari.net/resimg/ogp.png" />
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
    <div class="container">
        <center>
            <div class="container">
            <img class="title" width="300px" height="150px" src="./img/title.png" />
            <p id="text">Startボタンを押してください</p>
            <p><div id="imgWrapper" width="300px" height="450px"><img id="questionImg" src="./img/firstImg.png"/></div></p>
            <div id="buttonWrapper">
                <img class="Button" id="startButton" src="./img/startButton.png" width="300px" height="66px"/>
                <img style="display:none;" id="theAnswerIs" src="./img/theAnswerIs.png" width="300px" height="66px"/>
                <img style="display:none;" class="Button" id="nextButton" src="./img/nextButton.png" width="300px" height="66px"/>
                <img style="display:none;" class="ctlButton" id="nightButton" src="./img/nightButton.png" width="149px" height="66px"/>
                <img style="display:none;" class="ctlButton" id="shigeruButton" src="./img/shigeruButton.png" width="149px" height="66px"/>
                <img style="display:none;" class="Button" id="tweetButton" src="./img/tweetButton.png" width="300px" height="66px"/>
            </div>
            </div>
            Copyright (C) <?php echo date("Y"); ?> <a href="https://twitter.com/intent/user?user_id=3310629558">@daichi000daichi</a> <a href=https://twitter.com/intent/user?user_id=1413010957"">@kzhrknt</a> All rights reserved.
        </center>
    </div><!-- container -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/main.js"></script>
    </body>
</html>
