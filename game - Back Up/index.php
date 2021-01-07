<?php include 'cek_session.php'; ?>
<html>
<head>
    <title>FORM LOGIN</title>
</head>
<body>
    <h1>SILAHKAN MASUK</h1>
    <form action="login.php" method="post">
		<table>        
			<tr>
				<td>
					<label for="username">Username : </label>
					<input type="text" name="username" id="username">
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
					<button type="submit" name="submit">LOGIN</button>
				</td>
			</tr>
		</table>
    </form>
</body>
</html>