<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel='stylesheet' href='../libs/header/header.css'>
    <link rel='stylesheet' href='../libs/footer/footer.css'>
    <link rel="stylesheet" href="../libs/mdl/icon.css">
    <link rel="stylesheet" href="../libs/mdl/material.indigo-pink.min.css">
</head>
<body>
    <?php include("../libs/header/header.php"); getHeader("../");?>
    <main>
        <div id="container"> 
            <div id="login-block">
                <div id="mode">Вход</div>
                <div id="login-fields">
                    <input type="text" id="login-field" placeholder="Логин...">
                    <input type="password" id="password-field" placeholder="Пароль...">
                    <button id="select">ВОЙТИ</button>
                </div>
                <div id="other">
                    <a href="register.php">Зарегистрироватся</a>
                </div>
            </div>
        </div>
    </main>
    <?php include("../libs/footer/footer.php"); ?>
</body>
</html>