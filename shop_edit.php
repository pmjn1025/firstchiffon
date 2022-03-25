<?php
        //중요!!!!!!!: 세션을 시작하기 전에 항상 session_start를 해야한다. 즉 session과 관계있는 모든 곳에서 반드시 제일 위에 아래와 같이
        //php 테그안에 session_start();를 선언하고 세션을 활용해야만한다.
        // Start the session
        session_start();
?>

<?php 

        include $_SERVER['DOCUMENT_ROOT']."/db.php";


        if(isset($_SESSION['id'])){
            
            echo "<h2>{$_SESSION['id']} 님 환영합니다.</h2>";

            }else{
            echo "<script>alert('로그인 해주세요.'); history.back();</script>";
        }
        
        $idx = $_GET['idx'];
        $sql = mq("select * from shopdata where idx='$idx';");
        $board = $sql->fetch_array();
    
        //echo $idx;

?>

<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="StyleSheet" href="style.css" type="text/css">
            <title>상품등록예제</title>
        </head>
        <body>

            <form action= "shop_edit_process.php?idx=<?php echo $idx; ?>" method="post" enctype="multipart/form-data">

        <table>

        <tr>
            <td>상품명 </td>
            <td><input type="text" name="name" size=30></td>
        </tr>

        <tr>
            <td>상품소개 </td>
            <td><input type="text" name= "comment" size="50"></td>
        </tr>

        <tr>
            <td>가격 </td>
            <td><input type="text" name="price" size="10"></td>
        </tr>

        <tr>
            <td>상품설명 </td>
            <td><textarea name="memo" cols="50" rows="10"></textarea></td>
        </tr>

        <tr>
            <td style="padding-top: 20px">상품사진</td>
            <td style="padding-top: 20px"><input type="file" name="img"></td>
        </tr>

        <tr>
            <td colspan="2" textalign="center" style="padding-top:20px">
            <input type="submit" value="상품수정">
            <input type ="button" onclick="location.href='shoplist'" value="수정취소">
        </td>
        </tr>
        </table>
        </form>

    
</body>
</html>