<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
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


    <title>BLUM</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/detail-page.css">
    <link rel="shortcut icon" href="https://ifh.cc/g/BHkqeu.png">


    <style>
        #main_container {
            /*height: 6000px;*/
        }

        .commit_field {
          display: inline-block;
          width: 65%;
        }

        .upload_btn {
          font-weight: bold;
          font-size: 14px;
          color: #3897f0;
          cursor: pointer;
          border: 0;
          background-color: transparent;
        }
    </style>
</head>

<body>


    <section id="container">


        <header id="header">
            <section class="h_inner">

                <a href="./index_auth.php">
                    <div>
                        <img src="https://ifh.cc/g/27UAqp" style="width: 200px; height : 45px;">
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

                <div class="contents_box">

                    <article class="contents cont01">

                        <div class="img_section">
                            <div class="trans_inner">
                                <div><img src="https://ifh.cc/g/cuBLwT" alt=""></div>
                            </div>
                        </div>


                        <div class="detail--right_box">

                            <header class="top">
                                <div class="user_container">
                                    <div class="profile_img">
                                        <img src="https://ifh.cc/g/pwtpG3" alt="">
                                    </div>
                                    <div class="user_name">
                                        <!-- <div class="nick_name"> -->
                                          <?php
                                            // session_start();
                                            $name = $_SESSION["userid"];
                                            echo "<script>console.log('$name');</script>";
                                            print "<div class='nick_name'>";
                                            print "$name";
                                            print "</div>";
                                          ?>
                                        <!-- </div> -->
                                        <div class="country">Seoul, South Korea</div>
                                    </div>
                                </div>
                                <div class="sprite_more_icon" data-name="more">
                                    <ul class="more_detail">
                                        <li>팔로우</li>
                                        <li>수정</li>
                                        <li>삭제</li>
                                    </ul>
                                </div>

                            </header>

                            <?php
                                require_once('./db_con.php');
                                $board_list_sql = "SELECT * FROM board";
                                $total_row_check = $conn->query($board_list_sql);
                                $total_row = $total_row_check->num_rows;

                                if(isset($_GET["page"])) {
                                    $start=$_GET["page"];
                                    $page_sql = "SELECT * FROM board ORDER BY No DESC";
                                }
                                else {
                                    $page_sql = "SELECT * FROM board ORDER BY No DESC";
                                }

                                $result = $conn->query($page_sql);
                            

                                print "<section class='scroll_section' style='height: 580px;'>";
                                

                                while ($row = $result->fetch_assoc()) {
                                    $db_date = $row['date'];
                                    date_default_timezone_set('Asia/Seoul');
                                    $now = date('Y-m-d H:i:s');
                                    // print "<script>console.log('$now');</script>";
                                    $diff = (strtotime($now) - strtotime($db_date)) / 60;
                                    $change =  (int)$diff;

                                    $st = "";


                                    print "<div class='admin_container'>";
                                    print "<div class='admin'><img src='http://bitly.kr/ZHBjS1rohX' alt='user'></div>";
                                    print "<span class='user_id'>$row[userid]</span>";
                                    print "<div class='comment'> $row[Comment]";
                                    print "<div class='time' style='margin-top: 0;'>$change 분전</div>";
                                    print "</div>";
                                    print "</div>";


                                    // print "<tr class='$st'>";
                                    // print "<td>$row[userid]</td>";
                                    // print "<td>$row[Comment]</td>";
                                }

                                print "</section>";

                                $page_count = (int) ($total_row / 10);
                                if ($total_row % 10) {
                                    $page_count++;
                                }

                                $page_count--;
                                if (isset($_GET['page'])) {
                                    $page = $_GET['page'];
                                } else $page = 0;
                            ?>

                            <!-- <section class="scroll_section">
                                <div class="admin_container">
                                    <div class="admin"><img src="../imgs/thumb.jpeg" alt="user"></div>
                                    <div class="comment">
                                        <span class="user_id">Kindtiger</span>
                                        <div class="time">2시간</div>
                                    </div>
                                </div>
                            </section> -->


                            <div class="bottom_icons">
                                <div class="left_icons">
                                    <div class="heart_btn">
                                        <div class="sprite_heart_icon_outline" data-name="heartbeat"></div>
                                    </div>
                                    <div>
                                        <div class="sprite_bubble_icon"></div>
                                    </div>
                                    <div>
                                        <div class="sprite_share_icon" data-name="share"></div>
                                    </div>
                                </div>

                                <div class="right_icon">
                                    <div class="sprite_bookmark_outline" data-name="book-mark"></div>
                                </div>
                            </div>

                            <div class="count_likes">
                                좋아요
                                <span class="count">2,351</span>
                                개
                            </div>

                            <form action="./board.php" method="POST">
                                <div class="commit_field">
                                    <label for="comment"></label>
                                    <input type="text" placeholder="댓글" name="comment" id="comment" autofocus autocomplete="off">
                                </div>
                                <button type="submit" class="upload_btn">게시</button>
                            </form>
                        </div>


                    </article>


                </div>


            </section>

        </div>


        <div class="del_pop">
            <div class="btn_box">
                <div class="del">삭제</div>
                <div class="cancel">취소</div>
            </div>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


</body>

</html>
