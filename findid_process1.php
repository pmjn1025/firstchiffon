<?php
$connect = mysqli_connect("localhost", "root", "nexen1942" , "signuptest");

$email=$_POST['email'];
//$name =$_POST['name'];
$query="SELECT id FROM signuptest WHERE email= '$email'";

// $result=mysql_query($query,$connect);
// $row=mysqli_fetch_assoc($result);
// if(!$row){
//    echo "'없는 ID입니다'";
//  }else{

//   echo "('회원님의 ID는 ".$row['id']." 입니다.')";

// }

if($connect->query($query)){
    echo '아이디는 .';
    echo $password;    
    }else{
        echo 'fail to insert sql' .mysqli_connect_errno();
}



?>