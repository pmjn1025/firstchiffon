<!DOCTYPE html>

<head>
    <meta charset="UTF-8">    
    <title></title>
</head>
<body>
    <h1>while</h1>
    <?php
    echo '1<br>';
    // $i는 초기값은 0
    $i = 0;
    //while문 안에 있는 조건식이 만족하면 true고 true가 되면 실행된다. 
    while($i < 3){
        echo '2<br>';
        $i = $i+1;
    }
    
    echo '3<br>';
    ?>
</body>
</html>