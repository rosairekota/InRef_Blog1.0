<?php

        function get_modo(){



                    if (isset($_POST['submit'])) {
                      $email=htmlspecialchars(trim($_POST['email']));
                      $token=htmlspecialchars(trim($_POST['token']));
                      $errors=[];
                      if (empty($email)|| empty($token)) {
                          $errors['empty']="veuillez remplir tous les champs !";
                      }
                      elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                          $errors['not_email']="il manque un @ dans votre adresse... veuillez le completer svp !";
                      }
                      elseif (is_modo($email,$token)==0) {
                          $errors['not_modo']="vous n'etes pas trouvé dans le système... veuillez recommencer.";
                      }
                      if (!empty($errors)) {
                         foreach ($errors as $error) :?>
                              <p class="alert-danger"><?=$error?></p>
                      <?php   endforeach;
                      }
                      else {
                        $_SESSION['admin']=$email;
                        header('Location:index.php?page=password');
                      }
                    }
        }
















 ?>
