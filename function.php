<!DOCTYPE html>
<head>
    <meta charset="UTF-8">    
    <title>function</title>
</head>
<body>
    <h1>function</h1>
    <?php
    // str의 문자열의 갯수를 알고 싶다면 php string length를 검색하자!  
     
    $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
    
    Et itaque magni, nulla quam ex sed ipsa molestias sunt laudantium molestiae repellat neque distinctio. Quidem voluptatem doloremque perferendis,
    
    fugit qui eveniet.";

    echo $str;

    ?>
    <!-- strln(변수) : 내가 만든 문자의 갯수를 파악해준다. -->
    <h2>strlen()</h2>
    <?php
    echo strlen($str);
    ?>
    
    <h2>nl2br($str)</h2>
    <!--nl2br(변수) : new line을 br로 바꾼다. 변수내용을 내가 줄바꿈 한대로 자동으로 표현해준다. -->
    <?php       
    echo nl2br($str);
    ?>

</body>
</html>