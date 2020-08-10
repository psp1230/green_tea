<?php
    header('content-type: application/json');
    include 'init.php';
    try {
        $bodys = json_decode(file_get_contents('php://input'));
        $id = $bodys->id;
        $on = $bodys->onsale;

        $delete_record = "UPDATE girl SET OnSale = $on WHERE id = $id";
        mysqli_query($conn,$delete_record);
        echo true;
    } catch (\Throwable $th) {
        echo false;
    }
?>
