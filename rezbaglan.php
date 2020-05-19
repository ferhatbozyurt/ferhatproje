<?php

try {
	

	$db=new PDO("mysql:host=localhost;dbname=ksdtransfer;charset=utf8",'root','Ferhat1907');

	//echo "Veri tabanı bağlandı";
}catch (PDOexception $e) {

	echo $e->getMessage();

}




?>