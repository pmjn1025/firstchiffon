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



function print_list(){
   
    $list = scandir('./board');      
    
    $i = 0;
    while($i < count($list)){
      if($list[$i] !='.'){
          if($list[$i] !='..'){
      
      echo "<a href=\"home.php?id=$list[$i]\">$list[$i]</a>\n";
      }
  }

      $i = $i + 1;
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
        <link rel="stylesheet" href="stylebase.css">
        

        <style>
        </style>
        
    </head>
    <body>
    <!-- 클래스로 구분하기  -->
    <div class="href1">
    <a href="logintest.php">Login</a>
    <a href="signuptest.php">Signup</a>
</div>
    <div class="title"><a href="home.php">Chiffons</a></div>
    <!-- 중요포인트 이렇게도 묶일 수 있다. -->
    <div class="subtitle">-change your everything-
    <div class="subtitle1">Since 2021</div>
    </div>
        <!-- 이거 아이디 값 없애기. -->
        <div class="href">       
            <a href="top.php">Top</a>
            <a href="outer.php?id=Outer">Outer</a>
            <a href="bottom.php?id=Bottom">Bottom</a>
            <a href="shoes.php?id=Shoes">Shoes</a>
            <a href="contacttest.php">Contact</a>            
        </div>  
        
        <div id="hmimg">
        <img class ='hmimg' src="dog.jpg">
        <img class ='hmimg' src="fashion1.jpg">
        <img class ='hmimg' src="fashion.jpg">
        
        </div>         
        
        <div class="words">You either know fashion or you don’t. — Anna Wintour</div>
        <div class="words1">Recommend Video for you!</div>
        <!-- 추천영상 -->
        <div id="youtube">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/OE_91dtx_RI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/CVjk4WuGrMA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>             
        
        <div>

        <!-- 최신상품 -->

        <div class="words2">New Release!</div>


        <div id="pattern" class="pattern">
    <ul class="list img-list">
        <li>
            <a href="model.php" target='_blank' class="inner">
                <div class="li-img">
                    <img src="model1.jpg" alt="Image Alt Text" />
                </div>
                <div class="li-text">
                    <h4 class="li-head">베이직 화이트 티셔츠</h4>
                    <p class="li-sub">10원</p>
                </div>
            </a>
        </li>

        <li>
            <a href="blacktshirts.php" target='_blank' class="inner">
                <div class="li-img">
                    <img src="model3.jpg" alt="Image Alt Text" />
                </div>
                <div class="li-text">
                    <h4 class="li-head">레터링 검정 티셔츠</h4>
                    <p class="li-sub">10원</p>
                </div>
            </a>
        </li>

        <li>
            <a href="openkara.php" target='_blank' class="inner">
                <div class="li-img">
                    <img src="shirt3.jpg" alt="Image Alt Text" />
                </div>
                <div class="li-text">
                    <h4 class="li-head">오픈 카라 반팔 셔츠</h4>
                    <p class="li-sub">10원</p>
                </div>
            </a>
        </li>
        
        
    </ul>
</div>

<div class="words2">popular!</div>

<div id="pattern" class="pattern">
    <ul class="list img-list">
        <li>
            <a href="blueshirts.php" target='_blank' class="inner">
                <div class="li-img">
                    <img src="shirt.jpg" alt="Image Alt Text" />
                </div>
                <div class="li-text">
                    <h4 class="li-head">딥블루 카라 셔츠</h4>
                    <p class="li-sub">10원</p>
                </div>
            </a>
        </li>
        <li>
            <a href="blackpants.php" target='_blank' class="inner">
                <div class="li-img">
                    <img src="bottom.jpg" alt="Image Alt Text" />
                </div>
                <div class="li-text">
                    <h4 class="li-head">검정 면바지</h4>
                    <p class="li-sub">10원</p>
                </div>
            </a>
        </li>
        <li>
            <a href="nikeshoes.php" target='_blank' class="inner">
                <div class="li-img">
                    <img src="shoes.jpg" alt="Image Alt Text" />
                </div>
                <div class="li-text">
                    <h4 class="li-head">Nike Air Force one</h4>
                    <p class="li-sub">10원</p>
                </div>
            </a>
        </li>
        
    </ul>
</div>

        
        <!-- <div class="hmimg1">
            <a href="http://192.168.119.129/index.html"><img src="huu.jpg" width="10%" alt=""></a>        
        </div>  -->
   </body>
</html>