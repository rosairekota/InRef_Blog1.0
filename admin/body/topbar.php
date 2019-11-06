<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="?page=login">Menus</a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Navbar Search -->
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <div class="text-primary">
    <?=$_SESSION['admin']?>
    </div>
  </form>
  <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0">

    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw" title="Profil"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="index.php?page=password">Rénitialiser password</a>
        <a class="dropdown-item" href="#">Profil</a>
        <a class="dropdown-item" href="#">Journal d'activités(Gestions des Logs)</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="?page=logout" data-toggle="modal" data-target="#logoutModal">Déconnexion</a>
      </div>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Prêt à partir?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à mettre fin à votre session en cours.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
              <a class="btn btn-primary" href="?page=logout">Déconnexion</a>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>

</nav>


    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="?page=dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tableau de bord</span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <?php if (droit_admin()==1): ?>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Écrans de connexion:</h6>
            <a class="dropdown-item" href="index.php?page=logout">Se Déconnecter</a>
            <a class="dropdown-item" href="../">quitter</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Espace Administration:</h6>
            <a class="dropdown-item" href="index.php?page=modo">Nouveau admin</a>
            <a class="dropdown-item" href="?page=article">Listes des articles</a>
              <a class="dropdown-item" href="?page=edit">Editer article</a>
          </div>

        </li>
          <?php
            else:?>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <h6 class="dropdown-header">Écrans de connexion:</h6>
              <a class="dropdown-item" href="index.php?page=logout">Se Déconnecter</a>
              <a class="dropdown-item" href="../">quitter</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Espace Administration:</h6>
              <a class="dropdown-item alert-danger" href="#">Accès non autrorisé</a>
            </div>

            <?php

            endif;

            ?>

        <li class="nav-item">
          <a class="nav-link" href="?page=comments">
            <i class="fas fa-fw fa-table"></i>
            <span>Tableaux des commentaires</span></a>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Tableau de bord</a>
            </li>
            <li class="breadcrumb-item active">Vue d'ensemble</li>
          </ol>
