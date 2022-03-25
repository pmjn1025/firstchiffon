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

$pname =$_POST['name'];
$comment =$_POST['comment'];
$price =$_POST['price'];
$memo =$_POST['memo'];


//이미지 업로드

//설정시작

$uploads_dir='./uploads';

$allowed_ext=array('jpg','jpeg','png','gif');
//앞의 input type file 키값
$field_name='img';

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
    if($pname !='' && $comment !='' && $price !='' && $memo !=''){
     
        //boardposttest테이블
     //$sql = "INSERT INTO modelposttest(id, pw, title, content, date, lock_post,file) VALUES('$username', '$userpw', '$title', '$content', '$date', '$lo_post', '$name');"; 
     $sql="insert into shopdata(name, comment, price, memo, img) values('$pname','$comment','$price','$memo','$name');";    
     $result = mysqli_query($db, $sql);
    
    if ($result === false) { // false가 나왔다면 무슨 에러인지 출력한다(29번 줄의  태그를 주석 쳐야 제대로 볼 수 있다)
        echo mysqli_error($db);
      }
        
         echo "<script>
         alert('상품등록이 완료되었습니다.');
         location.href='shop_list.php';</script>";
         echo $pname;
         echo $comment;
         echo $price;
         echo $memo;
         echo $img_name;
        
     }else{
         echo "<script>
         alert('상품정보를 모두 입력하셔야 됩니다.');
         history.back();</script>";
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
    
    if($pname !='' && $comment !='' && $price !='' && $memo !=''){
        
     //boardposttest테이블
     $sql="insert into shopdata(name, comment, price, memo, img) values('$pname','$comment','$price','$memo','$name');";
     $result = mysqli_query($db, $sql);
    
    if ($result === false) { // false가 나왔다면 무슨 에러인지 출력한다(29번 줄의  태그를 주석 쳐야 제대로 볼 수 있다)
        echo mysqli_error($db);
      }
        
         echo "<script>
         alert('상품등록이 완료되었습니다.');
         location.href='shop_list.php';</script>";
         echo $pname;
         echo $comment;
         echo $price;
         echo $memo;
         echo $img_name;
        
     }else{
         echo "<script>
         alert('상품정보를 모두 입력하셔야 됩니다.');
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

// 조회수 값이 문제였다. 디버깅을 해서 찾음. 운이 좋게 나와 같은 애러가 뜬사람이 있었음.
//아래 디버깅하는거 외우자.

if($pname !='' && $comment !='' && $price !='' && $memo !=''){
 
 $sql="insert into shopdata(name, comment, price, memo, img) values('$pname','$comment','$price','$memo','$name');";

 $result = mysqli_query($db, $sql);

if ($result === false) { // false가 나왔다면 무슨 에러인지 출력한다(29번 줄의  태그를 주석 쳐야 제대로 볼 수 있다)
    echo mysqli_error($db);
  }
    
     echo "<script>
     alert('상품등록이 완료되었습니다.');
     location.href='shop_list.php';</script>";
     echo $pname;
     echo $comment;
     echo $price;
     echo $memo;
     echo $img_name;
    
 }else{
     echo "<script>
     alert('상품정보를 모두 입력하셔야 됩니다.');
     history.back();</script>";
 }
?>