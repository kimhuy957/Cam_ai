<form  method="post" >
<?php
include "config/sql.php";
include "config/function.php";
?>
<select name='ban1[]' multiple   data-toggle="select"
class="form-control form-control-lg" >
<?php 
    $sql=mysqli_query($conn,ban());
    while($hien=mysqli_fetch_assoc($sql)){
        $sql1=mysqli_query($conn,phong().' where m_ban='.$hien['mb'].'');
        echo"
        <optgroup label=".$hien['ten_ban'].">";
        while($hien1=mysqli_fetch_assoc($sql1)){
        echo "<option value='".$hien1['mp']."'>".$hien1['ten_phong']."</option>";
        }
        echo"
        </optgroup>
        ";
    }

?>
</select>
<input type="submit" name="luu">
<?php
if(isset($_POST['luu'])){
    $selected_numbers = $_POST['ban1'];

    // Xử lý các giá trị đã chọn
    foreach ($selected_numbers as $number) {
      // Xử lý giá trị
      echo "Selected number: $number\n";
    }
}
?>
</form>