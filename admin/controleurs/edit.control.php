<?php





          function validate_control(){
                  global $con;

                     if (isset($_POST['submit']))
                     {

                       // initialisation des input et autres
                           $title=htmlspecialchars(trim($_POST['title']));
                           $type=htmlspecialchars(trim($_POST['type']));
                           $auteurs=htmlspecialchars(trim($_POST['auteurs']));
                           $content=htmlspecialchars(trim($_POST['content']));
                           $posted=htmlspecialchars(trim($_POST['posted']));
                           $language=htmlspecialchars(trim($_POST['language']));

                       // on cree notre tableau errors et on l'initialise a vide
                           $errors=[];

                           /*OPERATION SUR LA VARIABLE GLOBAL $_FILES*/

                           $nom_image=$_FILES['image']['name'];
                           $extension_image=strrchr($nom_image,'.');
                           $extension_image_autorise=['.jpg', '.JPG', 'png', 'PNG', 'gif', '.GIF'];
                           $tmp_image_name=$_FILES['image']['tmp_name'];

                           $fichier_pdf_name=$_FILES['fichier_pdf']['name'];
                           $extension_pdf=strrchr($fichier_pdf_name,'.');
                           $extension_pdf_autorise=['.pdf', '.PDF'];
                           $tmp_pdf_name=$_FILES['fichier_pdf']['tmp_name'];
                           $path_final_pdf="../assets/img/articles/";
                           $path_final_image=$path_final_pdf;
                           $path_final_all=$path_final_image;
                           /*-----------Fin-----------------------------*/


                       // on commence a faire de verification
                         if (empty($title)|| empty($type) || empty($auteurs)||
                               empty($content)|| empty($posted)|| empty($language)
                             ) {
                               $errors['empty']="veuillez remplir tous les champs";

                           }
                           if (!empty($_FILES['image']['name']))
                           {
                               if (!in_array($extension_image,$extension_image_autorise)) {
                                     $errors['err_extensions_image']=" Seules les extensions <span class='text-secondary'>.jpg', '.JPG', 'png', 'PNG', 'gif', '.GIF'</span> sont autorisées";
                               }

                           }
                           if (!empty($_FILES['fichier_pdf']['name']))
                           {
                                 if (!in_array($extension_pdf, $extension_pdf_autorise)) {
                                       $errors['err_extensions_pdf']="Seules les extensions ci-après sont autorisées:<span class='text-secondary'>['.pdf' ou 'PDF']</span>";
                                 }
                           }

                           if (!empty($errors))
                           {           echo "<p class='alert-danger'>Une erreur s'est produit</p>";
                                      $i=1;
                                 foreach ($errors as $error)
                                 {?>

                                            <div class="col-md-12">
                                              <p class='alert-warning'>Erreur N° <?=$i++?>) <?=$error?></p> <br>
                                            </div>

                            <?php     }
                           }
                           else
                           {
                                    insert_article_Sans_file($title,$type, $content, $posted,$auteurs,$language);
                                    if (!empty($_FILES['image']['name']) && !empty($_FILES['fichier_pdf']['name'])) {
                                          insert_article_avec_file($tmp_pdf_name,$extension_pdf, $tmp_image_name,$extension_image,$path_final_all);
                                    }
                                    else {
                                            $id=$con->LastInsertId();
                                            header("Location:index.php?page=edit-view&id=".$id);
                                        }
                           }

                      }







          }





















 ?>
