<!-- 뒤로가기해서 새로고침하기 -->
<?php
rename('data/'.$_POST['old_title'], 'data/'.$_POST['title']);

file_put_contents('data/'.$_POST['title'], $_POST['description']);

header('Location: /index5.php?id='.$_POST['title']);
?>