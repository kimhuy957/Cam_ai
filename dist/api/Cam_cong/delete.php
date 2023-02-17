<?php
header('Acces-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Acces-Control-Allow-Methods: DELETE');
header('Acces-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');
include_once('../../config/db.php');
include_once('../../model/lich.php');

$db=new db();
$connect=$db->connect();
$lich=new lich($connect);
$data=json_decode(file_get_contents("php://input"));
$lich->id_lich=$data->id_lich;

if($lich->delete($data->id_lich)){
    echo json_encode(array('message','Question DELETE'));
}
else{
    echo json_encode(array('message','Question Not DELETE'));
}
?>