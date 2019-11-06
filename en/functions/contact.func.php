<?php

      function send_mail($email,$sujet,$message,$name){

        $desinateur="rkota@nsat.africa";
        $messages=$message.' Auteur:'.$name;
        $header="MIME-Version:1.0\r\n";
        $header.="Content-type:text/html; charset=UTF-8\r\n";
        $header.='From:'.$email."\r\n";
        $header.='Reply-To:'.$email."\r\n";
        mail($desinateur,$sujet,$messages,$header);


      }


 ?>




























?>
