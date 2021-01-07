<html>
<head>
    <title>FORM MASTER AGENT</title>
</head>
<body>
    <h1>User Information</h1>
    <form action="proses_add_user.php" method="post">
		<table>        
			<tr>
				<td>
					<label for="username">Username : </label>
					<input type="text" name="username" id="username">
					<button type="submit" name="check">Check Availability</button>
				</td>
			</tr>
			<tr> 
				<td>
					<label for="password">Password : </label>
					<input type="password" name="password" id="password">
				</td>
			</tr>
			<tr> 
				<td>
					<label for="first_name">First Name : </label>
					<input type="text" name="first_name" id="first_name">
				</td>
			</tr>
			<tr>
				<td>
					<label for="last_name">Last Name : </label>
					<input type="text" name="last_name" id="last_name">
				</td>
			</tr>
			<tr>
				<td>
					<label for="phone">Phone : </label>
					<input type="text" name="phone" id="phone">
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
					<input type="credit" name="credit" id="credit">
				</td>
			</tr>
			<tr> 
				<td>
					<label for="max_bet">Max Bet : </label>
					<input type="max_bet" name="max_bet" id="max_bet">
				</td>
			</tr>
			<tr> 
				<td>
					<label for="min_bet">Min Bet : </label>
					<input type="min_bet" name="min_bet" id="min_bet">
				</td>
			</tr>
			<tr> 
				<td>
					<label for="max_bet_2d">Max Bet 2d : </label>
					<input type="max_bet_2d" name="max_bet_2d" id="max_bet_2d">
				</td>
			</tr>
			<tr> 
				<td>
					<label for="max_bet_3d">Max Bet 3d : </label>
					<input type="max_bet_3d" name="max_bet_3d" id="max_bet_3d">
				</td>
			</tr><tr> 
				<td>
					<label for="max_bet_4d">Max Bet 4d : </label>
					<input type="max_bet_4d" name="max_bet_4d" id="max_bet_4d">
				</td>
			</tr>
			<tr> 
				<td>
					<label for="max_bet_other">Max Bet Other : </label>
					<input type="max_bet_other" name="max_bet_other" id="max_bet_other">
				</td>
			</tr>
		</table>
				
		<h1>MARKET</h1>
		<table>
			<tr> 
				<td>
					<input type="radio" name="market" id="market" value="A">A<br>
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
					<input type="text" name="diskon_2d" id="diskon_2d"> X
					<input type="text" name="hadiah_2d" id="hadiah_2d" placeholder="Hadiah 2D"> 
				</td>
			</tr> 
			<tr>
				<td>
					<label for="3d">3d</label>
					<input type="text" name="diskon_3d" id="diskon_3d"> X
					<input type="text" name="hadiah_3d" id="hadiah_3d" placeholder="Hadiah 3D">
				</td>
			</tr> 
			<tr>
				<td>
					<label for="4d">4d</label>
					<input type="text" name="diskon_4d" id="diskon_4d"> X
					<input type="text" name="hadiah_4d" id="hadiah_4d" placeholder="Hadiah 4D">
				</td>
			</tr> 
			<tr>
				<td>
					Diskon & Hadiah<br>
					<label for="shio">Shio</label>
					<input type="text" name="diskon_shio" id="diskon_shio"> X
					<input type="text" name="hadiah_shio" id="hadiah_shio" placeholder="Hadiah shio">
				</td>
			</tr> 
			<tr>
				<td>
					<label for="bkgg">BK/GG</label>
					<input type="text" name="diskon_bkgg" id="diskon_bkgg"> X
					<input type="text" name="hadiah_bkgg" id="hadiah_bkgg" placeholder="Hadiah BK/GG">
				</td>
			</tr> 
			<tr>
				<td>
					<label for="cb">CB</label>
					<input type="text" name="diskon_cb" id="diskon_cb"> X 
					<input type="text" name="hadiah_cb" id="hadiah_cb" placeholder="Hadiah CB">
				</td>
			</tr> 
			<tr>
				<td>
					<label for="cm">CM</label>
					<input type="text" name="diskon_cm" id="diskon_cm"> X
					<input type="text" name="hadiah_cm" id="hadiah_cm" placeholder="Hadiah CM">
				</td>
			</tr>
			<tr>
				<td>
					<label for="cj">CJ</label>
					<input type="text" name="diskon_cj" id="diskon_cj"> X
					<input type="text" name="hadiah_cj" id="hadiah_cj" placeholder="Hadiah CJ">
				</td>
			</tr>
			<tr>
				<td>
					<label for="cn">CN</label>
					<input type="text" name="diskon_cn" id="diskon_cn" > X
					<input type="text" name="hadiah_cn" id="hadiah_cn" placeholder="Hadiah CN">
				</td>
			</tr>
			<tr>
				<td>
					<label for="gp">GP</label>
					<input type="text" name="diskon_gp" id="diskon_gp" placeholder="Diskon GP"> X
					<input type="text" name="hadiah_gp" id="hadiah_gp" placeholder="Hadiah GP">
				</td>
			</tr>
		</table><br>
		<button type="submit" name="submit">Tambah USER</button><br><br>
		<a href="index.php">Kembali ke halaman awal</a>
    </form>
</body>
</html>

