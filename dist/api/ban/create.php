<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once('../../config/db.php');
include_once('../../model/ban.php');

$db=new db();
$connect=$db->connect();
$ban=new ban($connect);
$data=json_decode(file_get_contents("php://input"));
$ban->mb=$data->mb;
$ban->ten_ban=$data->ten_ban;
if($ban->create($data->mb,$data->ten_ban)){
    echo json_encode(array('message','Question Created'));
}
else{
    echo json_encode(array('message','Question Not Created'));
}
?>