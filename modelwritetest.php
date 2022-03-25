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
  
        <a href="home.php" class="title1">Chiffons</a>
        <a href="top.php" class="subtitle2">Top</a>
        <a href="outer.php" class="subtitle2">Outer</a>
        <a href="bottom.php" class="subtitle2">Bottom</a>
        <a href="shoes.php" class="subtitle2">Shoes</a>
        <a href="contacttest.php" class="subtitle2">Contact</a>
   
    <div class="subtitle">-change your everything-</div>
    <div class="subtitle1">Since 2021</div>

    <div class="board_wrap">
        <div class="board_title">
            <strong>상품 리뷰</strong>
            <p>리뷰를 남겨주세요.</p>

       </div>
       

       <!-- "enctype="multipart/form-data"을 추가. 이는 기존 post 방식에서 데이터전송하는 용량보다 더 큰 용량을 전송할 수 있게 해준다 -->
        <!-- =============== enctype="multipart/form-data" 이거 안적으면 업로드자체가 안된다.========================= -->
       <form action = "modelwritetest_process.php" method="post" enctype="multipart/form-data">
       
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
                           <dt>글쓴이</dt>
                           <!-- name이 아닌 id로 -->
                           <dd><input type="text" name="id" placeholder="작성자 입력">
                        </dd>
                       </dl>
                       <dl>
                        <dt>비밀번호</dt>
                        <dd><input type="password" name="pw" placeholder="비밀번호 입력">
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
                        <!-- 다중이미지는 name = 이름[]로 배열로 묶어야 된다. 그리고 multiple='multiple' 추가해야 된다. -->
                        <input type="file" name="myfile"/>
                    </div>

           </div>
           
            <div class="bt_wrap">
                <!-- 나중에 수정하기 -->
                <input type ='submit' class="submit_btn">등록</a>              
                 <a href="model.php">취소</a>

            </div>            
        
       </div>
    </div>

</form>

</body>
</html>
