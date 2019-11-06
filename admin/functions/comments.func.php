<?php


function get_dash_comments(){

   global $con;
   $comments=[];
   $req=$con->query(
     "SELECT cmt.id,
             cmt.comment,
             cmt.date,
             art.title,
             art.content,
             art.auteurs
             FROM comments as cmt
             JOIN article as art
             ON cmt.article_id=art.id_article
             WHERE cmt.vue='0'
             ORDER BY cmt.date DESC"
              );


   while ($row=$req->fetchObject()) {
          $comments[]=$row;
   }
   return $comments;
}

function update_comments($id){

   global $con;
  // $action=$_GET['action'];
   $comments=[
              'id'  => $id
            ];

      $req=$con->prepare("UPDATE comments SET vue='1' WHERE id=:id");
      $req->execute($comments);

}
function delete_comments($id){

   global $con;
  // $action=$_GET['action'];
   $comments=[
              'id'  => $id
            ];

      $req=$con->prepare("DELETE FROM comments  WHERE id=:id");
      $req->execute($comments);

}




















 ?>
