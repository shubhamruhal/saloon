<?php
    include 'common.php';
    $name = $_POST["name"];
    $user = $_POST["username"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $sql = "insert into users VALUES ('$name','$user','$mobile','$password')";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "registration unsuccess" . mysqli_error($conn);
    }
    else{
        echo "registration successfull";
        setcookie('name',$name,time()+60*60*24*30);
        setcookie('username',$user,time()+60*60*24*30);
        setcookie('mobile',$mobile,time()+60*60*24*30);
        header('location:profile.php');
    }
    mysqli_close($conn);

?>