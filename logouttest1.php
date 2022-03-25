<?php
    session_start();
    echo $_SESSION['userid'].'님 로그아웃 하겠습니다.';
 
    unset($_SESSION['userid']);
 
    if($_SESSION['userid'] == null){
        echo '로그아웃 완료 ';
    }
?>
