<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Myfonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <!-- Mycss -->

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="pesan.css" rel="stylesheet">

    <link rel="stylesheet" href="csslogin/styles.css"> <!-- Resource style -->
    <link rel="stylesheet" href="csslogin/demo.css"> <!-- Demo style -->
    <link href="open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">


  </head>
  <body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto js-signin-modal-trigger"><!-- disini perbaikan --> 
        <a class="nav-item nav-link active" href="index.php?p=select_main">beranda <span class="sr-only">(current)</span></a>
        <?php
          if(isset($_SESSION['login'])):
        ?>
              <?php
              if(($_SESSION['login']) && ($_SESSION['role'] == 'user')):
              ?>
                <a class="nav-item nav-link" href="index.php?p=edit_profil">Account</a>
                <a class="nav-item btn btn-secondary tombol" href="process/logout.php">keluar</a>
              <?php endif ;?>
              <?php if(($_SESSION['login']) && ($_SESSION['role'] == 'admin')): ?>
                      <a class="nav-item nav-link" href="index.php?p=panel_admin">Panel Admin</a>
                      <a class="nav-item nav-link" href="index.php?p=edit_profil">Account</a>
                      <a class="nav-item btn btn-secondary tombol" href="process/logout.php">keluar</a>
              <?php endif ;?>

            <?php else: ?>
                <a class="nav-item btn btn-secondary tombol" href="#" data-signin="login">masuk</a>
          <?php endif; ?>
      </div>
    </div>
  </div>
</nav>
<div class="container">
