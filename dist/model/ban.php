<?php
    class company{
        private $conn;

        public $mb;
        public $name_company;
        public $level;
        
        //connect db
        public function __construct($db)
        {
            $this->conn=$db;
        }
        public function read(){
            // include_once ('../config/db.php');
            $query="SELECT * from company order by name_company desc";
            $stmt=mysqli_query($this->conn,$query);
            return $stmt;
        }
        //show data
        public function show($mb){
            // include_once ('../config/db.php');
            $query="SELECT * from company where mb=$mb LIMIT 1";
            $stmt=mysqli_query($this->conn,$query);
            while($row=mysqli_fetch_assoc($stmt)){
                $this->mb=$row['id'];
               $this->name_company=$row['name_company'];
               $this->level=$row['level'];
            }

        }
        //create data
        public function create($mb,$name_company){
            $query="INSERT INTO `cam_ai`.`company` 
            ( `id`,`name_company`,`level`) 
            VALUES ($mb,'$name_company',0)";
             $stmt = mysqli_prepare($this->conn, $query);

             if (mysqli_stmt_execute($stmt)) {
                 return true;
             } else {
                 printf("Error %s.\n", mysqli_error($this->conn)); // Added error message to printf()
                 return false;
             }
        }
        public function update($mb,$name_company,$level){
            $query="UPDATE `cam_ai`.`company` SET `level`='$level',`name_company`='$name_company'
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
            $query="DELETE FROM company WHERE mb=$mb";
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