<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel='stylesheet' href='../libs/header/header.css'>
    <link rel='stylesheet' href='../libs/footer/footer.css'>
    <link rel='stylesheet' href='../libs/mdl2/material.css'>
    <link rel="stylesheet" href="../libs/mdl/icon.css">
    <link rel="stylesheet" href="../libs/mdl/material.indigo-pink.min.css">
    <link rel="stylesheet" href="../libs/wow/animate.min.css">
    <link rel='stylesheet' href="css/products.css">

    <script src="../libs/jquery/jquery-3.4.1.min.js"></script>
    <script src="../libs/jquery/jquery.cookie.min.js"></script>
    <script src="../libs/wow/wow.min.js"></script>
    <script src="script/products.js"></script>
</head>
<body>
    <?php include("../libs/header/header.php"); ?>
    <div id="preheader"></div>
    
    <main>
        <div id="filter-line">
            <div id="filter-button">
                <i class="material-icons">filter_list</i>
            </div>
        </div>

        <div id="cards-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/intro_img/1.jpg">
                </div>
                <div class="name-container">
                    <span class="name-block">Product name</span>
                </div>
                <div class="info-container">
                    <div class="price-block">$99.99</div>
                    <div class="colours-block">
                        <div class="red"></div>
                        <div class="blue"></div>
                        <div class="green"></div>
                        <div class="yellow"></div>
                        <div class="aqua"></div>
                    </div>
                </div>
            </div>
        </div>    
    </main>
    <div id="left-menu">
        <span>Сортировка</span>
        <div class="sort-block">
            <ul>
                <span class="sort-name">1</span>
                <li class="sort-categories">
                    <label class='material-checkbox'>
                        <input type='checkbox'>
                        <span></span>
                        2
                    </label>
                </li>
            </ul>
        </div>
    </div>
    <div id="overlay"></div>
    
    <?php include("../libs/footer/footer.php"); ?>
</body>
</html>
