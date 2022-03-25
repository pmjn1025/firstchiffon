<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
      // scandir이라는 함수를 통해서 data라는 dir안에있는 파일 목록을 가져올 수 있고 그렇게 가져온 파일목록은 즉 scandir은 배열에 담아서 출력할수 있다.
      $list = scandir('./data');
      var_dump($list);
      ?>
      
    </ol>
    <h2>
      <?php
      // 만약에 id값이 있다면 if문 실행
      // isset() : isset() 함수의 경우 해당 변수에 값이 존재하는지(null 값인지) 체크한다. 값이 있으면 true, 값이 없으면 false
      if(isset($_GET['id'])){
        echo $_GET['id']; 
        
        

      }
      // 만약에 id값이 없다면 else문 실행
      else {
        echo "Welcome";
      }
      ?>
    </h2>
    <?php
    // echo file_get_contents("data/".$_GET['id']); 주소창에 있는 id값을 참조하여 데이터폴더에 있는 id와 동일한 파일을 가져와서 실행해라.라는 것
        
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']);
    } else {
      echo "Hello, PHP";
    }
     ?>
  </body>
</html>