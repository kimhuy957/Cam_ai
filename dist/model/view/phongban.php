
        <?php
            include '../config/sql.php';
            include '../config/function.php';


            $sql2=mysqli_query($conn,"SELECT * FROM ban ORDER BY `level`");
            echo "<a href='?mb=&mp=''' class='text-decoration-none  text-light'>Tất cả</a>";
            echo'<ol  class="sidebar-menu-item open">';
            while($hien=mysqli_fetch_assoc($sql2)){
                echo "<a href='?mb=".$hien['mb']."&mp='''  class='text-decoration-none  text-light'  target='_self'><li>";
                if($hien["ten_ban"]==''){
                    echo "vui long thêm tên";
                }
                else{
                    echo $hien["ten_ban"];
                }
                echo"</a>";
                
                echo "<ol>";
                $sql3=mysqli_query($conn,phong());
                while($hien1=mysqli_fetch_assoc($sql3)){
                    if($hien['mb']==$hien1['m_ban'])
                    echo "<li><a href='?mb=".$hien['mb']."&mp=".$hien1['mp']."' class='text-decoration-none  text-light' target='_self'>".$hien1['ten_phong']."<a></li>";

                }
                echo "</ol></li>";
            }
            echo '</ol>';
        ?>
