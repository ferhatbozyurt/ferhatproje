
<?php

require_once 'rezbaglan.php';

if(isset($_POST['submit2'])){
	

	$kaydet=$db->prepare("INSERT INTO rezervasyon set

		
		cus_name=:cus_name,
		cus_surname=:cus_surname,
		email=:email,
		cus_phone=:cus_phone,
		cus_address=:cus_address,
		cus_city=:cus_city,
		cus_zip_code=:cus_zip_code,
		cus_country=:cus_country,
		transfer_type=:transfer_type,
		pickup_date=:pickup_date,
		de_time_hour=:de_time_hour,
		de_time_min=:de_time_min,
		pick_up_place=:pick_up_place,
		arrival_place=:arrival_place,
		vehicle_type=:vehicle_type,
		return_date=:return_date,
		return_ar_time_hour=:return_ar_time_hour,
		return_ar_time_min=:return_ar_time_min,
		return_pick_up_place=:return_pick_up_place,
		return_arrival_place=:return_arrival_place,
		adult_num=:adult_num,
		child_num=:child_num
		

		");

	$insert=$kaydet->execute(array(

		'cus_name' => $_POST['cus_name'],
		'cus_surname' => $_POST['cus_surname'],
		'email' => $_POST['email'],
		'cus_phone' => $_POST['cus_phone'],
		'cus_address' => $_POST['cus_address'],
		'cus_city' => $_POST['cus_city'],
		'cus_zip_code' => $_POST['cus_zip_code'],
		'cus_country' => $_POST['cus_country'],
		'transfer_type' => $_POST['transfer_type'],
		'pickup_date' => $_POST['pickup_date'],
		'de_time_hour' => $_POST['de_time_hour'],
		'de_time_min' => $_POST['de_time_min'],
		'pick_up_place' => $_POST['pick_up_place'],
		'arrival_place' => $_POST['arrival_place'],
		'vehicle_type' => $_POST['vehicle_type'],
		'return_date' => $_POST['return_date'],
		'return_ar_time_hour' => $_POST['return_ar_time_hour'],
		'return_ar_time_min' => $_POST['return_ar_time_min'],
		'return_pick_up_place' => $_POST['return_pick_up_place'],
		'return_arrival_place' => $_POST['return_arrival_place'],
		'adult_num' => $_POST['adult_num'],
		'child_num' => $_POST['child_num'],


		


		
		

		



	));


	if ($insert) {

			//echo "kayıt başarılı";

		Header("Location:../rezervasyon-yeni.php?durum=ok");
		exit;

	}else {

			//echo "kayıt başarısız";
		Header("Location:../rezervasyon-yeni.php?durum=no");
		exit;
	}



}





?>
