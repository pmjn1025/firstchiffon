<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";

$email=$_POST['email'];
$name=$_POST['name'];

$sql = "SELECT id FROM signuptest WHERE email='$email' AND name='$name'";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
    
echo "아이디 : ". $row["id"]. "입니다.<br>";
}
}else{
echo "테이블에 데이터가 없습니다.";
}
//mysqli_close($conn); // 디비 접속 닫기
?>