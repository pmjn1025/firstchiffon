<?php
       //중요!!!!!!!: 세션을 시작하기 전에 항상 session_start를 해야한다. 즉 session과 관계있는 모든 곳에서 반드시 제일 위에 아래와 같이
//php 테그안에 session_start();를 선언하고 세션을 활용해야만한다.
// Start the session
session_start();


include $_SERVER['DOCUMENT_ROOT']."/db.php";

if(isset($_SESSION['id'])){
    
    echo "<h5>{$_SESSION['id']} 님 환영합니다.</h5>";

    }else{
    echo "<script>alert('로그인 해주세요.'); history.back();</script>";
} 

$idx = $_GET['idx'];
	$sql = mq("delete from shopdatanewrelease where idx='$idx';");
?>
<script type="text/javascript">
alert("삭제되었습니다.");
</script>
<meta http-equiv="refresh" content="0 url=shop_list_newrelease.php" />