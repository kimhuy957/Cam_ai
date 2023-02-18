<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
include_once('../../config/db.php');
include_once('../../model/nhanvien.php');

$db=new db();
$connect=$db->connect();
$nhan_vien=new nhanvien($connect);
$data=json_decode(file_get_contents("php://input"));
$nhan_vien->mnv=$data->mnv;
$nhan_vien->tennv=$data->tennv;
$nhan_vien->email=$data->email;
$nhan_vien->ngay_sinh=$data->ngay_sinh;
$nhan_vien->ngay_vao=$data->ngay_vao;
$nhan_vien->tinh_trang=$data->tinh_trang;
$nhan_vien->vai_tro=$data->vai_tro;
if($nhan_vien->create($data->mnv,$data->tennv,$data->email,$data->ngay_sinh,$data->ngay_vao,$data->tinh_trang,$data->vai_tro)){
    echo json_encode(array('message','Question Created'));
}
else{
    echo json_encode(array('message','Question Not Created'));
}
?>