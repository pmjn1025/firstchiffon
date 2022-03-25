<?php
// viewreplytest에서 넘어온거다.
	include $_SERVER['DOCUMENT_ROOT']."/db.php";

    $idx = $_GET['idx'];
    $id = $_POST['dat_user'];
    $userpw = password_hash($_POST['dat_pw'], PASSWORD_DEFAULT);
    $content = $_POST['content'];
    
    if($idx && $id && $userpw && $content){
        // 쿼리문을 항상 잘보자 idx는 생략가능하다. 따라서 웹페이지의 idx를 댓글 테이블에서 idx로 받아서 이것을 con_num으로 받아서 저장했다.
        // 웹페이지에서의 idx == 댓글 con_num이 된다.
        $sql = mq("insert into modelreplytest(con_num,id,pw,content) values('$idx','$id','$userpw','$content')");
        echo $idx;
        echo $id;
        echo $userpw;
        
        echo "<script>alert('댓글이 작성되었습니다.');        
        location.href='modelviewreplytest.php?idx=$idx';</script>";
    }else{
        echo "<script>alert('댓글 작성에 실패했습니다.'); 
         history.back();</script>";
    }
	
?>