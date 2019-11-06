<?php

function select_modo(){

        global $con;
        $c=[
          'email' => $_SESSION['admin'],
        ];
        $sql="SELECT * FROM admin WHERE email=:email";
        $req=$con->prepare($sql);
        $req->execute($c);

        $admin=$req->fetchObject();


        return $admin;
}



































 ?>
