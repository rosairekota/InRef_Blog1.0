<?php
function is_admis($pwd,$email){
      global $con;

        $c=[
          'pwd'     => sha1($pwd),
          'email'   => $email
        ];
          $sql="SELECT * FROM admin WHERE pwd=:pwd AND email=:email";
          $req=$con->prepare($sql);
          $req->execute($c);
          $exist=$req->rowCount($sql);

        return $exist;


}




















 ?>
