<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"/>
	<title>üye kayıt</title>
</head>
<body>
	

		<h1>KULLANICI KAYIT</h1>
		<hr>
		<?php
		if ($_GET['durum']=="ok") {

			echo "işlem başarılı";
			# code...
		} elseif ($_GET['durum']=="no") {

			echo "İşlem başarısız";
			# code...
		}



		?>




		<form action="kullaniciislem.php" method="POST" >
			<table>
				<tr>
					<td>Adi:</td>
					<td><input type="text" name="kadi"></td>
				</tr>
				<tr>
					<td>Soyadi:</td>
					<td><input type="text" name="ksoyadi"></td>
				</tr>
				<tr>
					<td>Sifre:</td>
					<td><input type="password" name="ksifre"></td>
				</tr>
				<tr>
					<td>Mail Adresi:</td>
					<td><input type="email" name="kmail"></td>
				</tr>
				<tr>
					<td>Telefon:</td>
					<td><input type="text" name="ktel"></td>
				</tr>
				<tr>
					<td>Ulke:</td>
					<td><input type="text" name="kulke"></td>
				</tr>
				<tr>
					<td>Adres:</td>
					<td><input type="text" name="kadres"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="kullaniciinsert" value="Kayıt Ol"></td>
				</tr>


			</table>



		</form> 
		
	
</body>
</html>