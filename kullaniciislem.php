<?php

require_once 'kullanicibaglan.php';

if(isset($_POST['kullaniciinsert'])){
	

	$kaydet=$db->prepare("INSERT INTO kullanicilar set

		kadi=:kadi,
		ksoyadi=:ksoyadi,
		ksifre=:ksifre,
		kmail=:kmail,
		ktel=:ktel,
		kulke=:kulke,
		kadres=:kadres");

		$insert=$kaydet->execute(array(

			'kadi' => $_POST['kadi'],
			'ksoyadi'=> $_POST['ksoyadi'],
			'ksifre' => $_POST['ksifre'],
			'kmail' => $_POST['kmail'],
			'ktel' => $_POST['ktel'],
			'kulke' => $_POST['kulke'],
			'kadres' => $_POST['kadres'],
		));


		if ($insert) {

			//echo "kayıt başarılı";

			Header("Location:../kullanicikayit.php?durum=ok");
			exit;
			
		}else {

			//echo "kayıt başarısız";
			Header("Location:../kullanicikayit.php?durum=no");
			exit;
		}



}



?>