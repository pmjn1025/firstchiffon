<!DOCTYPE html>
<head>
    <meta charset="UTF-8">    
    <title></title>
</head>
<body>
    <h1>Comparison Operator &amp;
        Boolean data type </h1>
       boolean data type과 비교 연산자의 상관관계<br>

    <?php
    //var_dump()함수에 입력값을 넣으면 입력값과 데이터 타입까지 출력할 수 있다.
    var_dump(1);

    echo '<br>';
        
    //var_dump('11')-->string(2)"11" 11이 문자열이고 2개의 문자로 이루어져 있다. 
    var_dump('11');

    echo '<br>';

    var_dump(1+1);
        
    ?>

    <!-- var_dump(1==1) : 1과 1이 같은가?라고 묻는 식이다. 따라서 답은 참 아니면 거짓이라고 나타내야한다. -->
    <h2>1==1</h2>

    <?php
    var_dump(1==1);
    ?>

    <h2>1>1</h2>

    <?php
    var_dump(1>1);
    ?>
    
    <h2>2>=1</h2>

    <?php
    var_dump(2>=1);
    ?>

    
</body>
</html>