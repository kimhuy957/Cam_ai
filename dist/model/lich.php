<?php
    class lich{
        private $conn;

        public $id_lich;
        public $date;
        public $time_di;
        public $time_ve;
        public $tinh_trang;
        public $id_thuoc;

        //connect db
        public function __construct($db)
        {
            $this->conn=$db;
        }
        public function read(){
            // include_once ('../config/db.php');
            $query="SELECT * from lich order by id_lich desc";
            $stmt=mysqli_query($this->conn,$query);
            return $stmt;
        }
        //show data
        public function show($id){
            // include_once ('../config/db.php');
            $query="SELECT * from lich where id_lich=$id LiMIT 1";
            $stmt=mysqli_query($this->conn,$query);
            while($row=mysqli_fetch_assoc($stmt)){
                $this->id_lich=$row['id_lich'];
                $this->date=$row['date'];
               $this->time_di=$row['time_di'];
               $this->time_ve=$row['time_ve'];
               $this->tinh_trang=$row['tinh_trang'];
               $this->id_thuoc=$row['id_thuoc'];
            }

        }
        //create data
        public function create($id_lich,$date,$time_di,$time_ve,$tinh_trang,$id_thuoc){
            $query="INSERT INTO `quanly`.`lich` 
            ( `id_lich`,`date`,`time_di`,`time_ve`, `tinh_trang`,`id_thuoc`) 
            VALUES ('$date','$time_di','$time_ve','$tinh_trang',`$id_thuoc`)";
              $stmt = mysqli_prepare($this->conn, $query);
            
             if(mysqli_stmt_execute($stmt)){
                return true;
             }
             else{
                printf("Error %s.\n");
                return false;
             }
        }
        public function update($id_lich,$date,$time_di,$time_ve,$tinh_trang,$id_thuoc){
            $query="UPDATE `quanly`.`lich` SET `date`='$date',`time_di`='$time_di',`time_ve`='$time_ve', `tinh_trang`='$tinh_trang',`id_thuoc`='$id_thuoc'
            where id_lich=$id_lich";
              $stmt = mysqli_prepare($this->conn, $query);
            // mysqli_stmt_bind_param($stmt, "sis", $name, $age, $time_di);
            
             if(mysqli_stmt_execute($stmt)){
                return true;
             }
             else{
                printf("Error %s.\n");
                return false;
             }
        }
        public function delete($id_lich){
            $query="DELETE FROM lich WHERE id_lich=$id_lich";
              $stmt = mysqli_prepare($this->conn, $query);
            // mysqli_stmt_bind_param($stmt, "sis", $name, $age, $time_di);
            
             if(mysqli_stmt_execute($stmt)){
                return true;
             }
             else{
                printf("Error %s.\n");
                return false;
             }
        }        
    }
?>