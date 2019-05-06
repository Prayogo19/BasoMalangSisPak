<?php 

if (isset($_POST['nama']) && $_POST['nama']) {
	require_once 'koneksi.php'; //koneksi ke database

	//menyimpan variabel yang dikirim form
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];

	//cek nilai variabel
	if (empty($nama)) {
		header('location: index.php?error='.base64_encode('Nama tidak boleh kosong'));
	}

	if (empty($tanggal_lahir)) {
		header('location: index.php?error='.base64_encode('Tanggal Lahir tidak boleh kosong'));
	}

	if (empty($alamat)) {
		header('location: index.php?error='.base64_encode('Alamat tidak boleh kosong'));
	}

	if (empty($username)) {
		header('location: index.php?error='.base64_encode('Username tidak boleh kosong'));
	}

	if (empty($password)) {
		header('location: index.php?error='.base64_encode('Password tidak boleh kosong'));
	}


	//validasi apakah password dan repassword sama?
	if ($password != $repassword) { //jika tidak sama
		header('location: index.php?error='.base64_encode('Password tidak sama'));
	}

	$level = 'user'; //set level default

	// SQL Insert

	$sql = mysqli_query($koneksi,"INSERT INTO user(nama,tanggal_lahir,alamat,username,password,level) VALUES ('$nama','$tanggal_lahir','$alamat','$username','$password','$level')") or die(mysqli_error($koneksi));
	// jika gagal

	if (!$sql) {
		echo "<script>alert('".$koneksi->error."'); window.location.href='index.php';</script>";
	}else{
		echo "<script>alert('Regitrasi Berhasil, Silahkan Login'); window.location.href='index.php';</script>";
	}
}
 ?>
