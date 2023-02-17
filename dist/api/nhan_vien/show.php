<?php
    header('Acces-Control-Allow-Origin:*');
    header('Content-Type:application/json');
    include_once('../../config/db.php');
    include_once('../../model/nhanvien.php');

    $db=new db();
    $connect=$db->connect();
    $nhan_vien=new nhanvien($connect);
    $nhan_vien->show($_GET['id']);
    $nhan_vien_item=array(

            'mnv'=>$nhan_vien->mnv,
            'title'=>$nhan_vien->tennv,
            'email'=>$nhan_vien->email,
            'ngay_sinh'=>$nhan_vien->ngay_sinh,
            'nagy_vao'=>$nhan_vien->ngay_vao,
            'trinh_trang'=>$nhan_vien->tinh_trang
    );
    echo print_r($nhan_vien_item);
?>