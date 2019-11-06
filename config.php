<?php
$pages=scandir("pages/");
if (isset($_GET['page']) && !empty($_GET['page'])) {
   if (in_array($_GET['page'].'.php', $pages)) {
        $page=$_GET['page'];
  }
  else {
        $page='error';

      }
}
else {
        $page='home';
}
$pages_func=scandir("functions/");
if (in_array($page.'.func.php',$pages_func)) {
  require_once "functions/".$page.'.func.php';
}

 ?>
