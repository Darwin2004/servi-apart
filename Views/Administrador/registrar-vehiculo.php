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

    <title>Servi-Apart</title>

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

    <!-- Toastr -->
    <link href="../Dashboard/css/lib/toastr/toastr.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="../Dashboard/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Range Slider -->
    <link href="../Dashboard/css/lib/rangSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/rangSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bar Rating -->
    <link href="../Dashboard/css/lib/barRating/barRating.css" rel="stylesheet">
    <!-- Nestable -->
    <link href="../Dashboard/css/lib/nestable/nestable.css" rel="stylesheet">
    <!-- JsGrid -->
    <link href="../Dashboard/css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
    <link href="../Dashboard/css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
    <!-- Datatable -->
    <link href="../Dashboard/css/lib/datatable/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="../Dashboard/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <!-- Calender 2 -->
    <link href="../Dashboard/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <!-- Weather Icon -->
    <link href="../Dashboard/css/lib/weather-icons.css" rel="stylesheet" />
    <!-- Owl Carousel -->
    <link href="../Dashboard/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../Dashboard/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Select2 -->
    <link href="../Dashboard/css/lib/select2/select2.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link href="../Dashboard/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <!-- Calender -->
    <link href="../Dashboard/css/lib/calendar/fullcalendar.css" rel="stylesheet" />

    <!-- Common -->
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/vehiculo-styles.css">
</head>


