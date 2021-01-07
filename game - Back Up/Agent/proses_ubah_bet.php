<?php
include '../koneksi.php';


// $credit = $_POST['credit'];
$username = $_GET['username'];
$max_bet = $_POST['maxbet'];
$min_bet = $_POST['min_bet'];
$max_bet_2d = $_POST['max_bet_2d'];
$max_bet_3d = $_POST['max_bet_3d'];
$max_bet_4d = $_POST['max_bet_4d'];
$max_bet_other = $_POST['max_bet_other']; 

$sql = "UPDATE tb_user SET 
			max_bet = '$max_bet',
			min_bet = '$min_bet', max_bet_2d = '$max_bet_2d', 
			max_bet_3d = '$max_bet_3d', max_bet_4d ='$max_bet_4d',
			max_bet_other ='$max_bet_other'
		WHERE username='$username'";
$query = mysqli_query($conn, $sql);

if( $query ) {
// kalau berhasil alihkan ke halaman list-siswa.php
header('Location: bet.php');
} else {
// kalau gagal tampilkan pesan
die("Gagal menyimpan perubahan...");
}
?>