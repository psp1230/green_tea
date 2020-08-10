<?php
session_start();
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>微風廣場</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
    #badge3 {
        position: fixed;
        bottom: 25px;
        right: 25px;
    }

    #badge4 {
        position: fixed;
        bottom: 100px;
        right: 25px;
    }
</style>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="./index.php">
                <img src="./img/1234567.png" width="250" height="50" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- 這個 div 加上 justify-content-end 樣式即可 -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav navbar-nav">
                    <?php
                    if (empty($_SESSION['name'])) {
                        echo '<li class="nav-item active">
                                <a class="nav-link h4" href="./join/login">會員登入</a></a>
                            </li>';
                    } else {
                        echo '<li class="nav-item">
                                <a class="nav-link h4" href="./php/Auth.php">會員編輯</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link h4" href="./php/logout.php">登出</a>
                            </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-area set-bg" data-setbg="img/breadcrumb/breadcrumb-normal.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <div class="breadcrumb__option">
                            <h1 style="color: #fff;">介紹</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <?php
    include './php/init.php';
    $sid = explode('=', $_SERVER['QUERY_STRING']);
    $id = $sid[1];
    $pic = '';
    $select_girl = "select * from girl where id = '$id'";
    $obj = mysqli_query($conn, $select_girl);
    while ($row = mysqli_fetch_array($obj)) {
        $select_img = "Select * from img where girlid = '" . $row['id'] . "'";
        $img = mysqli_query($conn, $select_img);
        while ($row2 = mysqli_fetch_array($img)) {
            $pic = $row2['imgpic'];
        }
        echo '<section class="about spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                <div class="about__title">
                                        <div class="listing__item">
                                            <div class="listing__item__pic set-bg" data-setbg="' . $pic . '" style="height:500px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="about__text">
                                    <h2>' . $row['nickname'] . '</h2>
                                    <br>
                                    <h4>編號:<p>' . $row['randid'] . '</p></h4>
                                    <br>
                                    <h4>年齡:<p>' . $row['age'] . '</p></h4>
                                    <br>
                                    <h4>身高:<p>' . $row['height'] . '</p></h4>
                                    <br>
                                    <h4>體重:<p>' . $row['weight'] . '</p></h4>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>';
    }
    ?>
    <!-- About Section Begin -->

    <!-- About Section End -->

    <!-- About Video Begin -->
    <div class="about-video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    $select_video = "Select * from video where girlid = '$id'";
                    $video = mysqli_query($conn, $select_video);
                    while ($row2 = mysqli_fetch_array($video)) {
                        $vd = $row2['videopic'];
                    }
                    echo '<div class="about__video set-bg" data-setbg="img/Video.jpg">
                                <a href="' . $vd . '" class="play-btn video-popup"><i
                                        class="fa fa-play"></i></a>
                            </div>';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section Begin -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__about">
                        <img src="img/line.jpg" width="200px" />
                        <div class="container">
                            <a href="https://lin.ee/bZHfmgN"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/zh-Hant.png" 0 width="125px" alt="加入好友" height="36" border="0" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer__about">
                        <img src="img/wechate.png" width="200px" height="200px" />
                        <div class="container">
                            <a href="https://u.wechat.com/IBBgDIMy9juepxIeGAm9w34"><img src="img/wechat.jpg" alt="加入好友" width="125px" height="36" border="0" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer__about">
                        <img src="img/logo2.jpg" width="200px" height="190px" style="margin-bottom: 20px;" alt="">
                        </br>
                        <span style="font-size:20px; color: #000000;">電話:0938-987-235</span></img>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="badge3" style="float: right;"><a href="https://lin.ee/bZHfmgN" target="_blank"><img title="LINE"
                src="https://i.imgur.com/tOrA1zK.png" class="iconben" width="50" height="50" alt="LINE" /></a></div>
    <div id="badge4" style="float: right;"><a href="tel:+886-938987235" target="_blank"><img title="PHONE"
                src="https://i.imgur.com/1rsTpG7.png" class="iconben" width="50" height="50" alt="LINE" /></a></div>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>