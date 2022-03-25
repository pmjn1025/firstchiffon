<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";

$email=$_POST['email'];
$id=$_POST['id'];
$name=$_POST['name'];

$sql = "SELECT pwd FROM signuptest WHERE email='$email' AND id='$id' AND name='$name'";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
    
echo "비밀번호 : ". $row["pwd"]. "입니다.<br>";
}
}else{
echo "테이블에 데이터가 없습니다.";
}
//mysqli_close($conn); // 디비 접속 닫기
?>