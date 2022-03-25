<?php
//중요!!!!!!!: 세션을 시작하기 전에 항상 session_start를 해야한다. 즉 session과 관계있는 모든 곳에서 반드시 제일 위에 아래와 같이
//php 테그안에 session_start();를 선언하고 세션을 활용해야만한다.
// Start the session
session_start();
?>

<?php

include $_SERVER['DOCUMENT_ROOT']."/db.php"; /* db load */

if(isset($_SESSION['id'])){
    
    echo "<h2>{$_SESSION['id']} 님 환영합니다.</h2>";

    }else{
    echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
} 

?>

<?php
$idxpost = $_GET['idxpost'];
$category = $_GET['category'];
$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
//boardtest에서 boardposttest로 바꿨다.
$sql = mq("select * from viewpost where idx='".$bno."' and idxpost='".$idxpost."' and category='".$category."'"); /* 받아온 idx값을 선택 */
$board = $sql->fetch_array();

?>
			<?php
                if(isset($_SESSION['id'])){ ?>

                <?php
                    if($_SESSION['id']== $board['id'] || $_SESSION['id'] =="admin"){ ?> 
                    
					<script type="text/javascript">location.replace("viewpagereplytop.php?idx=<?php echo $board["idx"]; ?>&&idxpost=<?php echo $idxpost;?>&&category=<?php echo $category;?>");</script><!-- pwk와 bpw값이 같으면 read.php로 보내고 -->

                     <?php } else { ?>

						<script type="text/javascript">location.replace("viewpagetoplogin.php?idx=<?php echo $idxpost;?>");alert('비밀글입니다.');</script><!--- 아니면 비밀번호가 틀리다는 메시지를 보여줍니다 -->

                     <?php } ?>
                  
                <?php  }else{ ?>
                   
                    <a href="accesserror.php?idx=<?php echo $board['idx']; ?>"></a>


                 <?php }?> 



