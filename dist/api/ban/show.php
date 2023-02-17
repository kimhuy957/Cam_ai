<?php
    header('Acces-Control-Allow-Origin:*');
    header('Content-Type:application/json');
    include_once('../../config/db.php');
    include_once('../../model/ban.php');

    $db=new db();
    $connect=$db->connect();
    $ban=new ban($connect);
    $ban->show($_GET['id']);
    $ban_item=array(

            'mb'=>$ban->mb,
            'ten_ban'=>$ban->ten_ban,
            'level'=>$ban->level
    );
    echo print_r($ban_item);
?>