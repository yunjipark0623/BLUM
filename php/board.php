<?php
    require_once("./db_con.php");
    session_start();

    $comment = $_POST["comment"];
    $name = $_SESSION["userid"];

    echo "<script>console.log('들어옴');</script>";

    $insert_sql = "INSERT INTO board (Comment,userid) VALUES ('$comment','$name')";

    if(mysqli_query($conn,$insert_sql)) {
        $CNT = "SET @CNT=0";
        $conn->query($CNT);
        $Auto_Increment = "UPDATE board SET No = @CNT:=@CNT+1";
        $conn->query($Auto_Increment);

        echo "<script>alert(\"정상적으로 등록되었습니다.\");</script>";
        echo "<script>location.replace('./detail-page.php');</script>";
        exit;
    }
?>