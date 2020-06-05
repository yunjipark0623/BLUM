<?php
$target_dir = "../uploads";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check != false) {
        echo "File is an image - " . $check["mime"];
        $uploadOk = 1;
    }
    else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if(file_exists($target_file)) { // 동일한 파일 저장 불가능
    echo "동일한 파일이 존재합니다.";
    $uploadOk = 0;
}

if($_FILES["fileToUpload"]["size"] > 5000000) { // 파일 이미지 크기 제한
    echo "파일 크기가 너무 큽니다.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") { // jpg, png, jpeg파일만 업로드 가능
    echo "jpg, png, jpeg파일만 업로드 가능합니다.";
    $uploadOk = 0;
}


// 최종 업로드 결과 출력
if($uploadOk == 0) { 
    echo "파일이 업로드 되지 않았습니다.";
}
else {
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<img src ='../uploads'" . basename($_FILES["fileToUpload"]["name"]). ">";
    }
}

?>