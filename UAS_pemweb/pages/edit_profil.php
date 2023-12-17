
<?php if($_SESSION['nama']): ?>


	<?php if($_SESSION['role'] == "admin"): ?>
		<?php include 'pages/edit_profilu.php' ?>
	<?php endif; ?>

	<?php if ($_SESSION['role'] =="user"): ?>
		<?php include 'pages/edit_profilu.php' ?>
	<?php endif; ?>

<?php else: ?>
	<h1 style="align-text=center">Silahkan login terlebih dahulu</h1>
<?php endif; ?>
