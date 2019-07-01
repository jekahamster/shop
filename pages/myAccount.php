<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/myAccount.css">
    <link rel='stylesheet' href='../libs/header/header.css'>
    <link rel='stylesheet' href='../libs/footer/footer.css'>
    <link rel="stylesheet" href="../libs/mdl/icon.css">
    <link rel="stylesheet" href="../libs/mdl/material.indigo-pink.min.css">
    <script src="../libs/jquery/jquery-3.4.1.min.js"></script>
    <script src="script/myAccount.js"></script>
</head>
<body>
    <?php include("../libs/header/header.php"); getHeader("../");?>
    <main>
        <div id="container"> 
            <div id="person-card">
                <div id="avatar-block">
                    <img id="avatar" src="../img/persons/avatar.png">
                    <div id="add-layer">+</div>
                </div>
                <input type="text" id="first-name" value="Allen">
                <input type="text" id="last-name" value="Birfer">
                <button class="new-button" id="new-login">Сменить E-Mail</button>
                <button class="new-button"id="new-password">Сменить пароль</button>
                <button id="select">СОХРАНИТЬ</button>


                <div id="change-login">
                <div class="wrapper">
                    <input class="_input" type="text" id="old-login" placeholder="Старый E-Mail">
                    <input class="_input"type="text" id="new-login" placeholder="Новый E-Mail">
                    <input class="_input"type="password" id="password" placeholder="Пароль">
                    <div class="_button" id="login-send">ОТПРАВИТЬ</div>
                    <div class="_button go-back">ОТМЕНА</div>
                </div>
                </div>

                <div id="change-pass">
                <div class="wrapper">
                    <input class="_input" type="password" id="old-pass" placeholder="Старый пароль">
                    <input class="_input"type="password" id="new-pass" placeholder="Новый пароль">
                    <input class="_input"type="text" id="login" placeholder="Логин">
                    <div class="_button" id="pass-send">ОТПРАВИТЬ</div>
                    <div class="_button go-back">ОТМЕНА</div>
                </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("../libs/footer/footer.php"); ?>
</body>
</html>