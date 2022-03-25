<?php

//설정시작

$uploads_dir='./uploads';

$allowed_ext=array('jpg','jpeg','png','gif');

$field_name='myfile';

//uploads디렉토리가없다면생성

if(!is_dir($uploads_dir)){

if(!mkdir($uploads_dir,0777))

{

die("업로드디렉토리생성에실패했습니다.");

};

}



if(!isset($_FILES[$field_name]))

{

die("업로드된파일이없습니다.");

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

caseUPLOAD_ERR_PARTIAL:

echo"파일이부분적으로첨부되었습니다.($error)";

break;

caseUPLOAD_ERR_NO_FILE:

echo"파일이첨부되지않았습니다.($error)";

break;

caseUPLOAD_ERR_NO_TMP_DIR:

echo"임시파일을저정할디렉토리가없습니다.($error)";

break;

caseUPLOAD_ERR_CANT_WRITE:

echo"임시파일을생성할수없습니다.($error)";

break;

caseUPLOAD_ERR_EXTENSION:

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



?>

<html>

<head>

<title>FileUpload</title>

</head>

<body>

  <h1>FileUploadExample</h1>

  <h2>파일정보</h2>

  <ul>

  <li>파일명:<?php echo $name;?></li>

  <li>확장자:<?php echo $ext;?></li>

  <li>파일형식:<?php echo $_FILES[$field_name]['type'];?></li>

  <li>파일크기:<?php echonumber_format($_FILES[$field_name]['size']);?>바이트</li>

  </ul>

  <a href="./file_download.php?file=<?php echo $name;?>">다운로드</a>

</body>

</html>