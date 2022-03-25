<?php
// Start the session
session_start();
?>

<?php
//include 'include/session.php';
include $_SERVER['DOCUMENT_ROOT']."/db.php";


//POST로 받아온 아이다와 비밀번호가 비었다면 알림창을 띄우고 전 페이지로 돌아갑니다.
if($_POST["id"] == "" || $_POST["password"] == ""){
   echo '<script> alert("아이디나 패스워드 입력하세요"); history.back(); </script>';
   //echo $_POST["id"];
}else if($_POST["id"] != "" && $_POST["password"] != "" && $_POST["id"] == "admin"){ //관라자 로그인 조건 post로 전달 받은 값이 admin일 경우

//관리자 로그인 조건문
//password변수에 POST로 받아온 값을 저장하고 sql문으로 POST로 받아온 아이디값을 찾습니다.
$password = $_POST['password'];
$sql = mq("select * from signuptest where id='".$_POST['id']."'");
$member = $sql->fetch_array();
$hash_pw = $member['pwd']; //$hash_pw에 POSt로 받아온 아이디열의 비밀번호를 저장합니다. db query 문안에 입력되어있는 비밀번호는 pwd이다.

if(password_verify($password, $hash_pw)){ //만약 password변수와 hash_pw변수가 같다면 세션값을 저장하고 알림창을 띄운후 main.php파일로 넘어갑니다.

   $_SESSION['id'] = $member["id"];
   $_SESSION['password'] = $member["pwd"];

   echo "<script>alert('로그인되었습니다.'); location.href='homeadmin.php';</script>";
   echo $_SESSION['id'];   

}else{ // 비밀번호가 같지 않다면 알림창을 띄우고 전 페이지로 돌아갑니다
   echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
}  

}else{
//일반 로그인 조건문
//password변수에 POST로 받아온 값을 저장하고 sql문으로 POST로 받아온 아이디값을 찾습니다.
$password = $_POST['password'];
$sql = mq("select * from signuptest where id='".$_POST['id']."'");
$member = $sql->fetch_array();
$hash_pw = $member['pwd']; //$hash_pw에 POSt로 받아온 아이디열의 비밀번호를 저장합니다. db query 문안에 입력되어있는 비밀번호는 pwd이다.

if(password_verify($password, $hash_pw)){ //만약 password변수와 hash_pw변수가 같다면 세션값을 저장하고 알림창을 띄운후 main.php파일로 넘어갑니다.

   $_SESSION['id'] = $member["id"];
   $_SESSION['password'] = $member["pwd"];

   echo "<script>alert('로그인되었습니다.'); location.href='viewhomelogin.php';</script>";
   echo $_SESSION['id'];   

}else{ // 비밀번호가 같지 않다면 알림창을 띄우고 전 페이지로 돌아갑니다
   echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
}
}

//관리자 로그인











// //MySQL연동 코드
//  $connect = mysqli_connect("localhost", "root", "nexen1942" , "userinfo");

//  $id=$_POST['id'];
//  $password=$_POST['password'];
 
 
//  //MySQL 쿼리문 입력
//  //$query = "INSERT INTO signuptest (id,pwd,name,email) VALUES('$id','$password','$name','$email')";
 
//  $query="SELECT * FROM signuptest WHERE id='$id' AND pwd='$password'";
 
//  $result = mysqli_query($connect, $query);
// //if (mysqli_num_rows($result) > 0) 공부해보기.

//  if (mysqli_num_rows($result) > 0) {
//     while($row = mysqli_fetch_assoc($result)) {        
   
//     $_SESSION['userid'] = $row['id'];
//     echo $_SESSION['userid'].'님 안녕하세요<br>';
//     echo '<a href="./logouttest.php">로그아웃 하기</a><br>';    
//     echo "로그인 성공";

//     //지금 주소 id값은 post로 받아온거고 그 포스트가 전달받은 값을 입력해서 로케이션한다. 그러니까 로그인테스트에서 전달한 것을 post로 전달받고 값을 
//     //주소 id에 넣는것이다 그러니까 pmjn1025가 적혀서 로케이션된다. 즉 GET방식으로 값을 보내는거와 마찬가지일것같다.
//     header('Location: /homelogin.php?id='.$id);
//     }
//     }else{
//     echo "로그인 실패.";
//     }



 //if(($row['pwd']==$password && $row['id'] == $id) 
 //mysqli_close($conn); // 디비 접속 닫기

//  $result=$mysqli->query($query); 
//  if($result->num_rows==1){
//     $row = mysqli_fetch_assoc($result); //하나의 열을 배열로 가져오기
//      if($row['pwd']==$password){  //MYSQLI_ASSOC 필드명으로 첨자 가능
//          $_SESSION['id']=$id;           //로그인 성공 시 세션 변수 만들기
//          if(isset($_SESSION['id']))    //세션 변수가 참일 때
//          {
//              header('Location: ./home.php');   //로그인 성공 시 페이지 이동
//          }
//          else{
//              echo "세션 저장 실패";
//          }            
//      }
//      else{
//          echo "wrong id or pw";
//      }
//  }
//  else{
//      echo "wrong id or pw";
//  } 

?>