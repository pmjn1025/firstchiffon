<?php
//중요!!!!!!!: 세션을 시작하기 전에 항상 session_start를 해야한다. 즉 session과 관계있는 모든 곳에서 반드시 제일 위에 아래와 같이
//php 테그안에 session_start();를 선언하고 세션을 활용해야만한다.
// Start the session
session_start();
?>

<?php 

include $_SERVER['DOCUMENT_ROOT']."/db.php";


if(isset($_SESSION['id'])){
    
    echo "<h2>{$_SESSION['id']} 님 환영합니다.</h2>";
    echo $_SESSION['password'];

    }else{
    echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
} 

?>


<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>

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


    <!-- 참조하는 곳 잘보기 만약 이름이 같으면 동시에 참조되어서 굉장히 난감해진다. -->
    <link rel="stylesheet" href="css/css.css">

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
    background-image:url('sky.jpg');
    background-size: cover
}

.title1 {
    text-decoration: none;
    color:black;    
    font-size: 55px;
    text-align: center;
    margin-top: 0px;    
    margin-bottom:0px;
    padding: 0px;
    /*타이틀 폰트 font-family: 'Alex Brush', cursive; */
    font-family: 'Alex Brush';
    letter-spacing:12px
}

.subtitle2 { 
    color:black;
    text-decoration: none;
    font-size: 25px;
    font-family: 'Shadows Into Light';
    text-align: center;    
    margin:0;
    padding-bottom: 10px;
    border-bottom: 2px solid white;         
    line-height: 1;
}
.subtitle1{
    color:black;
    text-decoration: none;
    font-size: 20px;
    font-family: 'Shadows Into Light';
    text-align: center;    
    margin:0;
    padding-bottom: 1px;         
    line-height: 1;
            
     
}

.href{
    background-color:black;
    color:white;
    text-decoration: none;
    text-align: center;
    border-bottom: 2px solid white;
    line-height: 1.3;
    font-size: 35px;
    font-family:'Allura';    
    word-spacing: 45px;
    letter-spacing:3px 

}

.submit_btn{
    background: none;
    display: inline-block;
    min-width: 100px;
    padding: 10px;
    margin-left: 10px;
    border: 1px solid black;
    border-radius: 2px;
    font-size: 1.4rem;

}

.checkbox{
   
    font-size: 1.4rem;
    padding-top : 10px;  

}


     </style>   

</head>
<body>
<div class="title1"><a href="home.php">Chiffons</a></div>
    <!-- 중요포인트 이렇게도 묶일 수 있다. -->
    <div class="subtitle2">-change your everything-
    <div class="subtitle1">Since 2021</div>
    </div>
        <!-- <span> : 클래스나 아이디로 묶은것 중에서 그안에 특정한 한개의 속성값을 바꾸고 싶을때 사용. 굉장히 중요하고 유용하다. -->
        <div class="href">       
            <a href="top.php?id=Top">Top</a>
            <a href="outer.php?id=Outer">Outer</a>
            <a href="bottom.php?id=Bottom">Bottom</a>
            <a href="shoes.php?id=Shoes">Shoes</a>
            <a href="contacttest.php">Contact</a>            
        </div>

    <div class="board_wrap">
        <div class="board_title">
            <strong>게시판</strong>
            <p>확인 즉시 댓글로 연락드립니다.</p>

       </div>
       

       <!-- "enctype="multipart/form-data"을 추가. 이는 기존 post 방식에서 데이터전송하는 용량보다 더 큰 용량을 전송할 수 있게 해준다 -->
        <!-- =============== enctype="multipart/form-data" 이거 안적으면 업로드자체가 안된다.========================= -->
       <form action = "writetest_process.php" method="post" enctype="multipart/form-data">
       
       <!-- board_list_wrap이 또 들어가는 이유는 안에 리스트 페이지 버튼 영역이 있어서 한꺼번에 적용하기위해서다. -->
       <div class="board_write_wrap">

       <!-- 게시판 리스트 -->
           <div class="board_write">
                   <div class="title">                   
                       <dl>
                           <dt>제목</dt>
                           <dd><input type="text" name="title" placeholder="제목 입력">
                        </dd>
                       </dl>
                   </div>
                   <div class="info">
                        <dl>
                           
                           <!-- name이 아닌 id로 -->
                           <dd><input type="hidden" name="id" value=<?php echo $_SESSION['id'] ?>>
                        </dd>
                       </dl>
                       <dl>
                        
                        <dd><input type="hidden" name="pw" value=<?php echo $_SESSION['password'] ?>>
                        </dd>
                    </dl>
                    </div>
                   <div class="cont">
                       <textarea name="content" placeholder="글내용이 들어갑니다.">

                       </textarea>
                   </div>

                   <div class="checkbox">
                       <!-- 체크박스 default값 0이고 체크할시 1로 바뀜.  checkview.php -->
                   <input type="checkbox" value="1" name="lockpost" />비밀글로 설정합니다.
                   </div>

                   <div id="in_file">
                        <input type="file" name="myfile" />
                    </div>

           </div>
           
            <div class="bt_wrap">
                <!-- 나중에 수정하기 -->
                <input type ='submit' class="submit_btn">등록</a>              
                 <a href="contacttestlogin.php">취소</a>

            </div>            
        
       </div>
    </div>

</form>

</body>
</html>