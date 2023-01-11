<?php
//require"array.php";
require"dbconnection.php";

$dbconnect = new dbconnection();

$sql = "SELECT * FROM products";

$query = $dbconnect -> prepare($sql);

$query -> execute() ;

$products = $query -> fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($products);
// echo "</pre>";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refresh</title>
    <link rel="icon" href="img/logosmall.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" />
</head>
    <body>
      <!--- navbar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <img href="index.html" src="img/logosmall.png" class="navbar-brand">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Options
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="index.php">Home</a></li>
                      <li><a class="dropdown-item" href="shopping.html">Shopping Cart</a></li>
                    </li>
              </div>
            </div>
            <div>
          <!-- hier moet een shop icon-->
            </div>
          </nav>
        <!--- navbar -->
    
        <!--Highlights display -->


      <?php
      $teller = 0;
      while ($teller < count($products)){
        echo "<div class='boventab'>
          <div class='ondertab'>
          <img class='jordan1hd' src='img/{$products[$teller]['product_afb']}'>
          <p>{$products[$teller]['product_naam']}</p>
          <p>&dollar; {$products[$teller]['product_prijs']}</p>
          <a href='https://stockx.com/air-jordan-1-retro-high-dior'>Buy</a>
        </div>
        </div>";
        $teller++;
      }
      ?>
      <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-light text-dark-50">
        <div class="container text-center">
          <small>Copyright &copy; Refresh </small>
        </div>
      </footer>
    
    
    
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>