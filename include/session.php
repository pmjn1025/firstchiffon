<?php

  session_start();
  if( isset( $_SESSION[ 'id' ] ) ) {
    $jb_login = TRUE;

    echo "<h2>{$_SESSION['id']} 님 환영합니다.</h2>";
  }else{
		//echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
    echo $_SESSION['id'];
	} 
?>