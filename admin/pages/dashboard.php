<!-- Icon Cards-->
<?php
            delete_posts_control();

 ?>
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <?php
                  $article=nbre_articles();
                  $commentaires=nbre_commentaires();
                  $administrateurs=nbre_admins();

                 ?>
                <div class="mr-5"><?=$article->nombre_article?> <?=($article->nombre_article)<=1? "Publication":"Publications"?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Voir les détails</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?=$commentaires->nombre_commentaire?> <?=($commentaires->nombre_commentaire)<=1? "Commentaire": "Commentaires"?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Voir les détails</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?=$administrateurs->nombre_admin?> <?=($administrateurs->nombre_admin)<=1? "Administrateur": "Administrateurs"?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Voir les détails</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 Nouveaux logs!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Voir les détails</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- Area Chart Example-->


        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
             Tableaux de tous les articles </div>
           <?php

                   $posts=get_article();

            ?>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Titre</th>
                    <th>Categorie</th>
                    <th>Contenu</th>
                    <th>Auteurs</th>
                    <th>En Ligne</th>
                    <th>Actions</th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($posts as $post) {?>

                  <tr>
                    <td><?=$post->title?></td>
                    <td><?=$post->type?></td>
                    <td><?=substr(nl2br($post->content),0,100)?>...</td>
                    <td><?=$post->auteurs ?></td>
                    <td><?=$post->posted?></td>
                    <td>
                      <a href="?page=edit-view&id=<?=$post->id_article?>" class="btn btn-primary btn-sm">Modifier</a> <hr>
                      <a href="?page=dashboard&action=delete&id=<?=$post->id_article?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign">Supprimer</span> </a>

                    </td>

                  </tr>

                  <?php  } ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      </div>

      </div>
      <div class="mt-5">
        <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précedent</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="?page=article">Suivant</a>
                </li>
              </ul>
            </nav>
      </div>

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
