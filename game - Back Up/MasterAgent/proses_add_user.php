<?php
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$mobile = $_POST['mobile'];
$credit = $_POST['credit'];
$max_bet = $_POST['max_bet'];
$min_bet = $_POST['min_bet'];
$max_per_item = $_POST['max_per_item'];
$max_bet_2d = $_POST['max_bet_2d'];
$max_bet_3d = $_POST['max_bet_3d'];
$max_bet_4d = $_POST['max_bet_4d'];
$max_bet_other = $_POST['max_bet_other']; 
$market = $_POST['market'];
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
$created_by = $_SESSION['username'];

$sql = "INSERT INTO tb_user(
		username, password, first_name, last_name,
		phone, mobile, credit, max_bet, min_bet,
		max_bet_2d, max_bet_3d, max_bet_4d, max_bet_other,
		market, diskon_2d, hadiah_2d, diskon_3d, hadiah_3d, 
		diskon_4d, hadiah_4d, diskon_shio, hadiah_shio, 
		diskon_bkgg, hadiah_bkgg, diskon_cb, hadiah_cb, 
		diskon_cm, hadiah_cm, diskon_cj, hadiah_cj, 
		diskon_cn, hadiah_cn, diskon_gp, hadiah_gp, 
		created_by, status, hak_akses, is_logged) 
		VALUES('$username', '$password', '$first_name', 
		'$last_name', $phone, $mobile, $credit, $max_bet, 
		$min_bet, $max_bet_2d, $max_bet_3d, $max_bet_4d, 
		$max_bet_other, '$market', $diskon_2d, $hadiah_2d, 
		$diskon_3d, $hadiah_3d, $diskon_4d, $hadiah_4d, 
		$diskon_shio, $hadiah_shio, $diskon_bkgg, $hadiah_bkgg, 
		$diskon_cb, $hadiah_cb, $diskon_cm, $hadiah_cm, 
		$diskon_cj, $hadiah_cj, $diskon_cn, $hadiah_cn, 
		$diskon_gp, $hadiah_gp, '$created_by', 'Available', 'Agent', 'False')";
$query = mysqli_query($conn, $sql);
if($query){
	echo "
		<script>
			alert('Berhasil mendaftar Member');
			document.location.href = 'index.php';
		</script>
	";
}else{
	echo "
		<script>
			alert('Gagal mendaftar Member');
			document.location.href = 'add_user.php';
		</script>
	";
	echo("Error description: " . mysqli_error($conn));
}

mysqli_close($conn);
?>