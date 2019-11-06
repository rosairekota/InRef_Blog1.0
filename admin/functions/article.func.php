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

























 ?>
