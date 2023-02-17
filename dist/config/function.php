<?php
function ten(){
    $sql="SELECT * from ten";
    return $sql;
}
function phong(){
    $sql="SELECT * from phong";
    return $sql;
}
function thuoc(){
    $sql="SELECT * from thuoc";
    return $sql;
}
function lich(){
    $sql="SELECT * from lich";
    return $sql;
}
function ban(){
    $sql="SELECT * from ban";
    return $sql;
}
function id_thuoc(){
    include 'sql.php';
    
    $sql_ten1=mysqli_query($conn,ten());
    while($ten2=mysqli_fetch_assoc($sql_ten1)){
        $sql_phong1=mysqli_query($conn,phong());
        while($ten_phong1=mysqli_fetch_assoc($sql_phong1)){
            $sql4="SELECT  phong.ten_phong ,thuoc.id from thuoc 
            LEFT JOIN phong on phong.mp=thuoc.mp 
            LEFT JOIN ten on ten.mnv=thuoc.mnv 
            -- WHERE phong.mp=".$ten_phong1['mp']." AND ten.mnv=".$ten2['mnv']."
            ";
            // while($thuoc1=mysqli_fetch_assoc($sql_thuoc1)){
                $h_tp=mysqli_query($conn,$sql4);
                while($hien_tphong=mysqli_fetch_assoc($h_tp)){
                    echo "<a href='lich.php?id=".$hien_tphong['id']."'>".$hien_tphong['ten_phong']."</a><br>";
                    // return $hien_tphong['id'];
                }
            }

    }
}
// function get($k){
//     $uri = $_SERVER['REQUEST_URI'];
//     echo $uri;
//       $k=0;
//           if($uri!='/view/phongban.php'){
//               $k=0;
//               return;
//           }
//           else{
//               $k=1;
//           }
//           return $k;
// }
// function url(){
//     $mb=$_GET['mb'];
//     return $mb;
// }
?>