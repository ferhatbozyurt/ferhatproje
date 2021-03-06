<?php
ob_start();
session_start();

include '../netting/baglan.php';

//aynı klasörde olduğu için bağlanı direk yazdık

if (isset($_POST['admingiris'])) {

  $kullanici_mail=$_POST['kullanici_mail'];

  $kullanici_password=$_POST['kullanici_password'];

  $kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
  $kullanicisor->execute(array(
    'mail' => $kullanici_mail,
    'password' => $kullanici_password,
    'yetki' => 5
  ));

  echo $say=$kullanicisor->rowCount();

  if ($say==1) {


    $_SESSION['kullanici_mail']=$kullanici_mail;
    header("Location:../production/index.php");

    exit;


  } else {

    header("Location:../production/login.php?durum=no");

    exit;
  }



}


if (isset($_POST['genelayarkaydet'])) {

  //tablo güncelleme işlemleri kodları
  $ayarkaydet=$db->prepare("UPDATE ayar SET 

    ayar_tittle=:ayar_tittle,
    ayar_description=:ayar_description,
    ayar_keywords=:ayar_keywords,
    ayar_author=:ayar_author
    WHERE ayar_id=0");

  $update=$ayarkaydet->execute(array(
    'ayar_tittle' => $_POST['ayar_tittle'],
    'ayar_description' => $_POST['ayar_description'],
    'ayar_keywords' => $_POST['ayar_keywords'],
    'ayar_author' => $_POST['ayar_author']
  ));

  if ($update) {

    header("Location:../production/genel-ayar.php?durum=ok");

  }else {

    header("Location:../production/genel-ayar.php?durum=no");
  }
  
}

if (isset($_POST['iletisimayarkaydet'])) {

  //tablo güncelleme işlemleri kodları
  $ayarkaydet=$db->prepare("UPDATE ayar SET 

    ayar_tel=:ayar_tel,
    ayar_gsm=:ayar_gsm,
    ayar_fax=:ayar_fax,
    ayar_mail=:ayar_mail,
    ayar_ilce=:ayar_ilce,
    ayar_il=:ayar_il,
    ayar_adres=:ayar_adres,
    ayar_mesai=:ayar_mesai


    WHERE ayar_id=0");

  $update=$ayarkaydet->execute(array(
    'ayar_tel' => $_POST['ayar_tel'],
    'ayar_gsm' => $_POST['ayar_gsm'],
    'ayar_fax' => $_POST['ayar_fax'],
    'ayar_mail' => $_POST['ayar_mail'],
    'ayar_ilce' => $_POST['ayar_ilce'],
    'ayar_il' => $_POST['ayar_il'],
    'ayar_adres' => $_POST['ayar_adres'],
    'ayar_mesai' => $_POST['ayar_mesai']
  ));

  if ($update) {

    header("Location:../production/iletisim-ayarlar.php?durum=ok");

  }else {

    header("Location:../production/iletisim-ayarlar.php?durum=no");
  }
  
}

if (isset($_POST['apiayarkaydet'])) {

  //tablo güncelleme işlemleri kodları
  $ayarkaydet=$db->prepare("UPDATE ayar SET 

    ayar_analystic=:ayar_analystic,
    ayar_maps=:ayar_maps,
    ayar_zopim=:ayar_zopim
    WHERE ayar_id=0");

  $update=$ayarkaydet->execute(array(
    'ayar_analystic' => $_POST['ayar_analystic'],
    'ayar_maps' => $_POST['ayar_maps'],
    'ayar_zopim' => $_POST['ayar_zopim']
  ));

  if ($update) {

    header("Location:../production/api-ayarlar.php?durum=ok");

  }else {

    header("Location:../production/api-ayarlar.php?durum=no");
  }
  
}

if (isset($_POST['sosyalayarkaydet'])) {

  //tablo güncelleme işlemleri kodları
  $ayarkaydet=$db->prepare("UPDATE ayar SET 

    ayar_facebook=:ayar_facebook,
    ayar_instagram=:ayar_instagram,
    ayar_google=:ayar_google,
    ayar_twitter=:ayar_twitter
    WHERE ayar_id=0");

  $update=$ayarkaydet->execute(array(
    'ayar_facebook' => $_POST['ayar_facebook'],
    'ayar_instagram' => $_POST['ayar_instagram'],
    'ayar_google' => $_POST['ayar_google'],
    'ayar_twitter' => $_POST['ayar_twitter']
  ));

  if ($update) {

    header("Location:../production/sosyal-ayarlar.php?durum=ok");

  }else {

    header("Location:../production/sosyal-ayarlar.php?durum=no");
  }
  
}

if (isset($_POST['mailayarkaydet'])) {

  //tablo güncelleme işlemleri kodları
  $ayarkaydet=$db->prepare("UPDATE ayar SET 

    ayar_smtphost=:ayar_smtphost,
    ayar_smtpuser=:ayar_smtpuser,
    ayar_smtppassword=:ayar_smtppassword,
    ayar_smptport=:ayar_smptport
    WHERE ayar_id=0");

  $update=$ayarkaydet->execute(array(
    'ayar_smtphost' => $_POST['ayar_smtphost'],
    'ayar_smtpuser' => $_POST['ayar_smtpuser'],
    'ayar_smtppassword' => $_POST['ayar_smtppassword'],
    'ayar_smptport' => $_POST['ayar_smptport']
  ));

  if ($update) {

    header("Location:../production/mail-ayarlar.php?durum=ok");

  }else {

    header("Location:../production/mail-ayarlar.php?durum=no");
  }
  
}


if (isset($_POST['hakkimizdakaydet'])) {

  //tablo güncelleme işlemleri kodları
  $ayarkaydet=$db->prepare("UPDATE hakkimizda SET 

    hakkimizda_baslik=:hakkimizda_baslik,
    hakkimizda_icerik=:hakkimizda_icerik,
    hakkimizda_video=:hakkimizda_video,
    hakkimizda_vizyon=:hakkimizda_vizyon,
    hakkimizda_misyon=:hakkimizda_misyon
    WHERE hakkimizda_id=0");

  $update=$ayarkaydet->execute(array(
    'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
    'hakkimizda_icerik' => $_POST['hakkimizda_icerik'],
    'hakkimizda_video' => $_POST['hakkimizda_video'],
    'hakkimizda_vizyon' => $_POST['hakkimizda_vizyon'],
    'hakkimizda_misyon' => $_POST['hakkimizda_misyon']
  ));

  if ($update) {

    header("Location:../production/hakkimizda.php?durum=ok");

  }else {

    header("Location:../production/hakkimizda.php?durum=no");
  }
  
}


if (isset($_POST['kullaniciduzenle'])) {

  $kullanici_id=$_POST['kullanici_id'];

  $ayarkaydet=$db->prepare("UPDATE kullanici SET
    kullanici_tc=:kullanici_tc,
    kullanici_ad=:kullanici_ad,
    kullanici_soyad=:kullanici_soyad,
    kullanici_durum=:kullanici_durum
    WHERE kullanici_id={$_POST['kullanici_id']}");

  $update=$ayarkaydet->execute(array(
    'kullanici_tc' => $_POST['kullanici_tc'],
    'kullanici_ad' => $_POST['kullanici_ad'],
    'kullanici_soyad' => $_POST['kullanici_soyad'],
    'kullanici_durum' => $_POST['kullanici_durum']
  ));


  if ($update) {

    Header("Location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=ok");

  } else {

    Header("Location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=no");
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