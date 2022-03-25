<?php
    $host = 'localhost';
    $user = 'root';
    $password = 'nexen1942';
    $database = 'testdb';

    $db = mysqli_connect($host, $user, $password, $database);
    if(!$db){
        die("DB 연결 실패 : " .mysqli_connect_error());
    }
    else{
        echo '연결 성공';
    }
?>
