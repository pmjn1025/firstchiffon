<?php
//중요!!!!!!!: 세션을 시작하기 전에 항상 session_start를 해야한다. 즉 session과 관계있는 모든 곳에서 반드시 제일 위에 아래와 같이
//php 테그안에 session_start();를 선언하고 세션을 활용해야만한다.
// Start the session
session_start();
?>

<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";

if(isset($_SESSION['id'])){
    
	echo "<h5>{$_SESSION['id']} 님 환영합니다.</h5>";

	}else{
	echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
} 

$idx = $_GET['idx'];
$idxpost = $_GET['idxpost'];
$category = $_GET['category'];
$username = $_POST['id'];
// 비밀번호 주석처리이유 : 글쓸때 비밀번호가 hash처리 되어서 수정할때 비밀번호와 글작성시 비밀번호가 일치해야 하는데 또 수정시 비밀번호를 hash처리하면
// 비밀번호가 일치하지 않을것이다.
//$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');

// 여기서는 글작성시 db에 저장되어있던 해당 게시판 내용을 인덱스 값으로 불러온다.
$sql1 = mq("select * from viewpost where idx='".$idx."' and idxpost='".$idxpost."' and category='".$category."'");
// 따라서 해당 컬럼(배열로 되어있는 값)을  $board로 변수로 받는다.
$board = $sql1->fetch_array();

$pwk = $_POST['pw'];
$bpw = $board['pw'];

//$sql = mq("update boardtest set id='".$username."',pw='".$userpw."',title='".$title."',content='".$content."' where idx='".$idx."'");


echo $idx;
echo "<br>";
echo $pwk;
echo "<br>";
echo $bpw;





//	<!-- ===========================이미지 null일때========================================== -->


// 이미지 참고 다중이미지는 무조건 테이블을 따로 만들어서 관리하도록 하자.!!!

//이미지 업로드

//설정시작

$uploads_dir='./uploads';

$allowed_ext=array('jpg','jpeg','png','gif');

$field_name='myfile';


