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
    <link rel="stylesheet" href="./css/shop.css">
    <title>Tree-Factorie</title>
</head>

<body>
    <?php include_once './templates/header.php';
    include_once './controllers/typesArbres.php' ?>
    <div id="title" class="container-fluid">
        <h1>Tree-shop</h1>
        <h5>L'endroit parfait pour acheter ses arbres !</h5>
    </div>
    <div id="title2" class="container-fluid">
        <h2>Tout nos types d'arbres:</h2>
    </div>
    <div class="unknow container-fluid"></div>

    <div class="container">
        <h2>Ce que nous avons trouvé selon vos choix</h2>
        <div class="row row-cols-2"><?php foreach ($trees as $tree) { ?>
                <div class="frame">
                    <div class="picture">
                        <img src="<?= $tree['image'] ?>" alt="tree" class="img-thumbnail">
                    </div>
                    <div class="mptxt">
                        <h2><?= ucfirst($tree['name']) ?></h2>
                        <p>Cet arbre est un arbre avec des feuilles de type <?php if ($tree['leaf'] == 1) {
                                                                                echo 'caduc, non permanente';
                                                                            } elseif ($tree['leaf'] == 2) {
                                                                                echo 'Persistante';
                                                                            } else {
                                                                                echo 'semi-persistante';
                                                                            } ?></p>
                        <p>Fruit : <?= $tree['fruit'] ?> </p>
                        <form action="./controllers/requestPanier.php" method="POST">
                            <input type="hidden" name="id" value="<?= $tree['id'] ?>">
                            <input type="submit" class="btn btn-dark" value="ajouter au panier">
                        </form>
                    </div>

                </div><?php } ?>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>