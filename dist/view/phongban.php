<!doctype html>
<html lang="en">
<?php include 'head_html.php'?>
<body class="layout-app layout-sticky-subnav headings-family-exo2 has-drawer-opened">
    <div class="text-bg-secondary p-3">    <h1>Thông tin công ty</h1></div>
    <div class="tong">
        <div class="cong_ty sidebar-heading sidebar sidebar-dark sidebar-left ps bg-dark">
            <?php include "../model/view/phongban.php";
              $uri = $_SERVER['REQUEST_URI'];
                $mb='';
                $mp='';
              if($uri=="/view/phongban.php"){
                $mb='';
                $mp='';
              }
              else{
                $_SESSION['mb']=$mb;
                $_SESSION['mp']=$mp;
                $mb=$_GET['mb'];
                $mp=$_GET['mp'];
              }
              ?>
        </div>
        <div class="phong ratio ratio-4x3 ">
          <iframe  src="<?php echo "../src/list_phong.php?mb=$mb&mp=$mp";?>"frameborder="0"target='phongban'></iframe>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>