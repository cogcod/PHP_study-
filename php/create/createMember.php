<?php
    // connect 내용 가져오기 
    include "../connect/connect.php";

    $sql = "CREATE TABLE myMember (";
    $sql .= "memberID int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "youEmail varchar(40) NOT NULL,";
    $sql .= "youPass varchar(40) NOT NULL,";
    $sql .= "youName varchar(20) NOT NULL,";
    $sql .= "youBirth varchar (20) NOT NULL,";
    $sql .= "youPhone varchar (20) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,"; 
    $sql .= "PRIMARY KEY (memberID)) CHARSET=utf8";

    $result = $connect -> query($sql);

    if($result){
        echo "Create Table True";
    } else {
        echo "Create Table False";
    }
?>