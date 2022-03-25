<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php"; /* db load */
?>
<!-- view페이지에서 글을 삭제할때 뜨는 창 -->
<!-- 자바스크립트 jquery nod.js ajax공부하기 -->
<link rel="stylesheet" type="text/css" href="jquery-ui.css" />
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript">
	$(function(){
		$("#writepass").dialog({
		 	modal:true,
		 	title:'작성시 입력했던 비밀번호를 입력하세요.',
		 	width:400,
	 	});
	});
</script>
<?php

$idx = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
$sql = mq("select * from blueshirtsposttest where idx='".$idx."'"); /* 받아온 idx값을 선택 */
$board = $sql->fetch_array();

?>
<div id='writepass'>
	<form action="" method="post">
 		<p>비밀번호<input type="password" name="pw_chk" />
          <input type="submit" value="확인" /></p>
 	</form>
</div>
	 <?php
	 	$bpw = $board['pw'];

	 	if(isset($_POST['pw_chk'])) //만약 pw_chk POST값이 있다면
	 	{
	 		$pwk = $_POST['pw_chk']; // $pwk변수에 POST값으로 받은 pw_chk를 넣습니다.
			if(password_verify($pwk,$bpw)) //다시 if문으로 DB의 pw와 입력하여 받아온 bpw와 값이 같은지 비교를 하고
			{
				$pwk == $bpw;
			?>
				<script type="text/javascript">location.replace("blueshirtsdelete.php?idx=<?php echo $board["idx"]; ?>");</script><!-- pwk와 bpw값이 같으면 delete.php로 보내고 -->
			<?php 
			}else{ ?>
				<script type="text/javascript">location.replace("blueshirts.php");alert('비밀번호가 틀립니다');</script><!--- 아니면 비밀번호가 틀리다는 메시지를 보여줍니다 -->
			<?php } } ?>