// myfile은 viewedit의 name이다. mysql 의 default값이 0이다 예상이다. 이거 찾는데 생각을 많이 했다.
// 왜 0이고 이미지가 들어갈때는 !=''일까??????? 
if($field_name == 0){


if($pwk !="" &&  $bpw !="")	{
    $sql = mq("update viewpost set id='".$username."',title='".$title."',content='".$content."',date='".$date."' where idx='".$idx."' and idxpost='".$idxpost."' and category='".$category."'");


?>

<script type="text/javascript">alert('수정되었습니다.'); location.replace("viewpagereplyouter.php?idx=<?php echo $idx; ?>&&idxpost=<?php echo $idxpost;?>&&category=<?php echo $category;?>");</script>
<?php

	}else{ ?>
		 <script type="text/javascript">alert('수정오류가 발생했습니다.');history.back();</script> 
	<?php } } ?> 
















	
	<!-- ===========================이미지 null이 아닐때========================================== -->




	<?php

		//이미지 업로드
		
		//설정시작
		
		$uploads_dir='./uploads';
		
		$allowed_ext=array('jpg','jpeg','png','gif');
		
		$field_name='myfile';

		if($field_name != ''){
		
		//uploads디렉토리가없다면생성
		
		if(!is_dir($uploads_dir)){
		
		if(!mkdir($uploads_dir,0777))
		
		{
		
		die("업로드디렉토리생성에실패했습니다.");
		
		};
		
		}
		
		
		// 
		 if(!isset($_FILES[$field_name])) {
			//업로드 하지 않아도 실행 되기 위해서 이오류가 뜰때 정상 처리되도록 코드입력.
			if($username && $userpw && $title && $content){
		
				// 앞으로 왠만하면 벨류 안에 들어가있는거 지금 내가쓴것처럼 쓰자.
				// boardtest테이블 
				// $sql = "INSERT INTO boardtest(id, pw, title, content, date, lock_post) VALUES('$username', '$userpw', '$title', '$content', '$date', '$lo_post');"; 
			
				//boardposttest테이블
				$sql = mq("update viewpost set id='".$username."',title='".$title."',content='".$content."',date='".$date."',file='".$name."' where idx='".$idx."' and idxpost='".$idxpost."' and category='".$category."'");
			
			
			
				//$sql = "INSERT INTO boardtest(id, pw, title, content, date) VALUES('".$_POST['id']."', '".$userpw."', '".$_POST['title']."', '".$_POST['content']."', '".$date."');"; 
			
				//mysql_query
				//1. MySQL 서버에 하나의 쿼리를 전송한다.
				//2. select, show 와 같이 레코드를 생성하는 쿼리는 그 리소스를 반환한다.
				//3. insert, update, delete 와 같이 결과 레코드가 없는 쿼리는 true, false 를 반환한다.
				// 참고 : https://link2me.tistory.com/1213 공부하자.
			
			 $result = mysqli_query($db, $sql);
			
			if ($result === false) { // false가 나왔다면 무슨 에러인지 출력한다(29번 줄의  태그를 주석 쳐야 제대로 볼 수 있다)
				echo mysqli_error($db);
			  }
				
				 echo "<script>
				 alert('수정 되었습니다.');
				 location.href='viewpagereplyouter.php?idx=$idxpost';</script>";
				 echo $userid;
				 echo $userpw;
				 echo $title;
				 echo $content;
				 echo $idxpost;
				 echo $category;
				
			 }else{
				 echo "<script>
				 alert('글쓰기에 실패했습니다.');
				 //history.back();</script>";
			 }
		
		 }
		
		//변수정리
		
		$error=$_FILES[$field_name]['error'];
		
		$name=$_FILES[$field_name]['name'];
		
		//오류확인
		
		if($error!=UPLOAD_ERR_OK){
		
		switch($error){
		
		case UPLOAD_ERR_INI_SIZE:
		
		case UPLOAD_ERR_FORM_SIZE:
		
		echo"파일이너무큽니다.($error)";
		
		break;
		
		case UPLOAD_ERR_PARTIAL:
		
		echo"파일이부분적으로첨부되었습니다.($error)";
		
		break;
		
		case UPLOAD_ERR_NO_FILE:
			
			//업로드 하지 않아도 실행 되기 위해서 이오류가 뜰때 정상 처리되도록 코드입력.
			
			if($username && $userpw && $title && $content){
		
				// 앞으로 왠만하면 벨류 안에 들어가있는거 지금 내가쓴것처럼 쓰자.
				// boardtest테이블 
				// $sql = "INSERT INTO boardtest(id, pw, title, content, date, lock_post) VALUES('$username', '$userpw', '$title', '$content', '$date', '$lo_post');"; 
			
				//boardposttest테이블
				$sql = mq("update viewpost set id='".$username."',title='".$title."',content='".$content."',date='".$date."',file='".$name."' where idx='".$idx."' and idxpost='".$idxpost."' and category='".$category."'");
			
			
			
				//$sql = "INSERT INTO boardtest(id, pw, title, content, date) VALUES('".$_POST['id']."', '".$userpw."', '".$_POST['title']."', '".$_POST['content']."', '".$date."');"; 
			
				//mysql_query
				//1. MySQL 서버에 하나의 쿼리를 전송한다.
				//2. select, show 와 같이 레코드를 생성하는 쿼리는 그 리소스를 반환한다.
				//3. insert, update, delete 와 같이 결과 레코드가 없는 쿼리는 true, false 를 반환한다.
				// 참고 : https://link2me.tistory.com/1213 공부하자.
			
			 $result = mysqli_query($db, $sql);
			
			if ($result === false) { // false가 나왔다면 무슨 에러인지 출력한다(29번 줄의  태그를 주석 쳐야 제대로 볼 수 있다)
				echo mysqli_error($db);
			  }
				
				 echo "<script>
				 alert('수정 되었습니다.');
				 location.href='viewpagereplyouter.php?idx=$idxpost';</script>";
				 echo $userid;
				 echo $userpw;
				 echo $title;
				 echo $content;
				 echo $idxpost;
				 echo $category;
				
			 }else{
				 echo "<script>
				 alert('글쓰기에 실패했습니다.');
				 history.back();</script>";
			 }
		
		break;
		
		case UPLOAD_ERR_NO_TMP_DIR:
		
		echo"임시파일을저정할디렉토리가없습니다.($error)";
		
		break;
		
		case UPLOAD_ERR_CANT_WRITE:
		
		echo"임시파일을생성할수없습니다.($error)";
		
		break;
		
		case UPLOAD_ERR_EXTENSION:
		
		echo"업로드불가능한파일이첨부되었습니다.($error)";
		
		break;
		
		default:
		
		echo"파일이제대로업로드되지않았습니다.($error)";
		
		}
		
		exit;
		
		}
		
		
		
		$upload_file=$uploads_dir.'/'.$name;//저장될디렉토리및파일명
		
		$fileinfo=pathinfo($upload_file);//첨부파일의정보를가져옴
		
		$ext=strtolower($fileinfo['extension']);
		
		$i=1;
		
		while(is_file($upload_file))
		
		{
		
		$name=$fileinfo['filename']."-{$i}.".$fileinfo['extension'];
		
		$upload_file=$uploads_dir.'/'.$name;
		
		$i++;
		
		}
		
		
		if(!in_array($ext,$allowed_ext)){//확장자확인
		
		echo"허용되지않는확장자입니다.";
		
		exit;
		
		}
		
		
		if(!move_uploaded_file($_FILES[$field_name]['tmp_name'],$upload_file)){//파일이동
		
		echo"파일이업로드되지않았습니다.";
		
		exit;
		
		}
		
		
		
		if($pwk !="" &&  $bpw !="")	{
			$sql = mq("update viewpost set id='".$username."',title='".$title."',content='".$content."',date='".$date."',file='".$name."' where idx='".$idx."' and idxpost='".$idxpost."' and category='".$category."'");
		
		
		?>
		
		<script type="text/javascript">alert('수정되었습니다.'); location.replace("viewpagereplyouter.php?idx=<?php echo $idx; ?>&&idxpost=<?php echo $idxpost;?>&&category=<?php echo $category;?>");</script>
		<?php
		
			}else{ ?>
				 <script type="text/javascript">alert('수정오류가 발생했습니다.');history.back();</script> 
			<?php } } ?> 