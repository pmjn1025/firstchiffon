<?php 

include $_SERVER['DOCUMENT_ROOT']."/db.php";


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
        <link rel="stylesheet" href="stylebase.css">

        <style>

           .bottom{
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
    <div class="title"><a href="viewhome.php">Chiffons</a></div>
    <!-- 중요포인트 이렇게도 묶일 수 있다. -->
    <div class="subtitle">-change your everything-
    <div class="subtitle1">Since 2021</div>
    </div>
        <!-- 이거 아이디 값 없애기. -->
        <div class="href">       
            <a href="viewtop.php">Top</a>
            <a href="viewouter.php">Outer</a>
            <a href="viewbottom.php">Bottom</a>
            <a href="viewshoes.php">Shoes</a>
            <a href="contacttest.php">Contact</a>            
        </div>   
        
        <div class="words2">Relesing soon!</div>
        
        <div id="hmimg">
        <a href=""><img class ='hmimg' src="bottom4.jpg"></a>
        <a href=""><img class ='hmimg' src="bottom3.jpg"></a>
        <a href=""><img class ='hmimg' src="bottom5.jpg"></a>
        
        </div>         
        
        <div class="words"> Personality begins where comparison ends.- Karl Lagerfeld</div>
        

        <!-- 최신상품 -->

        <div class="words2">Now Release!</div>

<div id="pattern" class="pattern">
   <ul class="list img-list">

        <?php
         
         $sql1 = mq("select * from shopdatabottom order by idx desc");
         
         while($board1 = $sql1->fetch_array()){?>

                   
       <li>
           <!-- viewpagepopular를 viewpagenewrelease 처럼 손보기 -->
           <a href="viewpagebottom.php?idx=<?php echo $board1['idx'];?>" target='_blank' class="inner">
               <div class="li-img">
                   <img src="./<?php echo $board1['subtitle'];?>/<?php echo $board1['img'];?>" alt="Image Alt Text" />
               </div>
               <div class="li-text">
                   <h4 class="li-head"><?php echo ($board1 ['title']);?></h4>
                   <p class="li-sub"><?php echo ($board1 ['price']).'원';?></p>
               </div>
           </a>
       </li>

       <?php }?>
       
       
   </ul>
</div>






    </body>
</html>