<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
//require_once('./config.php');
require_once('_inc/ConfigManager.php'); //Line 設定檔 管理器
require_once('_inc/LineAuthorization.php'); //產生登入網址
require_once('_inc/LineProfiles.php'); //取得用戶端 Profile
require_once('_inc/LineController.php'); //LINE控制
require_once('./config.php'); //設定值

if (!session_id()) {
  session_start();
}
$state = sha1(time());
$Line = new LineController();

//echo "產生LINE登入連結";
//echo "<br>\n";
$url = $Line->lineLogin($state); //產生LINE登入連結
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
  <h1><span></span>遊客登入</h1>
  <div class="bg-agile">
    <div class="book-appointment2">
      <div class="book-agileinfo-form">
        <form action="#" method="post">
          <a href="<?php echo $url; ?>"><img src="./images/btn_login_base.png" alt=""></a>
      </div>
      <div class="clear"></div>
      </form>
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