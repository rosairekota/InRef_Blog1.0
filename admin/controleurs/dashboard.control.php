<?php

              function delete_posts_control(){
          
                if (!empty($_GET['action'])) {

                          $id_article=htmlspecialchars(trim($_GET['id']));
                          $errors=[];

                          if (!filter_var($id_article,FILTER_VALIDATE_INT)) {
                               $errors['not_valid']="cette valeur n'est pas correcte";
                          }
                          if (!empty($errors)) {
                             foreach ($errors as $error) {
                              echo "<p class='alert-danger'>$error</p>";
                            //   header("location:?page=dashboard");
                             }
                          }
                          else {
                            delete_posts();

                          }
                        }
              }


 ?>
