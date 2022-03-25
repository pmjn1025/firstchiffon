<!DOCTYPE html>
<html>
<head>
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
                color: white;

            }


      body {
  margin: 0;
  background-image:url('dog.jpg');
  background-size: 500px;
 
  

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
 
.login-form {
    width: 300px;
    background-color: #EEEFF1;
    margin-right: auto;
    margin-left: auto;
    margin-top: 50px;
    padding: 20px;
    padding-top : 30px;
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
  margin-bottom: 30px;
  color: white;
}
 
.links {
    text-align: center;
}
 
.links a {
  font-size: 12px;
  color: #9B9B9B;
}

.error_next_box {
    margin-top: 0px;
    font-size: 12px;
    color: red;    
    display: none;
}


      </style>
</head>
<body>
<div class="title"><a href="home.php">Chiffons</a></div>
<div class="subtitle">-change your everything-</div>

  <div class="login-form">
  <form action = "logintest_process.php" method="POST">
                <div>                   
                    <input type="text" name="id" id="id" class="text-field" placeholder="아이디">                                    
                    <span class="error_next_box"></span>
                </div>
                
                <div>
                    <input type="password" name="password" id="password" class="text-field" placeholder="비밀번호">   
                    <span class="error_next_box"></span>
                </div>
      <!-- <input type="checkbox" name="아이디저장" value="아이디저장">아이디저장    -->
      <input type="submit" value="로그인" class="submit-btn">
    
 
    <div class="links">
      <a href="findid.php">아이디 찾기 /  </a>
      <a href="findpw.php">비밀번호 찾기 / </a>
      <a href="signup.php">회원가입</a>
      
    </div>
  </div>
  <script src="testsignup.js"></script>
</body>
</html>