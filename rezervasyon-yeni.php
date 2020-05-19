<!DOCTYPE html PUBLIC >
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Rez Yeni</title>

    <link href="../css/stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="../css/fonts.css" rel="stylesheet" type="text/css" />
    <link href="../css/ie.css" rel="stylesheet" type="text/css" />
    <link href="../css/layout.css" rel="stylesheet" type="text/css" />
    <link href="../css/reset.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../script/jquery_packs/jquery-1.7.1.min.js"></script>	

    <script type="text/javascript" src="../script/lava_lamp/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../script/lava_lamp/jquery.lavalamp.min.js"></script>
    <link type="text/css" href="../script/jquery_packs/jquery-ui-1.8.4.custom.css" rel="stylesheet" />	

</head>
<body>
   
    <div class="main_header_top">
     <div class="header_top">





     </div>
 </div>

</div>
<div class="main_contain">
  <div class="contain">
      <div class="form_top_fo">
        <div class="top_form1">
         <div class="top_text_fo">
             İLETİŞİM BİLGİLERİ <span> &nbsp; </span>
         </div>


         <form id="booking_form" method="post" enctype="multipart/form-data" action="rezislem.php" onsubmit="return hata_goster(); " >

            <div class="list_form_top">
             <div class="list_fo_left">

                <ul>
                 <li class="list_1_fo"> Ad </li>
                 <li class="input_form1"><input type="text" name="cus_name" id="cus_name" value="" /></li>
             </ul>
             <ul>
                 <li class="list_1_fo"> Soyad </li>
                 <li class="input_form1"><input type="text" name="cus_surname" id="cus_surname" value="" /></li>
             </ul>
             <ul>
                 <li class="list_1_fo"> E-mail </li>
                 <li class="input_form1"><input type="text" name="email" id="email" value="" /></li>
             </ul>
             <ul>
                 <li class="list_1_fo"> Telefon </li>
                 <li class="input_form1"><input type="text" name="cus_phone" value="" /></li>
             </ul>
            

         </div>
         <div class="list_fo_left">


            <ul>
             <li class="list_1_fo"> Adres </li>
             <li class="input_form1"><input type="text" name="cus_address" value="" /></li>
         </ul>
         <ul>
             <li class="list_1_fo"> Şehir </li>
             <li class="input_form1"><input type="text" name="cus_city" value="" /></li>
         </ul>
         <ul>
             <li class="list_1_fo"> Posta Kodu </li>
             <li class="input_form1"><input type="text" name="cus_zip_code" value="" /></li>
         </ul>
         <ul>
             <li class="list_1_fo"> Ülke </li>
             <li class="input_form1"><input type="text" name="cus_country" value="" /></li>
         </ul>


     </div>
 </div>
</div>
<div class="top_form1">
 <div class="top_text_fo">
     TRANSFER DETAYLARI <span> &nbsp; </span>
 </div>
 <div class="list_form_top">
     <div class="list_fo_left">
      <ul>
       <li class="list_1_fo"> Transfer Tipi </li>
       <li><select name="transfer_type" id="transfer_type"><option value="tek_yon" >Tek Yön</option><option value="gidis_donus" >Gidiş Dönüş</option></select></li>
   </ul>
   <ul>
     <li class="list_1_fo"> Transfer Tarihi </li>
     <li>
         <div class="form_in_box">
          <div class="date_in_in12">
            <input name="pickup_date" id="pickup_date" class="datepicker" value="" /> 
        </div>
    </div>
</li>
<li class="list_1_fo2">Saat</li>
<li class="form_min_se"><select name="de_time_hour"><option value="">--</option><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option><option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option></select></li>

<li class="form_min_se"><select name="de_time_min"><option value="">--</option><option value="00" selected="selected">00</option><option value="05" >05</option><option value="10" >10</option><option value="15" >15</option><option value="20" >20</option><option value="25" >25</option><option value="30" >30</option><option value="35" >35</option><option value="40" >40</option><option value="45" >45</option><option value="50" >50</option><option value="55" >55</option></select></li>
</ul>
<ul>
 <li class="list_1_fo"> Uçuş numarası </li>
 <li class="input_form1"><input name="flight_number" value="" /></li>
</ul>
<ul>
 <li class="list_1_fo"> Havayolu Şirketi </li>
 <li class="input_form1"><input name="airways" value="" /></li>
