!<!DOCTYPE html>
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
            <a href="contact.php?id=Contact">Contact</a>            
        </div>

     <!-- 타이틀영역 -->
    <div class="board_wrap">
        <div class="board_title">
            <strong>게시판</strong>
            <p>확인 즉시 댓글로 연락드립니다.</p>

       </div>
       <!-- 컨텐츠영역 -->
       <!-- board_view_wrap이 또 들어가는 이유는 안에 뷰, 버튼 영역이 있어서 한꺼번에 적용하기위해서다. -->
       <div class="board_view_wrap">

       <!-- 글쓰는 영역 -->
           <div class="board_view">
                <div class="title">
                <p>ID: <?php echo $_GET["11"]; ?></p>
                     <!-- 글 제목이 들어갑니다.            -->
                </div>
                <div class="info">
               <dl>
                   <dt>번호</dt>
                   <dd>1</dd>
               </dl>
                   <dl>
                    <dt>글쓴이</dt>
                    <dd>김이름</dd>
               </dl>    
               <dl>
                    <dt>작성일</dt>
                    <dd>2021-8-22</dd>
               </dl>    
               <dl>
                    <dt>조회</dt>
                    <dd>33</dd>
               </dl>          
                </div>
                <div class="cont">
                     글 내용이 들어갑니다.<br>
                     글 내용이 들어갑니다.<br>
                     글 내용이 들어갑니다.<br>
                     글 내용이 들어갑니다.<br>
                     글 내용이 들어갑니다.

                </div>
                   
           </div>
           
            <div class="bt_wrap">
                <a href="contact.php" class="on">목록</a>
                <a href="edit.php">수정</a>

            </div>

       </div>
    </div>
</body>
</html>