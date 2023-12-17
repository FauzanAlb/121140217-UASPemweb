<?php
  $usr = new User;
  $user = $usr->hitungUser();
  $datauser = $usr->tampilUser();

 ?>
 <div class="row titlepanel">
    <div class="col-12">
      <h1  style="color: #04364A;" >DATA USER</h1>
    </div>
  </div>
			<table class="table table_spesialis">
			  <thead class="thead hijau putih">
			<tr>
			<th>No</th>
			<th>Nama User</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
			<th>Umur</th>
            <th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Aksi</th>
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
            <?php if ($row['setujui'] == 0) {
                echo '<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#approve_user_' . $row['id_user'] . '" data-whatever="@getbootstrap">Setujui</button>';
              }?>
              <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete_user_<?= $row['id_user'] ?>" data-whatever="@getbootstrap">Delete</button>
            </td>
			    </tr>

          <!-- Modal Approve User -->
          <div class="modal fade" id="approve_user_<?= $row['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Setujui User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <p>Anda yakin ingin menyetujui <?= $row['nama_user'] ?>?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a href="process/user/approveUser_proses.php?id=<?= $row['id_user'] ?>"> <button type="button" class="btn btn-success">Setujui</button> </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Delete User -->
          <div class="modal fade" id="delete_user_<?= $row['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <p>Anda yakin ingin menghapus <?= $row['nama_user'] ?>?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a href="process/user/deleteUser_proses.php?id=<?= $row['id_user'] ?>"> <button type="button" class="btn btn-danger">Delete</button> </a>
                </div>
              </div>
            </div>
          </div>
          <?php
            $i++;
            endforeach;
           ?>
			  </tbody>
			</table>