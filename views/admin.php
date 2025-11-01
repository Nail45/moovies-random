<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ</title>
    <link rel="stylesheet" href="../assets/admin.css">
</head>
<body>

<div class="auth-container" id="authContainer">
    <h2>Вход для администратора</h2>
    <form action="/admin" method="post">
        <label for="adminPassword"></label>
        <input type="password" name="password" id="adminPassword" placeholder="Введите пароль"/>
        <button id="loginBtn">Войти</button>
    </form>
    <div class='<?php echo $errorFlag ? 'error' : 'good' ?>'>Пароль не верен</div>
</div>

</body>
</html>
