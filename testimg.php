<!DOCTYPE html>
<html>
<head>
    <!-- js 사용해서 이미지 바꾸기. 공부해보기 -->
    <title>방문할 때마다 변하는 이미지</title>
    <script type="text/javascript">
        var imgArray = new Array();
        imgArray[0] = "praha.jpg";
        imgArray[1] = "huu.jpg";
        imgArray[2] = "style.jpg";
 
        function showImage() {
            var imgNum = Math.round(Math.random()*2);
            var objImg = document.getElementById("introImg");
            objImg.src = imgArray[imgNum];
            setTimeout("showImage()", 1000);
        }
 
    </script>
</head>
<body onload="showImage()">
     <img id ="introImg" >
</body>
</html>