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

    }else{
    echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
} 

?>

<?php
function print_title(){
    
    if(isset($_GET['id'])){
        
      echo $_GET['id'];    

    }
    // 만약에 id값이 없다면 else문 실행
    else {
      echo "Welcome! to the Chiffons!";
    }
}
?>

<!doctype html>
<html>
    <head>
        <title>
        <?php
            print_title();
            ?>
        </title>       
        <meta charset="utf-8">
        <!-- 폰트도 font-family에 있는 것 뿐만아니라 웹에서도 적용할 수있다.
        https://velog.io/@jehjong/CSS%EC%97%90-%ED%8F%B0%ED%8A%B8-%EC%A0%81%EC%9A%A9%ED%95%98%EA%B8%B0-%EC%9B%B9%ED%8F%B0%ED%8A%B8-%ED%8F%B0%ED%8A%B8-%ED%8C%8C%EC%9D%BC
        여기에서 확인 -->

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

        
        <!--내가 동일한 css 코드가 다른 html에도 많이있을때 style.css라는 파일에 따로 저장해서 컴퓨터에게 이 html을 읽을때 style.css를 참고해서 불러와라(Link tag의 역할) csscompleletecss.html참고 -->
        <!-- 재사용성이 높아진다. 가독성도 높이고 훨씬 효율적이면서 경제적이다. -->

        <link rel="stylesheet" href="product.css">        
        <link rel="stylesheet" href="styletable.css">

        <style>

                /* <!-- title 폰트 --> */
                @import url('https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap');
            /* <!-- href  폰트 --> */
            @import url('https://fonts.googleapis.com/css2?family=Alex+Brush&family=Allura&display=swap');
            /* words 폰트 */    
            @import url('https://fonts.googleapis.com/css2?family=Abel&family=Abril+Fatface&family=Alex+Brush&display=swap');
            /* words1 폰트 */    
            @import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');
            


body {
    margin: 0;
    background-image:url('sky.jpg');
    background-size: cover
}


a {    
    text-decoration: none;
    /* 이거 쓰면 컬러 기본값인 검은색으로 변한다. */
    color: inherit; 
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
.href1{
    font-size: 15px;
    text-align: right;
    padding-right: 30px ;
    word-spacing:5px;
    letter-spacing:1px;
    
}
.words{  
    color:black; 
    font-size: 30px;
    /*font-family: 'Abril Fatface', cursive; */
    /* font-family: 'Shadows Into Light', cursive; */
    font-family: 'Shadows Into Light'; 
    padding-top : 20px;
    padding-bottom : 10px;
    text-align: center;
    
    
}

#youtube{
    display : inline;
    margin: 70px;
    



}

.words1{
    color:black;   
    font-size: 30px;    
    /*font-family: 'Abril Fatface', cursive; */
    /* font-family: 'Shadows Into Light', cursive; */
    font-family: 'Shadows Into Light'; 
    padding-top : 20px;
    padding-bottom : 10px;
    padding-left: 70px ;
    text-align: left;
    border-top: 1px solid white;
    
    
}

.words2{
    color:black;
    font-size: 40px;
    /*font-family: 'Abril Fatface', cursive; */
    /* font-family: 'Shadows Into Light', cursive; */
    font-family: 'Shadows Into Light'; 
    padding-top : 20px;
    padding-bottom : 10px;
    padding-left: 70px ;
    text-align: left;
    border-top: 1px solid white;
    text-align: center; 

}

