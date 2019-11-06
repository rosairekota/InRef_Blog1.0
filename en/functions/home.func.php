<?php


    function get_post(){

      global $con;

      $sql="SELECT art.id_article,
                   art.title,
                   art.type,
                   art.content,
                   art.image,
                   art.date,
                   ad.name
                   FROM article as art
                   JOIN admin as ad
                   ON art.email_admin=ad.email
                   WHERE art.language='en' AND art.posted='1'
                   ORDER BY art.date DESC LIMIT 0,2";
        $req=$con->query($sql);

        $list=[];
        while ($row=$req->fetchObject()) {
           $list[]=$row;
        }
        return $list;


    }


 ?>
