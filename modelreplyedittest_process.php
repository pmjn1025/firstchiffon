<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";
$rno = $_POST['rno'];//댓글번호
// 테이블이름 잘봐라 이건 댓글 테이블이다.!!!!
$sql = mq("select * from modelreplytest where idx='".$rno."'"); //reply테이블에서 idx가 rno변수( rno는 리플 idx번호)에 저장된 값을 찾음
$reply = $sql->fetch_array();

$bno = $_POST['b_no']; //게시글 번호
// boardtest table에서 boardposttest table로 바꿨다.
// 테이블이름 잘봐라 이건 게시판 테이블이다.!!!! 
$sql2 = mq("select * from modelposttest where idx='".$bno."'");//board테이블에서 idx가 bno변수( bno는 게시글 idx번호 즉 replytest의 con_num과 같다.)에 저장된 값을 찾음
$board = $sql2->fetch_array();

$pwk = $_POST['pw'];
$bpw = $reply['pw'];


if(password_verify($pwk, $bpw))	{
$sql3 = mq("update modelreplytest set content='".$_POST['content']."' where idx = '".$rno."'");//reply테이블의 idx가 rno변수에 저장된 값의 content를 선택해서 값 저장
?> 
<script type="text/javascript">alert('수정되었습니다.'); location.replace("modelviewreplytest.php?idx=<?php echo $bno; ?>");</script>
<?php

	}else{ ?>
		<script type="text/javascript">alert('비밀번호가 틀립니다');history.back();</script>
	<?php } ?>