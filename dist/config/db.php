<?php
class db{
    private $DB_HOST = 'localhost';
    private $DB_USER = 'root';
    private $DB_PASS = '';
    private $DB_NAME = 'quanly';
    public function connect(){
        $conn=null;
         $conn=mysqli_connect($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME) or die("Không thể kết nối tới cơ sở dữ liệu");
         if($conn){
             mysqli_query($conn,"SET NAMES 'utf8'");
             echo"ok";
         }else{
             echo "Bạn đã kết nối thất bại".mysqli_connect_error();
         }
         return $conn;
     }
    }

?>