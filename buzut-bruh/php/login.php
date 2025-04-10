<?php
if(isset($_POST['login']) and isset($_POST['password'])){
    require '../db/db_connection.php';
    $res = $conn ->prepare("SELECT * FROM users WHERE login = ? and password = ?");
    $res ->execute(array($_POST['login'],$_POST['password']));
    $row = $res->fetch();
    if($row){
        session_start();
        $_SESSION['id'] = $row['id'];
    }else{
        header("Location:../loginin.php?message=Неправельный логин или пароль");
    }
}

?>