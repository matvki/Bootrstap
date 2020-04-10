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
    <?php include_once './templates/header.php'; ?>
    <?php if ($_SESSION['basket'] == 0) {
        $_SESSION['empty'] = 'coucou';header('Location: /');
    } ?>
    <div id="title" class="container-fluid">
        <h1>Tree-shop</h1>
        <h5>L'endroit parfait pour acheter ses arbres !</h5>
    </div>
    <div class="unknow container-fluid"></div>
    <div class="container">
        <h2>Ce que vous voulez prendre: </h2>
        <div class="row row-cols-3">
            <?php foreach ($_SESSION['shop'] as $id => $value) {
                include './controllers/requestBasket.php' ?>
                <div class="frame">
                    <div class="picture">
                        <img src="<?= $tree[0]['image'] ?>" alt="tree" class="img-thumbnail">
                    </div>
                    <div class="mptxt">
                        <h2><?= ucfirst($tree[0]['name']) ?></h2>
                        <p>Cet arbre est un arbre avec des feuilles de type <?php if ($tree[0]['leaf'] == 1) {
                                                                                echo 'caduc, non permanente';
                                                                            } elseif ($tree[0]['leaf'] == 2) {
                                                                                echo 'Persistante';
                                                                            } else {
                                                                                echo 'semi-persistante';
                                                                            } ?></p>
                        <p>Fruit : <?= $tree[0]['fruit'] ?> </p>
                        <button type="button" class="btn btn-primary my-2 my-lg-0">
                            Quantitée <span class="badge badge-light"><?= $_SESSION['shop'][$id]['qtt'] ?></span>
                        </button>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>