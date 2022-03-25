<?php
   $connect = mysqli_connect("localhost", "root", "nexen1942" , "testdb1");
   $query = "SELECT * FROM topic";
   $result = mysqli_query($connect, $query);
   if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
       
   echo "아이디: ". $row["id"]. "타이틀: ".$row["title"]."디스크립션: ".$row["description"].  "이름: ". $row["name"]. " 작성시간:" . $row["created"]. "<br>";
   }
   }else{
   echo "테이블에 데이터가 없습니다.";
   }
   mysqli_close($conn); // 디비 접속 닫기
?>


