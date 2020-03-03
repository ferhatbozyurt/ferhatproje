<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ferhat Proje | Kuşadası Transfer</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-taxi"></i> <span>KuşadasıTransfer</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="https://seeklogo.com/images/L/los-angeles-lakers-nba-logo-D303ACAC63-seeklogo.com.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Hoşgeldin,</span>
              <h2>Ferhat Yasin Bozyurt</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Genel</h3>
              <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i> Ana sayfa </a></li>

                <li><a><i class="fa fa-cogs"></i> Ayarlar <span class="fa fa-cogs"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.html">Genel Ayar</a></li>

                  </ul>
                </li>


                
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="https://seeklogo.com/images/L/los-angeles-lakers-nba-logo-D303ACAC63-seeklogo.com.png" alt="">Ferhat Yasin Bozyurt
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> Profil</a></li>
                  <li>
                    <a href="javascript:;">
                      
                      <span>Ayarlar</span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Yardım</a></li>
                  <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Çıkış Yap</a></li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">2</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <li>
                    <a>
                      <span class="image"><img src="https://upload.wikimedia.org/wikipedia/tr/a/a5/Boston_Celtics-alternatif-logo.png" alt="Profile Image" /></span>
                      <span>
                        <span>Cihat Aksu</span>
                        <span class="time">5 dakika önce</span>
                      </span>
                      <span class="message">
                        Nevşehir Turu için bilgi almak istiyorum..
                      </span>
                    </a>
                  </li>
                  
                  
                  <li>
                    <a>
                      <span class="image"><img src="https://seeklogo.com/images/L/los-angeles-lakers-nba-logo-D303ACAC63-seeklogo.com.png" alt="Profile Image" /></span>
                      <span>
                        <span>Ferhat Yasin Bozyurt</span>
                        <span class="time">10 dakika önce</span>
                      </span>
                      <span class="message">
                        Rezervasyon numaramı göremiyorum yardımcı olur musunuz?
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>