<?php
// php파일을 삭제하는 코드를 입력하면된다.
unlink('data/'.$_POST['id']);
header('Location: /index5.php');
?>