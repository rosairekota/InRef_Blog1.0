<?php
     require_once "../connexion.php";
     require_once "config.php";
     error_reporting(-1); // ou ini_set("error_reporting",E_ALL)
     ini_set("display_errors",1);


 ?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>InRef- <?=$page?></title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>
<body id="page-top">
  <?php
            ob_start();



             if ($page!='login' && !isset($_SESSION['admin'])){
                  header('location:index.php?page=login');
              }


            include_once "body/header.php";
            $content=ob_get_clean();
            if ($page=='dashboard' || $page=='comments') {
              include_once "body/topbar.php";
            }



   ?>

  <?php

            require_once "pages/".$page.'.php';
   ?>


    <?php
            if ($page=='dashboard' || $page=='comments') {
              include_once "body/footer.php";
            }

     ?>


     <?php

          $page_js=scandir("js/");
          if (in_array($page.'func.js',$page_js)) {?>
            <script src="js/".<?=$page?>.'func.js'></script>
        <?php  }


      ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

  <!-- Ceci concerne la page charts-->

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>


  <!-- Demo scripts for this page-->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
    <!-- fin-->
</body>

</html>