</ul>
<ul>
 <li class="list_1_fo"> NEREDEN </li>
 <li class="input_form2"><select name="pick_up_place" id="pick_up_place">
     <option value="">Destinasyon seçiniz</option>
     <option value="Kuşadası Merkez" >Kuşadası Merkez</option> <option value="Kuşadası-Güzelçamlı" >Kuşadası-Güzelçamlı</option> <option value="Kuşadası-Davutlar" >Kuşadası-Davutlar</option> <option value="İzmir Havalimanı" >İzmir Havalimanı (ADB)</option> <option value="İzmir Merkez" >İzmir Merkez</option> <option value="İzmir - Çeşme" >İzmir - Çeşme</option> <option value="İzmir- Özdere" >İzmir- Özdere</option> <option value="Efes-Selçuk" >Efes-Selçuk</option> <option value="Pamukkale" >Pamukkale</option> <option value="Bodrum" >Bodrum</option> <option value="Bodrum Havaalanı" >Bodrum Havaalanı (BJV)</option> <option value="Didim" >Didim</option> <option value="Marmaris" >Marmaris</option> <option value="Fethiye" >Fethiye</option> <option value="Dalaman-Göcek" >Dalaman-Göcek</option> <option value="İstanbul Havalanı" >İstanbul Havalanı(IST)</option> <option value="Antalya Havaalanı" >Antalya Havaalanı (AYT)</option>                             
 </select></li>
 </ul>
 <ul>
     <li class="list_1_fo"> Alış Adresi </li>
     <li class="input_form1"><input name="pick_up_address" value="" /></li>
 </ul>
 <ul>
     <li class="list_1_fo"> NEREYE </li>
     <li class="input_form2"><select name="arrival_place" id="arrival_place">
           <option value="">Destinasyon seçiniz</option>
     <option value="Kuşadası Merkez" >Kuşadası Merkez</option> <option value="Kuşadası-Güzelçamlı" >Kuşadası-Güzelçamlı</option> <option value="Kuşadası-Davutlar" >Kuşadası-Davutlar</option> <option value="İzmir Havalimanı" >İzmir Havalimanı (ADB)</option> <option value="İzmir Merkez" >İzmir Merkez</option> <option value="İzmir - Çeşme" >İzmir - Çeşme</option> <option value="İzmir- Özdere" >İzmir- Özdere</option> <option value="Efes-Selçuk" >Efes-Selçuk</option> <option value="Pamukkale" >Pamukkale</option> <option value="Bodrum" >Bodrum</option> <option value="Bodrum Havaalanı" >Bodrum Havaalanı (BJV)</option> <option value="Didim" >Didim</option> <option value="Marmaris" >Marmaris</option> <option value="Fethiye" >Fethiye</option> <option value="Dalaman-Göcek" >Dalaman-Göcek</option> <option value="İstanbul Havalanı" >İstanbul Havalanı(IST)</option> <option value="Antalya Havaalanı" >Antalya Havaalanı (AYT)</option>                             
 </select></li>
     </ul>
     <ul>
         <li class="list_1_fo"> Varış Adresi </li>
         <li class="input_form1"><input name="drop_off_address" value="" /></li>
     </ul>
 </div>
 <div class="list_fo_left">
     <ul>
      <li class="list_1_fo"> Araç Tipi </li>
      <li class="input_form2"><select name="vehicle_type" id="vehicle_type">
          <option value="BİNEK(1-3)" >BİNEK (1 - 3 pax)</option>
          <option value="SPRİNTER(7-13)" >Mercedes Sprinter (7 - 13 pax)</option>
          <option value="VIP_VITO(1-5)" >VIP Vito (1 - 5 pax)</option>
         
      </select></li>
  </ul>
  <div id="return_place">
     <ul>
         <li class="list_1_fo"> Dönüş Tarihi</li>
         <li>
             <div class="form_in_box">
              <div class="date_in_in12">
                <input name="return_date" id="return_date" class="datepicker" value="" />
            </div>
        </div>
    </li>
    <li class="list_1_fo2">Saat</li>
    <li class="form_min_se"><select name="return_ar_time_hour"><option value="">--</option><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option><option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option></select></li>
    <li class="form_min_se"><select name="return_ar_time_min"><option value="">--</option><option value="00" selected="selected">00</option><option value="05" >05</option><option value="10" >10</option><option value="15" >15</option><option value="20" >20</option><option value="25" >25</option><option value="30" >30</option><option value="35" >35</option><option value="40" >40</option><option value="45" >45</option><option value="50" >50</option><option value="55" >55</option></select></li>
</ul>
<ul>
 <li class="list_1_fo"> Uçuş numarası </li>
 <li class="input_form1"><input name="return_flight_number" value="" /></li>
</ul>
<ul>
 <li class="list_1_fo"> Havayolu Şirketi </li>
 <li class="input_form1"><input name="return_airways" value="" /></li>
