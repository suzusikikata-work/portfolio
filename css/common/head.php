<!DOCTYPE html>
<html lang="ja">

<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# article: https://ogp.me/ns/article#">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=2.0,user-scalable=yes" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="google-site-verification" content="imJTc0_thW3G96JLZwiv8fWc1BOM8eeTHJi25md6sU0" />
  <?php

    $url = $_SERVER['REQUEST_URI'];

    $defaultTitle = 'SUZUSIKIKATA';
    
    $titleName = [
        '/' => $defaultTitle,
        '/about.php' => 'ABOUT｜' . $defaultTitle,
        '/picture.php' => 'PICTURE｜' . $defaultTitle,
        '/artwork.php' => 'ART WORK｜' . $defaultTitle,
        '/work.php' => 'PRODUCT WORKS｜' . $defaultTitle
    ];
    
    $titleTxt = $titleName[$url] ?? $defaultTitle;
    
    echo '<title>' . $titleTxt . '</title>';

    ?>
  <!-- og -->
  <meta property="og:title" content="SUZUSIKIKATA" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="suzusikikataのポートフォリオサイトです。広く浅くデザイン系のお仕事をしています。のんびりゆったり、写真を撮ったりアートワーク作品作ったりしています。" />
  <meta property="og:url" content="https://suzusikikata.work/" />
  <meta property="og:site_name" content="SUZUSIKIKATA" />
  <meta property="og:image" content="https://suzusikikata.work/img/og.jpg" />
  <!-- og -->

  <!-- favicon -->
  <meta name="msapplication-square70x70logo" content="https://suzusikikata.work/img/favicons/site-tile-70x70.png">
  <meta name="msapplication-square150x150logo" content="https://suzusikikata.work/img/favicons/site-tile-150x150.png">
  <meta name="msapplication-wide310x150logo" content="https://suzusikikata.work/img/favicons/site-tile-310x150.png">
  <meta name="msapplication-square310x310logo" content="https://suzusikikata.work/img/favicons/site-tile-310x310.png">
  <meta name="msapplication-TileColor" content="#0078d7">
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="https://suzusikikata.work/img/favicons/favicon.ico">
  <link rel="icon" type="image/vnd.microsoft.icon" href="https://suzusikikata.work/img/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="https://suzusikikata.work/img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="https://suzusikikata.work/img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="https://suzusikikata.work/img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="https://suzusikikata.work/img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="https://suzusikikata.work/img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="https://suzusikikata.work/img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="https://suzusikikata.work/img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="https://suzusikikata.work/img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="https://suzusikikata.work/img/favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="36x36" href="https://suzusikikata.work/img/favicons/android-chrome-36x36.png">
  <link rel="icon" type="image/png" sizes="48x48" href="https://suzusikikata.work/img/favicons/android-chrome-48x48.png">
  <link rel="icon" type="image/png" sizes="72x72" href="https://suzusikikata.work/img/favicons/android-chrome-72x72.png">
  <link rel="icon" type="image/png" sizes="96x96" href="https://suzusikikata.work/img/favicons/android-chrome-96x96.png">
  <link rel="icon" type="image/png" sizes="128x128" href="https://suzusikikata.work/img/favicons/android-chrome-128x128.png">
  <link rel="icon" type="image/png" sizes="144x144" href="https://suzusikikata.work/img/favicons/android-chrome-144x144.png">
  <link rel="icon" type="image/png" sizes="152x152" href="https://suzusikikata.work/img/favicons/android-chrome-152x152.png">
  <link rel="icon" type="image/png" sizes="192x192" href="https://suzusikikata.work/img/favicons/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="256x256" href="https://suzusikikata.work/img/favicons/android-chrome-256x256.png">
  <link rel="icon" type="image/png" sizes="384x384" href="https://suzusikikata.work/img/favicons/android-chrome-384x384.png">
  <link rel="icon" type="image/png" sizes="512x512" href="https://suzusikikata.work/img/favicons/android-chrome-512x512.png">
  <link rel="icon" type="image/png" sizes="36x36" href="https://suzusikikata.work/img/favicons/icon-36x36.png">
  <link rel="icon" type="image/png" sizes="48x48" href="https://suzusikikata.work/img/favicons/icon-48x48.png">
  <link rel="icon" type="image/png" sizes="72x72" href="https://suzusikikata.work/img/favicons/icon-72x72.png">
  <link rel="icon" type="image/png" sizes="96x96" href="https://suzusikikata.work/img/favicons/icon-96x96.png">
  <link rel="icon" type="image/png" sizes="128x128" href="https://suzusikikata.work/img/favicons/icon-128x128.png">
  <link rel="icon" type="image/png" sizes="144x144" href="https://suzusikikata.work/img/favicons/icon-144x144.png">
  <link rel="icon" type="image/png" sizes="152x152" href="https://suzusikikata.work/img/favicons/icon-152x152.png">
  <link rel="icon" type="image/png" sizes="160x160" href="https://suzusikikata.work/img/favicons/icon-160x160.png">
  <link rel="icon" type="image/png" sizes="192x192" href="https://suzusikikata.work/img/favicons/icon-192x192.png">
  <link rel="icon" type="image/png" sizes="196x196" href="https://suzusikikata.work/img/favicons/icon-196x196.png">
  <link rel="icon" type="image/png" sizes="256x256" href="https://suzusikikata.work/img/favicons/icon-256x256.png">
  <link rel="icon" type="image/png" sizes="384x384" href="https://suzusikikata.work/img/favicons/icon-384x384.png">
  <link rel="icon" type="image/png" sizes="512x512" href="https://suzusikikata.work/img/favicons/icon-512x512.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://suzusikikata.work/img/favicons/icon-16x16.png">
  <link rel="icon" type="image/png" sizes="24x24" href="https://suzusikikata.work/img/favicons/icon-24x24.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://suzusikikata.work/img/favicons/icon-32x32.png">
  <link rel="manifest" href="https://suzusikikata.work/img/favicons/manifest.json">
  <!-- favicon -->

  <!-- link -->
  <link rel="stylesheet" href="https://suzusikikata.work/css/normalize.css" />
  <link rel="stylesheet" href="https://suzusikikata.work/css/style.css" />
  <link rel="stylesheet" href="https://suzusikikata.work/css/lity.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- link -->

  <!-- script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://suzusikikata.work/js/common.js"></script>
  <script src="https://suzusikikata.work/js/lity.js"></script>
  <script src="https://suzusikikata.work/js/masonry.pkgd.min.js"></script>
  <script src="https://suzusikikata.work/js/cachebusting.js"></script>
  <script src="https://suzusikikata.work/js/csstimer.js"></script>
  <!-- <script src="./js/imagesloaded.pkgd.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138488856-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-138488856-1');
  </script>
</head>

<body>