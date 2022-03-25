<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <!-- 참조하는 곳 잘보기 만약 이름이 같으면 동시에 참조되어서 굉장히 난감해진다. -->
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <div class="board_wrap">
        <div class="board_title">
            <strong>게시판</strong>
            <p>확인 즉시 댓글로 연락드립니다.</p>

       </div>
       <!-- board_list_wrap이 또 들어가는 이유는 안에 리스트 페이지 버튼 영역이 있어서 한꺼번에 적용하기위해서다. -->
       <div class="board_list_wrap">

       <!-- 게시판 리스트 -->
           <div class="board_list">
                   <div class="top">
                        <div class="num">번호</div>
                        <div class="title">제목</div>
                        <div class="writer">글쓴이</div>
                        <div class="date">작성일</div>
                        <div class="count">조회</div>

                   </div>
                   <div>
                        <div class="num">5</div>
                        <div class="title"><a href="view.php">안녕하세요1</a></div>
                        <div class="writer">개발자4</div>
                        <div class="date">2021-8-24</div>
                        <div class="count">333</div>
                   </div>
                   <div>
                         <div class="num">4</div>
                        <div class="title"><a href="view.php">ㅎㅇㅎㅇ</a></div>
                        <div class="writer">개발자3</div>
                        <div class="date">2021-8-23</div>
                        <div class="count">333</div>
                   </div>
                   <div>
                        <div class="num">3</div>
                        <div class="title"><a href="view.php">ㅎㅇ</a></div>
                        <div class="writer">개발자2</div>
                        <div class="date">2021-8-22</div>
                        <div class="count">333</div>

                   </div>
                   <div>
                        <div class="num">2</div>
                        <div class="title"><a href="view.php">ㅇㅎ</a></div>
                        <div class="writer">개발자1</div>
                        <div class="date">2021-8-21</div>
                        <div class="count">333</div>

                   </div>
                   <div>
                        <div class="num">1</div>
                        <div class="title"><a href="view.php">ㅇㅇ</a></div>
                        <div class="writer">개발자</div>
                        <div class="date">2021-8-20</div>
                        <div class="count">333</div>

                   </div>
           </div>
            <div class="board_page">
                <a href="#" class="bt first"><<</a>
                <a href="#" class="bt prev"><</a>
                <a href="#" class="num on">1</a>
                <a href="#" class="num">2</a>
                <a href="#" class="num">3</a>
                <a href="#" class="num">4</a>
                <a href="#" class="num">5</a>                
                <a href="#" class="bt next">></a>
                <a href="#" class="bt last">>></a>

           </div>
            <div class="bt_wrap">
                <a href="write.php" class="on">등록</a>
                <!-- <a href="#">수정</a> -->

            </div>

       </div>
    </div>
</body>
</html>