<?php
// Kết nối tới cơ sở dữ liệu
include "../../config/sql.php";
include "../../config/function.php";

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//lấy thơi gian
// Lấy dữ liệu từ form
$time_di=$_POST["time_den"];
$time_ve=$_POST["time_ve"];
$tinh_trang='';

date_default_timezone_set('Asia/Ho_Chi_Minh');
$dateday=date('d');
$datetime=date('H:i');
$dateMonth=date('m');
$dateYear=date('Y');
$datedaysql=date('Y-m-d');
$dateactually=date('Y-m-d');

$sql = "INSERT INTO `quanly`.`lich` 
(`id_lich`, `date`,`time_di`,`time_ve`, `tinh_trang`,`id_thuoc`) 
 VALUES (NULL ,'".$datedaysql."','".$time_di."','".$time_ve."','okmla','".$_GET['id_thuoc']."')";
                                            

if ($conn->query($sql) === TRUE) {
    echo "Câm công thành công";
    header("http://huma_new.test:8081/dist/date.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error; 
}

// Gửi dữ liệu tới API
$data = array(
'time_den'=>$time_di,
'time_ve'=>$time_ve,
'id_thuoc'=>$_GET['id_thuoc']
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://huma_new.test:8081/dist/api/them/them_Camcong.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => http_build_query($data),
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer <api_key>",
    "Content-Type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$conn->close();
?>
