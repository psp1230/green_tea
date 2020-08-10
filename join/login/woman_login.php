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
    <meta
      name="keywords"
      content="Online Auto Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
    />
    <script type="application/x-javascript">
      addEventListener("load", function () {
      	setTimeout(hideURLbar, 0);
      }, false);

      function hideURLbar() {
      	window.scrollTo(0, 1);
      }
    </script>
    <!-- //Meta tags -->
    <!-- Stylesheet -->
    <link
      href="css/wickedpicker.css"
      rel="stylesheet"
      type="text/css"
      media="all"
    />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- //Stylesheet -->
    <!--fonts-->
    <link
      href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700"
      rel="stylesheet"
    />
    <link
      href="//fonts.googleapis.com/css?family=Montserrat+Alternates:200,400,500,600,700"
      rel="stylesheet"
    />
    <!--//fonts-->
  </head>

  <body>
    <!--background-->
    <h1><span></span>公關登入</h1>
    <div class="bg-agile">
      <div class="book-appointment">
        <h2></h2>
        <div class="book-agileinfo-form">
          <form action="#" method="post">
            <div class="main-agile-sectns">
              <div class="agileits-btm-spc form-text">
                <input
                  type="text"
                  name="user_account"
                  placeholder="帳號"
                />
                <input
                  type="password"
                  name="password"
                  placeholder="密碼"
                />
              </div>
            </div>
            <input type="submit" value="登入" name="login" style="margin:1em 2px"/>
            <input type="submit" value="註冊" name="join"  style="margin:1em 2px"/>
            <div class="clear"></div>
          </form>
          <?php
            include 'init.php';
            if(isset($_POST['join'])){
              header("Location: ./woman_terms.html");
            }
            if(isset($_POST['login'])){
              $user = $_POST['user_account'];
              $pwd = $_POST['password'];
              $select_user = "Select id,account from girl where account = '$user' && pwd = '$pwd'";
              $obj = mysqli_query($conn,$select_user);
              if($row = mysqli_fetch_array($obj)){
                $_SESSION['name'] = $row['account'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['Auth'] = 'true';
                $_SESSION['login_time'] = $NowTime = date("Y-m-d H:i:s");
                $select_online = "Select * from `online` where girlid = '".$_SESSION['id']."'";
                $obj = mysqli_query($conn,$select_online);
                if($row = mysqli_fetch_array($obj)){
                  $update_online = "Update `online` set login_time = '".$_SESSION['login_time']."' where girlid = '".$_SESSION['id']."'";
                  mysqli_query($conn,$update_online);
                }
                else{
                  $insert_online = "Insert into `online`(girlid,login_time) values('".$_SESSION['id']."','".$_SESSION['login_time']."')";
                  mysqli_query($conn,$insert_online);
                }
                header("Location: https://breeze888.com/index.php");
              }
              else{
                echo '<font color="white">帳號、密碼錯誤</font>';
              }
            }
          ?>
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
      $(function () {
        $('#datepicker,#datepicker1,#datepicker2,#datepicker3').datepicker()
      })
    </script>
    <!-- //Calendar -->
  </body>
</html>
