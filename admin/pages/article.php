    <?php  if (droit_admin()==0){
      header("location:?page=dashboard");
    }

    ?>
<body class="bg-dark">
  <?php

          $posts=get_article();


   ?>

  <div class="container img-thumbnail mt-5" >
    <div class="img-thumbnail mt-5" style="padding:50px 50px; background-color:#ccc;">
      <div class="row">
        <?php foreach ($posts as $article):
        ?>
        <div class="col-lg-12 col-md-12">
          <div class="row">
            <div class="col-lg-8 col-md-8">
              <h4><?=$article->title?></h4> <span class="text-info">Accessibilité: <?=($article->posted=='1')?"<span class='text-danger'>public</span>" :"<span class='text-danger'>privé</span>"?></span>
              <p><?=substr(nl2br($article->content),0,200)?>(...)</p>
              <p>Auteurs :<a class="d-block small" href="#"><?=$article->auteurs?></a></p>
              <p>Administrateur  :<a class="d-block small" href="#"><?=$article->email?></a></p>
                <p>Date :<a class="d-block small" href="#"><?=date("d/m/y à h:i",strtotime($article->date))?></a></p>
            </div>
            <div class="col-lg-4 col-md-4">
              <img src="../assets/img/articles/<?=$article->image?>" title="img-article" width="100%">
              <a class="btn btn-primary btn-sm btn-block mt-3" href="?page=edit-view&id=<?=$article->id_article?>">Voir en détail</a>

            </div>
          </div>
          <hr>
        </div>
      <?php endforeach ?>
      </div>
    </div>
          <div class="row mt-3">
            <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="?page=dashboard" tabindex="-1">Précedente page</a>
              </li>

              <li class="page-item">
                <a class="page-link" href="?page=edit">Suivant</a>
              </li>
            </ul>
          </nav>
          </div>
        </div>
