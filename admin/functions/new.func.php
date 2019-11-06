<?php

function is_modo($email,$token){

     global $con;
     $login=[
       'email' =>  $email,
       'token'   =>  $token
     ];

     $sql=" SELECT * FROM admin
             WHERE email=:email AND token=:token
           ";
      $req=$con->prepare($sql);
      $req->execute($login);
      $exist=$req->rowCount($sql);

      return $exist;

}

function update_modo($pwd){

     global $con;
     $login=[
       'email' =>  $email,
       'pwd'   =>  sha1($pwd)
     ];

     $sql=" SELECT * FROM admin
             WHERE email=:email AND token=:token
           ";
      $req=$con->prepare($sql);
      $req->execute($login);
      $exist=$req->rowCount($sql);

      return $exist;
}































 ?>
