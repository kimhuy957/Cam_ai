<?php
        include '../config/sql.php';
        include '../config/function.php';
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $dateday=date('d');
        $datetime=date('H:i');
        $dateMonth=date('m');
        $dateYear=date('Y');
        $Month=0;
        switch ($dateMonth)
        {
                    case 1:
                    case 3:
                    case 5:
                    case 7:
                    case 8:
                    case 10:
                    case 12:
                    $Month=31;
                    break;
                    case 4:
                    case 6:
                    case 9:
                    case 11:
                    $Month=30;
                    break;
                    case 2:
                    {
                    $Month = ((($dateYear % 4 == 0) && ($dateYear % 100 != 0)) 
                    || ($dateYear % 400 == 0)) ?29 : 28;
                    }
                    break;
            }
            echo $Month;
            
            ?>
<table border="1">
        <tr>
            <?php
                $date="01-$dateMonth-$dateYear";
                for($i=0;$i<$Month;$i++){
                    if($dateday>$i){
                    echo "<td>";
                    $datevn=date("d-m-Y",strtotime($date.'+'.$i.' days'));
                    echo $datevn;
                    echo "</td>";
                    }
                }
                ?>
        </tr>
        <tr>
            <?php
                for($i=0;$i<$Month;$i++){
                    if($dateday>$i){
                        echo "<td>";
                        // $datevn=date("d-m-Y",strtotime($date.'+'.$i.' days'));
                        // echo $datevn;
                        $datesql=date("Y-m-d",strtotime($date.'+'.$i.' days'));
                            $sql2=mysqli_query($conn,'SELECT * from `lich` where id_thuoc=6 and `date`="'.$datesql.'"');
                            while($hien=mysqli_fetch_assoc($sql2)){
                                echo "".$hien['tinh_trang']."<br>lúc ".$hien['time_di']."";}    
                        echo "</td>";
                    
                } }  
                ?>
        </tr>
</table>