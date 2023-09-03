<?php
    $db_hostname = "sql12.freesqldatabase.com";
    $db_username = "sql12644195";
    $db_password = "mKrUWsQ1Rb";
    $db_name ="sql12644195";
    $conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if (!$conn){
        echo "connection failed" . mysqli_connect_error();
    }
?>