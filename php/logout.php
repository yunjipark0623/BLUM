<?php

  // 로그아웃 php

  session_start();
  session_destroy();

  echo "<script>alert(\"정상적으로 로그아웃 되었습니다.\");</script>";
  echo "<script>location.replace('../index.html');</script>";
?>
