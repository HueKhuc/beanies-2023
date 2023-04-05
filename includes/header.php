<?php 
    session_start();
    require_once 'variable.php';
    require_once 'fonction.php';
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
          <!-- <a class="nav-link active" aria-current="page" href="home.php">Home</a> -->
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="?page=list">Tous produits</a>
          <!-- <a class="nav-link active" aria-current="page" href="list.php">Tous produits</a> -->
        </li>
        <li class="nav-item">
            <?php if (empty($_POST['login']))echo '
          <a class="nav-link active" aria-current="page" href="?page=login">Login</a>';
          else {echo '<a class="nav-link active" aria-current="page" href="?page=login">';$_SESSION['login'] = $_POST['login']; print_r ($_SESSION['login']); echo '</a>';
            echo '<a class="nav-link active" aria-current="page" href="?page=logout">Logout</a>';
        } 
          ?>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>