<?php include 'cek_session.php';
include '../koneksi.php'; ?>
<html>
<head>
    <title>FORM AGENT</title>
</head>
<body>
<header>
    <h1>User Information</h1>
</header>
    <form action="add_user.php" method="post">
		<?php
		$query = "SELECT * FROM tb_user WHERE username = '$_SESSION[username]'";
		$sql = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($sql);
		?>
		<table>
			<tr>
				<td>
					<label for="username">Username : </label>
					<input type="text" name="username_awal" id="username_awal" value="<?php echo $row['username']; ?>" disabled>
					<input type="text" name="username" id="username" required>
					<button type="submit" name="check">Check Availability</button>
				</td>
			</tr>
			<tr>
				<td>
					<label for="password">Password : </label>
					<input type="password" name="password" id="password" required>
				</td>
			</tr>
			<tr>
				<td>
					<label for="first_name">First Name : </label>
					<input type="text" name="first_name" id="first_name" required>
				</td>
			</tr>
			<tr>
				<td>
					<label for="last_name">Last Name : </label>
					<input type="text" name="last_name" id="last_name" required>
				</td>
			</tr>
			<tr>
				<td>
					<label for="phone">Phone : </label>
					<input type="text" name="phone" id="phone" required>
				</td>
			</tr>   
			<tr>
				<td>
					<label for="mobile">Mobile : </label>
					<input type="text" name="mobile" id="mobile">
				</td>
			</tr>  
		</table>
			
		<h1>Max Credit/Min Max/EM</h1>
		<table>
			<tr> 
				<td>
					<label for="credit">Credit : </label>
					<input type="credit" name="credit" id="credit" required> Max Credit = <?php echo $row['credit']; ?>
				</td>
			</tr>
			<tr> 
				<td>
					<label for="max_bet">Max Bet : </label>
					<input type="max_bet" name="max_bet" id="max_bet" required> Max Bet = <?php echo $row['max_bet']; ?>
				</td>
			</tr>
			<tr> 
				<td>
					<label for="min_bet">Min Bet : </label>
					<input type="min_bet" name="min_bet" id="min_bet" required> Min Bet = <?php echo $row['min_bet']; ?>
				</td>
			</tr>
			<tr> 
				<td>
					<label for="max_bet_2d">Max Bet 2d : </label>
					<input type="max_bet_2d" name="max_bet_2d" id="max_bet_2d" required> Max Bet 2d = <?php echo $row['max_bet_2d']; ?>
				</td>
			</tr>
			<tr> 
				<td>
					<label for="max_bet_3d">Max Bet 3d : </label>
					<input type="max_bet_3d" name="max_bet_3d" id="max_bet_3d" required> Max Bet 3d = <?php echo $row['max_bet_3d']; ?>
				</td>
			</tr><tr> 
				<td>
					<label for="max_bet_4d">Max Bet 4d : </label>
					<input type="max_bet_4d" name="max_bet_4d" id="max_bet_4d" required> Max Bet 4d = <?php echo $row['max_bet_4d']; ?>
				</td>
			</tr>
			<tr> 
				<td>
					<label for="max_bet_other">Max Bet Other : </label>
					<input type="max_bet_other" name="max_bet_other" id="max_bet_other" required> Max Bet Other = <?php echo $row['max_bet_other']; ?>
				</td>
			</tr>
		</table>
				
		<h1>MARKET</h1>
		<table>
			<tr> 
				<td>
					<input type="radio" name="market" id="market" value="A" checked>A<br>
				</td>
			</tr>
			<tr> 
				<td>
					<input type="radio" name="market" id="market" value="B">B<br> 
				</td>
			</tr> 	
		</table>
		
		<h1>DISKON & HADIAH</h1>
		<table>
			<tr>
				<td>
					Diskon & Hadiah<br>
					<label for="2d">2d</label>
					<input type="text" name="diskon_2d" id="diskon_2d" required> X
					<input type="text" name="hadiah_2d" id="hadiah_2d" placeholder="Hadiah 2D" required> 
				</td>
			</tr> 
			<tr>
				<td>
					<label for="3d">3d</label>
					<input type="text" name="diskon_3d" id="diskon_3d" required> X
					<input type="text" name="hadiah_3d" id="hadiah_3d" placeholder="Hadiah 3D" required>
				</td>
			</tr> 
			<tr>
				<td>
					<label for="4d">4d</label>
					<input type="text" name="diskon_4d" id="diskon_4d" required> X
					<input type="text" name="hadiah_4d" id="hadiah_4d" placeholder="Hadiah 4D" required>
				</td>
			</tr> 
			<tr>
				<td>
					Diskon & Hadiah<br>
					<label for="shio">Shio</label>
					<input type="text" name="diskon_shio" id="diskon_shio" required> X
					<input type="text" name="hadiah_shio" id="hadiah_shio" placeholder="Hadiah shio" required>
				</td>
			</tr> 
			<tr>
				<td>
					<label for="bkgg">BK/GG</label>
					<input type="text" name="diskon_bkgg" id="diskon_bkgg" required> X
					<input type="text" name="hadiah_bkgg" id="hadiah_bkgg" placeholder="Hadiah BK/GG" required>
				</td>
			</tr> 
			<tr>
				<td>
					<label for="cb">CB</label>
					<input type="text" name="diskon_cb" id="diskon_cb" required> X 
					<input type="text" name="hadiah_cb" id="hadiah_cb" placeholder="Hadiah CB" required>
				</td>
			</tr> 
			<tr>
				<td>
					<label for="cm">CM</label>
					<input type="text" name="diskon_cm" id="diskon_cm" required> X
					<input type="text" name="hadiah_cm" id="hadiah_cm" placeholder="Hadiah CM" required>
				</td>
			</tr>
			<tr>
				<td>
					<label for="cj">CJ</label>
					<input type="text" name="diskon_cj" id="diskon_cj" required> X
					<input type="text" name="hadiah_cj" id="hadiah_cj" placeholder="Hadiah CJ" required>
				</td>
			</tr>
			<tr>
				<td>
					<label for="cn">CN</label>
					<input type="text" name="diskon_cn" id="diskon_cn" required> X
					<input type="text" name="hadiah_cn" id="hadiah_cn" placeholder="Hadiah CN" required>
				</td>
			</tr>
			<tr>
				<td>
					<label for="gp">GP</label>
					<input type="text" name="diskon_gp" id="diskon_gp" placeholder="Diskon GP" required> X
					<input type="text" name="hadiah_gp" id="hadiah_gp" placeholder="Hadiah GP" required>
				</td>
			</tr>
		</table><br>
		<button type="submit" name="submit">Tambah USER</button><br><br>
		<a href="index.php">Kembali ke halaman awal</a>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
	$username = $_SESSION['username'] . $_POST['username'];
	$password = $_POST['password'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$phone = $_POST['phone'];
	$mobile = $_POST['mobile'];
	$credit = $_POST['credit'];
	$max_bet = $_POST['max_bet'];
	$min_bet = $_POST['min_bet'];
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
			'$last_name', '$phone', '$mobile', '$credit', '$max_bet', 
			'$min_bet', $max_bet_2d', $max_bet_3d', $max_bet_4d', 
			'$max_bet_other', '$market', '$diskon_2d', '$hadiah_2d', 
			'$diskon_3d', '$hadiah_3d', '$diskon_4d', '$hadiah_4d', 
			'$diskon_shio', '$hadiah_shio', '$diskon_bkgg', '$hadiah_bkgg', 
			'$diskon_cb', '$hadiah_cb', '$diskon_cm', '$hadiah_cm', 
			'$diskon_cj', '$hadiah_cj', '$diskon_cn', '$hadiah_cn', 
			'$diskon_gp', '$hadiah_gp', '$created_by', 'Available', 'Member', 'False')";
	$query = mysqli_query($conn, $sql);
	
	$sql_cek = "SELECT * FROM tb_user WHERE username = '$_SESSION[username]'";
	$query_cek = mysqli_query($conn, $sql_cek);
	$row_cek = mysqli_fetch_array($query_cek);
	if($row_cek['credit'] < $credit){
		echo "
			<script>
				alert('Credit tidak cukup');
			</script>
		";
	}else if($row_cek['max_bet'] < $max_bet){
		echo "
			<script>
				alert('Max bet tidak cukup');
			</script>
		";
	}else if($row_cek['min_bet'] < $min_bet){
		echo "
			<script>
				alert('Min bet tidak cukup');
			</script>
		";
	}else if($row_cek['max_bet_2d'] < $max_bet_2d){
		echo "
			<script>
				alert('Max bet 2d tidak cukup');
			</script>
		";
	}else if($row_cek['max_bet_3d'] < $max_bet_3d){
		echo "
			<script>
				alert('Max bet 3d tidak cukup');
			</script>
		";	
	}else if($row_cek['max_bet_4d'] < $max_bet_4d){
		echo "
			<script>
				alert('Max bet 4d tidak cukup');
			</script>
		";
	}else if($row_cek['max_bet_other'] < $max_bet_other){
		echo "
			<script>
				alert('Max bet other tidak cukup');
			</script>
		";
	}else if($row_cek['diskon_2d'] < $diskon_2d){
		echo "
			<script>
				alert('Diskon 2d tidak cukup');
			</script>
		";
	}else if($row_cek['hadiah_2d'] < $hadiah_2d){
		echo "
			<script>
				alert('Hadiah 2d tidak cukup');
			</script>
		";
	}else if($row_cek['diskon_3d'] < $diskon_3d){
		echo "
			<script>
				alert('Diskon 3d tidak cukup');
			</script>
		";
	}else if($row_cek['hadiah_3d'] < $hadiah_3d){
		echo "
			<script>
				alert('Hadiah 3d tidak cukup');
			</script>
		";
	}else if($row_cek['diskon_4d'] < $diskon_4d){
		echo "
			<script>
				alert('Diskon 4d tidak cukup');
			</script>
		";
	}else if($row_cek['hadiah_4d'] < $hadiah_4d){
		echo "
			<script>
				alert('Hadiah 4d tidak cukup');
			</script>
		";
	}else if($row_cek['diskon_shio'] < $diskon_shio){
		echo "
			<script>
				alert('Diskon shio tidak cukup');
			</script>
		";
	}else if($row_cek['hadiah_shio'] < $hadiah_shio){
		echo "
			<script>
				alert('Hadiah shio tidak cukup');
			</script>
		";
	}else if($row_cek['diskon_bkgg'] < $diskon_bkgg){
		echo "
			<script>
				alert('Diskon bkgg tidak cukup');
			</script>
		";
	}else if($row_cek['hadiah_bkgg'] < $hadiah_bkgg){
		echo "
			<script>
				alert('Hadiah bkgg tidak cukup');
			</script>
		";
	}else if($row_cek['diskon_cb'] < $diskon_cb){
		echo "
			<script>
				alert('Diskon cb tidak cukup');
			</script>
		";
	}else if($row_cek['hadiah_cb'] < $hadiah_cb){
		echo "
			<script>
				alert('Hadiah cb tidak cukup');
			</script>
		";
	}else if($row_cek['diskon_cm'] < $diskon_cm){
		echo "
			<script>
				alert('Diskon cm tidak cukup');
			</script>
		";
	}else if($row_cek['hadiah_cm'] < $hadiah_cm){
		echo "
			<script>
				alert('Hadiah cm tidak cukup');
			</script>
		";
	}else if($row_cek['diskon_cj'] < $diskon_cj){
		echo "
			<script>
				alert('Diskon cj tidak cukup');
			</script>
		";
	}else if($row_cek['hadiah_cj'] < $hadiah_cj){
		echo "
			<script>
				alert('Hadiah cj tidak cukup');
			</script>
		";
	}else if($row_cek['diskon_cn'] < $diskon_cn){
		echo "
			<script>
				alert('Diskon cn tidak cukup');
			</script>
		";
	}else if($row_cek['hadiah_cn'] < $hadiah_cn){
		echo "
			<script>
				alert('Hadiah cn tidak cukup');
			</script>
		";
	}else if($row_cek['diskon_gp'] < $diskon_gp){
		echo "
			<script>
				alert('Diskon gp tidak cukup');
			</script>
		";
	}else if($row_cek['hadiah_gp'] < $hadiah_gp){
		echo "
			<script>
				alert('Hadiah gp tidak cukup');
			</script>
		";
	}else{
		if($query){
			echo "
				<script>
					alert('Berhasil mendaftar Member');
					document.location.href = 'list_user.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Gagal mendaftar Member');
				</script>
			";
		}
	}
}
mysqli_close($conn);
?>