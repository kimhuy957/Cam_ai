<?php
    header('Acces-Control-Allow-Origin:*');
    header('Content-Type:application/json');
    include_once('../../config/db.php');
    include_once('../../model/phong.php');

    $db=new db();
    $connect=$db->connect();
    $phong=new phong($connect);
    $read=$phong->read();
   if(mysqli_num_rows($read)){
    $phong_array=[];
    $phong_array['data']=[];
    while($row=mysqli_fetch_assoc($read)){
        extract($row);
        $phong_item=array(
            'mp'=>$mp,
            'ten_phong'=>$ten_phong,
            'm_ban'=>$m_ban,
            'level'=>$level
        );
    array_push($phong_array['data'],$phong_item);
    }
    echo print_r($phong_array);
   }

?>