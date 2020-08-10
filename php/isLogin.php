<?php
    include 'init.php';
    session_start();
    if(!empty($_SESSION['admin'])){
        echo 'true';
    }
    else{
        session_destroy();
        echo 'false';
    }
?>