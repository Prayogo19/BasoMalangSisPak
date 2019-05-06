<?php 
$dbhost	 ='localhost';
$dbuser	 ='root';
$dbpass	 ='';
$dbname	 ='basomalang';

$koneksi=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : ".mysqli_connect_error();
}


?>