<?php
//중요!!!!!!!: 세션을 시작하기 전에 항상 session_start를 해야한다. 즉 session과 관계있는 모든 곳에서 반드시 제일 위에 아래와 같이
//php 테그안에 session_start();를 선언하고 세션을 활용해야만한다.
// Start the session
session_start();
?>

<?php
	include $_SERVER['DOCUMENT_ROOT']."/db.php";

    if(isset($_SESSION['id'])){
    
        echo "<h5>{$_SESSION['id']} 님 환영합니다.</h5>";
    
        }else{
        echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
    } 
   
	$idx = $_GET['idx'];
    $idxpost = $_GET['idxpost'];
    $category = $_GET['category'];
	$sql = mq("select * from viewpost where idx='$idx' and idxpost='$idxpost' and category='$category';");
	$board = $sql->fetch_array();

    echo $idx;
    echo $idxpost;
    echo $category;
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
background-image:url('modelbackground3.jpg');
background-size: cover
}

.title1 {
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

.submit_btn{
    background: black;
    color : white;
    display: inline-block;
    min-width: 100px;
    padding: 10px;
    margin-left: 10px;
    border: 1px solid black;
    border-radius: 2px;
    font-size: 1.4rem;

}



 </style>




</head>
<body>
    <br>

        <a href="viewhomelogin.php" class="title1">Chiffons</a>
        <a href="viewtoplogin.php" class="subtitle2">Top</a>
        <a href="viewouterlogin.php" class="subtitle2">Outer</a>
        <a href="viewbottomlogin.php" class="subtitle2">Bottom</a>
        <a href="viewshoeslogin.php" class="subtitle2">Shoes</a>
        <a href="contacttestlogin.php" class="subtitle2">Contact</a>
   
    <div class="subtitle">-change your everything-</div>
    <div class="subtitle1">Since 2021</div>

    <div class="board_wrap">
        <div class="board_title">
            <strong>상품 리뷰</strong>
            <p>리뷰를 남겨주세요.</p>
       </div>

       

       <!-- board_list_wrap이 또 들어가는 이유는 안에 리스트 페이지 버튼 영역이 있어서 한꺼번에 적용하기위해서다. -->
       <div class="board_write_wrap">

       <!-- 게시판 리스트 -->
       <!-- "enctype="multipart/form-data"을 추가. 이는 기존 post 방식에서 데이터전송하는 용량보다 더 큰 용량을 전송할 수 있게 해준다 -->
       <!-- =============== enctype="multipart/form-data" 이거 안적으면 업로드자체가 안된다.========================= -->
           <div class="board_write">
           <form action="vieweditbottom_process.php?idx=<?php echo $idx;?>&&idxpost=<?php echo $idxpost;?>&&category=<?php echo $category;?>" method="post" enctype="multipart/form-data">
                   <div class="title">
                       <dl>
                           <dt>제목</dt>
                           <dd>                           
                            <input type="text" name="title" placeholder="제목 입력" value=<?php echo $board['title']; ?> >                          
                        </dd>

                       </dl>
                   </div>
                   <div class="info">
                        <dl>
                           <dt></dt>
                           <dd><input type="hidden" name="id" value=<?php echo $_SESSION['id'] ?>>
                        </dd>
                       </dl>
                       <dl>
                        <dt></dt>
                        <dd><input type="hidden" name="pw" value=<?php echo $_SESSION['password'] ?>>
                        </dd>
                    </dl>
                    </div>

                   <div class="cont">
                       <textarea name="content" placeholder="글내용이 들어갑니다.">
                       <?php echo $board['content']; ?>
                       </textarea>
                   </div>

                   <div id="in_file">
                        <!-- 다중이미지는 name = 이름[]로 배열로 묶어야 된다. 그리고 multiple='multiple' 추가해야 된다. -->
                        <input type="file" name="myfile"/>
                    </div>

                   <!-- postidx, category -->
                   <input type="hidden" name="idxpost" value="<?php echo $idxpost?>">

                   <input type="hidden" name="category" value="<?php echo $category?>">
                   
           </div>
            
            <div class="bt_wrap">
                <!-- 나중에 수정하기 submit을 value값을 주어서 수정으로 글자 바꿈.-->
                <input type ='submit' class="submit_btn" value ="수정"></a>
                 <a href="viewpagereplybottom.php?idx=<?php echo $idx;?>&&idxpost=<?php echo $idxpost;?>&&category=<?php echo $category;?>">취소</a>

            </div>   

            </form>

       </div>
    </div>
  
</body>
</html>