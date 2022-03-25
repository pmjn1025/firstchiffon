<!-- db연동 include -->
<?php include  $_SERVER['DOCUMENT_ROOT']."/db.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take your choice!</title>

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

        <link rel="stylesheet" href="productmodel.css">
        <link rel="stylesheet" href="styletable.css">

        <link rel="stylesheet" type="text/css" href="jquery-ui.css" />
        <link rel="stylesheet" type="text/css" href="stylereply.css" />
        <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="jquery-ui.js"></script>
        <script type="text/javascript" src="common.js"></script>

        <style>
              /* <!-- title 폰트 --> */
              @import url('https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap');
            /* <!-- href  폰트 --> */
            @import url('https://fonts.googleapis.com/css2?family=Alex+Brush&family=Allura&display=swap');
            /* words 폰트 */    
            @import url('https://fonts.googleapis.com/css2?family=Abel&family=Abril+Fatface&family=Alex+Brush&display=swap');
            /* words1 폰트 */    
            @import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');
            /* 한글폰트 IM혜민체 Bold */
            @font-face {
    font-family: 'IM_Hyemin-Bold';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2106@1.1/IM_Hyemin-Bold.woff2') format('woff');
    font-weight: normal;
    font-style: normal;
}
            


body {
    margin: 0;
    background-image:url('modelbackground3.jpg');
    background-size: cover    
   
}


a {    
    text-decoration: none;
    /* 이거 쓰면 컬러 기본값인 검은색으로 변한다. */
    color: inherit; 
}



.title {
    text-decoration: none;
    color:brown;    
    font-size: 55px;
    padding-left : 200px;
    /* text-align: left; */
    margin-top: 0px;    
    margin-bottom:0px;
    /* padding: 0px; */
    /*타이틀 폰트 font-family: 'Alex Brush', cursive; */
    font-family: 'Alex Brush';
    letter-spacing:12px
    
}

.subtitle { 
    color:black;
    text-decoration: none;
    font-size: 25px;
    font-family: 'Shadows Into Light';
    /* text-align: left;     */
    margin:0;
    padding-left : 200px
    /* padding-bottom: 10px; */
    /* border-bottom: 2px solid white; */
    /* line-height: 1; */
}
.subtitle1{
    color:black;
    text-decoration: none;
    font-size: 20px;
    font-family: 'Shadows Into Light';
    /* text-align: left;     */
    margin:0;
    padding-left: 270px;
    padding-bottom: 1px;         
    line-height: 1;
            
     
}
.subtitle2{
    color:black;
    text-decoration: none;
    font-size: 25px;
    font-family: 'Shadows Into Light';
    /* text-align: center;   */
    margin:5;
    padding-left: 40px;
    padding-bottom: 1px;         
    line-height: 1;
    letter-spacing:5px        
     
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
    font-size: 40px;
    
    /*font-family: 'Abril Fatface', cursive; */
    /* font-family: 'Shadows Into Light', cursive; */
    font-family: 'Shadows Into Light'; 
    padding-top : 30px;
    padding-bottom : 10px;
    text-align: center;
    border-bottom: 1px solid brown;
    
    
    
}

#youtube{
    display : inline;
    margin: 70px;
    



}

