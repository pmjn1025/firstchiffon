<?php
file_put_contents('board/'.$_POST['email'] , $_POST['password'] , $_POST['repassword'], $_POST['name']);


//header('Location: /home.php');
?>

<p>ID: <?php echo $_POST["email"]; ?></p>
<p>pw: <?php echo $_POST["password"]; ?></p>