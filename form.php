<?php
// post로 보낸것이 아니면 그냥 $_GET으로 받아도 되지만 post로 보낸 이상 $_POST로 받아야 된다.
//get,post일때 url 주소의 차이점 잘보기.
file_put_contents('data/'.$_POST['title'] , $_POST['description']);
 echo "<p> title : ".$_POST['title']."</p>";
 echo "<p> description : ".$_POST['description']."</p>";

?>