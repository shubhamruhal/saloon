<?php
    session_start();
    setcookie('name',$_COOKIE['name'],60);
    setcookie('username',$_COOKIE['username'],60);
    setcookie('mobile',$_COOKIE['mobile'],60);
    header('location:login.html');
    die();
?>