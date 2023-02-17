<?php
// Kết nối tới cơ sở dữ liệu
include "../../config/sql.php";
include "../../config/function.php";

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$Time_den=$_POST["Time_den"];
$Time_ve=$_POST["Time_ve"];
date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateday=date('Y-m-d');
//kiêm tra thơi gian
  $n='';
       if($Time_den<='8:00'){
            $n="muộn";
        
            if($Time_den<='10:00'){
                $n="nghỉ";
            }

        }
        if($Time_den>='8:00'){
            $n="đúng h";
        }

$sql = "INSERT INTO `quanly`.`lich` 
(`date`, `time_di`, `time_ve`, `tinh_trang`, `id_thuoc`) 
VALUES ('".$dateday."', '".$Time_den."', '".$Time_ve."', '".$n."', '".$_GET['id']."');";
                                            

if ($conn->query($sql) === TRUE) {
    echo "lưu thành công";
    header("http://huma_new.test:8081/dist/them_phong.php");

} else {
  echo "Error: " . $sql . "<br>" .$conn->error; 
}

// Gửi dữ liệu tới API
$data = array(
'Time_den'=>$Time_den,
'Time_ve'=>$Time_ve
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://huma_new.test:8081/dist/api/them/them_phong.php",
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
