<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"> Processus de la Création d'un Modérateur</div>
      <div class="card-body">
        <form method="post">
          <?php
                  get_modo();

           ?>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" autofocus="autofocus">
              <label for="inputEmail">Addresse Email </label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="token" class="form-control" placeholder="Password" >
              <label for="inputPassword">Code Unique</label>
            </div>
          </div>
          <div class="form-group">

          </div>
          <button class="btn btn-primary btn-block" name="submit" type="submit">Confirmer</button>
        </form>

      </div>
    </div>
  </div>
