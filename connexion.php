<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="./img/tree.png" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header-footer.css">
    <link rel="stylesheet" href="./css/connexion.css">
    <title>Tree-Factorie</title>
</head>

<body>
    <?php include_once './templates/header.php'; ?>
    <div id="title" class="container-fluid">
        <h1>Tree-shop</h1>
        <h5>L'endroit parfait pour acheter ses arbres !</h5>
    </div>
    <div class="unknow container-fluid"></div>
    <?php if (isset($_SESSION['wrongPass'])) { ?>
        <div class="alert alert-danger" role="alert">
            Attention le mot de passe n'est pas bon !!
        </div>
    <?php unset($_SESSION['wrongPass']);
    } 
     if (isset($_SESSION['mdp'])) { ?>
        <div class="alert alert-danger" role="alert">
            Attention les deux mots de passe ne sont pas identique !!
        </div>
    <?php unset($_SESSION['mdp']);
    } 
     if (isset($_SESSION['creat'])) { ?>
        <div class="alert alert-success" role="alert">
            Le compte a bien été créé !!
        </div>
    <?php unset($_SESSION['creat']);
    } ?>
    <div class="container formI">
        <div class="container">
            <h2>Inscription: </h2>
        </div>
        <form action="./controllers/inscription.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php if (isset($_SESSION['inscription'])) { echo $_SESSION['inscription']["email"]; } ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php if (isset($_SESSION['inscription'])) { echo $_SESSION['inscription']["nom"]; } ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pasword">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="verifPass">Vérifier le mot de passe</label>
                    <input type="password" class="form-control" id="verifPass" name="verifPass" required>
                </div>
            </div>
            <input type="submit" value="Validé">
        </form>
        <p class="change1">Déjà membre ? Connectez vous</p>
    </div>
    <div class="container formC hide">
        <div class="container">
            <h2>Connexion: </h2>
        </div>
        <form action="./controllers/log.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="passwordCo" name="password" required>
                </div>
            </div>
            <input type="submit" value="Validé">
        </form>
        <p class="change2">Pas encore membre ? Inscrivez vous</p>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>

</html>