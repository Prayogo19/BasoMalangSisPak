<?php
// Load file koneksi.php
include "../koneksi.php";

// Ambil data ID yang dikirim oleh gejala.php melalui URL
$kd_gejala = $_GET['kd_gejala'];

// Query untuk menampilkan data gejala berdasarkan ID yang dikirim
$query = "SELECT * FROM gejala WHERE kd_gejala='".$kd_gejala."'";
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Query untuk menghapus data gejala berdasarkan ID yang dikirim
$query2 = "DELETE FROM gejala WHERE kd_gejala='".$kd_gejala."'";
$sql2 = mysqli_query($koneksi, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: gejala.php");
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='gejala.php'>Kembali</a>";
}
?>
