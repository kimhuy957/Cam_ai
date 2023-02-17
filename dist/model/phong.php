<?php
    class phong{
        private $conn;

        public $mp;
        public $ten_phong;
        public $m_ban;
        public $level;
        //connect db
        public function __construct($db)
        {
            $this->conn=$db;
        }
        public function read(){
            // include_once ('../config/db.php');
            $query="SELECT * from phong order by mp desc";
            $stmt=mysqli_query($this->conn,$query);
            return $stmt;
        }
        //show data
        public function show($id){
            // include_once ('../config/db.php');
            $query="SELECT * from phong where mp=$id LIMIT 1";
            $stmt=mysqli_query($this->conn,$query);
            while($row=mysqli_fetch_assoc($stmt)){
                $this->mp=$row['mp'];
                $this->ten_phong=$row['ten_phong'];
               $this->m_ban=$row['m_ban'];
               $this->level=$row['level'];
            }

        }
        //create data
        public function create($ten_phong,$m_ban,$level){
            $query="INSERT INTO `quanly`.`phong` 
            ( `ten_phong`,`m_ban`,`level`) 
            VALUES ('$ten_phong',$m_ban,$level)";
              $stmt = mysqli_prepare($this->conn, $query);
            // mysqli_stmt_bind_param($stmt, "sis", $name, $age, $m_ban);
            
             if(mysqli_stmt_execute($stmt)){
                return true;
             }
             else{
                printf("Error %s.\n");
                return false;
             }
        }
        public function update($mp,$ten_phong,$m_ban,$level){
            $query="UPDATE `quanly`.`phong` SET `ten_phong`='$ten_phong',`m_ban`=$m_ban,`level`=$level
            where mp=$mp";
              $stmt = mysqli_prepare($this->conn, $query);
            // mysqli_stmt_bind_param($stmt, "sis", $name, $age, $m_ban);
            
             if(mysqli_stmt_execute($stmt)){
                return true;
             }
             else{
                printf("Error %s.\n");
                return false;
             }
        }
        public function delete($mp){
            $query="DELETE FROM phong WHERE mp=$mp";
              $stmt = mysqli_prepare($this->conn, $query);
            // mysqli_stmt_bind_param($stmt, "sis", $name, $age, $m_ban);
            
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