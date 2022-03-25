<?php
	include $_SERVER['DOCUMENT_ROOT']."/db.php"; /* db load */
    
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

       <?php
        // 주소창에 idx값이 있으니까 당연히 GET으로 받고 이 idx값으로 boardtest 테이블에 있는 idx에 해당하는 데이터들을 불러온다.?
        $idx = $_GET['idx']; /* idx함수에 idx값을 받아와 넣음*/
        // 해당 idx를 선택함
        $hit = mysqli_fetch_array(mq("select * from boardtest where idx ='$idx'"));
        // 조회수에 1을 더해준다.
        $hit = $hit['hit'] + 1;
        // 조회수에 1을 더해준것을 db에 최신화 시켜준다.
		$fet = mq("update boardtest set hit = '$hit' where idx = '$idx'");
        $sql = mq("select * from boardtest where idx='$idx'"); /* 받아온 idx값을 선택 */
        // $b->query($query); 역시 $b 변수에 저장된 객체의 query() 메소드를 실행하는 것입니다.
        // $sql 변수에 저장된 객체(받아온 idx에 해당하는 행의 값)를 fetch_array()(배열로 나타낸다.)메소드로 실행한것이 $board
        $board = $sql->fetch_array();
        
       ?>
    
     

       <!-- 컨텐츠영역 -->
       <!-- board_view_wrap이 또 들어가는 이유는 안에 뷰, 버튼 영역이 있어서 한꺼번에 적용하기위해서다. -->
       <div class="board_view_wrap">

       <!-- 글쓰는 영역 -->
           <div class="board_view">
                <div class="title">
                <!-- idx 해당하는 배열의 title을 출력한다.  -->
                <?php echo $board['title']; ?>     
                </div>
                <div class="info">
               <dl>
                   <dt>번호</dt>
                   <dd><?php echo $board['idx']; ?></dd>
               </dl>
                   <dl>
                    <dt>글쓴이</dt>
                    <dd><?php echo $board['id']; ?></dd>
               </dl>    
               <dl>
                    <dt>작성일</dt>
                    <dd><?php echo $board['date']; ?></dd>
               </dl>    
               <dl>
                    <dt>조회</dt>
                    <dd><?php echo $board['hit']; ?></dd>
               </dl>          
                </div>
                <div class="cont">
                <?php echo nl2br("$board[content]"); ?>

                </div>
                   
           </div>
           
            <div class="bt_wrap">
                <a href="contacttest.php" class="on">목록</a>
                <!-- idx값을 GET으로 넘겨준다 -->
                <a href="edittest.php?idx=<?php echo $board['idx']; ?>">수정</a>
                <a href="delete.php?idx=<?php echo $board['idx']; ?>">삭제</a>


            </div>

       </div>
    </div>   

</body>
</html>