<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$rezsor=$db->prepare("SELECT * FROM rezervasyon");
$rezsor->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          
            <h2>Rezervasyon İslemleri<small>,

           
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Nereden</th>
                  <th>Nereye</th>
                  <th>Tarih</th>
                  <th>Saat</th>
                  <th>Kullanici</th>
                  <th>Şoför</th>
                  <th>Araç</th>
                  
                </tr>
              </thead>

              <tbody>

                <?php 

                while($rezcek=$rezsor->fetch(PDO::FETCH_ASSOC)) {?>


                  <tr>
                    <td><?php echo $rezcek['rez_nereden'] ?></td>
                    <td><?php echo $rezcek['rez_nereye'] ?></td>
                    <td><?php echo $rezcek['rez_tarih'] ?></td>
                    <td><?php echo $rezcek['rez_saat'] ?></td>
                    <td><?php echo $rezcek['rez_kullanici'] ?></td>
                    <td><?php echo $rezcek['rez_sofor'] ?></td>
                    <td><?php echo $rezcek['rez_arac'] ?></td>
                    
                    <td><center><button class="btn btn-danger btn-xs">Mazeret</button></center></td>
                  </tr>

                   <?php  }

                ?>




              </tbody>
            </table>

            <!-- Div İçerik Bitişi -->


          </div>
        </div>
      </div>
    </div>




  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
