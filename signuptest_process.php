<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";
//MySQL연동 코드
 //$connect = mysqli_connect("localhost", "root", "nexen1942" , "signuptest");
 
 $email=$_POST['email'];
 $id=$_POST['id'];
 $name=$_POST['name'];
 $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 //$password=$_POST['password'];
 $password2=$_POST['repassword']; 
 
 
 
 //$result = mysqli_query($connect, $query); 이것을 함께 입력하니까 가입이 2개씩 된다.
 //$result = mysqli_query($connect, $query);

 //이메일 유효성 검사.
//  if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
//     echo "$email 은 올바른 이메일 주소입니다.<br>";
//  }else{ 
//     echo "$email 은 올바르지 않은 이메일 주소입니다.";
//     exit;
//  }

//이메일 중복검사.
$sql = "SELECT * FROM signuptest WHERE email = '{$email}'";
$res1 = $db->query($sql);
if($res1->num_rows >= 1){
    echo "<script>
    alert('이미 존재하는 이메일이 있습니다.');
    history.back();</script>";
    exit;
}

//아이디 중복검사.
$sql = "SELECT * FROM signuptest WHERE id = '{$id}'";
$res = $db->query($sql);
if($res->num_rows >= 1){
    echo "<script>
    alert('이미 존재하는 아이디가 있습니다.');
    history.back();</script>";
    exit;
}
//공백검사
if($email == '' || $id == '' || $password == '' || $password2 ==''){
    echo "<script>
    alert('회원가입 양식을 전부 입력해주세요.');
    history.back();</script>";
    exit;
}

//비밀번호 유효성 체크
// 시작 사이-> ^
// 그리고 끝-> $
// 문자열의 적어도 하나의 숫자가 있어야합니다-> (?=.*\d)
// 하나 이상의 문자-> (?=.*[A-Za-z])
// 숫자, 문자 또는 다음 중 하나 여야합니다.! @ # $ %-> [0-9A-Za-z!@#$%]
// 3-12 자 여야합니다-> {3,12}
// 또 예제는 !preg_match이거였다. 확인 잘하자.

// if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{3,12}$/', $password)) {
//     echo '적합한 비밀번호입니다.';
// }else{
//     echo '비밀번호는 영문, 숫자, 특수문자를 혼합하여 최소 3자리 ~ 최대 12자리 이내로 입력해주세요.';
//     exit;
// }

//위치 순서를 잘 이해하자 내가 한참 헤맨이유가 비밀번호 일치확인 밑에 유효성체크 코드를 입력했다
//자꾸 비밀번호가 오류가 나서 뭐가 잘못된지 몰랐다. 그런데 보니까 내가 비밀번호 일치하면 md5로 비밀번호를
//난수로 변하도록 했다. 즉 난수로 바뀐 비밀번호를 받아서 유효청 체크를 하니까 터무니 없이 오류가 난것이었다.
//비번일치위에 유효성체크를 하니까 깔끔하게 해결되었다. 


//비밀번호 일치하는지 확인 
 
// if($password !== $password2){
//     echo '비밀번호가 일치하지 않습니다.';
//     exit;
        
// }else{
//     $password = md5($password);
    
// }

//MySQL 쿼리문 입력 벨류에 ''이거만 붙였다.
$sql = "INSERT INTO signuptest (id,pwd,name,email) VALUES('$id','$password','$name','$email')";


//$result = mysqli_query($db, $sql);

if ($result === false) { // false가 나왔다면 무슨 에러인지 출력한다(29번 줄의  태그를 주석 쳐야 제대로 볼 수 있다)
   echo mysqli_error($db);
 }

if($db->query($sql)){
    echo "<script>
    alert('회원가입이 완료되었습니다.');
    location.href='signupcomplete.php';</script>";
    echo $password;    
    }else{
        echo 'fail to insert sql' .mysqli_connect_errno();
}


 
//  if($connect->query($query)){
//   echo 'success inserting';
//  }else{
//   echo 'fail to insert sql' .mysqli_connect_errno();
//  }
?>

