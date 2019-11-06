<?php


          function update_modo($pwd){

                 global $con;
                 $modo=[
                   'email' =>  $_SESSION['admin'],
                   'pwd'   =>  sha1($pwd)
                 ];

                 $sql=" UPDATE admin SET pwd=:pwd
                         WHERE email=:email
                       ";
                  $req=$con->prepare($sql);
                  $req->execute($modo);


                  return $req;

          }

























 ?>
