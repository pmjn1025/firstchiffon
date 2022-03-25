<?php
    header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

	// localhost = DB주소, web=DB계정아이디, 1234=DB계정비밀번호, post_board="DB이름"
	$db = new mysqli("localhost","root","nexen1942","naver_editor"); 
    if(!$db){
        die("DB 연결 실패 ㅠㅠㅠㅠㅠ : " .mysqli_connect_error());
    }
    else{
        echo 'db_navereditor.php 연결 성공!';
    }
	$db->set_charset("utf8");

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>