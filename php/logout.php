<?php
    session_start();
    session_destroy();
    if(empty($_SESSION['Auth'])){
        session_destroy();
    }
    else{
        $NowTime = date("Y-m-d H:i:s");
        // $insert
    }
    header("Location: ../index.php");
?>