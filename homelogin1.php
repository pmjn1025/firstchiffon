<?php include $_SERVER['DOCUMENT_ROOT']."/db.php"; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>메인페이지</title>
</head>
<body>
	<?php
    include 'include/session.php';
    echo "<h2>{$_SESSION['id']} 님 환영합니다.</h2>";
	?>
</body>
</html>