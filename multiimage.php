<?php
	include $_SERVER['DOCUMENT_ROOT']."/db.php"; /* db load */
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>다중이미지예제</h3>

<form action="multiimage_process.php" method="post" enctype="multipart/form-data">
<input type="file" name="fileToUpload[]" multiple='multiple'>
<input type="submit">
</form>
<iframe name="test"></iframe><br>

<?php
         $sql = mq("select * from image order by idx Desc"); 
         while($board = $sql->fetch_array())
         {
           //title변수에 DB에서 가져온 title을 선택
           $filename=$board["filename"];     
       ?>
    

<div>
<img width="30%" alt ="사진" onerror="this.style.display='none'" 
 src="./레터링 검정 티셔츠/<?php echo $board['filename'];?>"> 
</div>

<?php } ?>


</body>

</html>