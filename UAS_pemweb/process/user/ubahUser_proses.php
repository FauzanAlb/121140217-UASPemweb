<?php
  include '../../database/User.php';
  $user = new User;



  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $telp = $_POST['telepon'];
  $passlama = $_POST['passwordlama'];
  $passlamadb = $_POST['passlamadb'];
  $passbaru = $_POST['passwordbaru'];



  $passenkripsi = password_hash($passbaru, PASSWORD_BCRYPT);




  $cekpass = password_verify($passlama,$passlamadb);
  if ($cekpass) {
        $user->updateUser($id,$nama,$telp,$passenkripsi,$alamat);
        move_uploaded_file($sumber,$tujuan);

        echo "<script>
                  alert('Data berhasil diubah !');
                  window.location = '../../pages/edit_profilu.php';
              </script>";

    }else{
      echo "<script>
                alert('File size melebihi ketentuan!');
                window.location = '../../pages/ubahUser.php?id=".$id."';
            </script>";

  }else{
    echo "<script>
              alert('Password lama tidak sesuai!');
              window.location = '../../pages/ubahUser.php?id=".$id."';
          </script>";

  }






 ?>
