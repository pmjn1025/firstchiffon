<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";
$rno = $_POST['rno']; 
$sql = mq("select * from blueshirtsreplytest where idx='".$rno."'");//reply테이블에서 idx가 rno변수에 저장된 값을 찾음
$reply = $sql->fetch_array();

$bno = $_POST['b_no'];
// boardtest table에서 boardposttest로 바꿨다.
$sql2 = mq("select * from blueshirtsposttest where idx='".$bno."'");//board테이블에서 idx가 bno변수에 저장된 값을 찾음
$board = $sql2->fetch_array();

$pwk = $_POST['pw'];
$bpw = $reply['pw'];

if(password_verify($pwk, $bpw))	{

	$sql = mq("delete from blueshirtsreplytest where idx='".$rno."'"); ?>
<script type="text/javascript">
alert('댓글이 삭제되었습니다.');
location.replace("blueshirtsviewreplytest.php?idx=<?php echo $board["idx"]; ?>");
</script>
<?php

	}else{ ?>
<script type="text/javascript">
alert('비밀번호가 틀립니다');
history.back();
</script>
<?php } ?>