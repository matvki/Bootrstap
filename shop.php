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
  <?php include_once './templates/header.php' ?>
  <div id="title" class="container-fluid">
    <h1>Tree-shop</h1>
    <h5>L'endroit parfait pour acheter ses arbres !</h5>
  </div>
  <div id="title2" class="container-fluid">
    <h2>Tout nos types d'arbres:</h2>
  </div>
  <div class="unknow container-fluid"></div>
  <form action="./typeArbre.php" method="POST">
    <div class="container">
      <h2>Type de Feuillage</h2>
      <div class="row row-cols-3">
        <button id="caduc" class="choice" name="leaf" value="1">
          <style>
            #caduc {
              background-image: url(./img/ginko.jpg);
              background-position: center;
            }
          </style>
          <div class="mptxt">
            <p>Caduc</p>
          </div>
        </button>
        <button id="persistant" class="choice" name="leaf" value="2">
          <style>
            #persistant {
              background-image: url(./img/pin.jpg);
              background-position: center;
            }
          </style>
          <div class="mptxt">
            <p>Persistant</p>
          </div>
        </button>
        <button id="semi" class="choice" name="leaf" value="3">
          <style>
            #semi {
              background-image: url(./img/mangrove.jpg);
              background-position: center;
            }
          </style>
          <div class="mptxt">
            <p>Semi-persistant</p>
          </div>
        </button>
      </div>
      <h2>Fruitier ou non</h2>
      <div class="row row-cols-2">
        <button id="fruitier" class="choice" name="fruit" value="1">
          <style>
            #fruitier {
              background-image: url(./img/pommier.jpg);
              background-position: center;
            }
          </style>
          <div class="mptxt">
            <p>Fruitier</p>
          </div>
        </button>
        <button id="nonFruitier" class="choice" name="fruit" value="2">
          <style>
            #nonFruitier {
              background-image: url(./img/Baobab.jpg);
              background-position: center;
            }
          </style>
          <div class="mptxt">
            <p>Non Fruitier</p>
          </div>
        </button>
      </div>
    </div>
  </form>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>