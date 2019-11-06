
<body class="bg-dark">

  <div class="container" style="padding:50px 50px;">
      <div class="text-center text-danger" style="font-size:30px;font-weight:bold;">CREATION D'UN NOUVEAU MODERATEUR</div>
    <div class="img-thumbnail mt-5" style="padding:50px 50px;">
      <div >
        <form method="post">
          <?php
                validation_deschamp();
           ?>
           <div class="form-group">
             <div class="form-row">
               <div class="col-md-12">
                 <div class="form-label-group">
                   <input type="text" id="firstName" name="name" class="form-control" placeholder="Inserer votre Nom" autofocus="autofocus">
                   <label for="firstName">Nom</label>
                 </div>
               </div>
             </div>
           </div>

           <div class="form-group">
             <div class="form-row">
               <div class="col-md-6">
                 <div class="form-label-group">
                   <input type="email" id="inputPassword" name="email" class="form-control" placeholder="Email" >
                   <label for="inputPassword">Adresse Email</label>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="form-label-group">
                   <input type="email" id="confirmPassword" name="email_egain" class="form-control" placeholder="Confirm password">
                   <label for="confirmPassword">Adresse Email</label>
                 </div>
               </div>
             </div>
           </div>
           <div class="form-group">
               <label for="role">Rôle</label>
             <div class="form-label-group">
             <select class="form-control" name="role" id="role">
               <option value="admin">Administrateur</option>
               <option value="modo">Moderateur</option>
             </select>
             </div>
           </div>


          <button class="btn btn-primary btn-block" name="submit" type="submit">Creer Un moderateur</button>
          <div class="text-center">
            <a class="d-block small" href="#" >Renitialiser</a>
          </div>
        </form>

      </div>
    </div>
  </div>
