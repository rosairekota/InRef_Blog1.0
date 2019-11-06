<?php
  $post=get_article();
  if ($post==false):
    ?>
        <script>
          window.location.replace("index.php?page=error");
        </script>
<?php
  else :?>
  <div class="container-fluid">
  <div class="row" style="padding:45px 45px;">
    <div class="mu-title" style="margin-top:45px; margin-bottom:15px;">
      <h2 style="color:#fff;"><?=$post->title;?></h2>
    </div>
  <div class="" style="background-color: rgba(0, 0, 0, 0.9); width:100%; height:100%;">
    <img src="../assets/img/articles/<?=$post->image?>" alt="img-article" style="width:950px; height:400px; margin-left:150px;padding:10px 10px;">
  </div>

   <div class="row">
     <div class="col-lg-12 col-md-12 text-justify">
         <h3><strong>Description:</strong> </h3>
         <p><?=nl2br($post->content)?> ....</p>

     </div>
     <div class="col-lg-10 col-md-10 offset-lg-1 offset-md-1">
       <article class="mu-blog-single-item">

         <div class="mu-blog-meta">
           <span><i class="fa fa-comments-o text-danger"><?=$post->type?></i></span>
           <a href="../assets/img/articles/<?=$post->fichier_pdf?>" class="text-primary"> <strong class = "text-info">Download The file PDF </ strong>, for All to read</a>
         </div>

       </article>
     </div><hr>
   </div>
  </div>
  </div>

  <section id="mu-from-blog" style="background-image:url('../assets/img/Untitled-4.jpg'); width:100%; height:100%;">
    <div class="container-fluid" style="background-color:none;padding-left:50px; padding-right:50px;">
      <div class="img-thumbnail " style="background-color:none;padding:20px 20px;">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-comments-area">
          <?php
                $cmts=get_comments();
                $nombre_com=NbreCommentaire();
                if ($cmts!=false) :?>

                    <h3><?=$nombre_com->nbreCommentaire?> <?=($nombre_com->nbreCommentaire==1)? "commentaire":"commentaires"?> </h3>
                    <div class="comments">
                      <ul class="commentlist">
                        <?php
                                foreach($cmts as $cmt):?>
                        <li>
                          <div class="media">
                            <div class="media-left">
                              <img alt="img" src="assets/img/testimonial-1.png" class="media-object news-img">
                            </div>
                            <div class="media-body">
                             <h4 class="author-name"><?=$cmt->name?></h4>
                             <span class="comments-date"> Posted the <?=date("d/m/y à h:i",strtotime($cmt->date))?></span>
                             <p><?=nl2br($cmt->comment)?></p>
                             <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                          </div>
                        </li>
                        <?php
                         endforeach ;
                         ?>
                         </ul>
                       </div>

                        <?php  else :?>

                              <h3 class="text-info">No comment has been posted ... Be the first!</h3>

                       <?php  endif
                      ?>
                    </div>
                    </div>

        <div class="row">
          <div class="col-md-12">
            <div class="mu-from-blog-area" >
              <div class="mu-from-blog-content">
                <div class="row">
                    <div class="row" style="background-color:none;padding:10px 10px;" id=message>
                      <div class="col-lg-12 col-md-12 col-sm-12">
                          <h3><a href="#">Comment:</a></h3>
                        </figcaption>
                      </div>
                      <form class="form-group"  method="post" style="background-color:none;padding:50px 50px;">
                        <?php
                          if (isset($_POST['submit'])) {

                              $name=htmlspecialchars(trim($_POST['name']));
                              $email=htmlspecialchars(trim($_POST['email']));
                              $comment=htmlspecialchars(trim($_POST['comment']));
                              $errors=[];

                              if (empty($name)||empty($email)||empty($comment)) {

                                  $errors['empty']="veuillez remplir tous les champs!";
                              }
                              elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {

                                  $errors['not_email']="l'adresse email doit porter un @";
                              }
                              if (!empty($errors)) {
                                  foreach ($errors as $error) {
                                        echo '<div class="row">
                                              <div class="col-lg-6 col-md-6"><p class="alert-danger">'.$error.'</p></div>
                                             </div>';
                                  }
                              }
                              else {
                                  insert_comments($name,$email,$comment,$_GET['id']);
                                  // header ne marche pas lorsqu'on a deja affichE du contenu et donc on peut utiliser JS
                                  ?>
                                      <script>

                                        window.location.replace("index.php?page=article&id=<?=$_GET['id']?>");
                                      </script>
                              <?php
                              }


                        }


                         ?>
                        <div class="col-lg-6 col-md-6 col-sm-6"style="background-color:none;padding:10px 10px;">
                          <label for="name">Insert your name</label>
                          <input type="text" name="name" value="" class="form-control" required="required" autofocus="autofocus">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="background-color:none;padding:10px 10px;">
                          <label for="email">Email Adress </label>
                          <input type="text" name="email" value="" class="form-control" required="required" >
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12" style="background-color:none;padding:10px 10px;">
                          <textarea name="comment" rows="8" cols="80" class="form-control"></textarea>
                        </div> <br>
                        <div class="col-lg-4 col-md-4 col-sm-4 offset-lg-4 offset-md-4 offset-sm-4">


                            <center><input type="submit" name="submit" value="comment" class="btn btn-primary btn-block"></center>
                        </div>

                      </form>
                    </div>

                </div>
              </div>


              <!-- end from blog content   -->


          </div>
        </div>

      </div>
      </div>
      <div class="mu-pagination">
        <nav>
          <ul class="pagination">
            <li class="active">
              <a href="?page=home#precedent" aria-label="Previous">
                <span class="fa fa-angle-left"></span> Prev
              </a>
            </li>
            <li>
              <a href="?page=list_article" aria-label="Next">
               Next <span class="fa fa-angle-right"></span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </section>

<?php
  endif

 ?>
