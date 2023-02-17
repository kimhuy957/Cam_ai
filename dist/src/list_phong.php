<!DOCTYPE html>
<html lang="en">
<?php include "../view/head_html.php";?>
<table class="table mb-0 thead-border-top-0 table-nowrap">
<?php
$mb='1';
$mp='1';
$k=0;
include '../config/sql.php';
include '../config/function.php';
$uri = $_SERVER['REQUEST_URI'];
    if(($mb==''&&$mp=='')||($uri=='/src/list_phong.php?mb=&mp=')){
        echo "<tr>
            <td>Mã ban</td>
            <td>Tên ban</td>
        </tr>";
        $sql=mysqli_query($conn,ban());
        while($hien=mysqli_fetch_assoc($sql)){
            echo"<tr><td><a href='?mb=".$hien['mb']."&mp='''  class='text-decoration-none 
 text-body-secondary'>".$hien['mb']."</a></td>
            <td><a href='?mb=".$hien['mb']."&mp=''' class='text-decoration-none 
 text-body-secondary'>".$hien['ten_ban']."</a></td>";
            echo "</tr>";
        }
    }
    
    elseif(($uri!='/src/list_phong.php')){
        $mb=$_GET['mb'];
        $mp=$_GET['mp'];
        if($mb!=""&&$mp==''){
            echo "<tr >
            <td>Mã phòng</td>
            <td>Tên phòng</td>
            <td>Thuộc ban</td>
            </tr>";
            
            $sql2=mysqli_query($conn,'SELECT ban.ten_ban,phong.ten_phong,phong.mp from ban left join phong on ban.mb=phong.m_ban where phong.m_ban='.$mb.'');
            while($hien1=mysqli_fetch_assoc($sql2)){
                echo"<tr>
                <td><a href='?mb=".$mb."&mp=".$hien1['mp']."' class='text-decoration-none 
 text-body-secondary'>".$hien1['mp']."</a>
                </td>
                <td><a href='?mb=".$mb."&mp=".$hien1['mp']."' class='text-decoration-none 
 text-body-secondary'>".$hien1['ten_phong']."</a></td>
                <td><a href='?mb=".$mb."&mp=".$hien1['mp']."' class='text-decoration-none 
 text-body-secondary'>".$hien1['ten_ban']."</a></td>";
                echo "</tr>";
                
            }
        }
        //  $mp=$_GET['mp'];
        if($mb!=''&&$mp!=''){
            // $mb=$_GET['mb'];
            // $mp=$_GET['mp'];
            echo' <tr>
                <td>STT</td>
                <td>Mã nhân viên</td>
                <td>Tên nhân viên</td>
                <td>Email nhân viên</td>
                <td>Ngày sinh</td>
                <td>Ngày vào làm</td>
                <td>Tình Trạng</td>
                <td>Các phòng bán đang làm</td>
                <td>Sửa</td>
                <td>xóa</td>
            </tr>';
            $sql3 =mysqli_query($conn,thuoc().' where mp='.$mp.'');
            if(mysqli_num_rows($sql3)>0){
            while($hien2=mysqli_fetch_assoc($sql3)){
                $sql3_use=mysqli_query($conn,ten().' where mnv='.$hien2['mnv'].'');
                
                    $i=1;
                    while($ten1=mysqli_fetch_assoc($sql3_use)){
                            echo "<tr>
                           
                            <td><a href='../view/nhan_vien.php?mnv=".$ten1['mnv']."' class='text-decoration-none 
 text-body-secondary' target='_top'>$i</a></td>
                            <td><a href='../view/nhan_vien.php?mnv=".$ten1['mnv']."' class='text-decoration-none 
 text-body-secondary' target='_top'>".$ten1['mnv']."</a></td>
                            <td><a href='../view/nhan_vien.php?mnv=".$ten1['mnv']."' class='text-decoration-none 
 text-body-secondary' target='_top'>".$ten1['tennv']."</a></td>
                            <td><a href='../view/nhan_vien.php?mnv=".$ten1['mnv']."' class='text-decoration-none 
 text-body-secondary' target='_top'>".$ten1['email']."</a></td>
                            <td><a href='../view/nhan_vien.php?mnv=".$ten1['mnv']."' class='text-decoration-none 
 text-body-secondary' target='_top'>".$ten1['ngay_sinh']."</a></td>
                            <td><a href='../view/nhan_vien.php?mnv=".$ten1['mnv']."' class='text-decoration-none 
 text-body-secondary' target='_top'>".$ten1['ngay_vao']."</a></td>
                            <td><a href='../view/nhan_vien.php?mnv=".$ten1['mnv']."' class='text-decoration-none 
 text-body-secondary' target='_top'>".$ten1['tinh_trang']."</a></td>
                            <td><a href='../view/nhan_vien.php?mnv=".$ten1['mnv']."' class='text-decoration-none 
 text-body-secondary' target='_top'>";
                            $sql5=mysqli_query($conn,phong());
                            while ($hien_mp=mysqli_fetch_assoc($sql5)){
                            $sql4="SELECT  phong.ten_phong ,thuoc.id from thuoc 
                            LEFT JOIN phong on phong.mp=thuoc.mp 
                             LEFT JOIN ten on ten.mnv=thuoc.mnv 
                             WHERE phong.mp=".$hien_mp['mp']." AND ten.mnv=".$ten1['mnv']."";
                             $h_tp=mysqli_query($conn,$sql4);
                             while($hien_tphong=mysqli_fetch_assoc($h_tp)){
                                    if(mysqli_num_rows($h_tp)>0){
                                    echo "".$hien_tphong['ten_phong']."<br>";
                                    }
                                    if(mysqli_num_rows($h_tp)<0){
                                        echo "Chưa có phòng nào<br>";
                                        }

                            }
                        }
                    }
                    echo'</a></td>';
                }
            }
            else{
                echo"<tr align='center'><td colspan='10' >Hiện tại ko có nhân viên nào cả</td></tr>";
            }

        }  
}

?>      
</table>
</html>