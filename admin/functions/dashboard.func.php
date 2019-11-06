<?php

      function get_article(){

          global $con;
          $list=[];
          $sql="SELECT art.id_article,
                       art.title,
                       art.type,
                       art.content,
                       art.image,
                       art.posted,
                       art.date,
                       art.auteurs,
                       ad.name,
                       ad.email
                       FROM article as art
                       JOIN admin as ad
                       ON art.email_admin=ad.email
                       ORDER BY art.date DESC
                       " ;

          $req=$con->query($sql);


          while ($row=$req->fetch(PDO::FETCH_OBJ)) {
            $list[]=$row;
          }
          return $list;

      }

      function nbre_articles(){

              global $con;
              $req=$con->query("SELECT count(*) as nombre_article
                                  FROM article"
                                );
            $nombre=$req->fetchObject();
            return $nombre;

      }
            function nbre_commentaires(){

                    global $con;
                    $req=$con->query(
                                "SELECT count(*) as nombre_commentaire
                                        FROM comments"
                                      );
                      $nombre=$req->fetchObject();
                      return $nombre;
            }

            function nbre_auteurs(){

                    global $con;
                    $req=$con->query(
                                "SELECT count(*) as nombre_auteur
                                        FROM auteur"
                                      );
                      $nombre=$req->fetchObject();
                      return $nombre;
            }

            function nbre_admins(){

                    global $con;
                    $req=$con->query(
                                "SELECT count(id) as nombre_admin
                                        FROM admin"
                                );
                  $nombre=$req->fetchObject();
                  return $nombre;
      }

      function delete_posts(){
        $id_article=$_GET['id'];

      global $con;
      // $action=$_GET['action'];
            $c=[
                 'id_article'  => $id_article
               ];

         $req=$con->prepare("DELETE FROM article WHERE id_article=:id_article");
         $req->execute($c);
    

      }






























 ?>
