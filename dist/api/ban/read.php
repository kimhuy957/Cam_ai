<?php
    header('Acces-Control-Allow-Origin:*');
    header('Content-Type:application/json');
    include_once('../../config/db.php');
    include_once('../../model/ban.php');

    $db=new db();
    $connect=$db->connect();
    $ban=new ban($connect);
    $read=$ban->read();
   if(mysqli_num_rows($read)){
    $ban_array=[];
    $ban_array['data']=[];
    while($row=mysqli_fetch_assoc($read)){
        extract($row);
        $ban_item=array(
            'mb'=>$mb,
            'ten_ban'=>$ten_ban,
            'level'=>$level
        );
    array_push($ban_array['data'],$ban_item);
    }
    echo print_r($ban_array);
   }

?>