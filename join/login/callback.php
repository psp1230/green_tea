<?php
require_once('_inc/ConfigManager.php'); //Line 設定檔 管理器
require_once('_inc/LineAuthorization.php'); //產生登入網址
require_once('_inc/LineProfiles.php'); //取得用戶端 Profile
require_once('_inc/LineController.php'); //LINE控制
require_once('./config.php'); //設定值
include 'init.php';
// if (!session_id()) {
//     session_start();
// }
session_start();
$code = $_GET['code'];
$state = $_GET['state'];


$Line = new LineController();

$access_token = $Line->getAccessToken($code);//取得使用者資料
//$_SESSION['access_token']=$access_token;

$user = $Line->getLineProfile_access_token($access_token);//取得使用者資料
/*
print_r($access_token);
echo '$code= ' . $code . '<br /><br />';
echo '$state= ' . $state . '<br /><br />';
*/

$NowTime = date("Y/m/d H:i:s");
$select_customer = "Select * from customer where name = '$user->displayName'";
$obj = mysqli_query($conn,$select_customer);
if($row = mysqli_fetch_array($obj)){
    $gender = $row['gender'];
    $phone = $row['phone'];
    if(empty($gender) || empty($phone)){
        ob_start();
        $_SESSION['user'] = $user->userId;
        $_SESSION['name'] = $user->displayName;
        header("Location: ./customer_resgistered.php");
        ob_end_flush();
    }
    else{
        ob_start();
        $_SESSION['user'] = $user->userId;
        $_SESSION['name'] = $user->displayName;
        header("Location: https://breeze888.com/index.php");
        ob_end_flush();
    }
}
else{
    $insert_customer= "Insert into customer(name,date) values('$user->displayName', '$NowTime')";
    if(mysqli_query($conn,$insert_customer)){
        ob_start();
        $_SESSION['user'] = $user->userId;
        $_SESSION['name'] = $user->displayName;
        header("Location: ./customer_resgistered.php");
        ob_end_flush();
    }
    else{
        ob_start();
        header("Location: ./directing/join/login/customer_login.php");
        ob_end_flush();
    }
}
// echo "使用者個人資料";
// print_r($user);
// var_dump($_SESSION);
// $_SESSION['user'] = $user->userId;
// header("Location: https://infinitywp.com/figurine/line_login/index.php");