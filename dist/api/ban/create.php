<?php
header('Acces-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Acces-Control-Allow-Methods: POST');
header('Acces-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');
include_once('../../config/db.php');
include_once('../../model/ban.php');

$db=new db();
$connect=$db->connect();
$ban=new ban($connect);
$data=json_decode(file_get_contents("php://input"));
// $ban->mnv=$data->mnv;
$ban->mb=$data->mb;
$ban->ten_ban=$data->ten_ban;
$ban->level=$data->level;
if($ban->create($data->mb,$data->ten_ban,$data->level)){
    echo json_encode(array('message','Question Created'));
}
else{
    echo json_encode(array('message','Question Not Created'));
}

?>