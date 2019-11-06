<?php


      function is_taken($email){

              global $con;
              $c=[
                'email' => $email,
              ];
              $sql="SELECT * FROM admin WHERE email=:email";
              $req=$con->prepare($sql);
              $req->execute($c);
              $exist=$req->rowCount($sql);


              return $exist;
      }
       function add_admin($name,$email,$role,$token){
              global $con;
              $modo=[
                    'name'      => $name,
                    'email'     => $email,
                    'token'     => $token,
                    'role'      => $role
              ];
              $sql="INSERT INTO admin(name,token,:email,,role) VALUES(:name, :token, :email, :role)";
              $req=$con->prepare($sql);
              $req->execute($sql);

              $sujet="CONFIRMATION DU MODERATEUR";
              $message="<!DOCTYPE>
                        <html lang='fr' style='font-family:sans-serif;'>
                        <head>
                        <meta charset='UTF-8'>
                        <title>Inref- Creation Compte</title>
                        <head>
                        <body>
                        <p>Voici votre identifiant et code unique sur le lien:<a href='http://localhost/inref_org/admin/index.php?page=new'></a></p>
                        <p>identifiant:$name</p>
                        <p>Mot de passe:$token</p>
                        <p>Vous etes :$role</p>
                        <p>Apres avoir choisir ces informations, vous devriez choisir votre propre mot de passe</p>
                        </body>
                        </html>";
                $header="MIME-Version:1.0\r\n";
                $header.="Content-type: text/html; charset=UTF-8 \r\n";
                $header.='From:no-reply@nsat.africa'."\r\n".'Reply-To:rkota@nsat.africa'."\r\n";
                mail($email,$sujet,$message,$header);


       }





















 ?>
