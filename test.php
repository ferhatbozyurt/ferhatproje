<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"/>
	<title>üye kayıt</title>
</head>
<body>
	
		<form action="islem.php" method="POST" >
			<table>
				<tr>
					<td>Kullanıcı adı:</td>
					<td><input type="text" name="k_adi"></td>
				</tr>
				<tr>
					<td>Sifre:</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td>Mail Adresi:</td>
					<td><input type="email" name="mail"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="insertislemi" value="Kayıt Ol"></td>
				</tr>


			</table>



		</form> 

	
</body>
</html>

