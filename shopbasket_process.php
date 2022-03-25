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


$id = $_SESSION['id'];
$category =$_POST['category'];
$title =$_POST['title'];
$subtitle =$_POST['subtitle'];
$price =$_POST['price'];
$quantity =$_POST['quantity'];
$size =$_POST['size'];
$color =$_POST['color'];
$img =$_POST['img'];
// 총금액은 여기서 계산해서 db에 저장하자
$totalmoney = $quantity * $price;

echo $id;
echo "<br>";
echo $category;
echo "<br>";
echo $title;
echo "<br>";
echo $subtitle;
echo "<br>";
echo $price;
echo "<br>";
echo $quantity.'개';
echo "<br>";
echo $size;
echo "<br>";
echo $color.'색상';
echo "<br>";
echo $img;
echo "<br>";
echo $totalmoney;
echo "<br>";

if($id !='' && $category !='' && $title !='' && $subtitle !='' && $price !='' && $quantity !='' && $size !='' && $color !='' && $img !=''&& $totalmoney !='' ){
 
    $sql="insert into shopbasket(id, category, title, subtitle, color, size, quantity, price, totalmoney, img ) values('$id','$category','$title','$subtitle','$color','$size','$quantity','$price','$totalmoney','$img');";    
   
    $result = mysqli_query($db, $sql);
   
   
       
        echo "<script>
        alert('장바구니에 상품을 담았습니다.');
        location.href='mypage.php';</script>";
        echo $pname;
        echo $comment;
        echo $price;
        echo $memo;
        echo $img_name;
       
    }else{
        if ($result === false) { // false가 나왔다면 무슨 에러인지 출력한다(29번 줄의  태그를 주석 쳐야 제대로 볼 수 있다)
            echo mysqli_error($db);
          }
        echo "<script>
        alert('상품정보를 모두 입력하셔야 됩니다.');
        history.back();</script>";
    }









  




?>