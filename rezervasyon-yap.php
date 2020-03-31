<!DOCTYPE html>
<html lang="tr">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	
	<title>Ana Sayfa - Kuşadası Transfer</title>


	<!-- REZERVASYON KISMI -->
	<link rel='stylesheet' id='transfers-font-style-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7CRaleway%3A400%2C500%2C600%2C700&amp;subset=latin%2Clatin-ext&amp;ver=5.3.2' type='text/css' media='all' />
	<link rel='stylesheet' id='transfers-style-main-css'  href='wp-content/themes/Transfers/css/style5152.css?ver=1.0' type='text/css' media='all' />
	<link rel='stylesheet' id='transfers-style-css'  href='wp-content/themes/Transfers/style5152.css?ver=1.0' type='text/css' media='all' />
	<link rel='stylesheet' id='transfers-style-ui-css'  href='wp-content/themes/Transfers/css/jquery-ui.theme.min5152.css?ver=1.0' type='text/css' media='all' />
	<link rel='stylesheet' id='transfers-fonts-css'  href='wp-content/themes/Transfers/css/fonts5152.css?ver=1.0' type='text/css' media='all' />
	<link rel='stylesheet' id='transfers-style-color-css'  href='wp-content/themes/Transfers/css/theme-dblue5152.css?ver=1.0' type='text/css' media='all' />

	<script type='text/javascript' src='wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
	<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/revolution.tools.minf049.js?ver=6.0'></script>
	<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/rs6.minb5e1.js?ver=6.1.5'></script>
	<link rel='https://api.w.org/' href='wp-json/index.html' />

	

