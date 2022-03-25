<!DOCTYPE html>

<head>
    <meta charset="UTF-8">   
    <title>Document</title>
</head>
<body>
    <h1>array</h1>
    <?php
    $friends = array('박민준','함주형','박은기','이령빈');

    echo $friends[1].'<br>';
    echo $friends[3].'<br>';
    // 배열의 갯수를 리턴하는 코드
    echo count($friends).'<br>';
    
    // var_dump로 확인해보자.
    echo var_dump(count($friends)).'<br>';

    // 배열에 데이터 추가
    array_push($friends,'한영훈','가가린');

    echo var_dump(count($friends)).'<br>';

    echo $friends[5].'<br>';

    ?>
    
</body>
</html>