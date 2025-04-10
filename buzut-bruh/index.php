<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div>
        
    <form action="php/reg.php" method="POST">
    <h1>Регистрация</h1>
        <input type="text" name='login' placeholder="Логин">
        <input type="email" name='email' placeholder="Почта">
        <input type="tel" name='tel' placeholder="Телефон">
        <input type="password" name='password' placeholder="Пароль">
        <input type="password" name='Rep_password' placeholder="Повтор пароль">
        <? if (isset($_GET['message'])): ?>
        <p><?=$_GET['message']?></p>
    <? endif; ?>
        <select id="" name="role">
        <option value="1">организатор</option>
        <option value="2">посетитель</option>
        <option value="3">участник</option>
        </select>
        <a href="loginin.php">Войти</a>
        <input type="submit">
        
    </form>

    </div>

</body>
</html>