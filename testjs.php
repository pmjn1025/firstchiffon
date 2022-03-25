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
        <link rel="stylesheet" href="testjs.css">

        

        <style>
        </style>
        
    </head>
    <body>
    <!-- 클래스로 구분하기  -->
    <div class="href1">
    <a href="login.php">Login</a>
    <a href="signup.php">signup</a>
</div>
    <div class="title"><a href="home.php">Chiffons</a></div>
    <!-- 중요포인트 이렇게도 묶일 수 있다. -->
    <div class="subtitle">-change your everything-
    <div class="subtitle1">Since 2021</div>
    </div>

        <div class="href">       
            <a href="top.php?id=Top">Top</a>
            <a href="outer.php?id=Outer">Outer</a>
            <a href="bottom.php?id=Bottom">Bottom</a>
            <a href="shoes.php?id=Shoes">Shoes</a>
            <a href="contact.php?id=Contact">Contact</a>            
        </div> 
        
        
        <!-- 이미지 슬라이드 -->
    <div class="top_class">

<div class="middle_class">
    <div class="numbertext_class">1 / 3</div>
    <img src="top1.jpg" style="width:70%; height: 400px;">
</div>

<div class="middle_class">
    <div class="numbertext_class">2 / 3</div>
    <img src="top2.jpg" style="width:70%; height: 400px;">
</div>

<div class="middle_class">
    <div class="numbertext_class">3 / 3</div>
    <img src="shoes3.jpg" style="width:70%; height: 400px;">
</div>
<div class="circle" style="text-align:center">
    <span class="circle_class"></span>
    <span class="circle_class"></span>
    <span class="circle_class"></span>
</div>
</div>
<!-- 이미지 슬라이드 끝 -->
        
        <!-- <div id="hmimg">
        <img class ='hmimg' src="dog.jpg">
        <img class ='hmimg' src="fashion1.jpg">
        <img class ='hmimg' src="fashion.jpg">
        
        </div>          -->
        
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
            <a href="index.php" target='_blank' class="inner">
                <div class="li-img">
                    <img src="model1.jpg" alt="Image Alt Text" />
                </div>
                <div class="li-text">
                    <h4 class="li-head">model</h4>
                    <p class="li-sub">3억원</p>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="inner">
                <div class="li-img">
                    <img src="model2.jpg" alt="Image Alt Text" />
                </div>
                <div class="li-text">
                    <h4 class="li-head">model1</h4>
                    <p class="li-sub">3억원</p>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="inner">
                <div class="li-img">
                    <img src="model3.jpg" alt="Image Alt Text" />
                </div>
                <div class="li-text">
                    <h4 class="li-head">model2</h4>
                    <p class="li-sub">7억원</p>
                </div>
            </a>
        </li>
        
    </ul>
</div>

<div class="words2">popular!</div>

<div id="pattern" class="pattern">
    <ul class="list img-list">
        <li>
            <a href="#" class="inner">
                <div class="li-img">
                    <img src="shirt.jpg" alt="Image Alt Text" />
                </div>
                <div class="li-text">
                    <h4 class="li-head">model</h4>
                    <p class="li-sub">1억원</p>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="inner">
                <div class="li-img">
                    <img src="bottom.jpg" alt="Image Alt Text" />
                </div>
                <div class="li-text">
                    <h4 class="li-head">model1</h4>
                    <p class="li-sub">3억원</p>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="inner">
                <div class="li-img">
                    <img src="shoes.jpg" alt="Image Alt Text" />
                </div>
                <div class="li-text">
                    <h4 class="li-head">model2</h4>
                    <p class="li-sub">7억원</p>
                </div>
            </a>
        </li>
        
    </ul>
</div>

        
        <!-- <div class="hmimg1">
            <a href="http://192.168.119.129/index.html"><img src="huu.jpg" width="10%" alt=""></a>        
        </div>  -->
   </body>

<!-- 홈 이미지 자동 슬라이드 -->
<script>
    // 변수 선언 왜 0일까?
    var imgIndex = 0;
    // 함수
    showSlides();
    // 함수 실행
    function showSlides() {
        // 이미지 넣기
        var img = document.getElementsByClassName("middle_class");
        // 이미지 밑에 있는 동그라미
        let one = document.getElementsByClassName("circle_class");
        // 하나씩 안보이게하기
        for (i = 0; i < img.length; i++) {
            // 화면 하나로 보이기
            img[i].style.display = "none";
        }
        imgIndex++;
        // 이미지 계속해서 나오면 리턴
        if (imgIndex > img.length) { imgIndex = 1 }
        // 동그라미 계속 실행
        for (i = 0; i < one.length; i++) {
            // 색갈 보이게 하기
            one[i].className = one[i].className.replace(" color", "");
        }
        // 이미지 하나로 보이기
        img[imgIndex - 1].style.display = "block";
        // 동그라미 색갈변화
        one[imgIndex - 1].className += " color";
        // 4초 이따가 이미지 화면 전환
        setTimeout(showSlides, 3000);
    }
</script>
<!-- 홈 이미지 자동 슬라이드 끝 -->



</html>