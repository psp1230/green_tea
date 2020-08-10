<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include './init.php';
if (isset($_POST['join'])) {
  $randid = '';
  $acc = $_POST['user'];
  $pwd = $_POST['password'];
  $apwd = $_POST['agepassword'];
  $name = $_POST['name'];
  $nickname = $_POST['nickname'];
  $age = $_POST['age'];
  $phone = $_POST['user'];
  $company = $_POST['company'];
  $line = $_POST['Line'];
  $wechat = $_POST['Wechat'];
  switch ($_POST['gender']) {
    case 'man':
      $gender = '男';
      break;
    case 'woman':
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
  $sprice = $_POST['sprice'];
  $aprice = $_POST['aprice'];
  $mprice = $_POST['inlineRadioOptions'];
  $bprice = $_POST['bprice'];
  $size = $_POST['3size'];
  $height = $_POST['height'];
  $NowTime = date("Y-m-d H:i:s");
  $tmp_time = strtotime($NowTime);
  $imgname = $_FILES['file']['name'];
  $imgtype = $_FILES['file']['type'];
  $file = $_FILES['file']['tmp_name'];
  $exten = substr(strrchr($_FILES['file']['name'], "."), 1);
  $dest = '../../img/girl/' . $tmp_time . '.' . $exten;
  $dest2 = './img/girl/' . $tmp_time . '.' . $exten;
  $video = $_POST['video'];
  $select_girl_acc = "Select account from girl where account = '$acc'";
  $obj = mysqli_query($conn, $select_girl_acc);
  if ($acc[0] != '0' && $acc[1] != '9') {
    echo "<script>alert('帳號必須為手機號碼');</script>";
  } else {
    if ($row = mysqli_fetch_array($obj)) {
      header("Location: ./woman_login.php");
    } else {
      $select_last_id = "Select * from girl order by id Desc limit 0 , 1";
      $res = mysqli_query($conn, $select_last_id);
      $row2 = mysqli_fetch_array($res);
      $randid = $randid . str_pad(($row2['id'] + 1), 3, "0", STR_PAD_LEFT);
      if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
        if (move_uploaded_file($file, $dest)) {
          $insert_girl = "Insert into girl(randid,account,pwd,name,nickname,phone,gender,age,local,company,level,sprice,aprice,mprice,bprice,date,line,wechat,weight,height)
                                                    values('$randid','$acc','$pwd','$name','$nickname','$phone','$gender','$age','$local','$company','$level','$sprice','$aprice','$mprice','$bprice','$NowTime','$line','$wechat','$size','$height')";
          mysqli_query($conn, $insert_girl);
          $select_girl = "select id from girl ORDER BY id DESC LIMIT 0 , 1";
          $obj = mysqli_query($conn, $select_girl);
          $row = mysqli_fetch_array($obj);
          $insert_viedo = "Insert into video(girlid,videopic) values('" . $row['id'] . "','$video')";
          mysqli_query($conn, $insert_viedo);
          $insert_img = "Insert into img(girlid, imgname, imgtype, imgpic, original_name) 
                                                            values('" . $row['id'] . "','" . $tmp_time . '.' . $exten . "','$imgtype','$dest2','$imgname')";
          mysqli_query($conn, $insert_img);
          $insert_online = "Insert into `online`(girlid) values('".$row['id']."')";
          mysqli_query($conn, $insert_online);
          header("Location: ./woman_login.php");
        }
      }
      else{
        echo "<script>alert('上傳圖片失敗，請選擇圖片');</script>";
      }
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>
    Online Auto Booking Form a Responsive Widget Template :: w3layouts
  </title>
  <!-- Meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Online Auto Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- //Meta tags -->
  <!-- Stylesheet -->
  <link href="css/wickedpicker.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="css/jquery-ui.css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <!-- //Stylesheet -->
  <!--fonts-->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" />
  <link href="//fonts.googleapis.com/css?family=Montserrat+Alternates:200,400,500,600,700" rel="stylesheet" />
  <!--//fonts-->
</head>

<body>

  <!--background-->
  <h1><span></span>公關註冊</h1>
  <div class="bg-agile">
    <div class="book-appointment">
      <h2></h2>
      <div class="book-agileinfo-form">
        <form action="#" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <input class="form-control form-control-lg" type="text" id="user" name="user" placeholder="帳號(請輸入手機號碼)" required="" />
          </div>
          <div class="form-group row">
            <input class="form-control form-control-lg" type="password" id="password" name="password" placeholder="密碼" required="" />
          </div>
          <div class="form-group row">
            <input class="form-control form-control-lg" type="password" id="agepassword" name="agepassword" placeholder="再次確認密碼" required="" />
          </div>
          <div class="form-group row">
            <input class="form-control form-control-lg" type="text" id="name" name="name" placeholder="姓名" required="" />
          </div>
          <div class="form-group row">
            <input class="form-control form-control-lg" type="text" id="nickname" name="nickname" placeholder="暱稱" required="" />
          </div>
          <div class="form-group row">
            <input class="form-control form-control-lg" type="text" name="age" placeholder="年齡" required="" />
          </div>
          <div class="form-group row">
            <input class="form-control form-control-lg" type="text" name="height" placeholder="身高" required="" />
          </div>
          <div class="form-group row">
            <input class="form-control form-control-lg" type="text" name="3size" placeholder="體重" required="" />
          </div>
          <div class="form-group row">
            <input class="form-control form-control-lg" type="text" id="company" name="company" placeholder="經紀公司(介紹人)" required="" />
          </div>
          <div class="form-group row">
            <input class="form-control form-control-lg" type="text" id="company" name="Line" placeholder="Line ID" />
          </div>
          <div class="form-group row">
            <input class="form-control form-control-lg" type="text" id="company" name="Wechat" placeholder="Wechat ID" />
          </div><br>
          <div class="form-group row">
            <label for="gender">性別:</label>
            <select name="gender" id="gender">
              <option value="man">男生</option>
              <option value="woman">女生</option>
            </select>
          </div><br>
          <div class="form-group row">
            <label for="place">地區:</label>
            <select name="place" id="place">
              <option value="1">台北市</option>
              <option value="2">桃園市</option>
              <option value="3">新竹市</option>
              <option value="4">台中市</option>
              <option value="5">嘉義市</option>
              <option value="6">台南市</option>
              <option value="7">高雄市</option>
            </select>
          </div><br>
          <div class="form-group row">
            <label for="level">服務選項:</label>
            <select name="level" id="level">
              <option value="1">普傳</option>
              <option value="2">高傳</option>
              <option value="3">飯局(小)</option>
              <option value="4">飯局(大)</option>
              <option value="5">男傳</option>
              <option value="6">包養</option>
              <option value="7">伴遊</option>
            </select>
          </div>
          <div class="wthree-text">
            <h6>特殊</h6>
          </div>
          <div>
            <div class="form-group">
              <div>
                <label for="mprice">音樂:</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                  <label class="form-check-label" for="inlineRadio1">有</label>
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0" checked="true">
                  <label class="form-check-label" for="inlineRadio2">無</label>
                </div>
                <div>
                  <label for="mprice">通告:</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">有</label>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio2" value="0" checked="true">
                    <label class="form-check-label" for="inlineRadio2">無</label>
                    <div class="form-group">
                      <input class="form-control form-control-lg" type="text" name="sprice" placeholder="通告價錢，如不填則無此服務" />
                    </div>
                  </div>
                  <div>
                    <label for="mprice">伴遊:</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="1">
                      <label class="form-check-label" for="inlineRadio1">有</label>
                      <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio2" value="0" checked="true">
                      <label class="form-check-label" for="inlineRadio2">無</label>
                      <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="aprice" placeholder="伴遊價錢，如不填則無此服務" />
                      </div>
                    </div>
                  </div>
                  <div>
                    <label for="mprice">包養:</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio1" value="1">
                      <label class="form-check-label" for="inlineRadio1">有</label>
                      <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio2" value="0" checked="true">
                      <label class="form-check-label" for="inlineRadio2">無</label>
                      <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="bprice" placeholder="包養價錢，如不填則無此服務" />
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="form-group">
              <input class="form-control form-control-lg" type="text" name="mprice" placeholder="音樂價錢，如不填則無此服務" />
            </div> -->
              </div><br>
              <div class="form-group">
                <label for="exampleFormControlFile1">圖片上傳:</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
              </div>
              <div class="form-group">
                <input class="form-control form-control-lg" type="url" placeholder="影片網址" name="video" />
              </div>
              <br><br>
              <div>
          <p style="color: white; text-align: center; font-size: 20px; font-weight: bold;">公關註冊資料後<br>請加入官方微信ID(0938987235)，並通知客服，謝謝!</p>
        </div>
        <div style="margin: auto;">
              <input type="submit" value="送出" name="join" />
              </div>
        </form>
      </div>
    </div>
  </div>
  <!--copyright-->
  <div class="copy-w3layouts"></div>
  <!--//copyright-->
  <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
  <!-- Time -->
  <script type="text/javascript" src="js/wickedpicker.js"></script>
  <script type="text/javascript">
    $('.timepicker').wickedpicker({
      twentyFour: false,
    })
  </script>
  <!--// Time -->
  <!-- Calendar -->
  <script src="js/jquery-ui.js"></script>
  <script>
    $(function() {
      $('#datepicker,#datepicker1,#datepicker2,#datepicker3').datepicker()
    })
  </script>
  <!-- //Calendar -->
</body>

</html>