<?php
    if (isset($_SESSION['admin'])) :
      header('Location:?page=dashboard');
    endif


 ?>
<?php

        function valider_champ(){
            if (isset($_POST['submit'])) {
              $email=htmlspecialchars(trim($_POST['email']));
              $pwd=htmlspecialchars(trim($_POST['pwd']));
              $errors=[];
              if (empty($email)|| empty($pwd)) {
                  $errors['empty']="veuillez remplir tous les champs !";
              }
              elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                  $errors['not_email']="il manque un @ dans votre adresse... veuillez le completer svp !";
              }
              elseif (is_admin($email,$pwd)==0) {
                  $errors['not_admin']="Désolé, vous n'etes pas reconnu dans le système.";
              }

              if (!empty($errors)) {
                 foreach ($errors as $error) :?>
                      <p class="alert-danger"><?=$error?></p>
              <?php   endforeach;
              }
              else {
                    $_SESSION['admin']=$email;
                    header('Location:index.php?page=dashboard');
              }
            }


        }


















 ?>
