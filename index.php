<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <li><a href="index.php?id=HTML">HTML</a></li>
      <li><a href="index.php?id=CSS">CSS</a></li>
      <li><a href="index.php?id=JavaScript">JavaScript</a></li>
      <li><a href="index.php?id=PHP">PHP</a></li>
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