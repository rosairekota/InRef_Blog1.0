<?php

        update_comments_control();
        delete_comments_control();



 ?>

<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
   Tableaux de tous les commentaires Non-lus</div>
   <?php
        $coments=get_dash_comments();
    ?>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Article</th>
            <th>Auteurs</th>
            <th>Commentaires</th>
            <th>Actions</th>

          </tr>
        </thead>
        <tfoot>
        <tbody>
          <?php

              foreach ($coments as $cmt) :?>
          <tr>
            <td><?=substr(nl2br($cmt->content),0,100) ?>(...)</td>
            <td><?=$cmt->auteurs ?></td>
            <td><?=$cmt->comment ?></td>
            <td style="padding:20px 20px;">

            <a href="?page=comments&id=<?=$cmt->id?>" id="<?=$cmt->id?>" class="btn btn-primary see_comment">Valider</a> <hr>
              <a href="?page=comments&id=<?=$cmt->id?>" id="<?=$cmt->id?>" class="btn btn-danger delete_comment">Suprimer</a>

            </td>
          </tr>
             <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

</div>
<div class="mt-5">
  <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="?page=dashboard" tabindex="-1" aria-disabled="true">Précedent</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="?page=article">Suivant</a>
          </li>
        </ul>
      </nav>
</div>
