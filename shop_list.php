<?php

//중요!!!!!!!: 세션을 시작하기 전에 항상 session_start를 해야한다. 즉 session과 관계있는 모든 곳에서 반드시 제일 위에 아래와 같이
//php 테그안에 session_start();를 선언하고 세션을 활용해야만한다.
// Start the session
session_start();


include $_SERVER['DOCUMENT_ROOT']."/db.php";

if(isset($_SESSION['id'])){
    
    echo "<h5>{$_SESSION['id']} 님 환영합니다.</h5>";

    }else{

    echo "<script>alert('로그인 해주세요.'); history.back();</script>";
}

?>

<html>

<head>
    <link rel="StyleSheet" href="style.css" type="text/css">
    <style>

        table {
            width:1000px; 
            margin: auto;
        }

        table, td, th {
            border-collapse : collapse;
            border : 1px solid black;
            text-align : center;
            padding-top : 10px;
            padding-bottom : 10px;
        }

        .btn{
            padding-left : 268px;
            padding-bottom : 10px;

        }

        .paging{
            text-align : center;
            padding-top : 10px;
        }
        
        .arrange{

            word-spacing:5px;
            text-align : center;
        }
        
            
    </style>   
</head> 

<body>

<h3 style ="text-align : center;" >상품목록</h3>

<div class="arrange">
<h5>상품 분류</h5> 
<a href="shop_list_home.php">home |</a>
<a href="shop_list_newrelease.php">| new release |</a>
<a href="shop_list_popular.php">popular |</a>
<a href="shop_list_top.php">top |</a>
<a href="shop_list_outer.php">outer |</a>
<a href="shop_list_bottom.php">bottom |</a>
<a href="shop_list_shoes.php">shoes |</a>
</div>

    

<div class="btn">
 
 <input type="button" value="상품추가" onClick="location.href='additem.php'">
 <input type="button" value="주문내역" onClick="location.href='order_list.php'">
 <input type="button" value="홈으로" onClick="location.href='homeadmin.php'">

</div>

<table>
    
        <tr>
            <th>번호</th>
            <th>상품명</th>
            <th>상품이미지</th>
            <th>가격</th>
            <th>작성일</th>
            <th>기타</th>
        </tr>

<?php

    $sql = mq("select * from shopdata order by idx desc");

        while($board = $sql->fetch_array()){?>
        <tr>
            <td><?php echo $board['idx'];?></td>   

            <td><?php echo $board['name'];?></td>

            <td width="400px">
            <img width="40%" alt ="사진" onerror="this.style.display='none'" src="./uploads/<?php echo $board['img'];?>"></td>

            <td width="100px"><?php echo ($board ['price']).'원';?></td>

            <td><?php echo $board['date'];?></td>

        <td>
            
            <a href ="shop_edit.php?idx=<?php echo $board['idx']; ?>"  style="text-decoration: none;" >상품수정</a> <br>
            <a href="shop_list_del.php?idx=<?php echo $board['idx'];?>" style="text-decoration: none;" >상품삭제</a></td>
        </tr>

        
        <?php
            }?>
</td>
</tr>
        

        </div>
</table>

        <div class="paging" >
            <a href="modelwritetest.php" class="bt1">글쓰기</a>
            <a href="#" class="bt">첫 페이지</a>
            <a href="#" class="bt">이전 페이지</a>
            <a href="#" class="num on">1</a>
            <a href="#" class="num">2</a>
            <a href="#" class="num">3</a>
            <a href="#" class="bt">다음 페이지</a>
            <a href="#" class="bt">마지막 페이지</a>

        </div>

</body>
</html>
  
