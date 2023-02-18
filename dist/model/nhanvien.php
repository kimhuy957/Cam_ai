<?php
    class nhanvien{
        private $conn;

        public $mnv;
        public $tennv;
        public $email;
        public $ngay_sinh;
        public $ngay_vao;
        public $tinh_trang;
        public $vai_tro;

        //connect db
        public function __construct($db)
        {
            $this->conn=$db;
        }
        public function read(){
            // include_once ('../config/db.php');
            $query="SELECT * from ten order by mnv desc";
            $stmt=mysqli_query($this->conn,$query);
            return $stmt;
        }
        //show data
        public function show($id){
            // include_once ('../config/db.php');
            $query="SELECT * from ten where mnv=$id LiMIT 1";
            $stmt=mysqli_query($this->conn,$query);
            while($row=mysqli_fetch_assoc($stmt)){
                $this->mnv=$row['mnv'];
                $this->tennv=$row['tennv'];
               $this->email=$row['email'];
               $this->ngay_sinh=$row['ngay_sinh'];
               $this->ngay_vao=$row['ngay_vao'];
               $this->tinh_trang=$row['tinh_trang'];
            }

        }
        //create data
        public function create($mnv,$tennv,$email,$ngay_sinh,$ngay_vao,$tinh_trang,$vai_tro){
            $query = "INSERT INTO `quanly`.`ten` 
            (`mnv`, `tennv`, `email`, `ngay_sinh`, `ngay_vao`, `tinh_trang`,
             `vai_tro`) VALUES ('$mnv', '$tennv', '$email', '$ngay_sinh', 
             '$ngay_vao', '$tinh_trang', '$vai_tro')";
               $stmt = mysqli_prepare($this->conn, $query);

               if (mysqli_stmt_execute($stmt)) {
                   return true;
               } else {
                   printf("Error %s.\n", mysqli_error($this->conn)); // Added error message to printf()
                   return false;
               }
        }
        public function update($mnv,$tennv,$email,$ngay_sinh,$ngay_vao,$tinh_trang,$vai_tro){
            $query="UPDATE `quanly`.`ten` SET `tennv`='$tennv',`email`='$email',
            `ngay_sinh`='$ngay_sinh', `ngay_vao`='$ngay_vao', `tinh_trang`='$tinh_trang',`vai_tro`='$vai_tro'
            where mnv=$mnv";
              $stmt = mysqli_prepare($this->conn, $query);
            // mysqli_stmt_bind_param($stmt, "sis", $name, $age, $email);
            
             if(mysqli_stmt_execute($stmt)){
                return true;
             }
             else{
                printf("Error %s.\n");
                return false;
             }
        }
        public function delete($mnv){
            $query="DELETE FROM ten WHERE `mnv`=$mnv"; 
            $query1="DELETE FROM thuoc WHERE `mnv`=$mnv";  
            $stmt1 = mysqli_prepare($this->conn, $query1);
            $stmt = mysqli_prepare($this->conn, $query);
            if(mysqli_stmt_execute($stmt1)){
                echo "Đã xóa ở bảng thuộc";
            }
            else{
                echo "ko có giá trị ở bảng thuộc";
            }
            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                printf("Error %s.\n", mysqli_error($this->conn)); // Added error message to printf()
                return false;
            }
        }        
    }
?>