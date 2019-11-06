<?php  if (droit_admin()==0){
  header("location:?page=dashboard");
}
?>
<body class="bg-dark">


  <div class="container img-thumbnail mt-5">
      <div class="text-center text-danger" style="font-size:30px;font-weight:bold;">EDITER L'ARTICLE</div>
    <div class="img-thumbnail mt-5 alert-default" style="padding:50px 50px;">
      <h6 class="text-warning text-center mb-5">NB: Si vous n'avez pas d'image à inserer et/ou des fichiers <span class="text-secondary">PDF</span>, ne selectionner pas les cases d'image et fichier PDF; <br>enregistrer sans image!</h6>
      <div class="row">
      <div class="col-lg-12 col-md-12">
        <form method="post" enctype="multipart/form-data">
         <?php
              validate_control();

          ?>
           <div class="form-group">
             <div class="form-row">
               <div class="col-lg-10 col-md-10 col-sm-12 offset-lg-1 offset-md-1">
                 <div class="form-label-group">
                   <input type="text" id="firstName" class="form-control" name="title" value="" placeholder="Inserer votre Nom" autofocus="autofocus">
                   <label for="firstName">Titre</label>
                 </div>
               </div>
             </div>
           </div>
           <div class="form-group">
             <div class="form-row">
               <div class="col-lg-10 col-md-10 col-sm-12 offset-lg-1 offset-md-1">
                 <div class="form-label-group">
                   <input type="text" id="firstName" class="form-control" name="type" value="" placeholder="Inserer votre Nom" autofocus="autofocus">
                   <label for="firstName">Type article</label>
                 </div>
               </div>
               <div class="col-lg-10 col-md-10 col-sm-12 offset-lg-1 offset-md-1 mt-3">
                 <label for="firstName">Auteurs</label>
                 <div class="form-label-group">
                   <input type="text" id="firstName"  class="form-control" name="auteurs" value="" placeholder="Inserer votre Nom" autofocus="autofocus">
                 </div>
               </div>
             </div>
           </div>
           <div class="form-group">
             <div class="form-row">
               <div class="col-lg-10 col-md-10 col-sm-12 offset-lg-1 offset-md-1">
                 <label for="firstName">Description</label>
                 <div class="form-label-group">
                   <textarea id="firstName" class="form-control"  name="content"  placeholder="Inserer votre Nom" rows="8" cols="80" ></textarea>
                 </div>
               </div>
             </div>
           </div>
           <div class="form-group">
              <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 offset-lg-1 offset-md-1">
                  <label for="image">Choisir l'image</label>
                  <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 offset-lg-1 offset-md-1 mt-3">
                  <label for="image">Choisir le Fichier PDF</label>
                  <input type="file" class="form-control" name="fichier_pdf" id="image">

                </div>
              </div>
           </div>
           <div class="form-group">
             <div class="form-row">
               <div class="col-lg-5 col-md-5 col-sm-12 offset-lg-1 offset-md-1">
                 <label for="role">Public</label>
                <select class="form-control" name="posted" id="role">
                  <option value="1">Oui</option>
                  <option value="0">Non</option>
                </select>
               </div>
               <div class="col-lg-5 col-md-5 col-sm-12 ">
                 <label for="role">Langues</label>
                <select class="form-control" name="language" id="role">
                  <option value="fr">Français</option>
                  <option value="en">Anglais</option>
                </select>
                <hr>
               </div>
             </div>
           </div>
           <div class="form-group">
             <div class="row">
               <div class="col-lg-10 col-md-10 offset-lg-1 offset-md-1">
                 <input type="submit" name="submit" value="Editer L'article"class="btn btn-primary btn-block">
               </div>
             </div>
            </div>

        </form>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <nav aria-label="...">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="?page=article" tabindex="-1" >Précedente page</a>
      </li>

      <li class="page-item">
        <a class="page-link" href="?page=edit-view">Suivant</a>
      </li>
    </ul>
  </nav>
  </div>
</div>
  </div>
