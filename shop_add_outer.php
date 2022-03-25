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
$category =$_POST['category'];
$title =$_POST['title'];
$subtitle =$_POST['subtitle'];
$price =$_POST['price'];
$description =$_POST['description'];
$size1 =$_POST['size'];
$size2 =$_POST['size1'];
$size3 =$_POST['size2'];
$color1 =$_POST['color'];
$color2 =$_POST['color1'];
$color3 =$_POST['color2'];



//이미지 업로드

//설정시작

$uploads_dir='./'.$subtitle.''; 

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
    if($title !='' && $subtitle !='' && $price !='' && $description !=''){
     
        //boardposttest테이블
     //$sql = "INSERT INTO modelposttest(id, pw, title, content, date, lock_post,file) VALUES('$username', '$userpw', '$title', '$content', '$date', '$lo_post', '$name');"; 
     $sql="insert into shopdataouter(category, title, subtitle, price, description, img, size, size1, size2, color, color1, color2) values('$category','$title','$subtitle','$price','$description','$name','$size1','$size2','$size3','$color','$color1','$color2');";    
     $result = mysqli_query($db, $sql);
    
    
        
         echo "<script>
         alert('상품등록이 완료되었습니다.');
         location.href='shop_list_outer.php';</script>";
         echo $title;
         echo $subtitle;
         echo $price;
         echo $description;
         echo $name;
        
     }else{

        if ($result === false) { // false가 나왔다면 무슨 에러인지 출력한다(29번 줄의  태그를 주석 쳐야 제대로 볼 수 있다)
            echo mysqli_error($db);
          }
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
    
    if($title !='' && $subtitle !='' && $price !='' && $description !=''){
        
     //boardposttest테이블
     $sql="insert into shopdataouter(category, title, subtitle, price, description, img, size, size1, size2, color, color1, color2) values('$category','$title','$subtitle','$price','$description','$name','$size1','$size2','$size3','$color','$color1','$color2');";    
     $result = mysqli_query($db, $sql);
    
    
        
         echo "<script>
         alert('상품등록이 완료되었습니다.');
         location.href='shop_list_outer.php';</script>";
         echo $pname;
         echo $comment;
         echo $price;
         echo $memo;
         echo $img_name;
        
     }else{
        if ($result === false) { // false가 나왔다면 무슨 에러인지 출력한다(29번 줄의  태그를 주석 쳐야 제대로 볼 수 있다)
            echo mysqli_error($db);
          }
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



// ===================================================================================

header("Content-Type: text/html; charset=UTF-8"); 
//파일이 저장될 경로

// 문자열 안에 변수를 문자로 받고 싶을때 '.변수명.'을 쓰면 된다.
$target_dir = './'.$subtitle.'/';


// $field_name='fileToUpload[]';
// // $name=$_FILES[$field_name]['name'];
// $name=$_FILES[$field_name];



// $upload_file=$target_dir.'/'.$name;

// echo $upload_file;
// echo $name;

if(!is_dir($target_dir)){

    if(!mkdir($target_dir,0777))
    
    {
    
    die("업로드디렉토리생성에실패했습니다.");
    
    };
    
    }
    //==============================================
    // $uploads_dir='./uploads';

    // $field_name='myfile';

    // $name=$_FILES[$field_name]['name'];
    
    // $upload_file=$uploads_dir.'/'.$name;//저장될디렉토리및파일명


    // $i=1;

    // while(is_file($upload_file))

    // {

    // $name=$fileinfo['filename']."-{$i}.".$fileinfo['extension'];

    // $upload_file=$uploads_dir.'/'.$name;

    // $i++;

    // }

    //==============================================
    

//업로드한 파일의 총 수를 구한다.
$total = count($_FILES["fileToUpload"]["name"]);

//업로드된 파일 수만큼 반복문을 진행한다.
for( $i=0 ; $i < $total ; $i++ ) { 
    
        //파일이 저장될 경로 및 확장자명이 포함된 파일 이름을 저장한다. 예) D:/test.txt
        $target_file = $target_dir. basename($_FILES["fileToUpload"]["name"][$i]);;
        
        //파일의 확장자명을 저장한다. 
        //strtolower를 사용하면 소문자로만 저장. strtoupper를 사용하면 대문자로만 저장.
        $ext = pathinfo($target_file,PATHINFO_EXTENSION);
        
        //파일의 이름을 저장한다.
        //확장자가 대문자인데, $ext에 담긴 확장자는 소문자라면 확장자가 제거 되지 않은 이름이 저장되게 된다.
        $filename = basename($target_file,".$ext");
        
        //중복된 파일이 존재할 경우 1을 붙여줄 것이다. 예)D:/test(1).txt
        $num = 1;
        //같은 확장자 및 같은 이름을 지닌 파일이 이미 존재할경우
        if (file_exists($target_file)) {
            //같은 확장자 및 같은 이름을 지닌 파일이 없을때까지 반복
            while(file_exists($target_file)) {
                //같은 이름의 파일이 있다면 파일명을 변경해준다. 예) test에서 test(1)로 여기서 1은 $num에 저장된 값
                $filename2 = $filename."($num)";
                //변경한 파일명을 저장해준다. 예) D:/test.txt 에서 D:/test(1).txt 로
                $target_file = $target_dir.$filename2.".$ext";
                //같은 이름의 파일이 존재하는한 num은 1씩 증가하며, 파일의 이름을 변경해주는데 쓰인다.
                $num++; 
            }
        }
        //f(!move_uploaded_file($_FILES[$field_name]['tmp_name'],$upload_file)
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
            //파일이 업로드에 성공하였을 때
            $size = filesize($target_file);
            if ($size > pow(1024,3)) {
                $size = round($size/(pow(1024,3)),2)."GB";
            }
            if ($size > pow(1024,2)) {
                $size = round($size/(pow(1024,2)),2)."MB";
            }
            if ($size > pow(1024,1)) {
                $size = round($size/(pow(1024,1)),2)."KB";
            }
            echo "다운로드 : <a href='download.php?filepath=".$target_file."&filename=".$filename.".$ext'>".$filename.".$ext"."</a> (".$size.")<br>";
        } 
        else {
            //파일 업로드에 실패하였을 때
            echo "업로드를 실패하였습니다.<br>";
        }

        $sql1 = "INSERT INTO image(filename) VALUES('$filename.$ext');";
        $result1 = mysqli_query($db, $sql1);
        echo $filename.$ext;
        //echo $sql;        
        
}

//$result1 = mysqli_query($db, $sql1);

 if($result1 === false){
     echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
     error_log(mysqli_error($db));
} else {
     echo '성공했습니다. <a href="index.php">돌아가기</a>';
   }

  if($title !='' && $subtitle !='' && $price !='' && $description !=''){
 
    $sql="insert into shopdataouter(category, title, subtitle, price, description, img, size, size1, size2, color, color1, color2) values('$category','$title','$subtitle','$price','$description','$name','$size1','$size2','$size3','$color','$color1','$color2');";    
   
    $result = mysqli_query($db, $sql);
   
   
       
        echo "<script>
        alert('상품등록이 완료되었습니다.');
        location.href='shop_list_outer.php';</script>";
        echo $pname;
        echo $comment;
        echo $price;
        echo $memo;
        echo $img_name;
       
    }else{
        if ($result === false) { // false가 나왔다면 무슨 에러인지 출력한다(29번 줄의  태그를 주석 쳐야 제대로 볼 수 있다)
            echo mysqli_error($db);
          }
        echo "<script>
        alert('상품정보를 모두 입력하셔야 됩니다.');
        history.back();</script>";
    }




?>