<?php
    include '../../database/User.php';
    session_start();
    $id = $_GET['id'];
    $user = new User;
    $user->setujui($id);

    echo "<script>
              alert('Data berhasil disetujui !');
              window.location = '../../index.php?p=tabel_userr';
          </script>";

 ?>
