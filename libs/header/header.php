<!-- <link rel='stylesheet' type='text/css' media='screen' href='header.css'>
<link rel='stylesheet' href='../mdl/icon.css'>
<link rel='stylesheet' href='../mdl/material.indigo-pink.min.css'> -->
<?php

// prefix => root directory path
function getHeader($prefix) {

    echo "
<nav>
    <div id='logo-container'>
        <a href='/'>LOGO</a>
    </div> 
    <div id='menu-container'>
        <ul id='menu'>
            <li><a href='#'>Скидки</a></li>
            <li><a href='".$prefix."pages/products.php'>Ассортимент</a></li>
            <li><a href='".$prefix."pages/dressingRoom.php'>Примерочная</a></li>
        </ul>
    </div>
    <div id='info-container'>
        <div id='user-container'>
            <span id='user-name'>Jeka Golovko</span>
            <i class='material-icons'>account_circle</i>
        </div>
        <div id='find-container'>
            <i class='material-icons'>search</i>
        </div>
        <div id='basket-container'>
            <i class='material-icons'>shopping_basket</i>
            <div id='basket-indicator'>1</div>
        </div>
    </div>
</nav>
<div id='preheader'></div>
";
}
?>