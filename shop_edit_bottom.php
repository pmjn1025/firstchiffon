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
            <title>상품등록</title>

            <style>

.title{
    text-align : center;
    font-size : 30px;
    padding-bottom : 10px;

}


.table{

    display: flex;
    justify-content: center;
    align-items: center;
    

}

select {
text-align-last: center;
text-align: center;
-ms-text-align-last: center;
-moz-text-align-last: center;
}

.category{

padding-left : 543px;
}
</style>





        </head>



        <body>

        <div class="title">상품수정</div>
        <div class="title">Bottom</div>

            <form action= "shop_edit_bottom_process.php?idx=<?php echo $idx; ?>" method="post" enctype="multipart/form-data">

            <div class="category">
            <p> 카테고리  &nbsp;
                <SELECT name=category SIZE=1>
                    <OPTION VALUE="Default" SELECTED>카테고리를 선택해 주세요.</OPTION>
                    <OPTION VALUE="New Release!">New Release!</OPTION>
                    <OPTION VALUE="Popular!">Popular!</OPTION>
                    <OPTION VALUE="Top">Top</OPTION>
                    <OPTION VALUE="Outer">Outer</OPTION>
                    <OPTION VALUE="Bottom">Bottom</OPTION>
                    <OPTION VALUE="Shoes">Shoes</OPTION>
                </SELECT>
            </p>
            </div>   

        <table class="table">

        <tr>
            <td>상품명 </td>
            <td><input type="text" name="title" size=30></td>
        </tr>
        
        <tr>
            <td>가격 </td>
            <td><input type="text" name="price" size="10"></td>
        </tr>

        <tr>
            <td>상품설명 </td>
            <td><textarea name="description" cols="50" rows="10"></textarea></td>
        </tr>

        <tr>
            <td>사이즈1 </td>
            <td><input type="text" name="size" size="10"></td>
        </tr>
        <tr>
            <td>사이즈2 </td>
            <td><input type="text" name="size1" size="10"></td>
        </tr>
        <tr>
            <td>사이즈3 </td>
            <td><input type="text" name="size2" size="10"></td>
        </tr>

        <tr>
            <td>색상1 </td>
            <td><input type="text" name="color" size="10"></td>
        </tr>
        <tr>
            <td>색상2 </td>
            <td><input type="text" name="color1" size="10"></td>
        </tr>
        <tr>
            <td>색상3 </td>
            <td><input type="text" name="color2" size="10"></td>
        </tr>
        

        <tr>
            <td colspan="2" textalign="center" style="padding-top:20px">
            <input type="submit" value="상품수정">
            <input type ="button" onclick="location.href='shop_list_bottom.php'" value="수정취소">
                                 
        </td>
        </tr>
        </table>
        </form>

    
</body>
</html>