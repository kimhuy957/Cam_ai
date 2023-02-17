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
            $mnv=$_GET['mnv'];
            $query1="SELECT * from thuoc  where mnv=".$mnv."";
            $sql3=mysqli_query($conn,$query1);
            while( $hien1=mysqli_fetch_assoc($sql3)){
                $sql4=mysqli_query($conn,"SELECT * from phong left join thuoc on thuoc.mp=phong.mp where thuoc.mp=".$hien1['mp']."");
                $hienp=mysqli_fetch_assoc($sql4);
                echo $hienp['ten_phong'];
                echo $hien1['id'];
                echo "<tr>";
                for($i=0;$i<$Month;$i++){
                    if($dateday>$i){
                        echo "<td>";
                        // $datevn=date("d-m-Y",strtotime($date.'+'.$i.' days'));
                        // echo $datevn;
                        $datesql=date("Y-m-d",strtotime($date.'+'.$i.' days'));
                            $sql2=mysqli_query($conn,'SELECT * from `lich` where id_thuoc='.$hien1['id'].' and `date`="'.$datesql.'"');
                            while($hien=mysqli_fetch_assoc($sql2)){
                                echo "".$hien['tinh_trang']."<br>lúc ".$hien['time_di']."";}    
                        echo "</td>";
                    
                } } 
                echo "</tr>";
                } 
                ?>
        </tr>