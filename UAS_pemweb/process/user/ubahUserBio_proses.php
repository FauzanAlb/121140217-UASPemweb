<?php
    include '../../database/User.php';
    session_start();
    $user = new User;


    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $telepon = $_POST['telepon'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $user->updateUserBio($_SESSION['id'],$nama,$tgl_lahir,$telepon,$jk,$alamat);
    $_SESSION['nama'] = $nama;
    $_SESSION['tgl_lahir'] = $tgl_lahir;
    $_SESSION['telp'] = $telepon;
    $_SESSION['jk'] = $jk;
    $_SESSION['alamat'] = $alamat;


    echo "<script>
              alert('Data berhasil diubah !');
              window.location = '../../index.php?p=edit_profil';
          </script>";

 ?>
