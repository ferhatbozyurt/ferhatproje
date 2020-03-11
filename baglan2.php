<?php 

try {

  $db=new PDO("mysql:host=localhost;dbname=ksdtransfer;charset=utf8",'root','Ferhat1907');

  //echo "Veritabanı bağlantısı başarılı";

} catch (PDOExpception $e) {

  echo $e->getMessage();
}


?>