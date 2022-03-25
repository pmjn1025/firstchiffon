<?php

include $_SERVER['DOCUMENT_ROOT']."/db.php";

header("Content-Type: text/html; charset=UTF-8"); 
//파일이 저장될 경로

$target_dir = './exuploads/';

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

        $sql = "INSERT INTO image(filename) VALUES('$filename.$ext');";
        $result = mysqli_query($db, $sql);
        echo $filename.$ext;
        //echo $sql;        
        
}

//$result = mysqli_query($db, $sql);

if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
  } else {
    echo '성공했습니다. <a href="index.php">돌아가기</a>';
  }
?>