.words1{
    color:white;   
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
    color:white;
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

.words3{
    color:black;
    font-size: 50px;
    /*font-family: 'Abril Fatface', cursive; */
    /* font-family: 'Shadows Into Light', cursive; */
    font-family: 'Shadows Into Light'; 
    padding-top : 20px;
    padding-bottom : 10px;
    padding-left: 70px ;
    text-align: left;
    border-top: 1px solid brown;
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

.modelimg{
    width: 130%;
    
}

.modeltitle{

    color:black; 
    font-size: 50px;
    
    /*font-family: 'Abril Fatface', cursive; */
    /* font-family: 'Shadows Into Light', cursive; */
    font-family: 'IM_Hyemin-Bold'; 
    padding-top : 10px;
    padding-bottom : 10px;
    text-align: center;

}
.modeldescription{
    color:black; 
    font-size: 20px;   
    font-family: 'IM_Hyemin-Bold'; 
      /*화면 분할 aside왼쪽 부분 */
      
    padding-left : 180px;
    width:55%;
    height:280px;   
    float:left;

    /* background-color:blue; */
    /* ============================= */
    
    /* 원문 그대로 출력 */
    white-space : pre; 

    line-height:1.5;

    



    
}

.modeldescription1{
    color:black; 
    font-size: 20px;   
    font-family: 'IM_Hyemin-Bold';
    text-align: center;
    padding-top : 10px; 

    /* background-color:yellow; */
    
    width:50%;
    height:280px;  
    
    float:left;
    
}

.bt_wrap {

margin-top: 30px;
text-align: center;
font-size: 0;
}

.submit_btn{
    background: none;
    font-family: 'IM_Hyemin-Bold';
    color:black;
    display: inline-block;
    min-width: 50px;
    padding: 10px;   
    margin-left: 10px;
    border: 1px solid black;
    border-radius: 10px;
    font-size: 1rem;

}

.detailimg{
    text-align : center;

}


        </style>

</head>
<body>

<?php
// MySQL받아오는 부분
// 밑에 idx는 shopdatanewrelease테이블의 idx이다!!!!!
 $idx = $_GET['idx']; /* idx함수에 idx값을 받아와 넣음*/ 
 $sql = mq("select * from shopdatatop where idx='$idx'"); /* 받아온 idx값을 선택 */
 $board = $sql->fetch_array();

 $category = $board['category'];

 
 
?>


<div class="href1">
    <a href="logintest.php">Login</a>
    <a href="signuptest.php">Signup</a>
</div>
   
        <a href="viewhome.php" class="title">Chiffons</a>
        <a href="viewtop.php" class="subtitle2">Top</a>
        <a href="viewouter.php" class="subtitle2">Outer</a>
        <a href="viewbottom.php" class="subtitle2">Bottom</a>
        <a href="viewshoes.php" class="subtitle2">Shoes</a>
        <a href="contacttest.php" class="subtitle2">Contact</a>

        

  
    <!-- 중요포인트 이렇게도 묶일 수 있다. -->
    <div class="subtitle">-change your everything-</div>
    <div class="subtitle1">Since 2021</div>
    

    <div class="words">New Realese!</div>

    <div id="pattern" class="pattern">
         <ul class="list img-list">
            <li>
                <img src="./<?php echo $board['subtitle'];?>/<?php echo $board['img'];?>" alt="Image Alt Text" class="modelimg"/>
            </li>
                <div class="modeltitle"><?php echo $board['title']; ?></div>

        <div class="modeldescription">
            
        <?php echo $board['description'];?>

        <?php echo $category;?>

        

            <br>
        </div> 
        
        <div class="modeldescription1">

         <!-- ==========================session적용 O 일때================================== -->

         <?php
             if(isset($_SESSION['id'])){ ?>
            
            <!-- 같은 form에서 각각 다른 2개의 php파일로 보내기위한 자바 스크립트 코드 -->
            <script>
                function info_chk() {
                return true;
                }
                function info_chk2(frm) {
                frm.action='http://www.test.co.kr/test2/event_ok.php';
                frm.submit();
                return true;
                }
            </script>
             
            <!-- tag와 동시에 input type이 기초이면서 html의 꽃이다 http://taeyo.net/Lecture/Dukyoung/DYsASP10.asp 공부하자. -->
            <form action ="" method="post" onsubmit='return info_chk()'>
           
            <!-- php문안에서 if문 묶는거 잘보기  -->
            <?php
                if($board['color1'] == '블랙'){?>

                <p> 색상     : 
                    <SELECT NAME=color SIZE=1>
                        <OPTION VALUE=1 SELECTED>색상을 선택해 주세요.</OPTION>
                        <OPTION VALUE="black">블랙</OPTION>
                        
                    </SELECT>
                </p>

                <?php } else if($board['color1'] == '딥블루'){?>
                    <p> 색상     : 
                    <SELECT NAME=color SIZE=1>
                        <OPTION VALUE=1 SELECTED>색상을 선택해 주세요.</OPTION>
                        <OPTION VALUE="deepblue">딥블루</OPTION>
                        
                    </SELECT>
                </p>
                      
                  <?php } else if($board['color1'] == '그린'){ ?>
                    <p> 색상     : 
                    <SELECT NAME=color SIZE=1>
                        <OPTION VALUE=1 SELECTED>색상을 선택해 주세요.</OPTION>
                        <OPTION VALUE="deepblue">그린</OPTION>
                        
                    </SELECT>
                </p>
                <?php } ?>


                  <?php
                if($board['title'] == '검정 면바지'){?>

                <p> 사이즈     : 
                    <SELECT NAME=color SIZE=1>
                        <OPTION VALUE=1 SELECTED>사이즈를 선택해 주세요.</OPTION>
                        <OPTION VALUE=2>30</OPTION>
                        <OPTION VALUE=3>32</OPTION>
                        <OPTION VALUE=4>34</OPTION>
                        
                    </SELECT>
                </p>

                <?php } else if($board['title'] == '딥블루 카라 셔츠'){?>
                    <p> 사이즈     : 
                    <SELECT NAME=color SIZE=1>
                        <OPTION VALUE=1 SELECTED>사이즈를 선택해 주세요.</OPTION>
                        <OPTION VALUE=2>90</OPTION>
                        <OPTION VALUE=3>100</OPTION>
                        <OPTION VALUE=4>105</OPTION>
                        
                    </SELECT>
                </p>
                      
                  <?php } else { ?>
                    <p> 사이즈     : 
                    <SELECT NAME=color SIZE=1>
                        <OPTION VALUE=1 SELECTED>사이즈를 선택해 주세요.</OPTION>
                        <OPTION VALUE=2>90</OPTION>
                        <OPTION VALUE=3>100</OPTION>
                        <OPTION VALUE=4>105</OPTION>
                        
                    </SELECT>
                </p>
                      
                  <?php } ?>

         

                <!-- 자바스크립트 query를 이용한 input type number 숫자길이 제한. -->
                <script type="text/javascript">
                    
                    function maxLengthCheck(object){
                    
                    if (object.value.length > object.maxLength){
                        
                        object.value = object.value.slice(0, object.maxLength);
                      }

                    }
                    
                </script>


                <p> 수량 : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <!--maxlength="최대길이" oninput="maxLengthCheck(this)" maxlength= 자리수 min="최소값"  max="최대값"  step="클릭시 증가 숫자" value="초기값"  -->
                    <input type="number" name="quantity" style="width: 100px;" maxlength="3" oninput="maxLengthCheck(this)" min="1" max="999" step="1" value="1" />

                </p>

                   <!-- &nbsp; 공백넣기 원래 html은 공백을 1개만 인식하기 때문에 인위적으로 &nbsp;을 넣어서 공백을 만든다.   -->
                   <p>가격 : &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <?php echo $board['price'].'원'; ?> </p>

                                    
                <!-- input type hidden 사용법 https://blog.shovelman.dev/818 -->
                <!-- 이미지는 텍스트로 이미지경로를 보내서 거기서 img src에 경로를 입력해보자. -->
                <!-- 게시판 생성 후 이것 살펴보기. -->
                <input type="hidden" name ="title" value ="<?php $board['title']; ?>">
                <input type="hidden" name ="pice" value ="<?php $board['price']; ?>">
                <input type="hidden" name ="img" value ="http://192.168.119.129/model1.jpg">
                
                <!-- 같은 form에서 각각 다른 2개의 php파일로 보내기위한 자바 스크립트 코드가 이것과 관련이있다. -->  
                <div class="bt_wrap">      
                    <input type='submit' class="submit_btn" value='장바구니에 담기'>
                    <input type='button' class="submit_btn" value='구매하기' onclick='return info_chk2(this.form);'>
                </div>
               
               </form>  
               
               
               <!-- ==========================session적용 X 때================================== -->               
               <?php } else { ?>


                <!-- 같은 form에서 각각 다른 2개의 php파일로 보내기위한 자바 스크립트 코드 -->
            <script>
                function info_chk() {
                return true;
                }
                function info_chk2(frm) {
                frm.action='loginerror.php';
                frm.submit();
                return true;
                }
            </script>
             
            <!-- tag와 동시에 input type이 기초이면서 html의 꽃이다 http://taeyo.net/Lecture/Dukyoung/DYsASP10.asp 공부하자. -->
            <form action ="loginerror.php" method="post" onsubmit='return info_chk()'>
           
            <!-- php문안에서 if문 묶는거 잘보기  -->
            <?php
                if($board['color1'] == '블랙'){?>

                <p> 색상     : 
                    <SELECT NAME=color SIZE=1>
                        <OPTION VALUE=1 SELECTED>색상을 선택해 주세요.</OPTION>
                        <OPTION VALUE="black">블랙</OPTION>
                        
                    </SELECT>
                </p>

                <?php } else if($board['color1'] == '딥블루'){?>
                    <p> 색상     : 
                    <SELECT NAME=color SIZE=1>
                        <OPTION VALUE=1 SELECTED>색상을 선택해 주세요.</OPTION>
                        <OPTION VALUE="deepblue">딥블루</OPTION>
                        
                    </SELECT>
                </p>
                      
                  <?php } else if($board['color1'] == '그린'){ ?>
                    <p> 색상     : 
                    <SELECT NAME=color SIZE=1>
                        <OPTION VALUE=1 SELECTED>색상을 선택해 주세요.</OPTION>
                        <OPTION VALUE="deepblue">그린</OPTION>
                        
                    </SELECT>
                </p>
                <?php } ?>


                  <?php
                if($board['title'] == '검정 면바지'){?>

                <p> 사이즈     : 
                    <SELECT NAME=color SIZE=1>
                        <OPTION VALUE=1 SELECTED>사이즈를 선택해 주세요.</OPTION>
                        <OPTION VALUE=2>30</OPTION>
                        <OPTION VALUE=3>32</OPTION>
                        <OPTION VALUE=4>34</OPTION>
                        
                    </SELECT>
                </p>

                <?php } else if($board['title'] == '딥블루 카라 셔츠'){?>
                    <p> 사이즈     : 
                    <SELECT NAME=color SIZE=1>
                        <OPTION VALUE=1 SELECTED>사이즈를 선택해 주세요.</OPTION>
                        <OPTION VALUE=2>90</OPTION>
                        <OPTION VALUE=3>100</OPTION>
                        <OPTION VALUE=4>105</OPTION>
                        
                    </SELECT>
                </p>
                      
                  <?php } else { ?>
                    <p> 사이즈     : 
                    <SELECT NAME=color SIZE=1>
                        <OPTION VALUE=1 SELECTED>사이즈를 선택해 주세요.</OPTION>
                        <OPTION VALUE=2>90</OPTION>
                        <OPTION VALUE=3>100</OPTION>
                        <OPTION VALUE=4>105</OPTION>
                        
                    </SELECT>
                </p>
                      
                  <?php } ?>

         

                <!-- 자바스크립트 query를 이용한 input type number 숫자길이 제한. -->
                <script type="text/javascript">
                    
                    function maxLengthCheck(object){
                    
                    if (object.value.length > object.maxLength){
                        
                        object.value = object.value.slice(0, object.maxLength);
                      }

                    }
                    
                </script>


                <p> 수량 : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <!--maxlength="최대길이" oninput="maxLengthCheck(this)" maxlength= 자리수 min="최소값"  max="최대값"  step="클릭시 증가 숫자" value="초기값"  -->
                    <input type="number" name="quantity" style="width: 100px;" maxlength="3" oninput="maxLengthCheck(this)" min="1" max="999" step="1" value="1" />

                </p>

                   <!-- &nbsp; 공백넣기 원래 html은 공백을 1개만 인식하기 때문에 인위적으로 &nbsp;을 넣어서 공백을 만든다.   -->
                   <p>가격 : &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <?php echo $board['price'].'원'; ?> </p>

                                    
                <!-- input type hidden 사용법 https://blog.shovelman.dev/818 -->
                <!-- 이미지는 텍스트로 이미지경로를 보내서 거기서 img src에 경로를 입력해보자. -->
                <!-- 게시판 생성 후 이것 살펴보기. -->
                <input type="hidden" name ="title" value ="<?php $board['title']; ?>">
                <input type="hidden" name ="pice" value ="<?php $board['price']; ?>">
                <input type="hidden" name ="img" value ="http://192.168.119.129/model1.jpg">
                
                <!-- 같은 form에서 각각 다른 2개의 php파일로 보내기위한 자바 스크립트 코드가 이것과 관련이있다. -->  
                <div class="bt_wrap">      
                    <input type='submit' class="submit_btn" value='장바구니에 담기'>
                    <input type='button' class="submit_btn" value='구매하기' onclick='return info_chk2(this.form);'>
                </div>
               
               </form> 

               <?php } ?> 

        </div>            

   </div>
   
   
    <div class="words3">Detail!</div>
    
    <div class="detailimg">
        <?php 


        $sql1 = mq("select * from image order by idx desc");
        while($board1 = $sql1->fetch_array()){ ?>     
        
         <!-- 텍스토 그림 경로 불러올때 echo문 지금 이거 잘 보자.  -->
        <img src="./<?php echo $board['subtitle'];?>/<?php echo $board1['filename'];?>" width="50%" onerror="this.style.display='none'" alt="Image Alt Text"/>

        <?php }?>


        <div class="words">REVIEW!</div>  

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
       
        // board테이블에서 idx를 기준으로 내림차순해서 표시
        // boardtest table에서 boardposttest table로 바꿨다.
          $sql = mq("select * from viewpost where idxpost='$idx' and category='$category' order by idx desc"); 
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
              $sql2 = mq("select * from viewreply where con_num='".$board['idx']."'");
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
               
                            <a href='viewcheckviewtop.php?idx=<?php echo $board["idx"];?>&&idxpost=<?php echo $idx;?>&&category=<?php echo $category;?>'><?php echo $title, $lockimg;?>
                         
                        <?php } else { ?>

                            <!-- viewtest.php에서 viewreplytest.php로 고쳤다. GET으로 게시판 idx, idxpost, category를 보낸다. -->
                            <a href='loginerror.php?idx=<?php echo $board["idx"];?>&&idxpost=<?php echo $idx;?>&&category=<?php echo $category;?>'><?php echo $title, $lockimg;?>
                                    
                                    
                         <?php } ?> 
                
                <?php }else{  ?>

                        <?php                                           
                        if(isset($_SESSION['id'])){ ?>

                             <!-- viewtest.php에서 viewreplytest.php로 고쳤다. GET으로 게시판 idx, idxpost, category를 보낸다. -->
                            <a href="viewpagereplytop.php?idx=<?php echo $board["idx"];?>&&idxpost=<?php echo $idx;?>&&category=<?php echo $category;?>"><?php echo $title; ?>
                    
                            <?php } else { ?>
                      
                            <a href="loginerror.php?idx=<?php echo $board["idx"];?>&&idxpost=<?php echo $idx;?>&&category=<?php echo $category;?>"><?php echo $title; ?>
                   
                             <?php }?>

                    <?php } ?>

                    <!-- 여기에 효과 넣고 싶으면 넣기 span으로 일단 묶어놨다. -->
                    <span>[<?php echo $rep_count; ?>]</span></a></td>
                <td width="120"><?php echo $board['id']?></td>
                <td width="100"><?php echo $board['date']?></td>
                <td width="100"><?php echo $board['hit']; ?></td>
                </tr> 
                
                <?php echo $board['idx'];?>
                <?php echo $idx;?>
                
                                   
            </tbody>
            <?php } ?>
        </table>
        
        <div class="paging">   

            <a href="#" class="bt">첫 페이지</a>
            <a href="#" class="bt">이전 페이지</a>
            <a href="#" class="num on">1</a>
            <a href="#" class="num">2</a>
            <a href="#" class="num">3</a>
            <a href="#" class="bt">다음 페이지</a>
            <a href="#" class="bt">마지막 페이지</a>            

        </div>

        
        
    </div>

         <?php 
            
            if(isset($_SESSION['id'])){ ?>
           
            <form action="viewwritetop.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idxpost" value="<?php echo $idx?>">
            <input type="hidden" name="category" value="<?php echo $category?>">
            <input type="submit" value="글쓰기" class="submit_btn">       
            </form>
            
            
            <?php }else{ ?>

            <form action="loginerror.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idxpost" value="<?php echo $idx?>">
            <input type="hidden" name="category" value="<?php echo $category?>">
            <input type="submit" value="글쓰기" class="submit_btn">       
            </form>

            <?php } ?>   


    </div>   
    


    
</body>
</html>