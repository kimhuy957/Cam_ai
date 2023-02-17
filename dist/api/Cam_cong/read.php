<?php
    header('Acces-Control-Allow-Origin:*');
    header('Content-Type:application/json');
    include_once('../../config/db.php');
    include_once('../../model/lich.php');

    $db=new db();
    $connect=$db->connect();
    $lich=new lich($connect);
    $read=$lich->read();
   if(mysqli_num_rows($read)){
    $lich_array=[];
    $lich_array['data']=[];
    while($row=mysqli_fetch_assoc($read)){
        extract($row);
        $lich_item=array(
            'id_lich'=>$id_lich,
            'date'=>$date,
            'time_di'=>$time_di,
            'time_ve'=>$time_ve,
            'tinh_trang'=>$tinh_trang,
            'id_thuoc'=>$id_thuoc
        );
    array_push($lich_array['data'],$lich_item);
    }
    echo print_r($lich_array);
   }

?>