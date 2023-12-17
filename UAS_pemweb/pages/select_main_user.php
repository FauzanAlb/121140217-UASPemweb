<?php

  $usr = new User;
  $user = $usr->hitungUser();
  $datauser = $usr->tampilUser();


 ?>
<!-- USER-->
 <div class="row titlepanel">
    <div class="col-12 d-flex align-items-center justify-content-between">
      <h1  style="color: #04364A;" >DATA USER TEREGISTRASI</h1>
      <input class="form-control form-control-dark w-25" type="text" id="searchUser" placeholder="Cari nama user...">
    <button class="nav-item btn btn-secondary tombol" type="button" onclick="searchUser()">Cari User</button>
    </div>
</div>
			<table class="table table_spesialis">
			  <thead class="thead hijau putih">
			    <tr>
			      <th>No</th>
			      <th>Nama User</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>Tanggal lahir</th>
			      <th>Umur</th>
            <th>Alamat</th>
			      <th>Jenis Kelamin</th>
            <th> Status </th>
			    </tr>
			  </thead>


			  <tbody>
          <?php
          $i=1;
            foreach ($datauser as $row):
           ?>
			    <tr>
			      <td><?= $i ?></td>
			      <td><?= $row['nama_user'] ?></td>
            <td><?= $row['telp_user'] ?></td>
            <td><?= $row['email_user'] ?></td>
            <td><?= $row['tgl_lahir'] ?></td>
			      <td>
            <?php
              // Mengambil tanggal lahir dari database
              $tgl_lahir = $row['tgl_lahir'];

              // Memeriksa apakah tanggal lahir kosong
              if ($tgl_lahir == "") {
                echo "Belum Diisi";
              } else {
                // Membuat objek DateTime dari tanggal lahir
                $dob = new DateTime($tgl_lahir);
              
                // Membuat objek DateTime dari tanggal sekarang
                $now = new DateTime();
              
                // Menghitung selisih antara tanggal lahir dan tanggal sekarang
                $diff = $now->diff($dob);
              
                // Mengambil properti y dari objek DateInterval yang berisi umur dalam tahun
                $umur = $diff->y;
              
                // Menampilkan umur
                echo $umur;
              }
              ?>
            </td>
            <td><?= $row['alamat'] ?></td>
			      <td>
              <?php
              if ($row['jk']=="") {
                echo "Belum Diisi";
              }else{
                echo $row['jk'];
              }
              ?>
            </td>
            <td>
              <?php
              if ($row['setujui'] == 1){
                echo "Disetujui";
              } else {
                echo "Menunggu";
              }
              ?>
            </td>
          <!-- Akhir Modal Detail user -->
          <?php
            $i++;
            endforeach;
           ?>

      <script>
      function searchUser() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchUser");
    filter = input.value.toUpperCase();
    table = document.getElementsByClassName("table_spesialis")[0];
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
      }
      
      // Menambahkan event listener untuk event 'popstate'
      window.addEventListener('popstate', function(event) {
          // Mengatur nilai input search menjadi kosong
          document.getElementById("searchUser").value = '';
          // Memanggil fungsi searchUser untuk menampilkan semua data
          searchUser();
      });
</script>
			  </tbody>
			</table>
