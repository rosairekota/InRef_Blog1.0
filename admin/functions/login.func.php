<?php

 function is_admin($email,$pwd){

      global $con;
      $login=[
        'email' =>  $email,
        'pwd'   =>  sha1($pwd)
      ];

      $sql=" SELECT * FROM admin
              WHERE email=:email AND pwd=:pwd
            ";
       $req=$con->prepare($sql);
       $req->execute($login);
       $exist=$req->rowCount($sql);

       return $exist;

 }




 ?>
