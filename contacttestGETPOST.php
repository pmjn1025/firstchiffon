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
    <a href="logintest.php">Login</a>
    <a href="signuptest.php">Signup</a>
    </div>
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
            <tbody>
                <!-- 제목을 눌렀을때 제목화면으로 이동해야 한다 따라서 a href를 넣어야 된다. -->
                <tr>
                    <td>5</td>
                    <td class="tit">
                        <a href="#">더많은 제품을 보고 싶어요</a>
                    </td>
                    <td>개발자4</td>
                    <td>2021-8-22</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td class="tit">
                        <a href="#">여기 언제 생겼나요?</a>
                </td>
                    <td>개발자3</td>
                    <td>2021-8-22</td>
                    <td>13</td>
                </tr>    
                <tr>
                    <td>3</td>
                    <td class="tit">
                        <a href="#">웹페이지 전환이 이상합니다.</a>
                </td>
                    <td>개발자2</td>
                    <td>2021-8-22</td>
                    <td>13</td>
                </tr>    
                <tr>
                    <td>2</td>
                    <td class="tit">
                        <a href="#">축하드립니다.</a>
                </td>
                    <td>개발자1</td>
                    <td>2021-8-21</td>
                    <td>12</td>
                </tr>    
                <tr>
                    <td>1</td>
                    <td class="tit">
                    <form action = "view.php" method="GET">
                    <input type="text" name="11" placeholder="웹사이트 개설을 축하드립니다." value=<?php echo $_GET["11"]; ?>>
                        <!-- <a href="view.php">웹사이트 개설을 축하드립니다.</a> -->
                        <input type ="submit" name ="제출">                        
                        </form>
                        <p> ID: <?php echo $_GET["11"]; ?></p>
                       
                </td>
                    <td>개발자</td>
                    <td>2021-8-20</td>
                    <td>11</td>
                </tr> 
                                   
            </tbody>
        </table>
        
        <div class="paging">
            <a href="write.php" class="bt1">글쓰기</a>
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