</head>  
<body class="home page-template page-template-page_home page-template-page_home-php page page-id-30 theme-Transfers woocommerce-no-js">
	

	<!-- Main -->
	<main class="main " role="main">	<!--- Content -->
		<div class="full-width">
			<section class="home-content-sidebar">
				<ul>
					<li class="widget widget-sidebar transfers_hero_unit_widget">		
					</li><li class="widget widget-sidebar transfers_advanced_search_widget">		<!-- Advanced search -->
						<div class="advanced-search color" id="booking">
							<div class="wrap">
								<form role="form" action="rezervasyon-yap.php" method="get">
									<!-- Row -->
									<div class="f-row">
										<div class="form-group datepicker one-third">
											<label for="departure-date">Gidiş Tarihi ve Saat</label>
											<input type="text" class="departure-date" id="departure-date">
											<input type="hidden" name="dep" id="dep" value="2020-03-29 16:40" />
											<script>
												window.datepickerDepartureDateValue = '2020-03-29 16:40';
											</script>
										</div>
										<div class="form-group select one-third">
											<label>Nereden</label>
											<select id="pickup1" name="p1">
												<option value="">Alınma Noktası</option>
												<optgroup label="Aydın">
													<option value="528">Didim</option>
													<option value="524">Kuşadası</option>
													<option value="525">Kuşadası (Davutlar)</option>
													<option value="526">Kuşadası (Güzelçamlı)</option>
													<option value="527">Söke</option>
												</optgroup>
												<optgroup label="İzmir">
													<option value="297">Adnan Menderes Havalimanı</option>
													<option value="512">Çeşme</option>
												</optgroup>
												<optgroup label="Manisa">
													<option value="533">Manisa (Merkez)</option>
												</optgroup></select>						
											</div>
											<div class="form-group select one-third">
												<label>Nereye</label>
												<select id="dropoff1" name="d1">
													<option value="">Varış Noktası</option>
													<optgroup label="Aydın">
														<option value="528">Didim</option>
														<option value="524">Kuşadası</option>
														<option value="525">Kuşadası (Davutlar)</option>
														<option value="526">Kuşadası (Güzelçamlı)</option>
														<option value="527">Söke</option>
													</optgroup>
													<optgroup label="İzmir">
														<option value="297">Adnan Menderes Havalimanı</option>
														<option value="512">Çeşme</option>
													</optgroup><optgroup label="Manisa">
														<option value="533">Manisa (Merkez)</option>
													</optgroup>
												</select>						
											</div>
										</div>

										<div class="f-row"  style="display: none;">
											<div class="form-group datepicker one-third">
												<label for="return-date">Dönüş Tarihi ve Saat</label>
												<input type="text" class="return-date" id="return-date"  disabled>
												<input type="hidden" name="ret" id="ret"  disabled value="" />
											</div>
											<div class="form-group select one-third">
												<label>Nereden</label>
												<select id="pickup2" name="p2">
													<option value="">Alınma Noktası</option>
													<optgroup label="Aydın">
														<option value="528">Didim</option>
														<option value="524">Kuşadası</option>
														<option value="525">Kuşadası (Davutlar)</option>
														<option value="526">Kuşadası (Güzelçamlı)</option>
														<option value="527">Söke</option>
													</optgroup>
													<optgroup label="İzmir">
														<option value="297">Adnan Menderes Havalimanı</option>
														<option value="512">Çeşme</option>
													</optgroup>
													<optgroup label="Manisa">
														<option value="533">Manisa (Merkez)</option>
													</optgroup>
												</select>				
											</div>
											<div class="form-group select one-third">
												<label>Nereye</label>
												<select id="dropoff2" name="d2">
													<option value="">Varış Noktası</option>
													<optgroup label="Aydın">
														<option value="528">Didim</option>
														<option value="524">Kuşadası</option>
														<option value="525">Kuşadası (Davutlar)</option>
														<option value="526">Kuşadası (Güzelçamlı)</option>
														<option value="527">Söke</option>
													</optgroup>
													<optgroup label="İzmir">
														<option value="297">Adnan Menderes Havalimanı</option>
														<option value="512">Çeşme</option>
													</optgroup><optgroup label="Manisa">
														<option value="533">Manisa (Merkez)</option>
													</optgroup>
												</select>			
											</div>
										</div>

										<div class="f-row">
											<div class="form-group select one-third">
												<label>Kişi Sayısı</label>
												<select id="dropoff2" name="d2">
													
													
													<option value="">1</option>
													<option value="">2</option>
													<option value="">3</option>
													<option value="">4</option>
													<option value="">5</option>
													<option value="">6</option>
													<option value="">7-28</option>

													
												</select>			
											</div>
											<!-- Main 2. Seçenek
											<div class="form-group spinner">
												<label for="people">Kişi Sayısı <small>(Çocuk Dahil)</small>?</label>
												<input type="number" id="people" name="ppl" min="1" class="uniform-input number" value="">
											</div>
											-->

											<div class="form-group radios">
												<div>
													<div class="radio" id="uniform-return"><span ><input type="radio" name="trip" id="return" value="2" ></span></div>
													<label for="return">Gidiş - Dönüş</label>
												</div>
												<div>
													<div class="radio" id="uniform-oneway"><span  class="checked"><input type="radio" name="trip" id="oneway" value="1" checked></span></div>
													<label for="oneway">Tek Yön</label>
												</div>
											</div>
											<div class="form-group right">
												<button type="submit" class="btn large black">Transfer Ara</button>
											</div>
										</div>
										<!--// Row -->
									</form>
								</div>
							</div>



							<!-- //TARİH VE SAAT KISMI -->
							<script type='text/javascript' src='wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
							<script type='text/javascript' src='wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4'></script>

							<!-- //TÜRKÇE DİL DESTEĞİ -->
							<script type='text/javascript' src='wp-content/plugins/transfers-plugin/js/i18n/datepicker-tr5152.js?ver=1.0'></script>

							<!-- //SAAT KISMI -->
							<script type='text/javascript' src='wp-content/plugins/transfers-plugin/js/jquery-ui-timepicker-addon5152.js?ver=1.0'></script>
							<script type='text/javascript' src='wp-content/plugins/transfers-plugin/js/search5152.js?ver=1.0'></script>

							<!-- //TÜRKÇE DİL DESTEĞİ -->
							<script type='text/javascript' src='wp-content/plugins/transfers-plugin/js/i18n/jquery-ui-timepicker-tr5152.js?ver=1.0'></script>


							<!-- //GİDİŞ-DÖNÜŞ VE TEK YÖN SEÇME BUTONU-->
							<script type='text/javascript' src='wp-content/themes/Transfers/js/jquery.uniform.min5152.js?ver=1.0'></script>
							<script type='text/javascript' src='wp-content/themes/Transfers/js/jquery.slicknav.min5152.js?ver=1.0'></script>
							<script type='text/javascript' src='wp-content/themes/Transfers/js/scripts5152.js?ver=1.0'></script>



						</body>


						</html>