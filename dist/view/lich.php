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
        // $mnv=$_GET['mnv'];
        echo $_GET['mnv'];
        include "../model/view/lich1.php?mnv=$mnv";
    ?>
    <table border="1">
    
    <?php
    include "../model/view/lich2.php?mnv=$mnv";
    ?>
    </table>
</body>
</html>