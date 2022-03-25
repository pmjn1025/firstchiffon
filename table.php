<!DOCTYPE html>
<html>
<head>    
    <title>Document</title>
    <link rel="stylesheet" href="styletable.css">
    

</head>
<!-- <tbody> 태그는 HTML 테이블에서 내용 콘텐츠(body content)들을 하나의 그룹으로 묶을 때 사용한다. 
     <tbody> 요소는 테이블의 각 영역(header, body, footer)을 명시하기 위해 <thead>, <tfoot> 요소와 함께 사용하고
     브라우저는 이러한 요소들을 사용하여 테이블의 헤더나 푸터와는 독립적으로 테이블의 내용만 스크롤되게 할 수 있으며, 여러 페이지에 걸쳐 있는 큰 테이블을 인쇄할 때 각 페이지의 상단과 하단에 테이블의 헤더와 푸터가 모두 인쇄되도록 할 수도 있다.
     <tbody> 요소는 <table> 요소의 자식 요소로써, 반드시 모든 <caption>, <colgroup>, <thead> 요소 다음에 위치해야 합니다. 또한, <tbody> 요소는 반드시 하나 이상의 <tr> 요소를 포함하고 있어야 한다.
     <thead>와 <tbody>, <tfoot> 요소는 기본적으로 웹 페이지의 레이아웃에 전혀 영향을 주지 않지만, 이 요소들의 스타일을 CSS를 사용하여 변경할 수는 있다.-->

<!--<tr> 태그는 테이블에서 셀들로 이루어진 하나의 행(row)을 정의할 때 사용한다.
    <tr> 요소는 하나 이상의 <th> 요소(data cell)나 <td> 요소(header cell)를 포함할 수 있다.  -->

<!--<th> 태그는 HTML 테이블에서 제목이 되는 헤더 셀(header cell)을 정의할 때 사용한다.  -->

<body>
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
                        <a href="#">웹사이트 개설을 축하드립니다.</a>
                </td>
                    <td>개발자</td>
                    <td>2021-8-20</td>
                    <td>11</td>
                </tr>        
            </tbody>
        </table>
        
        <div class="paging">
            <a href="#" class="bt1">글쓰기</a>
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