<?php 
	include '../../config/koneksi.php';
	include "../../config/inc.session.php";
	$id = $_GET['id'];
	$driver = $_SESSION['id_user'];

	$transaksi = "UPDATE transaksi SET status='Terkirim' WHERE id_transaksi=$id";
	$pengemudi = "UPDATE user SET status='Ready' WHERE id_user = '$driver'";
	$t = mysqli_query($connect,$transaksi);
	$p = mysqli_query($connect,$pengemudi);

	header('location:../index.php?p=driver')
 ?>