<!DOCTYPE html>
<head>
    <meta charset="UTF-8">    
    <title></title>
</head>
<body>
    <!--우리가 지금 만들고 있는 것은 parameter.php "주소" 를 가지고 있는 어플리케이션이다. 이 어플리케이션의 입력값을 주고 싶다면 http://192.168.119.129/parameter.php?name=pmjn 즉 주소창에서 ?변수=값을 입력한다. 여기서는 parameter.php라고 하는 어플리케이션에게 name=pmjn이다라는 입력값을 준 것이다. 그러면 parameter.php라고 하는 웹어플리케이션은 name이라고 하는 값에 따라 웹화면에 출력하게 할 수있다. 따라서 parameter.php라고 하는 웹어플리케이션 하나 가지고 많은 사람들에게 인사할 수있다. ex로그인시 OOO님 안녕하세요!이거 -->
    <!-- url로 넘어온 name의 값 -->
    <!--http://192.168.119.129/parameter.php?name=박민준&country=대한민국  처음에만 ? 그다음 내용을 추가하려면 ?&"로 계속 추가-->
    <!-- echo $_GET['값'];  -->
    안녕하세요. <?php echo $_GET['country'];?>에서 오신  <?php echo $_GET['name'];?>님. 
    
</body>
</html>