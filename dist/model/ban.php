<?php
    class ban{
        private $conn;

        public $mb;
        public $ten_ban;
        public $level;
        
        //connect db
        public function __construct($db)
        {
            $this->conn=$db;
        }
        public function read(){
            // include_once ('../config/db.php');
            $query="SELECT * from ban order by ten_ban desc";
            $stmt=mysqli_query($this->conn,$query);
            return $stmt;
        }
        //show data
        public function show($mb){
            // include_once ('../config/db.php');
            $query="SELECT * from ban where mb=$mb LIMIT 1";
            $stmt=mysqli_query($this->conn,$query);
            while($row=mysqli_fetch_assoc($stmt)){
                $this->mb=$row['mb'];
               $this->ten_ban=$row['ten_ban'];
               $this->level=$row['level'];
            }

        }
        //create data
        public function create($mb,$ten_ban){
            $query="INSERT INTO `quanly`.`ban` 
            ( `mb`,`ten_ban`,`level`) 
            VALUES ($mb,'$ten_ban',0)";
             $stmt = mysqli_prepare($this->conn, $query);

             if (mysqli_stmt_execute($stmt)) {
                 return true;
             } else {
                 printf("Error %s.\n", mysqli_error($this->conn)); // Added error message to printf()
                 return false;
             }
        }
        public function update($mb,$ten_ban,$level){
            $query="UPDATE `quanly`.`ban` SET `level`='$level',`ten_ban`='$ten_ban'
            where mb=$mb";
              $stmt = mysqli_prepare($this->conn, $query);
             if(mysqli_stmt_execute($stmt)){
                return true;
             }
             else{
                printf("Error %s.\n");
                return false;
             }
        }
        public function delete($mb){
            $query="DELETE FROM ban WHERE mb=$mb";
              $stmt = mysqli_prepare($this->conn, $query);
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