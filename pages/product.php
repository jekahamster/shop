<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title> 
    <link rel='stylesheet' href='../libs/header/header.css'>
    <link rel='stylesheet' href='../libs/footer/footer.css'>
    <link rel="stylesheet" href="../libs/mdl/icon.css">
    <link rel="stylesheet" href="../libs/mdl/material.indigo-pink.min.css">
    <link rel='stylesheet' href="css/product.css">
    <script src="../libs/jquery/jquery-3.4.1.min.js"></script>
    <script src="../libs/jquery/jquery.cookie.min.js"></script>
    <script src="script/product.js"></script>
</head>
<body>
    <?php include("../libs/header/header.php"); ?>
    <div id="preheader"></div>
    <main>
        <div id="image-map">
            <div class="mini-img"><img src="../img/intro_img/1.jpg"></div>
            <div class="mini-img"><img src="../img/intro_img/2.jpg"></div>
            <div class="mini-img"><img src="../img/intro_img/3.jpg"></div>
        </div> 
        <div id="main-image">
            <img src="../img/intro_img/1.jpg">
        </div> 
        <div id="info-block">
            <div id="product-name">Name</div>
            <div id="product-bran">Brand</div>
            <div id="product-category">Category</div>
            <div id="product-season">Season</div>
            <div id="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil odit quas in soluta placeat illum. Facilis minus quo officiis impedit veniam. Atque sit repudiandae voluptatum quam nihil, non quisquam vel.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eveniet mollitia tempore earum quis magni possimus harum id debitis rerum omnis saepe, molestias ipsam dolor sequi sunt quam odit sed!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eveniet mollitia tempore earum quis magni possimus harum id debitis rerum omnis saepe, molestias ipsam dolor sequi sunt quam odit sed!
                
            </div>
            <hr>
            <span>Размер</span>
            <div id="size">
                <div class="size-block">34</div>
                <div class="size-block">36</div>
                <div class="size-block">38</div>
                <div class="size-block">40</div>
                <div class="size-block">42</div>
                <div class="size-block">44</div>
            </div>
            <hr>
            <span>Цвет</span>
            <div id="colour">
                <div class="colour-block red"></div>
                <div class="colour-block green"></div>
                <div class="colour-block blue"></div>
                <div class="colour-block yellow"></div>
                <div class="colour-block mistyrose"></div>
                <div class="colour-block coral"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block greenyellow"></div>
                <div class="colour-block mistyrose"></div>
                <div class="colour-block mistyrose"></div>
                <div class="colour-block mistyrose"></div>
                <div class="colour-block mistyrose"></div>
                <div class="colour-block mistyrose"></div>
                <div class="colour-block mistyrose"></div>
                <div class="colour-block mistyrose"></div>
                <div class="colour-block mistyrose"></div>
                <div class="colour-block mistyrose"></div>
                <div class="colour-block blue"></div>
                <div class="colour-block green"></div>
                <div class="colour-block green"></div>
                <div class="colour-block mistyrose"></div>
                <div class="colour-block mistyrose"></div>
            </div>
            <hr>
            <span>Объем</span>
            <div id="volume">
                <div class="volume-block">34</div>
                <div class="volume-block">36</div>
                <div class="volume-block">38</div>
                <div class="volume-block">40</div>
                <div class="volume-block">42</div>
                <div class="volume-block">44</div>
            </div>
            <div id="price">$99.99</div>
            <div id="button-block">
                <button id="select">В КОРЗИНУ</button>
            </div>
        </div> 
    </main>
    <?php include("../libs/footer/footer.php"); ?>
</body>
</html>