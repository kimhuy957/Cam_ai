<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include '../config/sql.php';
        include '../config/function.php';
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        // echo $dateday,$datetime;
        $query1="SELECT * from thuoc  where mnv=4";
        $sql3=mysqli_query($conn,$query1);
        while( $hien1=mysqli_fetch_assoc($sql3)){
            echo $hien1['id'];
       
        $query="SELECT DATEDIFF(CURDATE(),MIN(date)) as `day` FROM lich where id_thuoc=".$hien1['id']."";
        $sql=mysqli_query($conn,$query);

        $hien=mysqli_fetch_assoc($sql);
        // echo $hien['day'];
        $a=date('Y-m-d');
        $z=($hien['day']<=60)?$hien['day']:60;
        // echo $z;
        $date = new DateTime("$a");
        for($i=0;$i<=$z;$i--){
            $n=-1;
            if($i==0){
            }
            else{
                $date->modify("$n day");   
                // echo $date;
            }
            
            $l=$date->format("l");
            $m=$date->format("Y-m-d");
            // echo $l;

            $sql2=mysqli_query($conn,'SELECT * from `lich` where id_thuoc=4 and date="'.$m.'"');
            $hien1='';
            $hien2='';
            while($hien=mysqli_fetch_assoc($sql2)){
                $hien1=$hien['tinh_trang'];
                
                $hien2=$hien['date'];  
                
            
            }
            $l=$date->format("l");
            $tinh_trang='';

            //echo $m."<br>";
            switch($l){
                case 'Monday':
                $tinh_trang=($hien2==$m)?''.$hien1.'':'';
                echo'
                <td>'.$m.'<br>thứ 2<br>
                '.$tinh_trang.'
                </td>';
                break;
                case 'Tuesday':
                $tinh_trang=($hien2==$m)?''.$hien1.'':'';
                echo'<td>'.$m.'<br>thứ 3<br>
                '.$tinh_trang.'
                </td>';
                break;
                case 'Wednesday':
                $tinh_trang=($hien2==$m)?''.$hien1.'':'';
                echo'<td>'.$m.'<br>thứ 4<br>
                '.$tinh_trang.'
                </td>';
                break;
                case 'Thursday':
                $tinh_trang=($hien2==$m)?''.$hien1.'':'';
                echo'<td>'.$m.'<br>thứ 5<br>
                '.$tinh_trang.'
                </td>';
                break;
                case 'Friday':
                $tinh_trang=($hien2==$m)?''.$hien1.'':'';
                echo'<td>'.$m.'<br>
                thứ 6<br>
                '.$tinh_trang.'
                </td>';
                break;
                case 'Saturday':
                $tinh_trang=($hien2==$m)?''.$hien1.'':'';
                echo'<td>'.$m.'<br> thứ7<br>
                '.$tinh_trang.'
                </td>';
                break;
                case 'Sunday':
                $tinh_trang=($hien2==$m)?''.$hien1.'':'';  
                echo'<td>'.$m.'<br>chủ nhật<br>
                '.$tinh_trang.'
                </td>';
                break;
                }
                
            }
            echo "<br>";
        }
            ?>

</body>
</html>