<?php

  // 로그인 php

  require_once("./db_con.php");

  $userid=$_POST["login_id"];
  $userpw=$_POST["login_pw"];

  echo "<script>console.log('$userid $userpw');</script>";

  $sql_check = "SELECT * FROM member WHERE ID='$userid' and PW=password('$userpw')";
  $result = $conn->query($sql_check);
  $num = $result->num_rows;

  if($num > 0) { // 만약 DB에 저장된 값과 입력 값이 같다면 로그인 성공
    session_start();
    $_SESSION["userid"] = $userid;
    echo "<script>alert(\"환영합니다\");</script>";
    echo "<script>location.replace('./index_auth.php');</script>";
  }
  else {
    echo "<script>alert(\"아이디 또는 비밀번호를 확인바랍니다.\");</script>";
    echo "<script>window.history.back();</script>";
  }
?>
