<?php

require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadAdministrador.php");
require_once("../../Controllers/mostrarInfoAdmin.php");


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Focus Admin: Flot Chart</title>

  <!-- ================= Favicon ================== -->
  <!-- Standard -->
  <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
  <!-- Retina iPad Touch Icon-->
  <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
  <!-- Retina iPhone Touch Icon-->
  <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
  <!-- Standard iPad Touch Icon-->
  <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
  <!-- Standard iPhone Touch Icon-->
  <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

  <!-- Styles -->
  <link href="../dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
  <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
  <link href="../dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
  <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">

  <link href="../dashboard/css//lib/helper.css" rel="stylesheet">
  <link href="../dashboard/css/style.css" rel="stylesheet">


</head>

<body>

<?php
    include 'menu-include.php';
?>



  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <script>"<h1>Vehiculo con placa '.$f['placa'].'</span>"</script>
                </h1>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Chart-Flot</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-title">
                  <h4>Real Chart</h4>
                </div>
                <div class="flot-container">
                  <div id="cpu-load" class="cpu-load"></div>
                </div>
              </div>
              <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
              <div class="card">
                <div class="card-title">
                  <h4>Line Chart</h4>
                </div>
                <div class="flot-container">
                  <div id="flot-line" class="flot-line"></div>
                </div>
              </div>
              <!-- /# card -->
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-title">
                  <h4>Pie Chart</h4>
                </div>
                <div class="flot-container">
                  <div id="flot-pie" class="flot-pie-container"></div>
                </div>
              </div>
              <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
              <div class="card">
                <div class="card-title">
                  <h4>Line Chart</h4>
                </div>
                <div class="flot-container">
                  <div id="chart1"></div>
                </div>
              </div>
              <!-- /# card -->
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          
        </section>
      </div>
    </div>
  </div>




  <div id="search">
    <button type="button" class="close">×</button>
    <form>
      <input type="search" value="" placeholder="type keyword(s) here" />
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
  </div>
  <!-- jquery vendor -->
  <script src="js/lib/jquery.min.js"></script>
  <script src="js/lib/jquery.nanoscroller.min.js"></script>
  <script src="js/lib/menubar/sidebar.js"></script>
  <script src="js/lib/preloader/pace.min.js"></script>
  <script src="js/scripts.js"></script>


  <!--  flot-chart js -->
  <script src="js/lib/flot-chart/excanvas.min.js"></script>
  <script src="js/lib/flot-chart/jquery.flot.js"></script>
  <script src="js/lib/flot-chart/jquery.flot.pie.js"></script>
  <script src="js/lib/flot-chart/jquery.flot.time.js"></script>
  <script src="js/lib/flot-chart/jquery.flot.stack.js"></script>
  <script src="js/lib/flot-chart/jquery.flot.resize.js"></script>
  <script src="js/lib/flot-chart/jquery.flot.crosshair.js"></script>
  <script src="js/lib/flot-chart/curvedLines.js"></script>
  <script src="js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
  <script src="js/lib/flot-chart/flot-chart-init.js"></script>


</body>

</html>