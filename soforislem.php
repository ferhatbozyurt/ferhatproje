<?php

require_once 'soforbaglan.php';

if(isset($_POST['soforinsert'])){
	

	$kaydet=$db->prepare("INSERT INTO soforler set

		sadi=:sadi,
		ssoyadi=:ssoyadi,
		ssifre=:ssifre,
		smail=:smail,
		stel=:stel");

		$insert=$kaydet->execute(array(

			'sadi' => $_POST['sadi'],
			'ssoyadi'=> $_POST['ssoyadi'],
			'ssifre' => $_POST['ssifre'],
			'smail' => $_POST['smail'],
			'stel' => $_POST['stel'],
		));



}



?>