</ul>
<ul>
 <li class="list_1_fo"> NEREDEN </li>
 <li class="input_form2"><select name="return_pick_up_place" id="return_pick_up_place">
  <option value="">Destinasyon seçiniz</option>
     <option value="Kuşadası Merkez" >Kuşadası Merkez</option> <option value="Kuşadası-Güzelçamlı" >Kuşadası-Güzelçamlı</option> <option value="Kuşadası-Davutlar" >Kuşadası-Davutlar</option> <option value="İzmir Havalimanı" >İzmir Havalimanı (ADB)</option> <option value="İzmir Merkez" >İzmir Merkez</option> <option value="İzmir - Çeşme" >İzmir - Çeşme</option> <option value="İzmir- Özdere" >İzmir- Özdere</option> <option value="Efes-Selçuk" >Efes-Selçuk</option> <option value="Pamukkale" >Pamukkale</option> <option value="Bodrum" >Bodrum</option> <option value="Bodrum Havaalanı" >Bodrum Havaalanı (BJV)</option> <option value="Didim" >Didim</option> <option value="Marmariss" >Marmaris</option> <option value="Fethiye" >Fethiye</option> <option value="Dalaman-Göcek" >Dalaman-Göcek</option> <option value="İstanbul Havalanı" >İstanbul Havalanı(IST)</option> <option value="Antalya Havaalanı" >Antalya Havaalanı (AYT)</option>                             
 </select></li>
 </ul>
 <ul>
     <li class="list_1_fo"> Alış Adresi</li>
     <li class="input_form1"><input name="return_pick_up_address" value="" /></li>
 </ul>
 <ul>
     <li class="list_1_fo"> NEREYE</li>
     <li class="input_form2"><select name="return_arrival_place" id="return_arrival_place">
         <option value="">Destinasyon seçiniz</option>
     <option value="Kuşadası Merkez" >Kuşadası Merkez</option> <option value="Kuşadası-Güzelçamlı" >Kuşadası-Güzelçamlı</option> <option value="Kuşadası-Davutlar" >Kuşadası-Davutlar</option> <option value="İzmir Havalimanı" >İzmir Havalimanı (ADB)</option> <option value="İzmir Merkez" >İzmir Merkez</option> <option value="İzmir - Çeşme" >İzmir - Çeşme</option> <option value="İzmir- Özdere" >İzmir- Özdere</option> <option value="Efes-Selçuk" >Efes-Selçuk</option> <option value="Pamukkale" >Pamukkale</option> <option value="Bodrum" >Bodrum</option> <option value="Bodrum Havaalanı" >Bodrum Havaalanı (BJV)</option> <option value="Didim" >Didim</option> <option value="Marmaris" >Marmaris</option> <option value="Fethiye" >Fethiye</option> <option value="Dalaman-Göcek" >Dalaman-Göcek</option> <option value="İstanbul Havalanı" >İstanbul Havalanı(IST)</option> <option value="Antalya Havaalanı" >Antalya Havaalanı (AYT)</option>                             
 </select></li>
     </ul>
     <ul>
         <li class="list_1_fo"> Varış Adresi </li>
         <li class="input_form1"><input name="return_drop_off_address" value="" /></li>
     </ul>
 </div>
</div>
</div>
</div>
<div class="top_form1">
 <div class="top_text_fo">
     YOLCULAR &amp; ARAÇ DETAYLARI <span class="border_fo"> &nbsp; </span>
 </div>
 <div class="list_form_top">
     <div class="list_fo_left">
         <ul>
             <li class="list_1_fo"> YOLCULAR </li>
             <li class="list_1_fo_fo">Yetişkin</li>
             <li class="form_min_se"><select name="adult_num" id="adult_num"><option value="0" selected="selected">0</option><option value="1" >1</option><option value="2" >2</option><option value="3" >3</option><option value="4" >4</option><option value="5" >5</option><option value="6" >6</option><option value="7" >7</option><option value="8" >8</option><option value="9" >9</option></select></li>
             <li class="list_1_fo_fo">Çocuk</li>
             <li class="form_min_se"><select name="child_num" id="child_num"><option value="0" selected="selected">0</option><option value="1" >1</option><option value="2" >2</option><option value="3" >3</option><option value="4" >4</option><option value="5" >5</option><option value="6" >6</option><option value="7" >7</option><option value="8" >8</option><option value="9" >9</option></select></li>
           
         </ul>
         <ul>
             <li class="list_1_fo"> Para Birimi </li>
             <li><select><option>TL</option><option>DOLAR</option><option>EURO</option></select></li>

         </ul>
         <div class="form_bot_at">
          <div class="bot1_at">
             
              <input id="num1" value="5" type="hidden" name="num1">
              <input id="num2" value="5" type="hidden" name="num2"><br />
              <div class="box2_at">5+5 = <input type="number" id="solve_this" name="solve_this" style="width:60px;" /></div>
          </div>                        
      </div>
  </div>
  <div class="list_fo_left">
    <ul>
     <li class="list_1_fo"> NOTUNUZ </li>
     <li class="input_form_te"><textarea rows="5" cols="5" name="notes"></textarea></li>
 </ul>
</div>
</div>
</div>
<div class="form_last">
 <div class="left_form_last">
  <div class="price_form">TOTAL FİYAT <span id="total_price"> 0 </span></div>

</div>

<div class="left_form_last1">
 <div class="check_fo" id="kiralama_sartlari_back">
     <input type="checkbox" name="kiralama_sartlari" id="kiralama_sartlari" value="1" />Transfer şartlarını okudum,kabul ettim.</a>
 </div>


 <input type="submit" id="submit_button" class="button_form" name="submit2" value="Rezervasyon Yap" />

 <input type="hidden" name="submit_form" value="done"  />
 <input type="hidden" name="price" id="price_result" value="" />

</div>
</div>

</div>
</form>

</div>
</div>




<?php 

include 'rezervasyon-yeni-script.php';

//BELİRLİ VERİYİ ÇEKME İŞLEMİ




?>


</body>

</html>

