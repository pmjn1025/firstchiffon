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
$category =$_POST['category'];
$title =$_POST['title'];
$price =$_POST['price'];
$description =$_POST['description'];
$size1 =$_POST['size'];
$size2 =$_POST['size1'];
$size3 =$_POST['size2'];
$color =$_POST['color'];
$color1 =$_POST['color1'];
$color2 =$_POST['color2'];


// 여기서는 글작성시 db에 저장되어있던 해당 게시판 내용을 인덱스 값으로 불러온다.
$sql1 = mq("select * from shopdatabottom where idx='".$idx."'");
// 따라서 해당 컬럼(배열로 되어있는 값)을  $board로 변수로 받는다.
$board = $sql1->fetch_array();


if($title !='' && $price !='' && $description !=''){
    $sql = mq("update shopdatabottom set category='".$category."',title='".$title."',description='".$description."',price='".$price."',size='".$size1."',size1='".$size2."',size2='".$size3."',color='".$color."',color1='".$color1."',color2='".$color2."' where idx='".$idx."'");
?>

<script type="text/javascript">alert('수정되었습니다.'); location.replace("shop_list_bottom.php?idx=<?php echo $idx; ?>");</script>
<?php

	}else{ ?>
		<script type="text/javascript">alert('수정오류입니다.');history.back();</script>
	<?php } ?>