.hmimg{
    width: 30%;
    height: 500px;
    /* 이미지끼리 겹쳐있을때 빈공간 없애는 것 */
    /* display -> 컨텐츠를 어떻게 보여줄것인가?
    inline : 가로 block :세로 inline-block : 사용가능 */
    display:inline;
    /* object-fit: cover; : 이미지가 잘리더라도 고정된 비율로 보여주는 것이 더 중요할 때 cover 값을 주면 되겠다. */
    object-fit: cover;    
    overflow: hidden;    
    border-radius: 5px;
    

}
#hmimg{
    text-align: center;
    padding-top: 5px;
    
    
   
}

        
        .contact{
            color:brown;
        }

        </style>
        
    </head>
    <body>
    <!-- 클래스로 구분하기  -->
    <div class="href1">
    <a href="logoutcomplete.php">Logout</a>
    <a href="shop_list_newrelease.php" target='_blank'>상품관리</a>
    </div>

    <div class="title"><a href="homeadmin.php">Chiffons</a></div>

    <!-- 중요포인트 이렇게도 묶일 수 있다. -->
    <div class="subtitle">-change your everything-
    <div class="subtitle1">Since 2021</div>
    </div>
    
        <!-- 이거 아이디 값 없애기. -->
        <div class="href">       
            <a href="admintop.php">Top</a>
            <a href="adminouter.php">Outer</a>
            <a href="adminbottom.php">Bottom</a>
            <a href="adminshoes.php">Shoes</a>
            <a href="admincontacttest.php">Contact</a>            
        </div>

        <div class="words2">This is board!</div>        
        <div class="words">Everything you want to us, please use this board.</div>
        
        <div class="board_list_wrap">
        <table class="borad_list">
            <caption>게시판 목록</caption>
            <thead>
                <tr>
                <th>번호</th>
                <th>제목</th>
                <th>글쓴이</th>
                <th>작성일</th>
                <th>조회수</th>
                </tr>                    
            </thead>
            <?php
       
        // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
        // boardtest table에서 boardposttest table로 바꿨다.
          $sql = mq("select * from boardposttest order by idx desc"); 
            while($board = $sql->fetch_array())
            {
              //title변수에 DB에서 가져온 title을 선택
              $title=$board["title"];
              //여기 타이틀 길이가 문제였다 타이틀 길이를 맞게 수정해주자! 영민씨 만세!
              if(strlen($title)>50)
              { 
                //title이 30을 넘어서면 ...표시
                $title=str_replace($board["title"],mb_substr($board["title"],0,50,"utf-8")."...",$board["title"]);
              }

              //댓글 수 카운트
              //reply테이블에서 con_num이 board의 idx와 같은 것을 선택
              //아까도 살펴봤듯이 con_num == idx이다. 중요!!!  
              $sql2 = mq("select * from replytest where con_num='".$board['idx']."'");
              //num_rows로 정수형태로 출력 
              $rep_count = mysqli_num_rows($sql2);
        ?>

            <tbody>
                
                <!-- 제목을 눌렀을때 제목화면으로 이동해야 한다 따라서 a href를 넣어야 된다. -->
                <!-- a 테그 href에 주소값넣고 거기에 id값을 지정해서 입력해서 넘기면 이게 GET방식이다. 즉 주소창에 아이디값 넣는것 민규한테 가르쳐준거 -->
                <!-- 해서 지금 2번째 재목부분을 db에서 받아서 자동으로 입력하고 또 idx값을 에코로 줘서 자동으로 입력하고
            GET으로 viewtest로 보낸다. -->
                <tr>
                <td width="70"><?php echo $board['idx']; ?></td>
                <td width="500"><?php 
                $lockimg = "<img src='lock.png' alt='lock' title='lock' width='15' height='15' />";
               
                // 만약 writetest에서 체크박스를 클릭했으면 db안에 lock_post값이 1로 변함. 
                if($board['lock_post']=="1"){ ?>

                    <?php                                         
                       if(isset($_SESSION['id'])){ ?>
                
                    <a href='checkview.php?idx=<?php echo $board["idx"];?>'><?php echo $title, $lockimg;?>

                    <?php } else { ?>

                    <a href='loginerror.php?idx=<?php echo $board["idx"];?>'><?php echo $title, $lockimg;?>

                    <?php } ?> 

               <?php }else{  ?>

                     <?php                                         
                     if(isset($_SESSION['id'])){ ?>                     

                    <!-- viewtest.php에서 viewreplytest.php로 고쳤다. -->
                    <a href="viewreplytest.php?idx=<?php echo $board["idx"];?>"><?php echo $title; ?>

                    <?php } else { ?>

                    <a href="loginerror.php?idx=<?php echo $board["idx"];?>"><?php echo $title; ?>

                    <?php } ?> 

                    <?php } ?>


                    <!-- 여기에 효과 넣고 싶으면 넣기 span으로 일단 묶어놨다. -->
                    <span>[<?php echo $rep_count; ?>]</span></a></td>
                <td width="120"><?php echo $board['id']?></td>
                <td width="100"><?php echo $board['date']?></td>
                <td width="100"><?php echo $board['hit']; ?></td>
                </tr>               
                                   
            </tbody>
            <?php } ?>
        </table>
        
        <div class="paging">
        <?php 
            
            if(isset($_SESSION['id'])){ ?>

            <a href="writetest.php" class="bt1">글쓰기</a>

            <?php }else{ ?>

            <a href="loginerror.php" class="bt1">글쓰기</a>       

            <?php } ?>
            <a href="#" class="bt">첫 페이지</a>
            <a href="#" class="bt">이전 페이지</a>
            <a href="#" class="num on">1</a>
            <a href="#" class="num">2</a>
            <a href="#" class="num">3</a>
            <a href="#" class="bt">다음 페이지</a>
            <a href="#" class="bt">마지막 페이지</a>

        </div>
    </div>
        
    
    </body>
</html>
