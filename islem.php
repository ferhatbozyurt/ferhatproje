<?php
ob_start();
session_start();

include '../netting/baglan.php';

//aynı klasörde olduğu için bağlanı direk yazdık

 if (isset($_POST['soforgiris'])) {

  $sofor_mail=$_POST['sofor_mail'];

  $sofor_password=$_POST['sofor_password'];

  $soforsor=$db->prepare("SELECT * FROM sofor where sofor_mail=:mail and sofor_password=:password and sofor_yetki=:yetki");
  $soforsor->execute(array(
    'mail' => $sofor_mail,
    'password' => $sofor_password,
    'yetki' => 3
  ));

  echo $say=$soforsor->rowCount();

  if ($say==1) {


    $_SESSION['sofor_mail']=$sofor_mail;
    header("Location:../production/sofor.php");

    exit;


  } else {

    header("Location:../production/login.php?durum=no");

    exit;
  }




}




if (isset($_POST['soforduzenle'])) {

  $sofor_id=$_POST['sofor_id'];

  $ayarkaydet=$db->prepare("UPDATE sofor SET
    sofor_tc=:sofor_tc,
    sofor_ad=:sofor_ad,
    sofor_soyad=:sofor_soyad,
    sofor_plaka=:sofor_plaka,
    sofor_durum=:sofor_durum
    WHERE sofor_id={$_POST['sofor_id']}");

  $update=$ayarkaydet->execute(array(
    'sofor_tc' => $_POST['sofor_tc'],
    'sofor_ad' => $_POST['sofor_ad'],
    'sofor_soyad' => $_POST['sofor_soyad'],
    'sofor_plaka' => $_POST['sofor_plaka'],
    'sofor_durum' => $_POST['sofor_durum']
  ));


  if ($update) {

    Header("Location:../production/sofor-duzenle.php?sofor_id=$sofor_id&durum=ok");

  } else {

    Header("Location:../production/sofor-duzenle.php?sofor_id=$sofor_id&durum=no");
  }

}





?>