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
    <!-- isset 인자로 들어오는값 체크 -->
    <?php if(isset($_GET['id'])) {  ?>
    <a href = "update.php?id=<?php echo $_GET['id']; ?>">update</a>

    
    <?php } ?>
    
     <h2>
         <?php
         print_title();
         ?>
     </h2>
     <?php
       print_description(); 
     ?>
     <!-- 수정할것은 위에 타이틀과 디스크립션을 보고 수정하기 때문에 아래에 넣고 create에 있는 form도 빌려왔다. <input>안에 value값을 넣으면 그값이 기본값이 된다. -->

     <form action = "update_process.php" method="post">
         <!-- 지금 변경하려는 이름은 바꾸려는 이름이다. 원래있던 이름이 아니다. 따라서 기존의 이름을 먼저 보내고 새로운 이름으로 rename 해줘야 한다. 사용자에게 노출되지 않으면서 action이 가리키는 곳으로 데이터를 전송할때 쓸만한 ui 그리고 이전의 이름이니까 현재의 id값을 value에 주면 되지 않을까? -->
        <input type="hidden" name="old_title" value="<?=$_GET['id'] ?>">

        <p>
        <input type = "text" name = "title" placeholder = "Title" value="<?php print_title();?>">    

        </p>  
        <p>
        <textarea name="description" placeholder="Description"><?php print_description(); ?></textarea>    
        </p>        
        <p>
           <input type="submit">         
    </p>
    

    
  </body>
</html>