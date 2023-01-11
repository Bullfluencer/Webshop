<?php
require"array.php";
require"dbconnection.php";

//echo "<pre>";
//print_r($products);
//echo "</pre>";

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
              <img src="img/logosmall.png" class="navbar-brand">
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
                      <li><a class="dropdown-item" href="shoesmen.php">Male</a></li>
                      <li><a class="dropdown-item" href="shopping.html">Shopping Cart</a></li>
                  </li>
              </div>
            </div>
          </nav>
        <!--- navbar -->
    
        <!--Highlights display -->
        <section class="pdisplay">
            <img class="phigh" src="img/jordan.png">
        </section>
        <!--Highlights display -->
        <p1 class="BestSel">Best Seller</p1>
        
        <div class="boventabc">
          
          <div class="ondertabc">
            <img class='jordan4bc' src="img/cats.png">
            <p><?= $products[1][0]?></p>
            <p>$799</p>
            <a href="https://stockx.com/air-jordan-4-retro-black-cat-2020">Buy</a>
          </div>

    
    
        <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-light text-dark-50">
          <div class="container text-center">
            <small>Copyright &copy; Refresh</small>
          </div>
        </footer>
    

    
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>