<?php

  // DB 연결 판단 php

  $db_host = "localhost";
  $db_user = "itbank";
  $db_pass = "itbank";
  $db_name = "webdb";

  $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

  if(!$conn) { //접속 실패
    // echo "<script>alert(\"DB 연결 실패\");</script>";
  }
  else { // 접속 성공
    // echo "<script>alert(\"DB 연결 성공\");</script>";
  }
?>
