<!DOCTYPE html>
<!-- 기본 포맷 설정 아무것도 없는 빈 html에다가 그럼 1번 줄이 비어있겠지 그럼 1번 줄에 ! + 탭키 누르면 html기본 구조 자동완성. -->
<html lang="kor">
<head>
    <meta charset="UTF-8">    
    <title>Document</title>
</head>
<body>
    <h1>Variable</h1>
    <?php
    // $a는 변수이고 반드시 변수이름 앞에 $를 표시한다.
    $a= 10;
    echo $a+1;
    ?><br>
    
    <!-- Lorem이라고 입력하면 의미없는 텍스트가 나온다.  -->
    <?php
    $name = "하쿠나";
    //위에것을 문장들에 적용할시  ".$name." --> ".$변수."
    echo "Lorem ipsum dolor sit, ".$name." amet consectetur adipisicing elit. Tempore ".$name." itaque, inventore reprehenderit quos, corrupti modi molestias explicabo omnis assumenda ".$name." minima exercitationem qui ut eligendi nemo? Explicabo, ".$name." eius aperiam? Harum, eveniet!";       
    ?>

    <h2>자기소개</h2>
    <!-- php 항상 문장 끝에 ;을 잘붙이자. -->
    <?php
    $name ="박민준";
    $age = 32;
    $major = "철학";
    echo "안녕하십니까? 저의 이름은 ".$name."입니다.
    저의 나이는 ".$age."살이고 저의 전공은 ".$major."입니다. 잘부탁드립니다.";


    ?>
    

    
</body>
</html>