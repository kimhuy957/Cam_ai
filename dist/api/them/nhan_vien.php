<?php
// Kết nối tới cơ sở dữ liệu
include "../../config/sql.php";
include "../../config/function.php";

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$selected_numbers = $_POST['ban1'];
$mnv = $_POST["mnv"];
$ten=$_POST["ten"];
$email = $_POST["email"];
$ngay_sinh = $_POST["year"];
$ngay_vao = $_POST["day_vao"];
$vai_tro = $_POST["vai_tro"];
if($vai_tro==1){
    $vai_tro="Admin";
}
elseif($vai_tro==2){
    $vai_tro="Quản lý";
}
else{
    $vai_tro="Nhân viên";
}

// Chèn dữ liệu vào bảng "customers"
$sql = "INSERT INTO `quanly`.`ten` 
(`mnv`, `tennv`,`email`,`ngay_sinh`, `ngay_vao`, `tinh_trang`,`vai_tro`) 
 VALUES ('".$mnv."', '".$ten."','".$email."','".$ngay_sinh."', '".$ngay_vao."', 'Đang Làm','".$vai_tro."')";
                                            

if ($conn->query($sql) === TRUE) {
    foreach ($selected_numbers as $number) {
        $sql_thuoc="INSERT INTO thuoc(id,mnv,mp) VALUES (NULL,$mvn,$number);";    
        if($conn->query($sql_thuoc)===true){
             echo "lưu đã thành công<br>"; 
        } 
        echo "Selected number: $number\n";
    }
    echo "Lưu thành công tên";
    header("http://huma_new.test:8081/dist/them_nv.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error; 
}

// Gửi dữ liệu tới API
$data = array(
'mnv'=>$mnv,
'ten'=>$ten,
'email'=>$email,
'ngay_sinh'=>$ngay_sinh,
'ngay_vao'=>$ngay_vao,
'vai_tr'=>$vai_tro,
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://example.com/api/save_info.php",
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
