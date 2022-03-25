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

$idx=$_GET['idx'];
$id=$_SESSION['id'];


?>

<html>

<head>
    <link rel="StyleSheet" href="style.css" type="text/css">

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

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

<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>

<h2 style ="text-align : center;" > <?php echo $_SESSION['id'].'님의'; ?> 상품 결제</h2>

<div class="arrange">

<h3>상품결제 정보</h3> 

</div>

    

<div class="btn">
 

<input type="button" value="메인화면으로" onClick="location.href='viewhomelogin.php'">

</div>

<table>
    
        <tr>
            
            <th>카테고리</th>
            <th>상품명</th>
            <th>상품이미지</th>
            <th>수량</th>
            <th>가격</th>
            <th>사이즈</th>            
            <th>색상</th>
            <th>총가격</th>           
            
            
        </tr>

<?php

    $sql = mq("select * from shopbasket where idx='$idx' and id='$id' order by idx desc");

        while($board = $sql->fetch_array()){?>
        <tr>
           
            <td width="150px"><?php echo $board['category'];?></td>     

            <td width="320px"><?php echo $board['title'];?></td>

            <td width="400px">
            <img width="50%" alt ="사진" onerror="this.style.display='none'" src="./<?php echo $board['subtitle'];?>/<?php echo $board['img'];?>"></td>

            <td width="100px"><?php echo ($board ['quantity']).'개';?></td>

            <td width="100px"><?php echo ($board ['price']).'원';?></td>


            <td width="100px"><?php
             echo ($board ['size']."<br>");
                       
             ?>
             </td>

             <td width="100px"><?php
             echo ($board ['color']."<br>");
                   
             ?>
             </td> 
             
             </td>

             <td width="100px"><?php
             echo $board ['totalmoney'].'원';
                   
             ?>
             </td> 

                  
       
</td>
</tr>
        

        </div>
</table>

        <div class="arrange">
        
        <h3>주문 정보 입력</h3> 
    
        </div>

        <div class="arrange">
        <form action ="shoppay_process.php" target="_blank" method="post">
        받는이 : <input type ="text" name="buyername"> 
        <br>

        전화번호 :  <input type ="text" name="phonenumber"> 
        <br>

        우편번호 : <input type="text" name="zip" style="width:80px; height:26px;" /> &nbsp;
        <button type="button" style="width:60px; height:32px;" onclick="openZipSearch()">검색</button>
        <br>
        &nbsp;
        주소 : <input type="text" name="addr1" style="width:150px; height:30px;" readonly />
        <br>

        &nbsp;&nbsp;상세주소 : <input type="text" name="addr2" style="width:200px; height:30px;" />
        <br>
        <br>

        주문 주의사항 <p> <textarea name="content" style="width:300px; height:130px;" placeholder="글내용이 들어갑니다." > </textarea></p>
        
        <input type ="hidden" name="totalmoney" value=<?php echo $board ['totalmoney'] ?>>
        <input type ="hidden" name="title" value=<?php echo $board['title'];?>>

        
 <input type='submit' class="submit_btn" value='결제하기'>

 <script>
 function openZipSearch() {
	new daum.Postcode({
		oncomplete: function(data) {
			$('[name=zip]').val(data.zonecode); // 우편번호 (5자리)
			$('[name=addr1]').val(data.address);
			$('[name=addr2]').val(data.buildingName);
		}
	}).open();
}
</script>
    </div>

    <?php
            }?>

</body>
</html>
  
