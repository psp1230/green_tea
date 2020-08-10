<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
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
  <h1><span></span>遊客註冊</h1>
  <div class="bg-agile">
    <div class="book-appointment">
      <h2></h2>
      <div class="book-agileinfo-form">
        <form action="#" method="post" enctype="multipart/form-data">
          <div class="main-agile-sectns">
            <div class="agileits-btm-spc form-text">
              <input type="text" name="user_name" placeholder="姓名" required="" value="<?php echo $_SESSION['name'] ?>" />
              <select name="user_gender" id="country1">
                <option value="man">男生</option>
                <option value="woman">女生</option>
              </select>
            </div>
          </div>
          <div class="agileits-btm-spc form-text">
            <input type="text" name="phone" placeholder="電話" required="" />
            <input type="text" name="LINE" placeholder="LINE："  />
            <input type="text" name="wechat" placeholder="WeChat"  />
          </div>
          <div class="main-agile-sectns">
            <input type="submit" value="送出" name="Submit" />
            <div class="clear"></div>
        </form>
        <?php
            include 'init.php';
            if (isset($_POST['Submit'])) {
              $phone = $_POST['phone'];
              $line = $_POST['LINE'];
              $wechat = $_POST['wechat'];
              switch($_POST['user_gender']){
                case 'man':
                  $gender = '男';
                break;
                case 'women':
                  $gender = '女';
                break;
              }
              $update_customer = "Update customer set gender = '$gender', phone = '$phone', line = '$line', wechat = '$wechat' where name ='".$_SESSION['name']."'";
              if(mysqli_query($conn,$update_customer)){
                header("Location: ./customer_login.php");
              }
              else{
                header("Location: ./customer_resgistered.php");
              }
            }
        ?>
      </div>
    </div>
  </div>
  <!--copyright-->
  <div class="copy-w3layouts">

  </div>
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