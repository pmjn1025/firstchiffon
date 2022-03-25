<?php
//중요!!!!!!!: 세션을 시작하기 전에 항상 session_start를 해야한다. 즉 session과 관계있는 모든 곳에서 반드시 제일 위에 아래와 같이
//php 테그안에 session_start();를 선언하고 세션을 활용해야만한다.
// Start the session
session_start();
?>

<?php
// viewreplytest에서 넘어온거다.
	include $_SERVER['DOCUMENT_ROOT']."/db.php";

    if(isset($_SESSION['id'])){
    
        echo "<h2>{$_SESSION['id']} 님 환영합니다.</h2>";
    
        }else{
        echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
    } 

    $idx = $_GET['idx'];
    $idxpost = $_GET['idxpost'];
    $category = $_GET['category'];
    $id = $_POST['dat_user'];
    $userpw = password_hash($_POST['dat_pw'], PASSWORD_DEFAULT);
    $content = $_POST['content'];
    
    if($idx && $id && $userpw && $content){
        // 쿼리문을 항상 잘보자 idx는 생략가능하다. 따라서 웹페이지의 idx를 댓글 테이블에서 idx로 받아서 이것을 con_num으로 받아서 저장했다.
        // 웹페이지에서의 idx == 댓글 con_num이 된다.
        $sql = mq("insert into viewreply(con_num,idxpost,category,id,pw,content) values('$idx','$idxpost','$category','$id','$userpw','$content')");
        echo $idx;
        echo $id;
        echo $userpw;
        
        echo "<script>alert('댓글이 작성되었습니다.');        
        location.href='viewpagereplyouter.php?idx=$idx&&idxpost=$idxpost&&category=$category';</script>";
    }else{
        echo "<script>alert('댓글 작성에 실패했습니다.'); 
         history.back();</script>";
    }
	
?>