<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form">
        <form action="php/login.php" method="POST">
            <h1>Вход</h1>
            <input type="text" placeholder="Логин" name="login" required>
            <input type="password" placeholder="пароль" name="password" required>
            <a href="index.php">Регистрация</a>
            <? if(isset($_GET['message'])): ?>
            <p><?= $_GET['message'] ?></p>
            <? endif; ?>
            <input type="submit" value="Войти">
        </form>
    </div>
</body>
</html>