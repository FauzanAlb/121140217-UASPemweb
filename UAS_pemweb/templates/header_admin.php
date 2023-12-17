<!doctype html>
<html lang="en">
  <head>

  <style>
    .nav-item a.nav-link p {
      color: #FFFF;
      transition: color 0.3s; /* Efek transisi untuk perubahan warna */
      background-color: #176B87;
      padding: 10px;
      margin-bottom: 0;
      border-radius: 10px;
    }

    .nav-item a.nav-link:hover p {
      color: #64CCC5; /* Warna teks saat hover */
      background-color: rgb(213, 251, 255);
    }
  </style>
    <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top hijau flex-md-nowrap p-0 shadow">
      <ul class="navbar-nav px-3">

      </ul>
    </nav>

    <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=edit_profil">
              <p>Account</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=tabel_userr">
              <p> Tabel User</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="process/logout.php">
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">