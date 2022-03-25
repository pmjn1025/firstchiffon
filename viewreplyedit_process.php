<?php
//중요!!!!!!!: 세션을 시작하기 전에 항상 session_start를 해야한다. 즉 session과 관계있는 모든 곳에서 반드시 제일 위에 아래와 같이
//php 테그안에 session_start();를 선언하고 세션을 활용해야만한다.
// Start the session
session_start();
?>


<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";

if(isset($_SESSION['id'])){
    
	echo "<h2>{$_SESSION['id']} 님 환영합니다.</h2>";

	}else{
	echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
} 


$idxpost=$_GET['idxpost'];
$category=$_GET['category'];
$rno = $_POST['rno'];//댓글번호
// 테이블이름 잘봐라 이건 댓글 테이블이다.!!!!
$sql = mq("select * from viewreply where idx='".$rno."' and idxpost='".$idxpost."' and category='".$category."'"); //reply테이블에서 idx가 rno변수( rno는 리플 idx번호)에 저장된 값을 찾음
$reply = $sql->fetch_array();

$bno = $_POST['b_no']; //게시글 번호
// boardtest table에서 boardposttest table로 바꿨다.
// 테이블이름 잘봐라 이건 게시판 테이블이다.!!!! 
$sql2 = mq("select * from viewpost where idx='".$bno."' and idxpost='".$idxpost."' and category='".$category."'");//board테이블에서 idx가 bno변수( bno는 게시글 idx번호 즉 replytest의 con_num과 같다.)에 저장된 값을 찾음
$board = $sql2->fetch_array();

$pwk = $_POST['pw'];
$bpw = $reply['pw'];


if($pwk !="" && $bpw !="")	{
$sql3 = mq("update viewreply set content='".$_POST['content']."' where idx = '".$rno."' and idxpost='".$idxpost."' and category='".$category."'");//reply테이블의 idx가 rno변수에 저장된 값의 content를 선택해서 값 저장
?> 
<script type="text/javascript">alert('수정되었습니다.'); location.replace("viewpagereply.php?idx=<?php echo $bno;?>&&idxpost=<?php echo $idxpost;?>&&category=<?php echo $category;?>");</script>
<?php

	}else{ ?>
		<script type="text/javascript">alert('수정오류가 발생했습니다.');history.back();</script>
	<?php } ?>