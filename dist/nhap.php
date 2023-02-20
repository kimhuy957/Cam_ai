<form  method="post" >
<?php
include "config/sql.php";
include "config/function.php";
?>
<select name='ban1[]' multiple   data-toggle="select"
class="form-control form-control-lg" >
<?php 
    $sql=mysqli_query($conn,company());
    while($hien=mysqli_fetch_assoc($sql)){
        $sql1=mysqli_query($conn,room().' where id_company='.$hien['id'].'');
        echo"
        <optgroup label=".$hien['name_company'].">";
        while($hien1=mysqli_fetch_assoc($sql1)){
        echo "<option value='".$hien1['id']."'>".$hien1['name_room']."</option>";
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