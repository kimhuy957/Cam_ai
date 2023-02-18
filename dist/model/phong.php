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
        public function create($mp,$ten_phong,$m_ban,$level){
            $query="INSERT INTO `quanly`.`phong` 
            (`mp`, `ten_phong`,`m_ban`,`level`) 
            VALUES ('$mp','$ten_phong',$m_ban,$level)";
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
            // $query1="DELETE FROM thuoc WHERE mp='$mp'";
            $query1="SELECT * from thuoc where mp=$mp";
            
            $sql=mysqli_query($this->conn,$query1);
            
            // // $stmt2 = mysqli_prepare($this->conn, $query2);
            // $stmt1 = mysqli_prepare($this->conn, $query1);
            if(mysqli_num_rows($sql)>0){
            while($hien=mysqli_fetch_assoc($sql)){
                $query2="SELECT * from lich where `id_thuoc`='".$hien['id']."'";
                $sql1=mysqli_query($this->conn,$query2);
                if(mysqli_num_rows($sql)>0){
                while($hien2=mysqli_fetch_assoc($sql1)){
                    $sql2="DELETE from lich where `id_thuoc`='".$hien2['id_thuoc']."'";
                    mysqli_query($this->conn,$sql2);

                }}
                $sql3="DELETE from thuoc where `mp`=".$hien['mp']."";
                var_dump($sql3);
                mysqli_query($this->conn,$sql3);
            }}
            $query="DELETE FROM phong WHERE `mp`='$mp'";
            $stmt = mysqli_prepare($this->conn, $query);
            // mysqli_stmt_bind_param($stmt, "sis", $name, $age, $m_ban);
            if(mysqli_stmt_execute($stmt)){
                    echo "Đã xóa ở bảng thuộc và bên chấm công";
                   return true;
                }
                else{
                   printf("Error %s.\n");
                   echo "ko có giá trị ở bảng thuộc";
                   return false;
                }
            }
    }
?>