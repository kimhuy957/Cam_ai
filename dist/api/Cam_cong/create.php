<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once('../../config/db.php');
include_once('../../model/lich.php');

$db=new db();
$connect=$db->connect();
$lich=new lich($connect);
$data=json_decode(file_get_contents("php://input"));
// $lich->id_lich=$data->id_lich;
$lich->date=$data->date;
$lich->time_di=$data->time_di;
$lich->time_ve=$data->time_ve;
$lich->tinh_trang=$data->tinh_trang;
$lich->id_thuoc=$data->id_thuoc;
if($lich->create($data->date,$data->time_di,$data->time_ve,$data->tinh_trang,$data->id_thuoc)){
    echo json_encode(array('message','Question Created'));
}
else{
    echo json_encode(array('message','Question Not Created'));
}
?>