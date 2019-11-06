<?php
    if (!session_id()) {
        session_start(); //on demarre la session
        session_regenerate_id(true); //on regenere l'ID du session
    }


/*  TRES BIEN METTRE FIN A LA SESSION:
                         1) session_unset()= on netoi la session
                         2) session_destroy()=on detruit la session
                         3) session_write_close()=on ecrit la fin de la session et on la supprime
                         4) setcookie(session_name,"",0,null,null,false,true)
                         5) session_regenerate_id()

*/
/*
** on gere  les erreurs avec : error_reporting et init_set("display",1)
*/

$dbhost="localhost";
$db_name="inreforg_inref_org";
$db_user="root";
$db_pwd="";

try {
        $con=new PDO('mysql:host='.$dbhost.';dbname='.$db_name,$db_user,$db_pwd,[PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
} catch (Exception $e) {
  die("Echec de la connexion");
}






function droit_admin(){

     global $con;
     $login=[
       'email' =>  $_SESSION['admin'],
     ];

     $sql=" SELECT * FROM admin
             WHERE email=:email AND role='admin';
           ";
      $req=$con->prepare($sql);
      $req->execute($login);
      $exist=$req->rowCount($sql);

      return $exist;

}
