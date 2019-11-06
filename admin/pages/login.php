<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Se Connecter</div>
      <div class="card-body">
        <form method="post">
          <?php

                valider_champ();
           ?>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" autofocus="autofocus">
              <label for="inputEmail">Addresse Email </label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" >
              <label for="inputPassword">Mot de passe</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Me souvenir du Mot de passe
              </label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" name="submit" type="submit">Se Connecter</button>
        </form>
        <div class="text-center">
          <a class="d-block small" href="index.php?page=forgot-password">Avez-vous oubliéz le Mot de passe?</a>
        </div>
      </div>
    </div>
  </div>
