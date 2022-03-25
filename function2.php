<!DOCTYPE html>
<head>
    <meta charset="UTF-8">    
    <title>function</title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php

    print("1<br>");
    print("2<br>");
    // 참고 : 하나의 함수는 하나의 기능을 가진다.
    // basic함수 정의
    // 이 function은 약속된 기호이다. php는 function이라고 하는 약속된 문자가 입력되면 지금부터 함수를 정의 할려고 하는구나 함수의 이름이 basic이다.
      function basic(){
        print("Lorem ipsum dolor1<br>");
        print("Lorem ipsum dolor2<br>");
        
      }  


    //basic이라는 함수가 실행되는 코드
    basic();
    basic();
?>

    <h2>parameter(매개변수) &amp; argument(입력값)</h2>
    <?php
    // $left, $right : parameter(매개변수)
    // 2,4 : argument(입력값)

    function sum($left, $right){
        // 입력값을 더해서 출력한다.
        print($left + $right);
        print("<br>");
    }

    sum(2,4);
    sum(4,6);
    
    ?>
    <h2>return</h2>
    <?php
    // 함수가 동작한 결과값을 계산해서 값이 되기때문에 파일저장,이메일전송,업로드할 수 있다.
    
    function sum2($left,$right){
        return $left + $right;
    // return 함수 아래있는 코드는 실행 되지않는다. 리턴에서 함수가 종료된다. 
        echo 32144132;
    }
    
    
    print(sum2(2,4));
    
    file_put_contents('result.txt', sum2(2,4));
    
    //mail('pmjn1025@naver.com',sum2(2,4));    
   
    
    ?>
    
</body>
</html>