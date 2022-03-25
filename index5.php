<?php
function print_title(){
    
      if(isset($_GET['id'])){
        echo $_GET['id'];    

      }
      // 만약에 id값이 없다면 else문 실행
      else {
        echo "Welcome";
      }
}

function print_description(){    
        
    if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
      } else {
        echo "Hello, WEB";
      }


}

function print_list(){
   
      $list = scandir('./data');      
      
      $i = 0;
      while($i < count($list)){
        if($list[$i] !='.'){
            if($list[$i] !='..'){
        
        echo "<li><a href=\"index5.php?id=$list[$i]\">$list[$i]</a></li>\n";
        }
    }

        $i = $i + 1;
      }  
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <!-- 아 <title>이게 주소창 위에 있는 이름이구나.... -->
    <title>
          
    <?php

    print_title();
      
      ?>

    </title>
  </head>
  <body>
    <h1><a href="index5.php">WEB</a></h1>
    <ol>
      <?php

    print_list();
        
      ?>      
    </ol>

    <a href = "create.php">create</a>
    <!-- isset 인자로 들어오는값 체크 즉 id값이 있을때 업데이트를 보여줌-->
    <!-- 참고로 삭제는 폼이 필요없다. -->
    <?php if(isset($_GET['id'])) {  ?>
    <a href = "update.php?id=<?=$_GET['id']?>">update</a>
    <!--아래와 같은 방식은 링크방식이라서 get과 거의 유사한 문제가 발생한다. 따라서 아래 코드 밑에 폼을 사용해서 delete를 수행한다.  -->
    <!-- <a href = "delete_process.php?id=?=$_GET['id']; ?>">delete</a> -->

    <form action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" value="delete">
      </form>

    <?php } ?>
    

    <!-- <form action = "create_process.php" method="post">
        <p>
        <input type = "text" name = "title" placeholder = "Title">    

        </p>  
        <p>
        <textarea name="description" placeholder="Description"></textarea>    
        </p>        
        <p>
           <input type="submit">         
    </p> -->
     <h2>
         <?php
         print_title();
         ?>
     </h2>
     <?php
       print_description(); 
     ?>
    

    
  </body>
</html>