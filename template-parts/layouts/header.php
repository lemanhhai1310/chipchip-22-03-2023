<?php $projectName = "Chipchip Landingpage"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
    <script src="js/jquery.parallax-scroll.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <div class="floating-shapes">
        <span uk-parallax='{"x": 50, "y": -20, "rotateZ":500}'>
            <img src="imgs/shape/Theme=3D-1.png" alt="">
        </span>
        <span uk-parallax='{"x": 250, "y": 150, "rotateZ":500}'>
            <img src="imgs/shape/Theme=3D-1-1.png" alt="">
        </span>
        <span uk-parallax='{"x": -180, "y": 80, "rotateY":2000}'>
            <img src="imgs/shape/Theme=3D-2-1.png" alt="">
        </span>
        <span uk-parallax='{"x": -20, "y": 380}'>
            <img src="imgs/shape/Theme=3D-3-1.png" alt="">
        </span>
        <span uk-parallax='{"x": 200, "y": 70}'>
            <img src="imgs/shape/shape5.png" alt="">
        </span>
        <span uk-parallax='{"x": 250, "y": 380, "rotateZ":1500}'>
            <img src="imgs/shape/shape6.png" alt="">
        </span>
    </div>