<?php

require_once 'baglan.php';

if(isset($_POST['insertislemi'])){
	

	$kaydet=$db->prepare("INSERT INTO uyeler set

		k_adi=:k_adi,
		pass=:pass,
		mail=:mail");

		$insert=$kaydet->execute(array(

			'k_adi' => $_POST['k_adi'],
			'pass' => $_POST['pass'],
			'mail' => $_POST['mail']));



}



?>