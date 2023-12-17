<?php
	include '../../database/User.php';

	$id = $_GET['id'];

	$user = new User;
	$user->hapusUser($id);
	echo "<script>
						alert('Data berhasil dihapus !');
						window.location = '../../index.php?p=tabel_userr';
				</script>";


 ?>