<body>


    <?php
    include 'menu-include.php';
    ?>



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 p-r-0 title-margin-right">

                    </div>
                    <!-- /# column -->
                    <div class="col-lg-8 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a style="color: #18d26e">Administrador</a>
                                    </li>
                                    <li class="breadcrumb-item active">Registrar Vehiculo</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="page-header col-md-6">
                        <div class="page-title txt_vehiculos">
                            <h1 id="tl_vehiculo">REGISTRAR VEHICULOS</h1>
                            <p class="p_vehiculo">Este módulo te ofrece la posibilidad de registrar de manera rápida y
                                sencilla <br>los detalles de los vehículos que ingresen a la propiedad, lo que
                                <br>asegura un
                                control eficiente y seguro de toda la información relevante <br>para tu gestión.</p>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <img src="../../assets/img/car.svg" class="img_vehiculo" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form_vehiculo_2">

                            <section id="main-content" class="form_vehiculo">
                                <form action="../../Controllers/registrarVehiculoAdmin.php" method="POST"
                                    enctype="multipart/form-data" class="box-cont">
                                    <div class="row">
                                        <div class="form-group col-md-4 campos_vehiculo">
                                            <label>Placa:</label>
                                            <input type="text" class="form-control" placeholder="Ej: UZI974"
                                                name="placa">
                                        </div>
                                        <div class="form-group col-md-4 campos_vehiculo">
                                            <label>Marca:</label>
                                            <select name="marca" class="form-control" placeholder="Ej: Ford">
                                                <option value="marca">Marca</option>
                                                <optgroup label="Marcas de Vehículos">
                                                    <option value="chevrolet">Chevrolet</option>
                                                    <option value="renault">Renault</option>
                                                    <option value="mazda">Mazda</option>
                                                    <option value="toyota">Toyota</option>
                                                    <option value="nissan">Nissan</option>
                                                    <option value="honda">Honda</option>
                                                    <option value="suzuki">Suzuki</option>
                                                    <option value="kia">Kia</option>
                                                    <option value="hyundai">Hyundai</option>
                                                    <option value="volkswagen">Volkswagen</option>
                                                    <option value="ford">Ford</option>
                                                    <option value="jeep">Jeep</option>
                                                    <option value="subaru">Subaru</option>
                                                    <option value="volvo">Volvo</option>
                                                    <option value="peugeot">Peugeot</option>
                                                    <option value="fiat">Fiat</option>
                                                    <option value="land-rover">Land Rover</option>
                                                    <option value="jaguar">Jaguar</option>
                                                    <option value="porsche">Porsche</option>
                                                    <option value="lexus">Lexus</option>
                                                    <option value="cadillac">Cadillac</option>
                                                    <option value="buick">Buick</option>
                                                    <option value="lincoln">Lincoln</option>
                                                    <option value="infiniti">Infiniti</option>
                                                    <option value="acura">Acura</option>
                                                    <option value="tesla">Tesla</option>
                                                    <option value="ram">Ram</option>
                                                    <option value="gmc">GMC</option>
                                                    <option value="chrysler">Chrysler</option>
                                                    <option value="dodge">Dodge</option>
                                                    <option value="maserati">Maserati</option>
                                                    <option value="alfa-romeo">Alfa Romeo</option>
                                                </optgroup>
                                                <optgroup label="Marcas de Motos">
                                                    <option value="honda-motos">Honda Motos</option>
                                                    <option value="yamaha-motos">Yamaha Motos</option>
                                                    <option value="suzuki-motos">Suzuki Motos</option>
                                                    <option value="kawasaki-motos">Kawasaki Motos</option>
                                                    <option value="ktm">KTM</option>
                                                    <option value="bajaj">Bajaj</option>
                                                    <option value="royal-enfield">Royal Enfield</option>
                                                    <option value="husqvarna">Husqvarna</option>
                                                    <option value="aprilia">Aprilia</option>
                                                    <option value="mv-agusta">MV Agusta</option>
                                                    <option value="triumph">Triumph</option>
                                                    <option value="harley-davidson">Harley-Davidson</option>
                                                    <option value="vespa">Vespa</option>
                                                    <option value="scooters">Scooters</option>
                                                    <option value="indian-motos">Indian Motos</option>
                                                    <option value="bmw-motos">BMW Motos</option>
                                                    <option value="ducati-motos">Ducati Motos</option>
                                                    <option value="kymco-motos">Kymco Motos</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4 campos_vehiculo">
                                            <label>Referencia:</label>
                                            <input type="text" class="form-control" placeholder="Ej: Explorer"
                                                name="referencia">
                                        </div>
                                        <div class="form-group col-md-6 campos_vehiculo">
                                            <label>Modelo:</label>
                                            <input type="number" class="form-control" placeholder="Ej: 2013"
                                                name="modelo">
                                        </div>
                                        <div class="form-group col-md-6 campos_vehiculo">
                                            <label>Identificación de Propietario:</label>
                                            <input type="number" class="form-control" placeholder="Ej: 1516465400"
                                                name="identificacion">
                                        </div>
                                        <div class="form-group col-md-6 campos_vehiculo">
                                            <label>Foto 1 de Vehiculo</label>
                                            <input type="file" class="form-control" name="foto1"
                                                accept=".jpeg, .jpg, .png, .gif">
                                        </div>
                                        <div class="form-group col-md-6 campos_vehiculo">
                                            <label>Foto 2 de Vehiculo</label>
                                            <input type="file" class="form-control" name="foto2"
                                                accept=".jpeg, .jpg, .png, .gif">
                                        </div>

                                        <div class="form-group col-md-6 campos_vehiculo">
                                            <label>Foto 3 de Vehiculo</label>
                                            <input type="file" class="form-control" name="foto3"
                                                accept=".jpeg, .jpg, .png, .gif">
                                        </div>

                                        <div class="form-group col-md-6 campos_vehiculo">
                                            <label>Foto 4 de Vehiculo</label>
                                            <input type="file" class="form-control" name="foto4"
                                                accept=".jpeg, .jpg, .png, .gif">
                                        </div>





                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat btn_registrar">Registrar
                                        vehiculo</button>
                                    <div class="register-link m-t-15 text-center">

                                    </div>
                                </form>
                        </div>
                    </div>

                </div>



            </div>
            <!-- /# column -->

            <!-- /# column -->
        </div>


        </section>
    </div>
    </div>
    </div>






    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../Dashboard/js/scripts.js"></script>

    <!-- Calender -->
    <script src="../Dashboard/js/lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="../Dashboard/js/lib/moment/moment.js"></script>
    <script src="../Dashboard/js/lib/calendar/fullcalendar.min.js"></script>
    <script src="../Dashboard/js/lib/calendar/fullcalendar-init.js"></script>

    <!--  Flot Chart -->
    <script src="../Dashboard/js/lib/flot-chart/excanvas.min.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.pie.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.time.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.stack.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.resize.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/curvedLines.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/flot-chart-init.js"></script>

    <!--  Chartist -->
    <script src="../Dashboard/js/lib/chartist/chartist.min.js"></script>
    <script src="../Dashboard/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="../Dashboard/js/lib/chartist/chartist-init.js"></script>

    <!--  Chartjs -->
    <script src="../Dashboard/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../Dashboard/js/lib/chart-js/chartjs-init.js"></script>

    <!--  Knob -->
    <script src="../Dashboard/js/lib/knob/jquery.knob.min.js "></script>
    <script src="../Dashboard/js/lib/knob/knob.init.js "></script>

    <!--  Morris -->
    <script src="../Dashboard/js/lib/morris-chart/raphael-min.js"></script>
    <script src="../Dashboard/js/lib/morris-chart/morris.js"></script>
    <script src="../Dashboard/js/lib/morris-chart/morris-init.js"></script>

    <!--  Peity -->
    <script src="../Dashboard/js/lib/peitychart/jquery.peity.min.js"></script>
    <script src="../Dashboard/js/lib/peitychart/peitychart.init.js"></script>

    <!--  Sparkline -->
    <script src="../Dashboard/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="../Dashboard/js/lib/sparklinechart/sparkline.init.js"></script>

    <!-- Select2 -->
    <script src="../Dashboard/js/lib/select2/select2.full.min.js"></script>

    <!--  Validation -->
    <script src="../Dashboard/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="../Dashboard/js/lib/form-validation/jquery.validate-init.js"></script>

    <!--  Circle Progress -->
    <script src="../Dashboard/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="../Dashboard/js/lib/circle-progress/circle-progress-init.js"></script>

    <!--  Vector Map -->
    <script src="../Dashboard/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="../Dashboard/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="../Dashboard/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.algeria.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.argentina.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.brazil.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.france.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.germany.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.greece.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.iran.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.iraq.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.russia.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.tunisia.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.europe.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.usa.js"></script>

    <!--  Simple Weather -->
    <script src="../Dashboard/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="../Dashboard/js/lib/weather/weather-init.js"></script>

    <!--  Owl Carousel -->
    <script src="../Dashboard/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="../Dashboard/js/lib/owl-carousel/owl.carousel-init.js"></script>

    <!--  Calender 2 -->
    <script src="../Dashboard/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="../Dashboard/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="../Dashboard/js/lib/calendar-2/pignose.init.js"></script>


    <!-- Datatable -->
    <script src="../Dashboard/js/lib/data-table/datatables.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/buttons.dataTables.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/jszip.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/pdfmake.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../Dashboard/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/datatables-init.js"></script>

    <!-- JS Grid -->
    <script src="../Dashboard/js/lib/jsgrid/db.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/jsgrid.core.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/jsgrid.load-indicator.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/jsgrid.load-strategies.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/jsgrid.sort-strategies.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/jsgrid.field.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/fields/jsgrid.field.text.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/fields/jsgrid.field.number.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/fields/jsgrid.field.select.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/fields/jsgrid.field.checkbox.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/fields/jsgrid.field.control.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/jsgrid-init.js"></script>

    <!--  Datamap -->
    <script src="../Dashboard/js/lib/datamap/d3.min.js"></script>
    <script src="../Dashboard/js/lib/datamap/topojson.js"></script>
    <script src="../Dashboard/js/lib/datamap/datamaps.world.min.js"></script>
    <script src="../Dashboard/js/lib/datamap/datamap-init.js"></script>

    <!--  Nestable -->
    <script src="../Dashboard/js/lib/nestable/jquery.nestable.js"></script>
    <script src="../Dashboard/js/lib/nestable/nestable.init.js"></script>

    <!--ION Range Slider JS-->
    <script src="../Dashboard/js/lib/rangeSlider/ion.rangeSlider.min.js"></script>
    <script src="../Dashboard/js/lib/rangeSlider/moment.js"></script>
    <script src="../Dashboard/js/lib/rangeSlider/moment-with-locales.js"></script>
    <script src="../Dashboard/js/lib/rangeSlider/rangeslider.init.js"></script>

    <!-- Bar Rating-->
    <script src="../Dashboard/js/lib/barRating/jquery.barrating.js"></script>
    <script src="../Dashboard/js/lib/barRating/barRating.init.js"></script>

    <!-- jRate -->
    <script src="../Dashboard/js/lib/rating1/jRate.min.js"></script>
    <script src="../Dashboard/js/lib/rating1/jRate.init.js"></script>

    <!-- Sweet Alert -->
    <script src="../Dashboard/js/lib/sweetalert/sweetalert.min.js"></script>
    <script src="../Dashboard/js/lib/sweetalert/sweetalert.init.js"></script>

    <!-- Toastr -->
    <script src="../Dashboard/js/lib/toastr/toastr.min.js"></script>
    <script src="../Dashboard/js/lib/toastr/toastr.init.js"></script>





























    <!--  Dashboard 1 -->
    <script src="../Dashboard/js/dashboard1.js"></script>
    <script src="../Dashboard/js/dashboard2.js"></script>


</body>

</html>