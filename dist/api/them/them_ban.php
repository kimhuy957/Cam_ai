<?php
// Kết nối tới cơ sở dữ liệu
include "../../config/sql.php";
include "../../config/function.php";

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$user=$_POST["name_company"];
// Chèn dữ liệu vào bảng "customers"
$sql = "INSERT INTO `cam_ai`.`company` 
(`id`, `name_company`,`level`) 
 VALUES (NULL ,'".$user."',0)";
                                            

if ($conn->query($sql) === TRUE) {
    echo "Lưu thành công tên company";
    header("http://huma_new.test:8081/dist/them_phong.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error; 
}

// Gửi dữ liệu tới API
$n='';
$data = array(
'name_company'=>$n,
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://huma_new.test:8081/dist/api/them/themban.php",
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
