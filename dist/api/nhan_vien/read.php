<?php
    header('Acces-Control-Allow-Origin:*');
    header('Content-Type:application/json');
    include_once('../../config/db.php');
    include_once('../../model/nhanvien.php');

    $db=new db();
    $connect=$db->connect();
    $nhan_vien=new nhanvien($connect);
    $read=$nhan_vien->read();
   if(mysqli_num_rows($read)){
    $nhan_vien_array=[];
    $nhan_vien_array['data']=[];
    while($row=mysqli_fetch_assoc($read)){
        extract($row);
        $nhan_vien_item=array(
            'mnv'=>$mnv,
            'title'=>$tennv,
            'email'=>$email,
            'ngay_sinh'=>$ngay_sinh,
            'ngay_vao'=>$ngay_vao,
            'tinh_trang'=>$tinh_trang
        );
    array_push($nhan_vien_array['data'],$nhan_vien_item);
    }
    echo print_r($nhan_vien_array);
   }

?>