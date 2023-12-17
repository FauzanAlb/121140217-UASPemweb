<?php
    include '../../database/User.php';
    $usr = new User;

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telepon'];
    $pass = $_POST['password'];
    $jk = $_POST['gender'];
    $tgl_lahir=$_POST['birthdate'];
    $alamat = $_POST['address'];

    $passenkripsi = password_hash($pass, PASSWORD_BCRYPT);

    if ($usr->checkEmail($email)== 1) {         //check apakah sudah ada atau belum email
      echo "<script>
                alert('Email Sudah Tersedia!');
                window.location = '../../index.php';
            </script>";
    } else {
        // Tambahkan pengguna ke database dengan status 'is_approved' diatur ke 0
        $usr->tambahUser($nama,$email,$telp,$passenkripsi,$tgl_lahir, $alamat,$jk, 0);

        echo "<script>
            alert('Pendaftaran berhasil! Akun Anda sedang menunggu persetujuan oleh admin.');
            window.location = '../../index.php';
        </script>";
    }
?>

