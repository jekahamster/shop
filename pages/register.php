<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel='stylesheet' href='../libs/header/header.css'>
    <link rel='stylesheet' href='../libs/footer/footer.css'>
    <link rel="stylesheet" href="../libs/mdl/icon.css">
    <link rel="stylesheet" href="../libs/mdl/material.indigo-pink.min.css">
</head>
<body>
    <?php include("../libs/header/header.php"); getHeader("../");?>
    <main>
        <div id="container"> 
            <div id="register-block">
                <div id="mode">Регистрация</div>
                <div id="register-fields">
                    <input type="text" id="first-name-field" placeholder="Имя...">
                    <input type="text" id="last-name-field" placeholder="Фамилия...">
                    <input type="text" id="login-field" placeholder="Почта...">
                    <input type="password" id="password-field" placeholder="Пароль...">
                    <input type="password2" id="password-field" placeholder="Повторный пароль...">
                    <button id="select">ЗАРЕГИСТРИРОВАТЬСЯ</button>
                </div>
                <div id="other">
                    <a href="login.php">Войти</a>
                </div>
            </div>
        </div>
    </main>
    <?php include("../libs/footer/footer.php"); ?>
</body>
</html>