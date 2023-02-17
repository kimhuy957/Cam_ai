<?php
header('Acces-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Acces-Control-Allow-Methods: PUT');
header('Acces-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');
include_once('../../config/db.php');
include_once('../../model/phong.php');

$db=new db();
$connect=$db->connect();
$phong=new phong($connect);
$data=json_decode(file_get_contents("php://input"));
$phong->mp=$data->mp;
$phong->ten_phong=$data->ten_phong;
$phong->m_ban=$data->m_ban;
$phong->level=$data->level;
if($phong->update($data->mp,$data->ten_phong,$data->m_ban,$data->level)){
    echo json_encode(array('message','Question Update'));
}
else{
    echo json_encode(array('message','Question Not Update'));
}
?>