<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>BLUM</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/style.css">

    <style>
        .name {
            font-size: 17px;
        }
    </style>

</head>

<body>

    <section id="container">
        <header id="header">
            <section class="inner">
                <h1 class="logo">
                    <a href="./index_auth.php">
                        <div>
                            <img src='https://ifh.cc/g/27UAqp.png' border='0' style="width: 200px; height : 45px;">
                        </div>
                    </a>
                </h1>

                <div class="search_box">
                    <input type="text" placeholder="검색" id="search-field">

                    <div class="fake_field" style="left: 17%;">
                        <span class="sprite_small_search_icon"></span>
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

        <div class="hidden_menu">
            <div class="scroll_inner">
                <div class="user">
                    <div class="thumb_img"><img src="https://img.animalplanet.co.kr/news/2019/10/31/700/191lerah0b366ig7n50c.jpg" alt="프로필사진"></div>
                    <div class="id">dbswl0623</div>
                </div>

                <div class="user">
                    <div class="thumb_img"><img src="https://img1.daumcdn.net/thumb/R1280x0.fjpg/?fname=http://t1.daumcdn.net/brunch/service/guest/image/FYdV1JIJn_8yupol5d9fVh44L9Y.PNG" alt="프로필사진"></div>
                    <div class="id">tkddjs1212</div>
                </div>
                <div class="user">
                    <div class="thumb_img"><img src="https://upload.wikimedia.org/wikipedia/ko/thumb/d/d4/%ED%8E%AD%EC%88%98.jpg/300px-%ED%8E%AD%EC%88%98.jpg" alt="프로필사진"></div>
                    <div class="id">hann9696</div>
                </div>
                <div class="user">
                    <div class="thumb_img"><img src="http://bitly.kr/ZHBjS1rohX" alt="프로필사진"></div>
                    <div class="id">gmldnjs</div>
                </div>
                <div class="user">
                    <div class="thumb_img"><img src="https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg" alt="프로필사진"></div>
                    <div class="id">yjyj_liiit</div>
                </div>
                <div class="user">
                    <div class="thumb_img"><img src="http://bitly.kr/ZHBjS1rohX" alt="프로필사진"></div>
                    <div class="id">doyeon_zzz</div>
                </div>
            </div>
        </div>


        <section id="main_container">
            <div class="inner">

                <div class="contents_box">
                    <article class="contents">
                        <header class="top">
                            <div class="user_container">
                                <div class="profile_img">
                                    <img src="https://ifh.cc/g/g74K2O.jpg" alt="프로필이미지">
                                </div>
                                <div class="user_name">
                                    <div class="nick_name m_text">
                                        <div class="nick_name m_text">HANN</div>
                                    </div>
                                    <div class="country s_text">Seoul, South Korea</div>
                                </div>

                            </div>

                            <div class="sprite_more_icon" data-name="more">
                                <ul class="toggle_box">
                                    <li><input type="submit" class="follow" value="팔로우" data-name="follow"></li>
                                    <li>수정</li>
                                    <li>삭제</li>
                                </ul>
                            </div>
                        </header>

                        <div class="img_section">
                            <div class="trans_inner">
                                <!-- <a href='https://ifh.cc/g/g74K2O' target='_blank'><img src='https://ifh.cc/g/g74K2O.jpg' border='0'></a> -->
                                <div><img src="https://ifh.cc/g/g74K2O.jpg" alt="visual01"></div>
                            </div>
                        </div>

                        <div class="bottom_icons">
                            <div class="left_icons">
                                <div class="heart_btn">
                                    <div class="sprite_heart_icon_outline" name="39" data-name="heartbeat"></div>
                                </div>
                                <div class="sprite_bubble_icon"></div>
                                <div class="sprite_share_icon" data-name="share"></div>
                            </div>
                            <div class="right_icon">
                                <div class="sprite_bookmark_outline" data-name="bookmark"></div>
                            </div>
                        </div>

                        <div class="likes m_text">
                            좋아요
                            <span id="like-count-39">2,346</span>
                            <span id="bookmark-count-39"></span>
                            개
                        </div>

                        <div class="comment_container">
                            <div class="comment" id="comment-list-ajax-post37">
                                <div class="comment-detail">
                                    <div class="nick_name m_text">yjyj_liiit</div>
                                    <div>강아지가 너무 귀여워요~!</div>
                                </div>
                            </div>
                            <div class="small_heart">
                                <div class="sprite_small_heart_icon_outline"></div>
                            </div>
                        </div>

                        <div class="timer">1시간 전</div>


                    </article>
                    <article class="contents">
                        <header class="top">
                            <div class="user_container">
                                <div class="profile_img">
                                    <img src="http://bitly.kr/ZHBjS1rohX" alt="프로필이미지">
                                </div>
                                <div class="user_name">
                                    <div class="nick_name m_text">tkddjs</div>
                                    <div class="country s_text">Seoul, South Korea</div>
                                </div>

                            </div>

                            <div class="sprite_more_icon" data-name="more">
                                <ul class="toggle_box">
                                    <li><input type="submit" class="follow" value="팔로우" data-name="follow"></li>
                                    <li>수정</li>
                                    <li>삭제</li>
                                </ul>
                            </div>
                        </header>

                        <div class="img_section">
                            <div class="trans_inner">
                                <a href='https://ifh.cc/g/gXKQqU' target='_blank'><img src='https://ifh.cc/g/gXKQqU.jpg' border='0'></a>
                                <!-- <div><img src="https://ifh.cc/g/gXKQqU" alt="visual01"></div> -->
                            </div>
                        </div>

                        <div class="bottom_icons">
                            <div class="left_icons">
                                <div class="heart_btn">
                                    <div class="sprite_heart_icon_outline" name="39" data-name="heartbeat"></div>
                                </div>
                                <div class="sprite_bubble_icon"></div>
                                <div class="sprite_share_icon" data-name="share"></div>
                            </div>
                            <div class="right_icon">
                                <div class="sprite_bookmark_outline" data-name="bookmark"></div>
                            </div>
                        </div>

                        <div class="likes m_text">
                            좋아요
                            <span id="like-count-39">1,800</span>
                            개
                        </div>

                        <div class="comment_container">
                            <div class="comment" id="comment-list-ajax-post37">
                                <div class="comment-detail">
                                    <div class="nick_name m_text">dongdong2</div>
                                    <div>펭-하!</div>
                                </div>
                            </div>
                            <div class="small_heart">
                                <div class="sprite_small_heart_icon_outline"></div>
                            </div>
                        </div>

                        <div class="timer">1시간 전</div>

                    </article>
                    <article class="contents">
                        <header class="top">
                            <div class="user_container">
                                <div class="profile_img">
                                    <img src="https://ifh.cc/g/qlzQwX.jpg" alt="프로필이미지">
                                </div>
                                <div class="user_name">
                                    <div class="nick_name m_text">gmldnjs</div>
                                    <div class="country s_text">Seoul, South Korea</div>
                                </div>

                            </div>

                            <div class="sprite_more_icon" data-name="more">
                                <ul class="toggle_box">
                                    <li><input type="submit" class="follow" value="팔로우" data-name="follow"></li>
                                    <li>수정</li>
                                    <li>삭제</li>
                                </ul>
                            </div>
                        </header>

                        <div class="img_section">
                            <div class="trans_inner">
                                <a href='https://ifh.cc/g/qlzQwX' target='_blank'><img src='https://ifh.cc/g/qlzQwX.jpg' border='0'></a>
                                <!-- <div><img src="https://ifh.cc/g/qlzQwX" alt="visual01"></div> -->
                            </div>
                        </div>

                        <div class="bottom_icons">
                            <div class="left_icons">
                                <div class="heart_btn">
                                    <div class="sprite_heart_icon_outline" name="39" data-name="heartbeat"></div>
                                </div>
                                <div class="sprite_bubble_icon"></div>
                                <div class="sprite_share_icon" data-name="share"></div>
                            </div>
                            <div class="right_icon">
                                <div class="sprite_bookmark_outline" data-name="bookmark"></div>
                            </div>
                        </div>

                        <div class="likes m_text">
                            좋아요
                            <span id="like-count-39">2,001</span>
                            개
                        </div>

                        <div class="comment_container">
                            <div class="comment" id="comment-list-ajax-post37">
                                <div class="comment-detail">
                                    <div class="nick_name m_text">wnsgus</div>
                                    <div>맛있겠당,,,</div>
                                </div>
                            </div>
                            <div class="small_heart">
                                <div class="sprite_small_heart_icon_outline"></div>
                            </div>
                        </div>

                        <div class="timer">2시간 전</div>


                    </article>
                    <article class="contents feed" style="width: 500px;">
                        <header class="top">
                            <div class="user_container">
                                <div class="profile_img">
                                    <img src="http://bitly.kr/ZHBjS1rohX" alt="프로필이미지">
                                </div>
                                <div class="user_name">
                                    <div class="nick_name m_text">yjyj_liit</div>
                                    <div class="country s_text">Seoul, South Korea</div>
                                </div>

                            </div>

                            <div class="sprite_more_icon" data-name="more">
                                <ul class="toggle_box">
                                    <li><input type="submit" class="follow" value="팔로우" data-name="follow"></li>
                                    <li>수정</li>
                                    <li>삭제</li>
                                </ul>
                            </div>
                        </header>

                        <div class="img_section">
                            <div class="trans_inner">
                                <div><img src="https://i.pinimg.com/originals/b6/d1/5f/b6d15ff09043177b8387faf805207a8d.jpg" alt="visual01"></div>
                            </div>
                        </div>

                        <div class="bottom_icons">
                            <div class="left_icons">
                                <div class="heart_btn">
                                    <div class="sprite_heart_icon_outline" name="39" data-name="heartbeat"></div>
                                </div>
                                <div class="sprite_bubble_icon"></div>
                                <div class="sprite_share_icon" data-name="share"></div>
                            </div>
                            <div class="right_icon">
                                <div class="sprite_bookmark_outline" data-name="bookmark"></div>
                            </div>
                        </div>

                        <div class="likes m_text">
                            좋아요
                            <span id="like-count-39">2,346</span>
                            개
                        </div>

                        <div class="comment_container">
                            <div class="comment" id="comment-list-ajax-post37">
                                <div class="comment-detail">
                                    <div class="nick_name m_text">dongdong2</div>
                                    <div>존잘</div>
                                </div>
                            </div>
                            <div class="small_heart">
                                <div class="sprite_small_heart_icon_outline"></div>
                            </div>
                        </div>

                        <div class="timer">2시간 전</div>

                    </article>



                </div>
                <input type="hidden" id="page" value="1">

                <div class="side_box">
                    <div class="user_profile" style="margin-bottom: 15px;">
                        <div class="profile_thumb">
                            <img src="https://ifh.cc/g/Pput4v" alt="프로필사진">
                        </div>
                        <div class="detail">
                            <div class="id m_text name">
                                <?php
                                $name = $_SESSION["userid"];
                                echo "<script>console.log('$name');</script>";
                                print "<h4 style='font-weight: bold; font-size: 25px;'>$name</h4>";
                                ?>
                            </div>
                        </div>
                    </div>

                    <article class="story">
                        <header class="story_header">
                            <div>스토리</div>
                            <div class="more">모두 보기</div>
                        </header>

                        <div class="scroll_inner">
                            <div class="thumb_user">
                                <div class="profile_thumb">
                                    <img src="https://ifh.cc/g/SFzK5G" alt="프로필사진">
                                </div>
                                <div class="detail">
                                    <div class="id">yjyj_liiit</div>
                                    <div class="time">2분전</div>
                                </div>
                            </div>
                            <div class="thumb_user">
                                <div class="profile_thumb">
                                    <img src="https://ifh.cc/g/SQLa5I" alt="프로필사진">
                                </div>
                                <div class="detail">
                                    <div class="id">tkddjs</div>
                                    <div class="time">13분전</div>
                                </div>
                            </div>
                            <div class="thumb_user">
                                <div class="profile_thumb">
                                    <img src="http://bitly.kr/ZHBjS1rohX" alt="프로필사진">
                                </div>
                                <div class="detail">
                                    <div class="id">gmldnjs</div>
                                    <div class="time">30분전</div>
                                </div>
                            </div>
                            <div class="thumb_user">
                                <div class="profile_thumb">
                                    <img src="https://ifh.cc/g/x8brHr" alt="프로필사진">
                                </div>
                                <div class="detail">
                                    <div class="id">gmldnjs</div>
                                    <div class="time">42분전</div>
                                </div>
                            </div>
                            <div class="thumb_user">
                                <div class="profile_thumb">
                                    <img src="http://bitly.kr/ZHBjS1rohX" alt="프로필사진">
                                </div>
                                <div class="detail">
                                    <div class="id">dbswl</div>
                                    <div class="time">1시간 전</div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="recommend">
                        <header class="reco_header">
                            <div>회원님을 위한 추천</div>
                            <div class="more">모두 보기</div>
                        </header>

                        <div class="thumb_user">
                            <div class="profile_thumb">
                                <img src="http://bitly.kr/ZHBjS1rohX" alt="프로필사진">
                            </div>
                            <div class="detail">
                                <div class="id">dbswl_1313</div>
                                <div class="time">1시간 전</div>
                            </div>
                        </div>
                        <div class="thumb_user">
                            <div class="profile_thumb">
                                <img src="https://ifh.cc/g/x8brHr" alt="프로필사진">
                            </div>
                            <div class="detail">
                                <div class="id">ppp_goood</div>
                                <div class="time">2시간 전</div>
                            </div>
                        </div>
                    </article>
                </div>


            </div>
        </section>



    </section>








    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>