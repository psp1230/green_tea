<?php
    include 'init.php';
    $select_member = "Select * from customer";
    $obj = mysqli_query($conn,$select_member);
    while ($row = mysqli_fetch_array($obj)){
        $data_array[] = array(
            "id" => $row['id'],
            "name" => $row['name'],
            "phone" => $row['phone'],
            "line" => $row['line'],
            "wechat" => $row['wechat'],
            "date" => $row['date']
        );
    }
    echo json_encode($data_array,JSON_UNESCAPED_UNICODE);
?>