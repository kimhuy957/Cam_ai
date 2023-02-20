<?php
header('Acces-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Acces-Control-Allow-Methods: POST');
header('Acces-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');
include_once('../../config/db.php');
include_once('../../model/room.php');

$db=new db();
$connect=$db->connect();
$room=new room($connect);
$data=json_decode(file_get_contents("php://input"));
$room->mp=$data->mp;
$room->name_room=$data->name_room;
$room->id_company=$data->id_company;
$room->level=$data->level;
if($room->create($data->mp,$data->name_room,$data->id_company,$data->level)){
    echo json_encode(array('message','Question Created'));
}
else{
    echo json_encode(array('message','Question Not Created'));
}

?>