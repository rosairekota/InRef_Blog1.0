<?php
    error_reporting(-1);
    ini_set("display_errors",1);

    $pages=scandir("pages/");
    if (isset($_GET['page']) && !empty($_GET['page'])) {
         if (in_array($_GET['page'].'.php',$pages)) {
             $page=$_GET['page'];
         } else {
              $page="error";
         }

    }
    else {
         $page="login";
    }
     $control=scandir("controleurs/");
     if (in_array($page.'.control.php',$control)) {
         require "controleurs/".$page.'.control.php';


     }

     $func=scandir("functions/");
     if (in_array($page.'.func.php',$func)) {
        require "functions/".$page.'.func.php';
     }














 ?>
