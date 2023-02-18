<?php
header('Acces-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Acces-Control-Allow-Methods: PUT');
header('Acces-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');
include_once('../../config/db.php');
include_once('../../model/ban.php');

$db=new db();
$connect=$db->connect();
$ban=new ban($connect);
$data=json_decode(file_get_contents("php://input"));
$ban->mb=$data->mb;
$ban->ten_ban=$data->ten_ban;
$ban->level=$data->level;
if($ban->update($data->mb,$data->ten_ban,$data->level)){
    echo json_encode(array('message','Question Update'));
}
else{
    echo json_encode(array('message','Question Not Update'));
}

?>