<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
    include_once('../../config/db.php');
    include_once('../../model/lich.php');

    $db=new db();
    $connect=$db->connect();
    $lich=new lich($connect);
    $lich->show($_GET['id']);
    $lich_item=array(

            'id_lich'=>$lich->id_lich,
            'date'=>$lich->date,
            'time_di'=>$lich->time_di,
            'time_ve'=>$lich->time_ve,
            'tinh_trang'=>$lich->tinh_trang,
            'id_thuoc'=>$lich->$id_thuoc
    );
    echo print_r($lich_item);
?>