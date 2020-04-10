<?php session_start();?>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Tree-Favtorie <img src="./img/tree.png" id="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Tree-cueil</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./shop.php">Tree-shop</a>
      </li>
    </ul>
    <?php if (isset($_SESSION['name'])) { ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Infos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./controllers/delog.php">Déconnexion</a>
        </div>
      </li>
      <form class="form-inline my-2 my-lg-0">
        <a href="./shopPlace.php">
          <button type="button" class="btn btn-primary my-2 my-lg-0">
            Panier <span class="badge badge-light"><?= $_SESSION['basket'] ?></span>
          </button>
        </a>
      </form>
    <?php } else { ?>
      <form class="form-inline my-2 my-lg-0">
        <a href="./connexion.php">
          <button type="button" class="btn btn-primary my-2 my-lg-0">
            connexion <span class="badge badge-light"></span>
          </button>
        </a>
      </form>
    <?php } ?>
  </div>
</nav>