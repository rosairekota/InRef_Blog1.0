<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"> Rénitiliser votre Mot de passe -(Fin)</div>
      <div class="card-body">
        <form method="post">
          <?php
                  update_modo_control();

           ?>
        
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputEmail" name="pwd" class="form-control" placeholder="Nouveau Mot de passe" autofocus="autofocus">
              <label for="inputEmail">Nouveau Mot de passe </label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="pwd_egain" class="form-control" placeholder="Confirmer Mot de passe" >
              <label for="inputPassword">Confirmer Mot de passe</label>
            </div>
          </div>
          <div class="form-group">

          </div>
          <button class="btn btn-primary btn-block" name="submit" type="submit">Confirmer</button>
        </form>

      </div>
    </div>
  </div>
