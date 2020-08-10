<?php
    session_start();
    if(empty($_SESSION['Auth'])){
        echo '<script type="text/javascript">';
        echo 'alert("遊客無法編輯資料");';
        echo 'window.location.href = "../index.php";';
        echo '</script>';
    }
    else{
        header("Location: ../edit.php");
    }
?>