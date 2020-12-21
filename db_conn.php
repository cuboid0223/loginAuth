<?php 
    $sname = "localhost";
    $uname = "cuboid";
    $password = "";
    $db_name = "test_login";
    $connect = mysqli_connect($sname, $uname, $password, $db_name);

    if(!$connect){
        echo "connection failed";
    }else{
        // echo "connection success";
    }
?>