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

    /***************footer***************************/
    .footer_div {
        font-family: NotoSansCJKtc !important;
        background-color: #999;
        height: 468px;
        width: 100%;
        align-items: flex-start;
        justify-content: center;
        display: flex;
        padding-top: 43px;
    }

    .footer_div a {
        text-decoration: none;
    }

    .footer_div h2 {
        font-family: NotoSansCJKtc !important;
        font-size: 27px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        text-align: left;
        color: #ffffff;
    }

    .footer_div_1 img,
    .footer_div_2 img {
        margin-bottom: 23px;
    }

    .footer_div_2 div img {
        border-radius: 3px;
    }

    .footer_div_2,
    .footer_div_3,
    .footer_div_4 {
        margin-left: 52px;
    }

    /****foot2*****/


    .footer_div_2 span {
        font-family: NotoSansCJKtc !important;
        font-size: 15px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.8;
        letter-spacing: 0.6px;
        text-align: left;
        color: #ffffff;
        display: inline-block;
    }

    .footer_div_2_span2 {
        margin-left: -10px;
    }

    .footer_div_3 p,
    .footer_div_4 p {
        font-family: NotoSansCJKtc !important;
        margin-top: 5px;
        font-family: NotoSansCJKtc;
        font-size: 15px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.8;
        letter-spacing: 0.6px;
        text-align: left;
        color: #ffffff;
    }
