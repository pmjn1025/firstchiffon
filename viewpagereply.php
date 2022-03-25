<?php
//중요!!!!!!!: 세션을 시작하기 전에 항상 session_start를 해야한다. 즉 session과 관계있는 모든 곳에서 반드시 제일 위에 아래와 같이
//php 테그안에 session_start();를 선언하고 세션을 활용해야만한다.
// Start the session
session_start();
?>

<?php
	include $_SERVER['DOCUMENT_ROOT']."/db.php"; /* db load */

    if(isset($_SESSION['id'])){
    
        echo "<h5>{$_SESSION['id']} 님 환영합니다.</h5>";
    
        }else{
        echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
    } 
    
?>



<?php
function print_list(){
   
   $list = scandir('./uploads');   
   
     if($list[$i] !='.'){
         if($list[$i] !='..'){
             if($list == $board['file']){

                echo "<a href=\"home.php?id=$list[$i]\">$list[$i]</a>\n";

             }
     
     
     }
 }

  
}
?>

<!DOCTYPE html>
<html lang="kor">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상품 리뷰</title>

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
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Abril+Fatface&family=Alex+Brush&display=swap"
        rel="stylesheet">
    <!-- words 폰트 1-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">


    <!-- 참조하는 곳 잘보기 만약 이름이 같으면 동시에 참조되어서 굉장히 난감해진다. -->
    <link rel="stylesheet" href="css/css.css">

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

    a {
        text-decoration: none;
        /* 이거 쓰면 컬러 기본값인 검은색으로 변한다. */
        color: inherit;
    }

    a:hover {
        color: red;

    }



    body {
        margin: 0;
        background-image: url('modelbackground3.jpg');
        background-size: cover
    }

    .title1 {
        text-decoration: none;
        color: brown;
        font-size: 55px;
        padding-left: 200px;
        /* text-align: left; */
        margin-top: 0px;
        margin-bottom: 0px;
        /* padding: 0px; */
        /*타이틀 폰트 font-family: 'Alex Brush', cursive; */
        font-family: 'Alex Brush';
        letter-spacing: 12px
    }

    .subtitle {
        color: black;
        text-decoration: none;
        font-size: 25px;
        font-family: 'Shadows Into Light';
        /* text-align: left;     */
        margin: 0;
        padding-left: 200px
            /* padding-bottom: 10px; */
            /* border-bottom: 2px solid white; */
            /* line-height: 1; */
    }

    .subtitle1 {
        color: black;
        text-decoration: none;
        font-size: 20px;
        font-family: 'Shadows Into Light';
        /* text-align: left;     */
        margin: 0;
        padding-left: 270px;
        padding-bottom: 1px;
        line-height: 1;


    }

    .subtitle2 {
        color: black;
        text-decoration: none;
        font-size: 25px;
        font-family: 'Shadows Into Light';
        /* text-align: center;   */
        margin: 5;
        padding-left: 40px;
        padding-bottom: 1px;
        line-height: 1;
        letter-spacing: 5px
    }

    .href {
        background-color: black;
        color: white;
        text-decoration: none;
        text-align: center;
        border-bottom: 2px solid white;
        line-height: 1.3;
        font-size: 35px;
        font-family: 'Allura';
        word-spacing: 45px;
        letter-spacing: 3px
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

    <!-- 타이틀영역 -->
    <div class="board_wrap">
        <div class="board_title">
            <strong>상품 리뷰</strong>
            <p>리뷰를 남겨주세요.</p>

        </div>

        <?php
        // 주소창에 idx값이 있으니까 당연히 GET으로 받고 이 idx값으로 boardtest 테이블에 있는 idx에 해당하는 데이터들을 불러온다.?
        $idx = $_GET['idx']; /* idx함수에 idx값을 받아와 넣음*/
        $idxpost = $_GET['idxpost'];
        $category = $_GET['category'];

        echo $idx;
        echo $idxpost;
        echo $category;
        // 해당 idx를 선택함
        //boardtest table에서 boartposttest table로 바꿨다.
        $hit = mysqli_fetch_array(mq("select * from viewpost where idx ='$idx' and idxpost='$idxpost' and category='$category'"));
        // 조회수에 1을 더해준다.
        $hit = $hit['hit'] + 1;
        // 조회수에 1을 더해준것을 db에 최신화 시켜준다.
        //boardtest table에서 boartposttest table로 바꿨다.
		$fet = mq("update viewpost set hit = '$hit' where idx = '$idx' and idxpost='$idxpost' and category='$category'");
        
        $sql = mq("select * from viewpost where idx ='$idx' and idxpost='$idxpost' and category='$category'"); /* 받아온 idx값을 선택 */
        
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
                    <?php echo( "$board[content]<br>"); ?>
                    <!-- onerror="this.style.display='none'" 이미지 예외처리 -->
                    <img width="30%" alt="사진" onerror="this.style.display='none'"
                        src="./uploads/<?php echo $board['file'];?>">
                </div>



                <div>
                    <!-- 사진 다운로드  -->
                    파일 : <a href="./uploads/<?php echo $board['file'];?>" download><?php echo $board['file']; ?></a>
                </div>

            </div>

            <div class="bt_wrap">
                <a href="viewpagenewreleaselogin.php?idx=<?php echo $idxpost;?>" class="on">목록</a>

                <?php
                if(isset($_SESSION['id'])){ ?>

                <?php
                    if($_SESSION['id']== $board['id']){ ?>

                <!-- idx값을 GET으로 넘겨준다 -->
                <a
                    href="viewedit.php?idx=<?php echo $board['idx'];?>&&idxpost=<?php echo $idxpost;?>&&category=<?php echo $category;?>">수정</a>
                <!--delete.php에서 checkdeleteview.php로 바꿨다.  -->
                <a
                    href="viewdelete.php?idx=<?php echo $board['idx'];?>&&idxpost=<?php echo $idxpost;?>&&category=<?php echo $category;?>">삭제</a>


                <?php } else { ?>


                <?php } ?>


                <?php  }else{ ?>

                <a href="accesserror.php?idx=<?php echo $board['idx']; ?>"></a>

                <?php }?>

            </div>

        </div>
    </div>

    <!--- ==================================================댓글 불러오기================================================= -->
    <div class="reply_view">
        <div class="reply_title">댓글목록</div>
        <?php
			$sql3 = mq("select * from viewreply where con_num='$idx' and idxpost='$idxpost' and category='$category' order by idx desc");
            // $reply는 $sql3의 쿼리문(replytest table에 있는 con_num)을 가져온 데이터
			while($reply = $sql3->fetch_array()){ 
		?>
        <div class="dap_lo">
            <div><b><?php echo $reply['id'];?></b></div>
            <div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
            <div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
            <div class="rep_me rep_menu">


                <?php
                if(isset($_SESSION['id'])){ ?>

                <?php
                    if($_SESSION['id']== $reply['id']){ ?>

                <a class="dat_edit_bt">수정</a>
                <a class="dat_delete_bt">삭제</a>

                <?php } else { ?>

                <?php } ?>

                <?php  }else{ ?>

                <a href="accesserror.php?idx=<?php echo $board['idx']; ?>"></a>

                <?php }?>



            </div>
            <!-- 댓글 수정 폼 dialog -->
            <div class="dat_edit">
                <form method="post"
                    action="viewreplyedit_process.php?idx=<?php echo $idx;?>&&idxpost=<?php echo $idxpost;?>&&category=<?php echo $category;?>">
                    <!-- rno는 리플 idx번호 변수reply잘 봐라 위에 $reply의 정의한거 보기  -->
                    <input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" />
                    <!-- bno는 게시글 idx번호 즉 replytest의 con_num과 같다. -->
                    <input type="hidden" name="b_no" value="<?php echo $idx; ?>">
                    <input type="hidden" name="pw" value=<?php echo $_SESSION['passowrd'] ?> class="dap_sm"
                        placeholder="비밀번호" />
                    <textarea name="content" class="dap_edit_t"><?php echo $reply['content']; ?></textarea>
                    <input type="submit" value="수정하기" class="re_mo_bt">
                </form>
            </div>
            <!-- 댓글 삭제 비밀번호 확인 -->
            <div class='dat_delete'>
                <!-- replydeletetest_process.php로 바꾸기 -->
                <form
                    action="viewreplydelete_process.php?idx=<?php echo $idx;?>&&idxpost=<?php echo $idxpost;?>&&category=<?php echo $category;?>"
                    method="post">
                    <input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" />
                    <input type="hidden" name="b_no" value="<?php echo $idx; ?>">
                    <p>로그인 비밀번호<input type="password" name="pw" /> <input type="submit" value="확인"></p>
                </form>
            </div>
        </div>
        <?php } ?>

        <!--- 댓글 입력 폼 -->

        <div class="dap_ins">
            <form
                action="viewreply_process.php?idx=<?php echo $idx;?>&&idxpost=<?php echo $idxpost;?>&&category=<?php echo $category;?>"
                method="post">
                <input type="hidden" name="dat_user" id="dat_user" value=<?php echo $_SESSION['id'] ?> class="dat_user"
                    size="15" placeholder="아이디">
                <input type="hidden" name="dat_pw" id="dat_pw" value=<?php echo $_SESSION['password'] ?> class="dat_pw"
                    size="15" placeholder="비밀번호">
                <div style="margin-top:10px; ">
                    <textarea name="content" class="reply_content" id="re_content"></textarea>
                    <button id="rep_bt" class="re_bt">댓글</button>
                </div>
            </form>
        </div>
    </div>
    <!--- 댓글 불러오기 끝 -->
    <div id="foot_box"></div>
    </div>


</body>

</html>