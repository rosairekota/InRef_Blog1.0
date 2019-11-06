
  <div class="container img-thumbnail mt-5">
      <div class="text-center text-danger" style="font-size:30px;font-weight:bold;">INFORMATION IMPORTANTE</div>
    <div class="img-thumbnail mt-5 alert-info" style="padding:50px 50px;">
      <div class="row">
      <div class="col-lg-12 col-md-12">
        <form method="post" enctype="multipart/form-data">
         <?php
             $ad=select_modo();

          ?>
           <h4>Bienvenue dans l'espace d'administration Inref !</h4>
           <p>Ces informations vous concernent. Gardez les secretement!</p>
           <p><strong class="text-success"> Vous êtes <?=($ad->role!='modo')? "Administrateur" :"Modérateur"?></strong></p>
           <p>Adresse email :<strong class="text-success"><?=$ad->email?></strong> </p>
           <p>Mot de passe par défaut: <strong class="text-success"><?=$ad->token ?></strong></p>
           <p> vous devriez choisir votre propre mot de passe avant de terminer. <span><strong class="text-info"><a href="?page=password">Cliquer içi </a><strong class="text-success"></span></p>


            </form>
             </div>
           </div>


        </div>
      </div>
  </div>
