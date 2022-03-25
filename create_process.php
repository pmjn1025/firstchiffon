<?php
file_put_contents('data/'.$_POST['title'] , $_POST['description']);

//리다이렉션 : 사용자가 create_process.php로 submit해서 도착할때 사용자를 다른 페이지로 보내는 기능. 다른 방향으로 보낸다.
//index는 항상 최신껄로 변해라
header('Location: /index5.php?id='.$_POST['title']);

?>