<?php


function update_modo_control(){



            if (isset($_POST['submit'])) {
              $pwd=htmlspecialchars(trim($_POST['pwd']));
              $pwd_egain=htmlspecialchars(trim($_POST['pwd_egain']));

              $errors=[];
              if (empty($pwd)|| empty($pwd_egain)) {
                  $errors['empty']="veuillez remplir tous les champs !";
              }
              elseif ($pwd!=$pwd_egain) {
                  $errors['different']="Les Mots de passes ne sont pas identique... veuillez recommencer.";
              }
              if (!empty($errors)) {
                 foreach ($errors as $error) :?>
                      <p class="alert-danger"><?=$error?></p>
              <?php   endforeach;
              }
              else {
                      $repose_update_modo=update_modo($pwd);
                      if ($repose_update_modo==false) {
                          echo "<p class='alert-warning'> Erreur de Mise a jour</p>";
                      }
                      else {

                            header('Location:index.php?page=dashboard');
                      }
              }
            }
}




























 ?>
