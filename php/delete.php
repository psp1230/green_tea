<?php
    header('content-type: application/json');
    include 'init.php';
    $bodys = json_decode(file_get_contents('php://input'));
    $id = $bodys->Id;
    $delete_record = "delete from girl where id = '$id'";
    mysqli_query($conn,$delete_record);
    $delete_img = "delete from img where girlid = '$id'";
    mysqli_query($conn,$delete_img);
    $delete_video = "delete from video where girlid = '$id'";
    mysqli_query($conn,$delete_video);
    $delete_online = "delete from `online` where girlid = '$id'";
    mysqli_query($conn,$delete_online);
?>