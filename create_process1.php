<?php
file_put_contents('board/'.$_POST['title'] , $_POST['description'] , $_POST['writer'] , $_POST['pw']);
//file_put_contents('board/'.$_POST['writer'] , $_POST['pw']);

$list = scandir('../board');
  for ($i=0; $i < count($list) ; $i++) {
    if ($list[$i]==$_POST['title']) {
        //header('Location: /contact.php?id='.$_POST['title']);
    }//if
  }//for

?>

<p>title: <?php echo $_POST["title"]; ?></p>
<p>pw: <?php echo $_POST["pw"]; ?></p>
<p>writer: <?php echo $_POST["writer"]; ?></p>
<p>desrtiption: <?php echo $_POST["description"]; ?></p>