</style>

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
                <img src="./img/1234567.png" width="250" height="50" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                                        <option value="1">台中市</option>
                                        <option value="2">台北市</option>
                                        <option value="3">桃園市</option>
                                        <option value="4">新竹市</option>
                                        <option value="5">嘉義市</option>
                                        <option value="6">台南市</option>
                                        <option value="7">高雄市</option>
                                    </select>
                                </div>
                                <div class="select__option">
                                    <select name="select1">
                                        <option value="0">選擇服務</option>
                                        <option value="1">普傳</option>
                                        <option value="2">高傳</option>
                                        <option value="3">飯局(小)</option>
                                        <option value="4">飯局(大)</option>
                                        <option value="5">男傳</option>
                                        <option value="6">包養</option>
                                        <option value="7">伴遊</option>
                                    </select>
                                </div>
                                <div class="select__option">
                                    <select name="select2">
                                        <option value="0">特殊</option>
                                        <option value="1">通告</option>
                                        <option value="2">音樂</option>
                                        <option value="3">無</option>
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
            <div class="tab-content">
                <div <?php echo !isset($_POST['search']) ? "" : "active" ?>>
                    <div class="row">
                        <?php
                        include './php/init.php';
                        $level = $local = $service = $text = '';
                        $data_array = array();
                        if (!isset($_POST['search'])) {
                            $select_girl = "Select * from girl where OnSale=1 order by open DESC";
                            $obj = mysqli_query($conn, $select_girl);
                            while ($row = mysqli_fetch_array($obj)) {
                                $select_img = "Select * from img where girlid = '" . $row['id'] . "'";
                                $img = mysqli_query($conn, $select_img);
                                while ($row2 = mysqli_fetch_array($img)) {
                                    $pic = $row2['imgpic'];
                                }
                                echo '<div class="col-lg-4 col-6">
                                        <a href="./about.php?id=' . $row['id'] . '">
                                        <div class="listing__item">
                                            <div class="listing__item__pic set-bg" data-setbg="' . $pic . '">
                                            </div>
                                            <div class="listing__item__text">
                                                <div class="listing__item__text__inside">
                                                    <h5>' . $row['nickname'] . '</h5>
                                                    <ul>
                                                        <p>編號:<span>' . $row['randid'] . '</span>
                                                    </ul>
                                                </div>
                                                <div class="listing__item__text__info">';

                                if ($row['open'] == 1) {
                                    echo '<div class="listing__item__text__info__right">Open
                                    </div>';
                                } else {
                                    echo '<div class="listing__item__text__info__right closed">Closed
                                    </div>';
                                }
                                echo            '</div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>';
                            }
                        } else {
                            if (isset($_POST['search'])) {
                                switch ($_POST['select']) {
                                    case 0:
                                        $local = '';
                                        break;
                                    case 1:
                                        $local = '台中市';
                                        break;
                                    case 2:
                                        $local = '台北市';
                                        break;
                                    case 3:
                                        $local = '桃園市';
                                        break;
                                    case 4:
                                        $local = '新竹市';
                                        break;
                                    case 5:
                                        $local = '嘉義市';
                                        break;
                                    case 6:
                                        $local = '台南市';
                                        break;
                                    case 7:
                                        $local = '高雄市';
                                        break;
                                }
                                switch ($_POST['select1']) {
                                    case 0:
                                        $level = '';
                                        break;
                                    case 1:
                                        $level = '普傳';
                                        break;
                                    case 2:
                                        $level = '高傳';
                                        break;
                                    case 3:
                                        $level = '飯局(小)';
                                        break;
                                    case 4:
                                        $level = '飯局(大)';
                                        break;
                                    case 5:
                                        $level = '男傳';
                                        break;
                                    case 6:
                                        $level = '包養';
                                        break;
                                    case 7:
                                        $level = '伴遊';
                                        break;
                                }
                                switch ($_POST['select2']) {
                                    case 0:
                                        $service = '';
                                        break;
                                    case 1:
                                        $service = 'sprice';
                                        break;
                                    case 2:
                                        $service = 'mprice';
                                        break;
                                    case 3:
                                        $service = '無';
                                        break;
                                }
                                $text = $_POST['text'];
                                if ($local != '' && $level != '' && $service != '' && $text != '') {
                                    if ($service == '無') {
                                        $select_search = "Select * from girl where nickname like '%$text%' or randid like '%$text%' && local = '$local' && level = '$level' OnSale=1 order by open DESC";
                                    } else {
                                        $select_search = "Select * from girl where nickname like '%$text%' or randid like '%$text%' && local = '$local' && level = '$level' && $service > 0 && OnSale=1 order by open DESC";
                                    }
                                    $obj = mysqli_query($conn, $select_search);
                                    if (mysqli_fetch_array($obj)) {
                                        $obj = mysqli_query($conn, $select_search);
                                        while ($row = mysqli_fetch_array($obj)) {
                                            $select_img = "Select * from img where girlid = '" . $row['id'] . "'";
                                            $img = mysqli_query($conn, $select_img);
                                            while ($row2 = mysqli_fetch_array($img)) {
                                                $pic = $row2['imgpic'];
                                            }
                                            echo '<div class="col-lg-4 col-6">
                                                    <a href="./about.php?id=' . $row['id'] . '">
                                                        <div class="listing__item">
                                                            <div class="listing__item__pic set-bg" data-setbg="' . $pic . '">
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
                                                                    </div>';

                                            if ($row['open'] == 1) {
                                                echo '<div class="listing__item__text__info__right">Open
                                                    </div>';
                                            } else {
                                                echo '<div class="listing__item__text__info__right closed">Closed
                                                    </div>';
                                            }
                                            echo            '</div>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>';
                                        }
                                    } else {
                                        echo '無搜尋結果';
                                    }
                                } else {
                                    if ($local != '' && $level != '' && $service != '' && empty($text)) {
                                        if ($service == '無') {
                                            $select_search = "Select * from girl where local = '$local' && level = '$level'  && OnSale=1 order by open DESC";
                                        } else {
                                            $select_search = "Select * from girl where local = '$local' && level = '$level' && $service > 0 && OnSale=1 order by open DESC";
                                        }
                                        $obj = mysqli_query($conn, $select_search);
                                        if (mysqli_fetch_array($obj)) {
                                            $obj = mysqli_query($conn, $select_search);
                                            while ($row = mysqli_fetch_array($obj)) {
                                                $select_img = "Select * from img where girlid = '" . $row['id'] . "'";
                                                $img = mysqli_query($conn, $select_img);
                                                while ($row2 = mysqli_fetch_array($img)) {
                                                    $pic = $row2['imgpic'];
                                                }
                                                echo '<div class="col-lg-4 col-6">
                                                        <a href="./about.php?id=' . $row['id'] . '">
                                                        <div class="listing__item">
                                                            <div class="listing__item__pic set-bg" data-setbg="' . $pic . '">
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
                                                                    </div>';

                                                if ($row['open'] == 1) {
                                                    echo '<div class="listing__item__text__info__right">Open
                                                    </div>';
                                                } else {
                                                    echo '<div class="listing__item__text__info__right closed">Closed
                                                    </div>';
                                                }
                                                echo            '</div>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>';
                                            }
                                        } else {
                                            echo '無搜尋結果';
                                        }
                                    } else {
                                        if ($local != '' && $level != '' && empty($service) && empty($text)) {
                                            $select_search = "Select * from girl where local = '$local' && level = '$level' && OnSale=1 order by open DESC";
                                            $obj = mysqli_query($conn, $select_search);
                                            if (mysqli_fetch_array($obj)) {
                                                $obj = mysqli_query($conn, $select_search);
                                                while ($row = mysqli_fetch_array($obj)) {
                                                    $select_img = "Select * from img where girlid = '" . $row['id'] . "'";
                                                    $img = mysqli_query($conn, $select_img);
                                                    while ($row2 = mysqli_fetch_array($img)) {
                                                        $pic = $row2['imgpic'];
                                                    }
                                                    echo '<div class="col-lg-4 col-6">
                                                        <a href="./about.php?id=' . $row['id'] . '">
                                                        <div class="listing__item">
                                                            <div class="listing__item__pic set-bg" data-setbg="' . $pic . '">
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
                                                                    </div>';

                                                    if ($row['open'] == 1) {
                                                        echo '<div class="listing__item__text__info__right">Open
                                                    </div>';
                                                    } else {
                                                        echo '<div class="listing__item__text__info__right closed">Closed
                                                    </div>';
                                                    }
                                                    echo            '</div>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>';
                                                }
                                            } else {
                                                echo '無搜尋結果';
                                            }
                                        } else {
                                            if ($local != '' && empty($level) && empty($service) && empty($text)) {
                                                $select_search = "Select * from girl where local = '$local' && OnSale=1 order by open DESC";
                                                $obj = mysqli_query($conn, $select_search);
                                                if (mysqli_fetch_array($obj)) {
                                                    $obj = mysqli_query($conn, $select_search);
                                                    while ($row = mysqli_fetch_array($obj)) {
                                                        $select_img = "Select * from img where girlid = '" . $row['id'] . "'";
                                                        $img = mysqli_query($conn, $select_img);
                                                        while ($row2 = mysqli_fetch_array($img)) {
                                                            $pic = $row2['imgpic'];
                                                        }
                                                        echo '<div class="col-lg-4 col-6">
                                                        <a href="./about.php?id=' . $row['id'] . '">
                                                                    <div class="listing__item">
                                                                        <div class="listing__item__pic set-bg" data-setbg="' . $pic . '">
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
                                                                                </div>';

                                                        if ($row['open'] == 1) {
                                                            echo '<div class="listing__item__text__info__right">Open
                                                                </div>';
                                                        } else {
                                                            echo '<div class="listing__item__text__info__right closed">Closed
                                                                </div>';
                                                        }
                                                        echo            '</div>
                                                                        </div>
                                                                    </div>
                                                                    </a>
                                                                </div>';
                                                    }
                                                } else {
                                                    echo '無搜尋結果';
                                                }
                                            } else {
                                                if (empty($local) && $level != '' && $service != '' && $text != '') {
                                                    if ($service == '無') {
                                                        $select_search = "Select * from girl where nickname like '%$text%' or randid like '%$text%' && level = '$level' && OnSale=1 order by open DESC";
                                                    } else {
                                                        $select_search = "Select * from girl where nickname like '%$text%' or randid like '%$text%' && level = '$level' && $service > 0 && OnSale=1 order by open DESC";
                                                    }
                                                    $obj = mysqli_query($conn, $select_search);
                                                    if (mysqli_fetch_array($obj)) {
                                                        $obj = mysqli_query($conn, $select_search);
                                                        while ($row = mysqli_fetch_array($obj)) {
                                                            $select_img = "Select * from img where girlid = '" . $row['id'] . "'";
                                                            $img = mysqli_query($conn, $select_img);
                                                            while ($row2 = mysqli_fetch_array($img)) {
                                                                $pic = $row2['imgpic'];
                                                            }
                                                            echo '<div class="col-lg-4 col-6">
                                                            <a href="./about.php?id=' . $row['id'] . '">
                                                        <div class="listing__item">
                                                            <div class="listing__item__pic set-bg" data-setbg="' . $pic . '">
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
                                                                    </div>';

                                                            if ($row['open'] == 1) {
                                                                echo '<div class="listing__item__text__info__right">Open
                                                    </div>';
                                                            } else {
                                                                echo '<div class="listing__item__text__info__right closed">Closed
                                                    </div>';
                                                            }
                                                            echo            '</div>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>';
                                                        }
                                                    } else {
                                                        echo '無搜尋結果';
                                                    }
                                                } else {
                                                    if (empty($local) && empty($level) && $service != '' && $text != '') {
                                                        if ($service == '無') {
                                                            $select_search = "Select * from girl where nickname like '%$text%' or randid like '%$text%'  && OnSale=1 order by open DESC";
                                                        } else {
                                                            $select_search = "Select * from girl where nickname like '%$text%' or randid like '%$text%' && $service > 0 && OnSale=1 order by open DESC";
                                                        }
                                                        $obj = mysqli_query($conn, $select_search);
                                                        if (mysqli_fetch_array($obj)) {
                                                            $obj = mysqli_query($conn, $select_search);
                                                            while ($row = mysqli_fetch_array($obj)) {
                                                                $select_img = "Select * from img where girlid = '" . $row['id'] . "'";
                                                                $img = mysqli_query($conn, $select_img);
                                                                while ($row2 = mysqli_fetch_array($img)) {
                                                                    $pic = $row2['imgpic'];
                                                                }
                                                                echo '<div class="col-lg-4 col-6">
                                                                <a href="./about.php?id=' . $row['id'] . '">
                                                                            <div class="listing__item">
                                                                                <div class="listing__item__pic set-bg" data-setbg="' . $pic . '">
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
                                                                                        </div>';

                                                                if ($row['open'] == 1) {
                                                                    echo '<div class="listing__item__text__info__right">Open
                                                                        </div>';
                                                                } else {
                                                                    echo '<div class="listing__item__text__info__right closed">Closed
                                                                        </div>';
                                                                }
                                                                echo            '</div>
                                                                                </div>
                                                                            </div>
                                                                            </a>
                                                                        </div>';
                                                            }
                                                        } else {
                                                            echo '無搜尋結果';
                                                        }
                                                    } else {
                                                        if (empty($local) && empty($level) && empty($service) && $text != '') {
                                                            $select_search = "Select * from girl where nickname like '%$text%' or randid like '%$text%' && OnSale=1 order by open DESC";
                                                            $obj = mysqli_query($conn, $select_search);
                                                            if (mysqli_fetch_array($obj)) {
                                                                $obj = mysqli_query($conn, $select_search);
                                                                while ($row = mysqli_fetch_array($obj)) {
                                                                    $select_img = "Select * from img where girlid = '" . $row['id'] . "'";
                                                                    $img = mysqli_query($conn, $select_img);
                                                                    while ($row2 = mysqli_fetch_array($img)) {
                                                                        $pic = $row2['imgpic'];
                                                                    }
                                                                    echo '<div class="col-lg-4 col-6">
                                                                    <a href="./about.php?id=' . $row['id'] . '">
                                                        <div class="listing__item">
                                                            <div class="listing__item__pic set-bg" data-setbg="' . $pic . '">
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
                                                                    </div>';

                                                                    if ($row['open'] == 1) {
                                                                        echo '<div class="listing__item__text__info__right">Open</div>';
                                                                    } else {
                                                                        echo '<div class="listing__item__text__info__right closed">Closed</div>';
                                                                    }
                                                                    echo            '</div>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>';
                                                                }
                                                            } else {
                                                                echo '無搜尋結果';
                                                            }
                                                        } else {
                                                            if (empty($local) && $level != '' && empty($service) && empty($text)) {
                                                                $select_search = "Select * from girl where level = '$level' && OnSale=1 order by open DESC";
                                                                $obj = mysqli_query($conn, $select_search);
                                                                if (mysqli_fetch_array($obj)) {
                                                                    $obj = mysqli_query($conn, $select_search);
                                                                    while ($row = mysqli_fetch_array($obj)) {
                                                                        $select_img = "Select * from img where girlid = '" . $row['id'] . "'";
                                                                        $img = mysqli_query($conn, $select_img);
                                                                        while ($row2 = mysqli_fetch_array($img)) {
                                                                            $pic = $row2['imgpic'];
                                                                        }
                                                                        echo '<div class="col-lg-4 col-6">
                                                                        <a href="./about.php?id=' . $row['id'] . '">
                                                        <div class="listing__item">
                                                            <div class="listing__item__pic set-bg" data-setbg="' . $pic . '">
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
                                                                    </div>';

                                                                        if ($row['open'] == 1) {
                                                                            echo '<div class="listing__item__text__info__right">Open
                                                    </div>';
                                                                        } else {
                                                                            echo '<div class="listing__item__text__info__right closed">Closed
                                                    </div>';
                                                                        }
                                                                        echo            '</div>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>';
                                                                    }
                                                                } else {
                                                                    echo '無搜尋結果';
                                                                }
                                                            } else {
                                                                if (empty($local) && $level != '' && $service != '' && empty($text != '')) {
                                                                    if ($service == '無') {
                                                                        $select_search = "Select * from girl where level = '$level'  && OnSale=1 order by open DESC";
                                                                    } else {
                                                                        $select_search = "Select * from girl where level = '$level' && $service > 0 && OnSale=1 order by open DESC";
                                                                    }
                                                                    $obj = mysqli_query($conn, $select_search);
                                                                    if (mysqli_fetch_array($obj)) {
                                                                        $obj = mysqli_query($conn, $select_search);
                                                                        while ($row = mysqli_fetch_array($obj)) {
                                                                            $select_img = "Select * from img where girlid = '" . $row['id'] . "'";
                                                                            $img = mysqli_query($conn, $select_img);
                                                                            while ($row2 = mysqli_fetch_array($img)) {
                                                                                $pic = $row2['imgpic'];
                                                                            }
                                                                            echo '<div class="col-lg-4 col-6">
                                                                            <a href="./about.php?id=' . $row['id'] . '">
                                                                                        <div class="listing__item">
                                                                                            <div class="listing__item__pic set-bg" data-setbg="' . $pic . '">
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
                                                                                                    </div>';

                                                                            if ($row['open'] == 1) {
                                                                                echo '<div class="listing__item__text__info__right">Open
                                                                                    </div>';
                                                                            } else {
                                                                                echo '<div class="listing__item__text__info__right closed">Closed
                                                                                    </div>';
                                                                            }
                                                                            echo            '</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        </a>
                                                                                    </div>';
                                                                        }
                                                                    } else {
                                                                        echo '無搜尋結果';
                                                                    }
                                                                } else {
                                                                    if (empty($local) && empty($level) && $service != '' && empty($text)) {
                                                                        if ($service == '無') {
                                                                            $select_search = "Select * from girl where OnSale=1 order by open DESC";
                                                                        } else {
                                                                            $select_search = "Select * from girl where $service > 0 && OnSale=1 order by open DESC";
                                                                        }
                                                                        $obj = mysqli_query($conn, $select_search);
                                                                        if (mysqli_fetch_array($obj)) {
                                                                            $obj = mysqli_query($conn, $select_search);
                                                                            while ($row = mysqli_fetch_array($obj)) {
                                                                                $select_img = "Select * from img where girlid = '" . $row['id'] . "'";
                                                                                $img = mysqli_query($conn, $select_img);
                                                                                while ($row2 = mysqli_fetch_array($img)) {
                                                                                    $pic = $row2['imgpic'];
                                                                                }
                                                                                echo '<div class="col-lg-4 col-6">
                                                                                <a href="./about.php?id=' . $row['id'] . '">
                                                                                            <div class="listing__item">
                                                                                                <div class="listing__item__pic set-bg" data-setbg="' . $pic . '">
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
                                                                                                        </div>';

                                                                                if ($row['open'] == 1) {
                                                                                    echo '<div class="listing__item__text__info__right">Open
                                                                                        </div>';
                                                                                } else {
                                                                                    echo '<div class="listing__item__text__info__right closed">Closed
                                                                                        </div>';
                                                                                }
                                                                                echo            '</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            </a>
                                                                                        </div>';
                                                                            }
                                                                        } else {
                                                                            echo '無搜尋結果';
                                                                        }
                                                                    } else {
                                                                        if ($local != '' && empty($level) && $service != '' && empty($text)) {
                                                                            if ($service == '無') {
                                                                                $select_search = "Select * from girl where local = '$local' &&  OnSale=1 order by open DESC";
                                                                            } else {
                                                                                $select_search = "Select * from girl where local = '$local' && $service > 0 && OnSale=1 order by open DESC";
                                                                            }
                                                                            $obj = mysqli_query($conn, $select_search);
                                                                            if (mysqli_fetch_array($obj)) {
                                                                                $obj = mysqli_query($conn, $select_search);
                                                                                while ($row = mysqli_fetch_array($obj)) {
                                                                                    $select_img = "Select * from img where girlid = '" . $row['id'] . "'";
                                                                                    $img = mysqli_query($conn, $select_img);
                                                                                    while ($row2 = mysqli_fetch_array($img)) {
                                                                                        $pic = $row2['imgpic'];
                                                                                    }
                                                                                    echo '<div class="col-lg-4 col-6">
                                                                                    <a href="./about.php?id=' . $row['id'] . '">
                                                                                                <div class="listing__item">
                                                                                                    <div class="listing__item__pic set-bg" data-setbg="' . $pic . '">
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
                                                                                                            </div>';

                                                                                    if ($row['open'] == 1) {
                                                                                        echo '<div class="listing__item__text__info__right">Open
                                                                                            </div>';
                                                                                    } else {
                                                                                        echo '<div class="listing__item__text__info__right closed">Closed
                                                                                            </div>';
                                                                                    }
                                                                                    echo            '</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                </a>
                                                                                            </div>';
                                                                                }
                                                                            } else {
                                                                                echo '無搜尋結果';
                                                                            }
                                                                        } else {
                                                                            $select_search = "Select * from girl where OnSale=1 order by open DESC";
                                                                            $obj = mysqli_query($conn, $select_search);
                                                                            if (mysqli_fetch_array($obj)) {
                                                                                $obj = mysqli_query($conn, $select_search);
                                                                                while ($row = mysqli_fetch_array($obj)) {
                                                                                    $select_img = "Select * from img where girlid = '" . $row['id'] . "'";
                                                                                    $img = mysqli_query($conn, $select_img);
                                                                                    while ($row2 = mysqli_fetch_array($img)) {
                                                                                        $pic = $row2['imgpic'];
                                                                                    }
                                                                                    echo '<div class="col-lg-4 col-6">
                                                                                    <a href="./about.php?id=' . $row['id'] . '">
                                                            <div class="listing__item">
                                                                <div class="listing__item__pic set-bg" data-setbg="' . $pic . '">
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
                                                                        </div>';

                                                                                    if ($row['open'] == 1) {
                                                                                        echo '<div class="listing__item__text__info__right">Open
                                                        </div>';
                                                                                    } else {
                                                                                        echo '<div class="listing__item__text__info__right closed">Closed
                                                        </div>';
                                                                                    }
                                                                                    echo            '</div>
                                                                </div>
                                                            </div>
                                                            </a>
                                                        </div>';
                                                                                }
                                                                            } else {
                                                                                echo '無搜尋結果';
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Most Search Section End -->

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

    <div id="badge3" style="float: right;"><a href="https://lin.ee/bZHfmgN" target="_blank"><img title="LINE" src="https://i.imgur.com/tOrA1zK.png" class="iconben" width="50" height="50" alt="LINE" /></a></div>
    <div id="badge4" style="float: right;"><a href="tel:+886-938987235" target="_blank"><img title="PHONE" src="https://i.imgur.com/1rsTpG7.png" class="iconben" width="50" height="50" alt="LINE" /></a></div>
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

    <script>
        // $(document).ready(function() {
        //     $('#select2').niceSelect();
        // });

        // (function() {
        //     var options = {
        //         viber: "0938987235", // Viber number
        //         line: "https://line.me/ti/p/tm2rp7MXK", // Line QR code URL
        //         call_to_action: "聯絡方式", // Call to action
        //         button_color: "#129BF4", // Color of button
        //         position: "right", // Position may be 'right' or 'left'
        //         order: "line,viber", // Order of buttons
        //         display: "mobile",
        //     };
        //     var proto = document.location.protocol,
        //         host = "getbutton.io",
        //         url = proto + "//static." + host;
        //     var s = document.createElement('script');
        //     s.type = 'text/javascript';
        //     s.async = true;
        //     s.src = url + '/widget-send-button/js/init.js';
        //     s.onload = function() {
        //         WhWidgetSendButton.init(host, proto, options);
        //     };
        //     var x = document.getElementsByTagName('script')[0];
        //     x.parentNode.insertBefore(s, x);
        // })();
    </script>
</body>

</html>



<!-- <footer>
    <div class="footer_div">
        <div class="footer_div_1">
            <div class="footer__about">
                <img src="img/lineqr.png" width="200px" />
                <div class="container">
                    <a href="https://lin.ee/bZHfmgN"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/zh-Hant.png" 0 width="125px" alt="加入好友" height="36" border="0" /></a>
                </div>
            </div>
        </div>
        <div class="footer_div_2">
            <img src="img/wechate.png" width="200px" height="200px" />
            <div class="container">
                <a href="https://u.wechat.com/IBBgDIMy9juepxIeGAm9w34"><img src="img/wechat.jpg" alt="加入好友" width="125px" height="36" border="0" /></a>
            </div>
        </div>
        <div class="footer_div_2">
            <div class="footer__address">
                <img src="img/hero/logo2.jpg" width="200px" height="200px" style="margin-bottom: 20px;" alt="">
                </br>
                <span style="font-size:20px">電話:0938-987-235</span></img>
            </div>
        </div>
    </div>
</footer>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6"> -->