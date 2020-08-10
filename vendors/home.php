<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directing | Template</title>

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

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <!-- navbar navbar-expand-lg navbar-light bg-light -->
    <!-- <nav class="navbar navbar-dark bg-dark"> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="./index.php">
                <img src="./img/1234567.png" width="300" height="50" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- 這個 div 加上 justify-content-end 樣式即可 -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="nav navbar-nav">
                    <?php
                    if(empty($_SESSION['name'])){
                        echo '<li class="nav-item active">
                                <a class="nav-link" href="./join/login">會員登入</a></a>
                            </li>';
                    }
                    else{
                        echo '<li class="nav-item">
                                <a class="nav-link" href="./php/Auth.php">會員編輯</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./php/logout.php">登出</a>
                            </li>';
                    }
                ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero set-bg" data-setbg="img/hero/hero-bg.jpg">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-8">
                    <div class="hero__text">
                        <div class="section-title">
                            <h2>微風廣場</h2>
                        </div>
                        <div class="hero__search__form">
                            <form action="#tabs-0" method="POST">
                                <input type="text" placeholder="Search..." name="text">
                                <div class="select__option">
                                    <select name="select">
                                        <option value="0">選擇縣市</option>
                                        <option value="1">台北市</option>
                                        <option value="2">桃園市</option>
                                        <option value="3">新竹市</option>
                                        <option value="4">台中市</option>
                                        <option value="5">台南市</option>
                                        <option value="6">高雄市</option>
                                    </select>
                                </div>
                                <button type="submit" name="search">搜尋</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Most Search Section Begin -->
    <section class="most-search spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="most__search__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link <?php echo isset($_POST['search'])?"":"active" ?>" data-toggle="tab"
                                    href="#tabs-1" role="tab" name="">
                                    <span class="flaticon-039-fork"></span>
                                    台北市
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" name="">
                                    <span class="flaticon-030-kebab"></span>
                                    桃園市
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" name="">
                                    <span class="flaticon-032-food-truck"></span>
                                    新竹市
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab" name="">
                                    <span class="flaticon-017-croissant"></span>
                                    台中市
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab" name="">
                                    <span class="flaticon-038-take-away"></span>
                                    台南市
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab" name="">
                                    <span class="flaticon-031-delivery"></span>
                                    高雄市
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo !isset($_POST['search'])?"":"active" ?>" data-toggle="tab"
                                    href="#tabs-0" role="tab" name="">
                                    <span class="flaticon-039-fork"></span>
                                    搜尋結果
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">

                        <div class="tab-pane <?php echo !isset($_POST['search'])?"":"active" ?>" id="tabs-0"
                            role="tabpanel">
                            <div class="row">
                                <?php
                                include './php/init.php';
                                if (isset($_POST['search'])) {
                                    switch ($_POST['select']) {
                                        case 0:
                                            $local = '無';
                                            break;
                                        case 1:
                                            $local = '台北市';
                                            break;
                                        case 2:
                                            $local = '桃園市';
                                            break;
                                        case 3:
                                            $local = '新竹市';
                                            break;
                                        case 4:
                                            $local = '台中市';
                                            break;
                                        case 5:
                                            $local = '台南市';
                                            break;
                                        case 6:
                                            $local = '高雄市';
                                            break;
                                    }
                                    $text = $_POST['text'];
                                    if ($local == '無') {
                                        if (!empty($text)) {
                                            $select_search = "Select * from girl where nickname like '%$text%' or randid like '%$text%'";
                                            $obj = mysqli_query($conn, $select_search);
                                            while ($row = mysqli_fetch_array($obj)) {
                                                $select_img = "Select * from img where girlid = '".$row['id']."'";
                                                $img = mysqli_query($conn,$select_img);
                                                while($row2 = mysqli_fetch_array($img)){
                                                    $pic = $row2['imgpic'];
                                                }
                                                echo '<div class="col-lg-4 col-md-6 ">
                                                            <div class="listing__item">
                                                                <div class="listing__item__pic set-bg" data-setbg="'.$pic.'">
                                                                </div>
                                                                <div class="listing__item__text">
                                                                    <div class="listing__item__text__inside">
                                                                        <h5>' . $row['nickname'] . '</h5>
                                                                        <ul>
                                                                            <p>編號:<span>' . $row['randid'] . '</span>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="listing__item__text__info">
                                                                        <div class="listing__item__text__info__left">
                                                                            <a href="./about.php?id=' . $row['id'] . '">查看更多</a>
                                                                        </div>
                                                                        <div class="listing__item__text__info__right closed">Closed
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                            }
                                        }
                                    } else {
                                        if (empty($text)) {
                                            $select_search = "Select * from girl where local = '$local'";
                                            $obj = mysqli_query($conn, $select_search);
                                            while ($row = mysqli_fetch_array($obj)) {
                                                $select_img = "Select * from img where girlid = '".$row['id']."'";
                                                $img = mysqli_query($conn,$select_img);
                                                while($row2 = mysqli_fetch_array($img)){
                                                    $pic = $row2['imgpic'];
                                                }
                                                echo '<div class="col-lg-4 col-md-6 ">
                                                            <div class="listing__item">
                                                                <div class="listing__item__pic set-bg" data-setbg="'.$pic.'">
                                                                </div>
                                                                <div class="listing__item__text">
                                                                    <div class="listing__item__text__inside">
                                                                        <h5>' . $row['nickname'] . '</h5>
                                                                        <ul>
                                                                            <p>編號:<span>' . $row['randid'] . '</span>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="listing__item__text__info">
                                                                        <div class="listing__item__text__info__left">
                                                                            <a href="./about.php?id=' . $row['id'] . '">查看更多</a>
                                                                        </div>
                                                                        <div class="listing__item__text__info__right closed">Closed
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                            }
                                        } else {
                                            $select_search = "Select * from girl where nickname like '%$text%' and local = '$local'";
                                            $obj = mysqli_query($conn, $select_search);
                                            while ($row = mysqli_fetch_array($obj)) {
                                                $select_img = "Select * from img where girlid = '".$row['id']."'";
                                                $img = mysqli_query($conn,$select_img);
                                                while($row2 = mysqli_fetch_array($img)){
                                                    $pic = $row2['imgpic'];
                                                }
                                                echo '<div class="col-lg-4 col-md-6">
                                                            <div class="listing__item">
                                                                <div class="listing__item__pic set-bg" data-setbg="'.$pic.'">
                                                                </div>
                                                                <div class="listing__item__text">
                                                                    <div class="listing__item__text__inside">
                                                                        <h5>' . $row['nickname'] . '</h5>
                                                                        <ul>
                                                                            <p>編號:<span>' . $row['randid'] . '</span>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="listing__item__text__info">
                                                                        <div class="listing__item__text__info__left">
                                                                            <a href="./about.php?id=' . $row['id'] . '">查看更多</a>
                                                                        </div>
                                                                        <div class="listing__item__text__info__right closed">Closed
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                            }
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane <?php echo isset($_POST['search'])?"":"active" ?>" id="tabs-1"
                            role="tabpanel">
                            <div class="row">
                                <?php
                                include './php/init.php';
                                $select_girl = "Select * from girl where local = '台北市'";
                                $obj = mysqli_query($conn, $select_girl);
                                while ($row = mysqli_fetch_array($obj)) {
                                    $select_img = "Select * from img where girlid = '".$row['id']."'";
                                    $img = mysqli_query($conn,$select_img);
                                    while($row2 = mysqli_fetch_array($img)){
                                        $pic = $row2['imgpic'];
                                    }
                                    echo '<div class="col-lg-4 col-6">
                                                <div class="listing__item">
                                                    <div class="listing__item__pic set-bg" data-setbg="'.$pic.'">
                                                    </div>
                                                    <div class="listing__item__text">
                                                        <div class="listing__item__text__inside">
                                                            <h5>' . $row['nickname'] . '</h5>
                                                            <ul>
                                                                <p>編號:<span>' . $row['randid'] . '</span>
                                                            </ul>
                                                        </div>
                                                        <div class="listing__item__text__info">
                                                            <div class="listing__item__text__info__left">
                                                                <a href="./about.php?id=' . $row['id'] . '">查看更多</a>
                                                            </div>
                                                            <div class="listing__item__text__info__right">Open
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="row">
                                <?php
                                include './php/init.php';
                                $select_girl = "Select * from girl where local = '桃園市'";
                                $obj = mysqli_query($conn, $select_girl);
                                while ($row = mysqli_fetch_array($obj)) {
                                    $select_img = "Select * from img where girlid = '".$row['id']."'";
                                    $img = mysqli_query($conn,$select_img);
                                    while($row2 = mysqli_fetch_array($img)){
                                        $pic = $row2['imgpic'];
                                    }
                                    echo '<div class="col-lg-4 col-md-6">
                                                <div class="listing__item">
                                                    <div class="listing__item__pic set-bg" data-setbg="'.$pic.'">
                                                    </div>
                                                    <div class="listing__item__text">
                                                        <div class="listing__item__text__inside">
                                                            <h5>' . $row['nickname'] . '</h5>
                                                            <ul>
                                                                <p>編號:<span>' . $row['randid'] . '</span>
                                                            </ul>
                                                        </div>
                                                        <div class="listing__item__text__info">
                                                            <div class="listing__item__text__info__left">
                                                                <a href="./about.php?id=' . $row['id'] . '">查看更多</a>
                                                            </div>
                                                            <div class="listing__item__text__info__right closed">Closed
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="row">
                                <?php
                                include './php/init.php';
                                $select_girl = "Select * from girl where local = '新竹市'";
                                $obj = mysqli_query($conn, $select_girl);
                                while ($row = mysqli_fetch_array($obj)) {
                                    $select_img = "Select * from img where girlid = '".$row['id']."'";
                                    $img = mysqli_query($conn,$select_img);
                                    while($row2 = mysqli_fetch_array($img)){
                                        $pic = $row2['imgpic'];
                                    }
                                    echo '<div class="col-lg-4 col-md-6">
                                                <div class="listing__item">
                                                    <div class="listing__item__pic set-bg" data-setbg="'.$pic.'">
                                                    </div>
                                                    <div class="listing__item__text">
                                                        <div class="listing__item__text__inside">
                                                            <h5>' . $row['nickname'] . '</h5>
                                                            <ul>
                                                                <p>編號:<span>' . $row['randid'] . '</span>
                                                            </ul>
                                                        </div>
                                                        <div class="listing__item__text__info">
                                                            <div class="listing__item__text__info__left">
                                                                <a href="./about.php?id=' . $row['id'] . '">查看更多</a>
                                                            </div>
                                                            <div class="listing__item__text__info__right closed">Closed
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-4" role="tabpanel">
                            <div class="row">
                                <?php
                                include './php/init.php';
                                $select_girl = "Select * from girl where local = '台中市'";
                                $obj = mysqli_query($conn, $select_girl);
                                while ($row = mysqli_fetch_array($obj)) {
                                    $select_img = "Select * from img where girlid = '".$row['id']."'";
                                    $img = mysqli_query($conn,$select_img);
                                    while($row2 = mysqli_fetch_array($img)){
                                        $pic = $row2['imgpic'];
                                    }
                                    echo '<div class="col-lg-4 col-md-6">
                                                <div class="listing__item">
                                                    <div class="listing__item__pic set-bg" data-setbg="'.$pic.'">
                                                    </div>
                                                    <div class="listing__item__text">
                                                        <div class="listing__item__text__inside">
                                                            <h5>' . $row['nickname'] . '</h5>
                                                            <ul>
                                                                <p>編號:<span>' . $row['randid'] . '</span>
                                                            </ul>
                                                        </div>
                                                        <div class="listing__item__text__info">
                                                            <div class="listing__item__text__info__left">
                                                                <a href="./about.php?id=' . $row['id'] . '">查看更多</a>
                                                            </div>
                                                            <div class="listing__item__text__info__right closed">Closed
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-5" role="tabpanel">
                            <div class="row">
                                <?php
                                include './php/init.php';
                                $select_girl = "Select * from girl where local = '台南市'";
                                $obj = mysqli_query($conn, $select_girl);
                                while ($row = mysqli_fetch_array($obj)) {
                                    $select_img = "Select * from img where girlid = '".$row['id']."'";
                                    $img = mysqli_query($conn,$select_img);
                                    while($row2 = mysqli_fetch_array($img)){
                                        $pic = $row2['imgpic'];
                                    }
                                    echo '<div class="col-lg-4 col-md-6">
                                                <div class="listing__item">
                                                    <div class="listing__item__pic set-bg" data-setbg="'.$pic.'">
                                                    </div>
                                                    <div class="listing__item__text">
                                                        <div class="listing__item__text__inside">
                                                            <h5>' . $row['nickname'] . '</h5>
                                                            <ul>
                                                                <p>編號:<span>' . $row['randid'] . '</span>
                                                            </ul>
                                                        </div>
                                                        <div class="listing__item__text__info">
                                                            <div class="listing__item__text__info__left">
                                                                <a href="./about.php?id=' . $row['id'] . '">查看更多</a>
                                                            </div>
                                                            <div class="listing__item__text__info__right closed">Closed
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-6" role="tabpanel">
                            <div class="row">
                                <?php
                                include './php/init.php';
                                $select_girl = "Select * from girl where local = '高雄市'";
                                $obj = mysqli_query($conn, $select_girl);
                                while ($row = mysqli_fetch_array($obj)) {
                                    $select_img = "Select * from img where girlid = '".$row['id']."'";
                                    $img = mysqli_query($conn,$select_img);
                                    while($row2 = mysqli_fetch_array($img)){
                                        $pic = $row2['imgpic'];
                                    }
                                    echo '<div class="col-lg-4 col-md-6">
                                                <div class="listing__item">
                                                    <div class="listing__item__pic set-bg" data-setbg="'.$pic.'">
                                                    </div>
                                                    <div class="listing__item__text">
                                                        <div class="listing__item__text__inside">
                                                            <h5>' . $row['nickname'] . '</h5>
                                                            <ul>
                                                                <p>編號:<span>' . $row['randid'] . '</span>
                                                            </ul>
                                                        </div>
                                                        <div class="listing__item__text__info">
                                                            <div class="listing__item__text__info__left">
                                                                <a href="./about.php?id=' . $row['id'] . '">查看更多</a>
                                                            </div>
                                                            <div class="listing__item__text__info__right closed">Closed
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Most Search Section End -->


    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__about">
                        <img src="img/lineqr.png" width="200px">
                        <div class="container">
                            <a href="https://lin.ee/bZHfmgN"><img
                                    src="https://scdn.line-apps.com/n/line_add_friends/btn/zh-Hant.png" alt="加入好友"
                                    height="36" border="0"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer__about">
                        <img src="img/QRcode.jpg" width="200px">
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__address">
                        <img src="img/phone.png" alt="" width="30px"><span style="font-size:20px">電話:</span></img>
                        <p style="font-size:20px;">0938-987-235</p>
                    </div>
                </div>
    </footer>

    <div id="badge3" style="float: right;"><a href="https://lin.ee/bZHfmgN" target="_blank"><img title="LINE"
                src="https://i.imgur.com/tOrA1zK.png" class="iconben" width="50" height="50" alt="LINE" /></a></div>
    <div id="badge4" style="float: right;"><a href="tel:+886-938987235" target="_blank"><img title="PHONE"
                src="https://i.imgur.com/1rsTpG7.png" class="iconben" width="50" height="50" alt="LINE" /></a></div>
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