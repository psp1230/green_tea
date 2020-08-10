<?php
    include 'init.php';
    $select_order = "SELECT
                    girl.*,
                    img.imgpic,
                    video.videopic,
                    `online`.login_time
                    FROM
                    girl
                    INNER JOIN img ON girl.id = img.girlid
                    INNER JOIN video ON girl.id = video.girlid
                    INNER JOIN `online` ON girl.id = `online`.girlid
                    ORDER BY id";
    $obj = mysqli_query($conn,$select_order);
    while($row = mysqli_fetch_array($obj)){
        $service = array();
        if($row['sprice']>0){
            array_push($service,'通告');
        }
        if($row['aprice']>0){
            array_push($service,'伴遊');
        }
        if($row['mprice']>0){
            array_push($service,'音樂');
        }
        if(empty($service)){
            array_push($service,'無');
        }
        $data_array[] = array(
            "id" => $row['id'],
            "pwd" => $row['pwd'],
            "randid" => $row['randid'],
            "account" => $row['account'],
            "name" => $row['name'],
            "nickname" => $row['nickname'],
            "img" => $row['imgpic'],
            "video" => $row['videopic'],
            "phone" => $row['phone'],
            "gender" => $row['gender'],
            "place" => $row['local'],
            "age" => $row['age'],
            "height" => $row['height'],
            "size" => $row['weight'],
            "company" => $row['company'],
            "level" => $row['level'],
            "sprice" => $row['sprice'],
            "aprice" => $row['aprice'],
            "mprice" => $row['mprice'],
            "bprice" => $row['bprice'],
            "OnSale" => $row['OnSale'],
            "line" => $row['line'],
            "wechat" => $row['wechat'],
            "open" => $row['open'],
            "date" => $row['date'],
            "edate" => $row['login_time'],
            "service" => implode(',',$service),
        );
    }
    echo json_encode($data_array,JSON_UNESCAPED_UNICODE);
