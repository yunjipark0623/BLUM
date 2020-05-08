<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Facebook Meta Tags / 페이스북 오픈 그래프 -->
    <meta property="og:url" content="http://kindtiger.dothome.co.kr/insta">
    <meta property="og:type" content="website">
    <meta property="og:title" content="instagram">
    <meta property="og:description" content="instagram clone">
    <meta property="og:image" content="http://kindtiger.dothome.co.kr/insta/imgs/instagram.jpeg">
    .
    <!-- Twitter Meta Tags / 트위터 -->
    <meta name="twitter:card" content="instagram clone">
    <meta name="twitter:title" content="instagram">
    <meta name="twitter:description" content="instagram clone">
    <meta name="twitter:image" content="http://kindtiger.dothome.co.kr/insta/imgs/instagram.jpeg">

    <!-- Google / Search Engine Tags / 구글 검색 엔진 -->
    <meta itemprop="name" content="instagram">
    <meta itemprop="description" content="instagram clone">
    <meta itemprop="image" content="http://kindtiger.dothome.co.kr/insta/imgs/instagram.jpeg">


    <title>instagram</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="shortcut icon" href="../imgs/instagram.png">


</head>

<body>


    <section id="container">

        <header id="header">
            <section class="h_inner">
                <a href="./index_auth.php">
                    <div>
                        <img src="../img/BLUMPeople.png" style="width: 200px; height : 45px;">
                    </div>
                </a>

                <div class="search_field">
                    <input type="text" placeholder="검색" tabindex="0">

                    <div class="fake_field">
                        <span class=sprite_small_search_icon></span>
                        <span>검색</span>
                    </div>
                </div>


                <div class="right_icons">
                    <a href="../new_post.html">
                        <div class="sprite_camera_icon"></div>
                    </a>
                    <a href="#">
                        <div class="sprite_compass_icon"></div>
                    </a>
                    <a href="#">
                        <div class="sprite_heart_icon_outline"></div>
                    </a>
                    <a href="./profile.php">
                        <div class="sprite_user_icon_outline"></div>
                    </a>
                </div>
            </section>
        </header>


        <div id="main_container">

            <section class="b_inner">

                <div class="hori_cont">
                    <div class="profile_wrap">
                        <div class="profile_img">
                            <img src="../img/profile.jpg">
                        </div>
                    </div>

                    <div class="detail">
                        <div class="top">

                            <div style="height: 48px; line-height: 48px; margin-right: 10px;">
                                <?php
                                session_start();
                                $name = $_SESSION["userid"];
                                print "<h4>$name</h4>";
                                ?>
                                <br></br>
                            </div>

                            <a href="#" class="profile_edit" style="padding: 0; height: 30px; margin-right: 10px;">프로필편집</a>
                            <a href="./logout.php" class="logout" style="padding: 0; height: 30px;">로그아웃</a>
                        </div>

                        <ul class="middle">
                            <li>
                                <span>게시물</span>
                                9
                            </li>
                            <li>
                                <span>팔로워</span>
                                537M
                            </li>
                            <li>
                                <span>팔로우</span>
                                4
                            </li>
                        </ul>


                    </div>
                </div>

                <div class="mylist_contents contents_container active">
                    <div class="pic">
                        <a href="./detail-page.php"><img src="../imgs/song1.jpg" alt=""></a>
                    </div>
                    <div class="pic">
                        <a href="../detail-page1.html"><img src="../imgs/song2.jpg" alt=""></a>
                    </div>
                    <div class="pic">
                        <a href="../detail-page2.html"> <img src="../imgs/song3.jpg" alt=""></a>
                    </div>
                    <div class="pic">
                        <a href="../detail-page3.html"> <img src="../imgs/song4.jpg" alt=""></a>
                    </div>
                    <div class="pic">
                        <a href="../detail-page4.html"> <img src="../imgs/song5.jpg" alt=""></a>
                    </div>
                    <div class="pic">
                        <a href="../detail-page5.html"> <img src="../imgs/song6.jpg" alt=""></a>
                    </div>
                    <div class="pic">
                        <a href="../detail-page6.html"> <img src="../imgs/song7.jpg" alt=""></a>
                    </div>
                    <div class="pic">
                        <a href="../detail-page7.html"> <img src="../imgs/song8.jpg" alt=""></a>
                    </div>
                    <div class="pic">
                        <a href="../detail-page8.html"> <img src="../imgs/song9.jpg" alt=""></a>
                    </div>
                </div>





            </section>
        </div>


    </section>


    <!--<script src="js/insta.js"></script>-->
    <script src="../js/profile.js"></script>
    <script>



    </script>
</body>

</html>