<?php


      function get_article_Id(){

          global $con;

          $a=[
            'id_article' => $_GET['id']
          ];
          $sql="SELECT art.id_article,
                       art.title,
                       art.type,
                       art.content,
                       art.image,
                       art.fichier_pdf,
                       art.url_pdf,
                       art.posted,
                       art.date,
                       art.auteurs
                       FROM article as art
                       WHERE art.id_article=:id_article
                       ";


          $req=$con->prepare($sql);
          $req->execute($a);

          $list=$req->fetchObject();
          return $list;

      }
      function modifier_Sans_file($title,$type, $content, $posted,$auteurs,$language){
                global $con;
                $tab=[
                      'id_article'    => $_GET['id'],
                      'title'         => $title,
                      'type'          => $type,
                      'content'       => $content,
                      'email_admin'   => $_SESSION['admin'],
                      'posted'        => $posted,
                      'auteurs'       => $auteurs,
                      'language'      => $language
                ];
                $sql=" UPDATE article SET title=:title ,type=:type, content=:content, date=NOW(), email_admin=:email_admin, posted=:posted, auteurs=:auteurs, language=:language WHERE id_article=:id_article";
                $req=$con->prepare($sql);
                $req->execute($tab);


      }

      function modifier_avec_file($tmp_pdf_name,$extension_pdf, $tmp_image_name,$extension_image,$path_final_all){
                global $con;
                $id=$con->LastInsertId();
                $c=[
                        'id_article'    => $id,
                        'image'         => $id.$extension_image,
                        'fichier_pdf'   => $id.$extension_pdf,
                        'url_pdf'       => $path_final_all.''.$id.$extension_pdf
                ];
                $sql="UPDATE article SET image=:image, fichier_pdf=:fichier_pdf, url_pdf=:url_pdf WHERE id_article=:id_article ";
                $req=$con->prepare($sql);
                $req->execute($c);
                /*On deplace nos fichiers vers le repertoire de destination  */
                move_uploaded_file($tmp_image_name,$path_final_all.''.$id.$extension_image);
                move_uploaded_file($tmp_pdf_name,$path_final_all.''.$id.$extension_pdf);
                header("Location:index.php?page=edit-view&id=".$id);

      }


























 ?>
