<?php
include '../koneksi.php';

$username = $_GET['username'];
$diskon_2d = $_POST['diskon_2d'];
$hadiah_2d = $_POST['hadiah_2d'];
$diskon_3d = $_POST['diskon_3d'];
$hadiah_3d = $_POST['hadiah_3d'];
$diskon_4d = $_POST['diskon_4d'];
$hadiah_4d = $_POST['hadiah_4d']; 
$diskon_shio = $_POST['diskon_shio'];
$hadiah_shio = $_POST['hadiah_shio'];
$diskon_bkgg = $_POST['diskon_bkgg'];
$hadiah_bkgg = $_POST['hadiah_bkgg'];
$diskon_cb = $_POST['diskon_cb'];
$hadiah_cb = $_POST['hadiah_cb'];
$diskon_cm = $_POST['diskon_cm'];
$hadiah_cm = $_POST['hadiah_cm'];
$diskon_cj = $_POST['diskon_cj'];
$hadiah_cj = $_POST['hadiah_cj'];
$diskon_cn = $_POST['diskon_cn'];
$hadiah_cn = $_POST['hadiah_cn'];
$diskon_gp = $_POST['diskon_gp'];
$hadiah_gp = $_POST['hadiah_gp'];

$sql = "UPDATE tb_user SET 
			diskon_2d = '$diskon_2d', hadiah_2d = '$hadiah_2d',
			diskon_3d = '$diskon_3d', hadiah_3d = '$max_bhadiah_3det_2d', 
			diskon_4d = '$diskon_4d', hadiah_4d ='$hadiah_4d',
            diskon_shio = '$diskon_shio', hadiah_shio ='$hadiah_shio',
            diskon_bkgg = '$diskon_bkgg', hadiah_bkgg ='$hadiah_bkgg',
            diskon_cb = '$diskon_cb', hadiah_cb ='$hadiah_cb',
            diskon_cm = '$diskon_cm', hadiah_cm ='$hadiah_cm',
            diskon_cj = '$diskon_cj', hadiah_cj ='$hadiah_cj',
            diskon_cn = '$diskon_cn', hadiah_cn ='$hadiah_cn',
            diskon_gp = '$diskon_gp', hadiah_gp ='$hadiah_gp'
		WHERE username='$username'";
$query = mysqli_query($conn, $sql);

if( $query ) {
// kalau berhasil alihkan ke halaman list-siswa.php
header('Location: diskon_hadiah.php');
} else {
// kalau gagal tampilkan pesan
die("Gagal menyimpan perubahan...");
}
?>