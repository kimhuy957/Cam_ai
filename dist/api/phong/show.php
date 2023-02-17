<?php
    header('Acces-Control-Allow-Origin:*');
    header('Content-Type:application/json');
    include_once('../../config/db.php');
    include_once('../../model/phong.php');

    $db=new db();
    $connect=$db->connect();
    $phong=new phong($connect);
    $phong->show($_GET['id']);
    $phong_item=array(

            'mp'=>$phong->mp,
            'ten_phong'=>$phong->ten_phong,
            'm_ban'=>$phong->m_ban,
            'level'=>$phong->level
    );
    echo print_r($phong_item);
?>