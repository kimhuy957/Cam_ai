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
$id = $_POST["id"];
$user=$_POST["user"];
$email = $_POST["email"];
$date_birth = $_POST["year"];
$date_job_receive = $_POST["day_vao"];
$role = $_POST["role"];
if($role==1){
    $role="Admin";
}
elseif($role==2){
    $role="Quản lý";
}
else{
    $role="Nhân viên";
}

// Chèn dữ liệu vào bảng "customers"
$sql = "INSERT INTO `cam_ai`.`user` 
(`id`, `fullname`,`email`,`date_birth`, `date_job_receive`, `status`,`role`) 
 VALUES ('".$id."', '".$user."','".$email."','".$date_birth."', '".$date_job_receive."', 'Đang Làm','".$role."')";
                                            

if ($conn->query($sql) === TRUE) {
    foreach ($selected_numbers as $number) {
        $sql_thuoc="INSERT INTO belong(id,id_staff,id_room) VALUES (NULL,$id,$number);";    
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
'id'=>$id,
'user'=>$user,
'email'=>$email,
'date_birth'=>$date_birth,
'date_job_receive'=>$date_job_receive,
'vai_tr'=>$role,
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
