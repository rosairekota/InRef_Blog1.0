<?php


        function validation_deschamp(){

          if (isset($_POST['submit'])) {
            $name=htmlspecialchars(trim($_POST['name']));
            $email=htmlspecialchars(trim($_POST['email']));
            $email_egain=htmlspecialchars(trim($_POST['email_egain']));
            $role=htmlspecialchars(trim($_POST['role']));
            $photo=htmlspecialchars($_FILE['photo']);
            $token=get_token(30);

            $errors=[];
            if (empty($name)|| empty($emai)||empty($email_egain)) {
                $errors['empty']="veuillez remplir tous les champs !";
            }
            elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $errors['not_email']="il manque un @ dans votre adresse... veuillez le completer svp !";
            }
            elseif (!filter_var($email_egain,FILTER_VALIDATE_EMAIL)) {
                $errors['not_email']="il manque un @ dans votre adresse... veuillez le completer svp !";
            }
            elseif ($email!=$email_egain) {
                $errors['email_diffent']=" les adresse emails ne sont pas identiques... veuillez recommencer svp !";
            }
            elseif (is_taken($email)) {
                $errors['taken']=" l'adresse est deja pris par un moderateur... veuillez changer svp !";
            }
            if (!empty($errors)) {
               foreach ($errors as $error) :?>
                    <p class="alert-danger"><?=$error?></p>
            <?php   endforeach;
            }
            else {
                add_admin($name,$email,$role,$token);
            }
          }

        }

        function get_token($leght){
           $toke="AZERTYUIOPQSDFGHJKLMWXCVBN123456789azertiopqsdfghjklmwxcvbn";
           $shuffled=str_shuffle(str_repeat($token,$leght));
           $token=substr($shuffled,0,$leght);

           return $token;


        }





























 ?>
