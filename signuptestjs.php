<!DOCTYPE html>
<html>
<head>
    <!-- 로그인 참고 : https://data2030.tistory.com/67 -->
  <title>로그인</title>
  <meta charset="utf-8">
  
  
  
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

    <div class="words">-----------------------------SIGN UP------------------------------</div>

  <div class="login-form">
  <form action = "signuptest_process.php" method="POST">  
          <!-- name=은 php로 값넘기는것 id=이것은 javascript로 값넘기는 것. queryselecter로 받기위해서 그렇다.  -->
                <div>                   
                    <input type="text" name="id" id="id" class="text-field" placeholder="아이디">                                    
                    <span class="error_next_box"></span>
                </div>
                
                <div>
                    <input type="password" name="password" id="password" class="text-field" placeholder="비밀번호">   
                    <span class="error_next_box"></span>
                </div>
               
                <div>
                <input type="password" name="repassword" id="repassword" class="text-field" placeholder="비밀번호 확인">   
                <span class="error_next_box"></span>
                </div>

                <div>
                <input type="text" name="name" id="name" class="text-field" placeholder="이름">                                    
                <span class="error_next_box"></span>
                </div>     

                <div>
                <input type="text" name="email" id="email" class="text-field" placeholder="이메일">                                    
                <span class="error_next_box"></span>
                </div>  

      <input type="submit" value="Sign Up" class="submit-btn">   
    
</form>
    <div class="links">
    <a href="findid.php">아이디를 잊어버리셨나요? </a> <br>
      <a href="findpw.php">비밀번호를 잊어버리셨나요? </a>
      
    </div>
    </div>
      
    <div class="words">--------------------------------------------------------------------</div>
    <script src="testsignup.js"></script>  
</body>
</html>