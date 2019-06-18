<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="img/" type="image/x-icon">
    <title>Shop</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link rel="stylesheet" href="libs/mdl/icon.css">
    <link rel="stylesheet" href="libs/mdl/material.indigo-pink.min.css">
    <link rel="stylesheet" href="libs/wow/animate.min.css">
    <link rel="stylesheet" href="libs/header/header.css">

    <script src="libs/jquery/jquery-3.4.1.min.js"></script>
    <script src="libs/wow/wow.min.js"></script>
    <script src='main.js'></script>
</head>
<body>
    <?php
        include("libs/header/header.php");
    ?>
    <main>
        <section id="video-container">
            <video src="img/video/intro.mp4" autoplay loop muted>
        </section>
        <section class="mini-intro" id="new-items">
            <div class="label">
                <span>Новинки</span>
            </div>
            <div class="img-container"> 
                <img src="img/intro_img/1.jpg" class="left-img wow fadeInLeft">
                <img src="img/intro_img/2.jpg" class="center-img wow fadeIn">
                <img src="img/intro_img/3.jpg" class="right-img wow fadeInRight">
            </div>
        </section>
        <section class="mini-intro" id="shops">
            <div class="label">
                <span>Наши магазины</span>
            </div>
            <div class="img-container"> 
                <img src="img/intro_img/4.jpg" class="left-img wow fadeInLeft">
                <img src="img/intro_img/5.jpg" class="center-img wow fadeInRight">
            </div>
        </section>
    </main>
    <footer>
        Some information
    </footer>
    <script>
        wow = new WOW({
            boxClass:     'wow',
            animateClass: 'animated',
            offset:       100,
            mobile:       true,
            live:         true,
        });
        wow.init();
    </script>
</body>
</html>