<?php
session_start();
include './php/init.php';
if(empty($_SESSION['id'])){
    header('Location: https://fbbot.youcanbemama.com/directing/');
}
$sql = "SELECT girl.*,video.videopic FROM girl INNER JOIN video ON girl.id = video.girlid WHERE girl.id='{$_SESSION['id']}'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while ($row = mysqli_fetch_assoc($result)) {
        $account = $row["account"];
        $pwd = $row["pwd"];
        $name = $row["name"];
        $nickname = $row["nickname"];
        $age = $row["age"];
        $phone = $row["phone"];
        $company = $row["company"];
        $open = $row["open"];
        $gender = $row["gender"];
        $local = $row["local"];
        $level = $row["level"];
        $size = $row["weight"];
        $video = $row['videopic'];
        $sprice = $row["sprice"];
        $aprice = $row["aprice"];
        $mprice = $row["mprice"];
        $bprice = $row["bprice"];
    }
} else {
    echo "0 结果";
}
// echo session_id();
// var_dump($_SESSION);
?>
<?php

include './php/init.php';
if (isset($_POST['Submit'])) {
    // var_dump($_POST);
    // return;
    $name = $_POST['name'];
    $nickname = $_POST['nickname'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $height = $_POST['height'];
    switch ($_POST['gender']) {
        case 'man':
            $gender = '男';
            break;
        case 'women':
            $gender = '女';
            break;
    }
    switch ($_POST['place']) {
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
            $local = '嘉義市';
            break;
        case 6:
            $local = '台南市';
            break;
        case 7:
            $local = '高雄市';
            break;
    }
    switch ($_POST['level']) {
        case 1:
            $level = '普傳';
            $randid = 'A';
            break;
        case 2:
            $level = '高傳';
            $randid = 'B';
            break;
        case 3:
            $level = '飯局(小)';
            $randid = 'C';
            break;
        case 4:
            $level = '飯局(大)';
            $randid = 'D';
            break;
        case 5:
            $level = '男傳';
            $randid = 'E';
            break;
        case 6:
            $level = '包養';
            $randid = 'F';
            break;
        case 7:
            $level = '伴遊';
            $randid = 'G';
            break;
    }
    $weight = $_POST['3size'];
    $sprice = $_POST['sprice'];
    $aprice = $_POST['aprice'];
    $mprice = $_POST['inlineRadioOptions'];
    $bprice = $_POST['bprice'];
    $randid = $randid . str_pad($id, 3, "0", STR_PAD_LEFT);
    if (empty($_POST['open'])) {
        $open2 = '0';
    } else {
        $open2 = $_POST['open'];
    }
    $NowTime = date("Y/m/d H:i:s");
    $tmp_time = strtotime($NowTime);
    $imgname = $_FILES['file']['name'];
    $imgtype = $_FILES['file']['type'];
    $file = $_FILES['file']['tmp_name'];
    $exten = substr(strrchr($_FILES['file']['name'], "."), 1);
    $dest = './img/girl/' . $tmp_time . '.' . $exten;
    $video = $_POST['video'];
    if (empty($imgname)) {
        $update_girl = "Update girl set randid = '$randid', name = '$name', nickname = '$nickname', age ='$age',height = '$height', weight = '$weight', phone = '$phone', company = '$company', gender = '$gender',
                            local = '$local', level = '$level' , sprice = '$sprice', aprice = '$aprice',mprice = '$mprice' , bprice = '$bprice', open = '$open2' where id = '" . $_SESSION['id'] . "'";
        mysqli_query($conn, $update_girl);
        $update_viedo = "Update video set videopic = '$video' where girlid = '" . $_SESSION['id'] . "'";
        mysqli_query($conn, $update_viedo);
    } else {
        if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
            if (move_uploaded_file($file, $dest)) {
                $update_girl = "Update girl set randid = '$randid', name = '$name', nickname = '$nickname', age ='$age',height = '$height', 3size = '$weight', phone = '$phone', company = '$company', gender = '$gender',
                                    local = '$local', level = '$level' , sprice = '$sprice', aprice = '$aprice', bprice = '$bprice', open = '$open2' where id = '" . $_SESSION['id'] . "'";
                mysqli_query($conn, $update_girl);

                $update_viedo = "Update video set videopic = '$video' where girlid = '" . $_SESSION['id'] . "'";
                mysqli_query($conn, $update_viedo);
                $update_img = "Update img set imgname = " . $tmp_time . '.' . $exten . "',imgtype = '$imgtype', imgpic = '$dest' , original_name = '$imgname'  where girlid = '" . $_SESSION['id'] . "'";
                mysqli_query($conn, $update_img);
            }
        }
    }
    $update_girl = "UPDATE girl SET name='$name' WHERE id={$_SESSION['id']}";
    mysqli_query($conn, $update_girl);
    echo header('Location: ' . $_SERVER['REQUEST_URI']);
}
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
    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="fonts/jquery-ui.css">
    <link rel="stylesheet" href="fonts/wickedpicker.css">
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
                            <h1 style="color: #fff;">會員編輯</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row justify-content-md-center">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label for="name">姓名:</label>
                        <input class="form-control form-control-lg" type="text" id="name" name="name" placeholder="姓名"
                            value="<?php echo $name; ?>" required="" />
                    </div><br>
                    <div class="form-group ">
                        <label for="nickname">暱稱:</label>
                        <input class="form-control form-control-lg" type="text" id="nickname" name="nickname"
                            placeholder="暱稱" value="<?php echo $nickname; ?>" required="" />
                    </div><br>
                    <div class="form-group ">
                        <label for="age">年齡:</label>
                        <input class="form-control form-control-lg" type="text" name="age" placeholder="年齡"
                            value="<?php echo $age; ?>" required="" />
                    </div><br>
                    <div class="form-group ">
                        <label for="height">身高:</label>
                        <input class="form-control form-control-lg" type="text" name="height" placeholder="年齡"
                            value="<?php echo $age; ?>" required="" />
                    </div><br>
                    <div class="form-group ">
                        <label for="3size">體重:</label>
                        <input class="form-control form-control-lg" type="text" name="3size"
                            placeholder="輸入方式請打為XX/XX/XX" value="<?php echo $size; ?>" required="" />
                    </div><br>
                    <div class="form-group ">
                        <label for="phone">電話:</label>
                        <input class="form-control form-control-lg" type="tel" name="phone" placeholder="電話"
                            value="<?php echo $phone; ?>" required="" />
                    </div><br>
                    <div class="form-group ">
                        <label for="company">經紀公司(介紹人):</label>
                        <input class="form-control form-control-lg" type="text" id="company" name="company"
                            placeholder="經紀公司or介紹人" value="<?php echo $company; ?>" required="" />
                    </div><br>
                    <div class="form-group row ">
                        <label for="gender">性別:</label>
                        <select name="gender" id="gender">
                            <option value="man" <?php if ($gender == "男") echo 'selected="selected"'; ?>>男生</option>
                            <option value="woman" <?php if ($gender == "女") echo 'selected="selected"'; ?>>女生</option>
                        </select>
                    </div><br>
                    <div class="form-group row ">
                        <label for="place">地區:</label>
                        <select name="place" id="place">
                            <option value="1" <?php if ($local == "台北市") echo 'selected="selected"'; ?>>台北市</option>
                            <option value="2" <?php if ($local == "桃園市") echo 'selected="selected"'; ?>>桃園市</option>
                            <option value="3" <?php if ($local == "新竹市") echo 'selected="selected"'; ?>>新竹市</option>
                            <option value="4" <?php if ($local == "台中市") echo 'selected="selected"'; ?>>台中市</option>
                            <option value="5" <?php if ($local == "嘉義市") echo 'selected="selected"'; ?>>嘉義市</option>
                            <option value="6" <?php if ($local == "台南市") echo 'selected="selected"'; ?>>台南市</option>
                            <option value="7" <?php if ($local == "高雄市") echo 'selected="selected"'; ?>>高雄市</option>
                        </select>
                    </div><br>
                    <div class="form-group row ">
                        <label for="level">等級:</label>
                        <select name="level" id="level">
                            <option value="1" <?php if ($level == "普傳") echo 'selected="selected"'; ?>>普傳</option>
                            <option value="2" <?php if ($level == "高傳") echo 'selected="selected"'; ?>>高傳</option>
                            <option value="3" <?php if ($level == "飯局(小)") echo 'selected="selected"'; ?>>飯局(小)</option>
                            <option value="4" <?php if ($level == "飯局(大)") echo 'selected="selected"'; ?>>飯局(大)</option>
                            <option value="5" <?php if ($level == "男傳") echo 'selected="selected"'; ?>>男傳</option>
                            <option value="6" <?php if ($level == "包養") echo 'selected="selected"'; ?>>包養</option>
                            <option value="7" <?php if ($level == "伴遊") echo 'selected="selected"'; ?>>伴遊</option>
                        </select>
                    </div><br>
                    <div>
                        <div class="form-group">
                            <label for="mprice">音樂:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="1" <?php if ($mprice == 1) echo 'checked="true"'; ?>>
                                <label class="form-check-label" for="inlineRadio1">有</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="0" <?php if ($mprice == 0) echo 'checked="true"'; ?>>
                                <label class="form-check-label" for="inlineRadio2">無</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sprice">通告價錢(若要取消該服務請清空欄位或輸入0):</label>
                            <input class="form-control form-control-lg" type="text" name="sprice"
                                placeholder="通告價錢，如不填則無此服務" value="<?php echo $sprice; ?>" />
                        </div><br>
                        <div class="form-group">
                            <label for="aprice">伴遊價錢(若要取消該服務請清空欄位或輸入0):</label>
                            <input class="form-control form-control-lg" type="text" name="aprice"
                                placeholder="伴遊價錢，如不填則無此服務" value="<?php echo $aprice; ?>" />
                        </div><br>
                        <!-- <div class="form-group">
                            <label for="mprice">音樂價錢:</label>
                            <input class="form-control form-control-lg" type="text" name="mprice" placeholder="音樂價錢，如不填則無此服務" value="<?php echo $mprice; ?>" />
                        </div> -->
                        <div class="form-group">
                            <label for="mprice">包養價錢(若要取消該服務請清空欄位或輸入0):</label>
                            <input class="form-control form-control-lg" type="text" name="bprice"
                                placeholder="音樂價錢，如不填則無此服務" value="<?php echo $bprice; ?>" />
                        </div>
                    </div><br>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">圖片上傳</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                    </div><br>
                    <div class="form-group">
                        <label for="url">影片網址:</label>
                        <input class="form-control form-control-lg" type="url" placeholder="影片網址" name="video"
                            value="<?php echo $video; ?>" />
                    </div><br>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="open"
                            <?php echo $open ? "checked" : "" ?>>
                        <label class="custom-control-label" for="customSwitch1" style="font-size: 20px;">上線狀態</label>
                    </div><br>
                    <input type="submit" class="btn btn-primary" value="修改" name="Submit">
                </form>
            </div>
        </div>
        </div>
    </section>
    <!-- About Section End -->
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