<?php
    class thuoc{
        private $conn;

        public $id;
        public $mnv;
        public $mp;
        
        //connect db
        public function __construct($db)
        {
            $this->conn=$db;
        }
        public function read(){
            // include_once ('../config/db.php');
            $query="SELECT * from thuoc order by mp desc";
            $stmt=mysqli_query($this->conn,$query);
            return $stmt;
        }
        //show data
        public function show($id){
            // include_once ('../config/db.php');
            $query="SELECT * from thuoc where id=$id LIMIT 1";
            $stmt=mysqli_query($this->conn,$query);
            while($row=mysqli_fetch_assoc($stmt)){
                $this->id=$row['id'];
               $this->mp=$row['mp'];
               $this->mnv=$row['mnv'];
            }

        }
        //create data
        public function create($mnv,$mp){
            $query="INSERT INTO `quanly`.`thuoc` 
            ( `mnv`,`mp`) 
            VALUES ('$mnv',$mp,)";
              $stmt = mysqli_prepare($this->conn, $query);
            // mysqli_stmt_bind_param($stmt, "sis", $name, $age, $mp);
            
             if(mysqli_stmt_execute($stmt)){
                return true;
             }
             else{
                printf("Error %s.\n");
                return false;
             }
        }
        public function update($id,$mnv,$mp){
            $query="UPDATE `quanly`.`thuoc` SET `$mnv`='$mnv',`mp`=$mp
            where id=$id";
              $stmt = mysqli_prepare($this->conn, $query);
             if(mysqli_stmt_execute($stmt)){
                return true;
             }
             else{
                printf("Error %s.\n");
                return false;
             }
        }
        public function delete($id){
            $query="DELETE FROM thuoc WHERE id=$id";
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