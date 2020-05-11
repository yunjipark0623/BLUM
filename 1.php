<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>   
<body>
<?php
ini_set("display_errors", "1");
$uploaddir = 'C:\xampp\htdocs\upload\\';
$uploadfile = $uploaddir . basename($_FILES['photo']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
    echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
    echo "<script>location.replace('./profile.php');</script>";
} else {
    print "파일 업로드 공격의 가능성이 있습니다!\n";
}
?>
</body>
</html>


<div id="main_container">

<div class="post_form_container">
    <form action="./php/1.php" class="post_form" method="POST" enctype="multipart/form-data">
        <div class="title">
            NEW POST
        </div>
        <div class="preview">
            <div class="upload">
                <div class="post_btn">
                    <div class="plus_icon">
                        <span></span>
                        <span></span>
                    </div>
                    <p>포스트 이미지 추가</p>
                    <canvas id="imageCanvas"></canvas>
                    <!--<p><img id="img_id" src="#" style="width: 300px; height: 300px; object-fit: cover" alt="thumbnail"></p>-->
                </div>
            </div>
        </div>
        <p>
            <input type="hidden" name="MAX_FILE_SIZE" value="990000">
            <input type="file" name="photo" id="id_photo" required="required">
        </p>
        <p>
            <textarea name="content" id="text_field" cols="50" rows="5" placeholder="140자 까지 등록 가능합니다.
#태그명 을 통해서 검색 태그를 등록할 수 있습니다.
예시 : I # love # insta!"></textarea>

        </p>
        <input class="submit_btn" type="submit" value="저장">
    </form>

</div>

</div>