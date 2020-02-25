<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"/>
	<title>üye kayıt</title>
</head>
<body>
	
		<form action="soforislem.php" method="POST" >
			<table>
				<tr>
					<td>sofor adı:</td>
					<td><input type="text" name="sadi"></td>
				</tr>
				<tr>
					<td>sofor soyadi:</td>
					<td><input type="text" name="ssoyadi"></td>
				</tr>
				<tr>
					<td>Sifre:</td>
					<td><input type="password" name="ssifre"></td>
				</tr>
				<tr>
					<td>Mail Adresi:</td>
					<td><input type="email" name="smail"></td>
				</tr>
				<tr>
					<td>telefon no:</td>
					<td><input type="text" name="stel"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="soforinsert" value="Kayıt Ol"></td>
				</tr>


			</table>



		</form> 
		
	
</body>
</html>