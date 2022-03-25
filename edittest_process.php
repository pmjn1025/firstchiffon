<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";

$idx = $_GET['idx'];
$username = $_POST['id'];
// 비밀번호 주석처리이유 : 글쓸때 비밀번호가 hash처리 되어서 수정할때 비밀번호와 글작성시 비밀번호가 일치해야 하는데 또 수정시 비밀번호를 hash처리하면
// 비밀번호가 일치하지 않을것이다.
//$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');

// 여기서는 글작성시 db에 저장되어있던 해당 게시판 내용을 인덱스 값으로 불러온다.
$sql1 = mq("select * from boardposttest where idx='".$idx."'");
// 따라서 해당 컬럼(배열로 되어있는 값)을  $board로 변수로 받는다.
$board = $sql1->fetch_array();

$pwk = $_POST['pw'];
$bpw = $board['pw'];

//$sql = mq("update boardtest set id='".$username."',pw='".$userpw."',title='".$title."',content='".$content."' where idx='".$idx."'");


echo $idx;

if(password_verify($pwk, $bpw))	{
    $sql = mq("update boardposttest set id='".$username."',title='".$title."',content='".$content."',date='".$date."' where idx='".$idx."'");
?>

<script type="text/javascript">alert('수정되었습니다.'); location.replace("viewreplytest.php?idx=<?php echo $idx; ?>");</script>
<?php

	}else{ ?>
		<script type="text/javascript">alert('비밀번호가 틀립니다');history.back();</script>
	<?php } ?>

