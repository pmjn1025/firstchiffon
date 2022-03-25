<?php
	include $_SERVER['DOCUMENT_ROOT']."/db.php";
	
	$idx = $_GET['idx'];
	$sql = mq("delete from blacktshirtsposttest where idx='$idx';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=blacktshirts.php" />