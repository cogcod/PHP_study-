<?php
    $host = "localhost";
    $user = "seololol";
    $pass = "R59mKU#fB*swFsc";
    $db = "seololol";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");


    // 잘 접속했는지 확인하는 로직 
    if(mysqli_connect_errno()){
        echo "DATABASE connect False";
    }else{
        echo "DATABASE connect True";
    }
?> 