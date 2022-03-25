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

    <form action = "create_process.php" method="post">
        <p>
        <input type = "text" name = "title" placeholder = "Title">    

        </p>  
        <p>
        <textarea name="description" placeholder="Description"></textarea>    
        </p>        
        <p>
           <input type="submit">         
    </p>
</form>

    

    
  </body>
</html>