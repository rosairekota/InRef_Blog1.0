<?php

      function get_article(){

          global $con;

          $a=[
            'id_article' => $_GET['id']
          ];
          $sql="SELECT art.title,
                       art.type,
                       art.content,
                       art.image,
                       art.fichier_pdf,
                       art.url_pdf,
                       art.date,
                       ad.name
                       FROM article as art
                       JOIN admin as ad
                       ON art.email_admin=ad.email
                       WHERE art.id_article=:id_article
                       AND art.posted='1'";


          $req=$con->prepare($sql);
          $req->execute($a);

          $list=$req->fetchObject();
          return $list;

      }

      function insert_comments($name,$email,$comment,$id){

            global $con;
            $ct=[
                  'name'        => $name,
                  'email'       => $email,
                  'comment'     => $comment,
                  'article_id'  => $id
            ];

            $sql="INSERT INTO comments(name,email,comment,article_id,date) VALUES(:name, :email, :comment, :article_id, NOW())";
            $req=$con->prepare($sql);
            $req->execute($ct);

      }

     function get_comments(){

        global $con;
        $req=$con->query(
          "SELECT * FROM comments
                    WHERE article_id='{$_GET['id']}'
                    ORDER BY date DESC"
                    );
        $comments=[];

        while ($row=$req->fetchObject()) {
               $comments[]=$row;
        }
        return $comments;


     }
     function NbreCommentaire(){
         global $con;

         $req=$con->query("SELECT COUNT(*) as nbreCommentaire
                                  FROM comments
                                  WHERE article_id='{$_GET['id']}'");
         $nombre=$req->fetchObject();
         return $nombre;
     }

























 ?>
