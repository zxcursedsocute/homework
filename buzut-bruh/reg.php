<?php
    if (!empty($_POST['login'])
        && !empty($_POST['email'])
        && !empty($_POST['tel'])
        && !empty($_POST['password'])
        && !empty($_POST['Rep_password'])
        && !empty($_POST['role'])){
            if ($_POST['password']==$_POST['Rep_password']){
            require_once '../db/db_connection.php';
            $res = $conn->prepare("SELECT * FROM users WHERE login = ?");
            $res->execute(array($_POST['login']));
            $res->fetch();
            if($res == false){
                $conn->prepare("INSERT INTO users (login, email, tel, password, role) VALUES (?, ?, ?, ?, ?)")->execute(array($_POST['login'],$_POST['email'],$_POST['tel'],$_POST['password'],$_POST['role']));
                header("Location:../index.php");
            }
        }else{
            header('location:../index.php?message=Введенные пароли не совпадают!');
        }
    }
?>
