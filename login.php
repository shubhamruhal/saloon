<?php
    session_start();
    include 'common.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users where username = '$username' && password = '$password'";
    $res = mysqli_query($conn,$sql);
    if(!$res){
        header('location:index.html');
        die();
    }
    $row = mysqli_fetch_assoc($res);
    setcookie('name',$row['name'],time()+60*60*24*30);
    setcookie('username',$row['username'],time()+60*60*24*30);
    setcookie('mobile',$row['mobile'],time()+60*60*24*30);
    header('location:profile.php');
?>