
<div class="bg-dark">
  <?php

          $posts=get_article();


   ?>

  <div class="container-fluid img-thumbnail mt-5" style="background-image:url('../assets/img/Untitled-4.jpg'); width:100%; height:100%;padding:50px 50px;">
    <div class="img-thumbnail mt-5 text-info" style="padding:20px 20px; background-color:#fff;">
      <div class="row">
        <?php foreach ($posts as $article):
        ?>
        <div class="col-lg-12 col-md-12">
          <div class="row">
            <div class="col-lg-8 col-md-8">
              <h4><?=$article->title?></h4>
              <p><?=substr(nl2br($article->content),0,200)?>(...)</p>
              <p>Auteurs :<a class="d-block small" href="#"><?=$article->auteurs?></a></p>
            </div>
            <div class="col-lg-4 col-md-4">
              <img src="../assets/img/articles/<?=$article->image?>" title="img-article" style="width:100%; height:200px;">
              <a class="btn btn-primary btn-sm btn-block mt-3" href="?page=article&id=<?=$article->id_article?>">Read More</a>

            </div>
          </div>
          <hr>
        </div>

      <?php endforeach ?>
      </div>
    </div>
    <div class="mu-pagination">
      <nav>
        <ul class="pagination">
          <li>
            <a href="?page=list_article" aria-label="Previous">
              <span class="fa fa-angle-left"></span> Prev
            </a>
          </li>
          <li class="active"><a href="?page=premier_new_article">1</a></li>
          <li><a href="?page=deuxieme_new_article">2</a></li>
          <li><a href="?page=troisieme_new_article">3</a></li>
          <li><a href="?page=quatrieme_new_article">4</a></li>
          <li><a href="?page=cinquieme_new_article">5</a></li>
          <li>
            <a href="?page=list_article" aria-label="Next">
             Next <span class="fa fa-angle-right"></span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="mu-footer-bottom">
    <div class="container">
      <div class="mu-footer-bottom-area">
        <p></p>
      </div>
    </div>
  </div>
