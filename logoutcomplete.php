<?php
// Start the session
session_start();
?>

<?php
    include $_SERVER['DOCUMENT_ROOT']."/db.php";
    echo $_SESSION['id'].'님 로그아웃 하겠습니다.';
    session_destroy();

    // session_start();
    // echo $_SESSION['userid'].'님 로그아웃 하겠습니다.';
 
    // unset($_SESSION['userid']);
 
    // if($_SESSION['userid'] == null){
    //     echo '로그아웃 완료 ';
    // }
?>
<meta charset="utf-8">
<!-- <script>alert("로그아웃되었습니다."); location.href="home.php"; </script> -->


<!DOCTYPE html>
<html>
<head>
    <!-- 로그인 참고 : https://data2030.tistory.com/67 -->
  <title>로그인</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/earlyaccess/notosanskr.css" rel="stylesheet">
  
  <!-- title 폰트 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
        <!-- href 폰트?? -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Allura&display=swap" rel="stylesheet">
        <!-- words 폰트 -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abel&family=Abril+Fatface&family=Alex+Brush&display=swap" rel="stylesheet">
        <!-- words 폰트 1-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">

  <style>
              /* <!-- title 폰트 --> */
@import url('https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap');
/* <!-- href  폰트 --> */
@import url('https://fonts.googleapis.com/css2?family=Alex+Brush&family=Allura&display=swap');
/* words 폰트 */    
@import url('https://fonts.googleapis.com/css2?family=Abel&family=Abril+Fatface&family=Alex+Brush&display=swap');
/* words1 폰트 */    
@import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');    
a {    
    text-decoration: none;
    /* 이거 쓰면 컬러 기본값인 검은색으로 변한다. */
    color: inherit;       
}

a:hover{
                color: red;

            }


      body {
  margin: 0;
  background-image:url('praha.jpg');
  /* background-color: #1BBC9B; */
  /* background-size: cover == object-fit:cover */
  background-size: cover
}

.title {
    text-decoration: none;
    color:black;    
    font-size: 55px;
    text-align: center;
    margin-top: 5px;    
    margin-bottom:5px;
    padding: 0px;
    /*타이틀 폰트 font-family: 'Alex Brush', cursive; */
    font-family: 'Alex Brush';
    letter-spacing:12px
    
}

.subtitle { 
    color:black;
    display: block;
    text-decoration: none;
    font-size: 25px;
    font-family: 'Shadows Into Light';
    text-align: center;    
    margin:0;
    padding-bottom: 10px;  
    line-height: 1;
}

.words{  
    color:black; 
    font-size: 40px;
    /*font-family: 'Abril Fatface', cursive; */
    /* font-family: 'Shadows Into Light', cursive; */
    font-family: 'Shadows Into Light'; 
    padding-top : 20px;
    padding-bottom : 10px;
    text-align: center;
    
    
}

.words1{  
    color:#0000FF; 
    font-size: 60px;
    /*font-family: 'Abril Fatface', cursive; */
    /* font-family: 'Shadows Into Light', cursive; */
    font-family: 'Shadows Into Light'; 
    padding-top : 20px;
    padding-bottom : 10px;
    text-align: center;
    
    
}

 
.login-form {
    width: 300px;
    background-color: #EEEFF1;
    margin-right: auto;
    margin-left: auto;
    margin-top: 30px;    
    padding: 20px;
    text-align: center;
    border: none;
    
}
 
.text-field {
      font-size: 14px;
      padding: 10px;
      border: none;
      width: 260px;
      margin-bottom: 10px;
 
}
 
.submit-btn {
  font-size: 14px;
  border: none;
  padding: 10px;
  width: 260px;
  background-color: #1BBC9B;
  margin-bottom: 10px;
  color: white;
}
 
.links {
    text-align: center;
}
 
.links a {
  font-size: 12px;
  color: #9B9B9B;
}




  </style>
</head>
<body>
<div class="title"><a href="home.php">Chiffons</a></div>
    <div class="subtitle">-change your everything-</div>
    <br>
    <br>
    <div class="words">-------------------------Logout Comlplete!------------------------</div>
    <br>
    <br>
    <div class="words1"><a href="viewhome.php">Thank You For Visit Chiffon!</a></div>
    <div></div>
    
    <br>
    <br>
    <div class="words">--------------------------------------------------------------------</div>
</body>
</html>