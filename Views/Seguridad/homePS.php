<?php
    require_once ("../../Models/conexion.php");
    require_once ("../../Models/consultas.php");
    require_once ("../../Models/seguridadPS.php");
    require_once ("../../Controllers/mostrarInfoAdmin.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Servi-Apart</title>
    <!-- <link href="../../assets/css/style.css" rel="stylesheet"> -->

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
    <link href="../dashboard/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../dashboard/css/style.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../Seguridad/css/menu.css"> -->
    <link rel="stylesheet" href="../Seguridad/css/home.css">
    <!-- Transition.style website -->
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    

</head>

<body class="position-relative">

    <?php
    include 'menu.php';
?>
    <div class="custom-mouse d-flex justify-content-center align-items-center">
        <span class="text-black fw-bolder clicki">CLICK</span>
    </div>
    <!-- /# sidebar -->
    <?php
    include 'headerInclude.php';
?>
    
    <main id="dash-container" class="container-fluid position-relative">
        <section class="mt-5">
            <div class="portada text-center d-flex align-items-center justify-content-center">
                <h3 class="seguridad-titulo text-center w-100">SEGURIDAD</h3>
            </div>
        </section>
        <section class="mt-5 pt-5">
            <div class="row px-3   justify-content-center gap-5">
                <section role="button" class="col-md-5 module  p-0  d-flex flex-column justify-content-center ">
                    <div class="">
                        <img class="w-100  rounded-top img-module h-100" src="./images/estacionamiento.jpg" alt="">
                    </div>
                    <div class="border text-center  align-items-center fs-3 d-flex  rounded-bottom py-3">
                        <p class="  p-0  w-100 mb-0">Vehiculos</p>
                        <!-- <div  class="  ml-3 view-more  border align-items-center justify-content-center d-flex rounded-5" role="button">
                            <span class="fs-5 mr-2  text-view-more">Ver mas</span>
                            <img width="16" height="16" src="./icons/next.png" alt="">
                        </div> -->
                    </div>
                </section>
                <section role="button" class="col-md-5 module  p-0 d-flex flex-column ">
                    <div class="m-0">
                        <img class="w-100  rounded-top img-module h-100" src="./images/paqueteria.jpg" alt="">
                    </div>
                    <div class="border  text-center align-items-center  fs-3 d-flex rounded-bottom m-0  py-3">
                        <p class=" p-0  w-100 mb-0">Paqueteria</p>
                        <!-- <div  class="  ml-3 view-more  border align-items-center justify-content-center d-flex rounded-5" role="button">
                            <span class="fs-5 mr-2  text-view-more">Ver mas</span>
                            <img width="16" height="16" src="./icons/next.png" alt="">
                        </div> -->
                    </div>
                </section>
                
            </div>
            <div class="row px-3 mt-5 justify-content-center gap-5">
            <section role="button" class="col-md-5 module  p-0 d-flex flex-column justify-content-center ">
                    <div class="">
                        <img class="w-100  rounded-top img-module h-100" src="./images/saloncomunal.jpg" alt="">
                    </div>
                    <div class="border text-center  align-items-center fs-3 d-flex  rounded-bottom py-3">
                        <p class="  p-0  w-100 mb-0">Salon comunal</p>
                        <!-- <div   class="  ml-3 view-more  border align-items-center justify-content-center d-flex rounded-5" role="button">
                            <span class="fs-5 mr-2  text-view-more">Ver mas</span>
                            <img width="16" height="16" src="./icons/next.png" alt="">
                        </div> -->
                    </div>
                </section>
                <section role="button" class="col-md-5 module   p-0 d-flex flex-column ">
                    <div class="">
                        <img class="w-100  rounded-top img-module h-100" src="./images/publicaciones.jpg" alt="">
                    </div>
                    <div class="border  text-center align-items-center  fs-3 d-flex rounded-bottom  py-3">
                        <p class=" p-0  w-100 mb-0">Publicaciones</p>
                        <!-- <div  class="  ml-3 view-more  border align-items-center justify-content-center d-flex rounded-5" role="button">
                            <span class="fs-5 mr-2  text-view-more">Ver mas</span>
                            <img width="16" height="16" src="./icons/next.png" alt="">
                        </div> -->
                    </div>
                </section>
            </div>
        </section>
    </main>
    <footer class="row border py-3 mt-5 bg-light">
        <div class="col-lg-12 footer">
                <p>2023 © Admin Board. - <a href="#">Servi-Apart.</a></p>
        </div>
    </footer>


    


    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>
    
    
    <script>
                document.addEventListener("mousemove", (e)=>{
                    let mouseX = e.clientX;
                    let mouseY = e.clientY;
        
                    $('.custom-mouse').css({
                        transform: `translate(${mouseX}px, ${mouseY}px)`,
                    })
                })
        
                $('.img-module').mouseover((e)=>{
                    $('.custom-mouse').css({
                        opacity: 1
                    })
                })

                $('.img-module').mouseleave((e)=>{
                    $('.custom-mouse').css({
                        opacity: 0
                    })
                })
        
                
        
            </script>
    <script src="../Dashboard/js/scripts.js"></script>
    <!-- Calender -->
    <!-- <script src="../Dashboard/js/lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="../Dashboard/js/lib/moment/moment.js"></script>
    <script src="../Dashboard/js/lib/calendar/fullcalendar.min.js"></script>
    <script src="../Dashboard/js/lib/calendar/fullcalendar-init.js"></script> -->

    <!--  Flot Chart -->
   <!--  <script src="../Dashboard/js/lib/flot-chart/excanvas.min.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.pie.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.time.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.stack.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.resize.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/curvedLines.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/flot-chart-init.js"></script> -->

    <!--  Chartist -->
   <!--  <script src="../Dashboard/js/lib/chartist/chartist.min.js"></script>
    <script src="../Dashboard/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="../Dashboard/js/lib/chartist/chartist-init.js"></script> -->

    <!--  Chartjs -->
    <!-- <script src="../Dashboard/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../Dashboard/js/lib/chart-js/chartjs-init.js"></script> -->

    <!--  Knob -->
   <!--  <script src="../Dashboard/js/lib/knob/jquery.knob.min.js "></script>
    <script src="../Dashboard/js/lib/knob/knob.init.js "></script> -->

    <!--  Morris -->
   <!--  <script src="../Dashboard/js/lib/morris-chart/raphael-min.js"></script>
    <script src="../Dashboard/js/lib/morris-chart/morris.js"></script>
    <script src="../Dashboard/js/lib/morris-chart/morris-init.js"></script> -->

    <!--  Peity -->
    <!-- <script src="../Dashboard/js/lib/peitychart/jquery.peity.min.js"></script>
    <script src="../Dashboard/js/lib/peitychart/peitychart.init.js"></script> -->

    <!--  Sparkline -->
    <!-- <script src="../Dashboard/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="../Dashboard/js/lib/sparklinechart/sparkline.init.js"></script> -->

    <!-- Select2 -->
    <!-- <script src="../Dashboard/js/lib/select2/select2.full.min.js"></script> -->

    <!--  Validation -->
    <!-- <script src="../Dashboard/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="../Dashboard/js/lib/form-validation/jquery.validate-init.js"></script> -->

    <!--  Circle Progress -->
    <!-- <script src="../Dashboard/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="../Dashboard/js/lib/circle-progress/circle-progress-init.js"></script> -->

    <!--  Vector Map -->
    <!-- <script src="../Dashboard/js/lib/vector-map/jquery.vmap.js"></script>
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
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.usa.js"></script> -->

    <!--  Simple Weather -->
    <!-- <script src="../Dashboard/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="../Dashboard/js/lib/weather/weather-init.js"></script> -->

    <!--  Owl Carousel -->
   <!--  <script src="../Dashboard/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="../Dashboard/js/lib/owl-carousel/owl.carousel-init.js"></script> -->

    <!--  Calender 2 -->
<!--     <script src="../Dashboard/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="../Dashboard/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="../Dashboard/js/lib/calendar-2/pignose.init.js"></script> -->


    <!-- Datatable -->
<!--     <script src="../Dashboard/js/lib/data-table/datatables.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/buttons.dataTables.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/jszip.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/pdfmake.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../Dashboard/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/datatables-init.js"></script> -->

    <!-- JS Grid -->
 <!--    <script src="../Dashboard/js/lib/jsgrid/db.js"></script>
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
    <script src="../Dashboard/js/lib/jsgrid/jsgrid-init.js"></script> -->

    <!--  Datamap -->
    <!-- <script src="../Dashboard/js/lib/datamap/d3.min.js"></script>
    <script src="../Dashboard/js/lib/datamap/topojson.js"></script>
    <script src="../Dashboard/js/lib/datamap/datamaps.world.min.js"></script>
    <script src="../Dashboard/js/lib/datamap/datamap-init.js"></script> -->

    <!--  Nestable -->
   <!--  <script src="../Dashboard/js/lib/nestable/jquery.nestable.js"></script>
    <script src="../Dashboard/js/lib/nestable/nestable.init.js"></script> -->

    <!--ION Range Slider JS-->
    <!-- <script src="../Dashboard/js/lib/rangeSlider/ion.rangeSlider.min.js"></script>
    <script src="../Dashboard/js/lib/rangeSlider/moment.js"></script>
    <script src="../Dashboard/js/lib/rangeSlider/moment-with-locales.js"></script>
    <script src="../Dashboard/js/lib/rangeSlider/rangeslider.init.js"></script> -->

    <!-- Bar Rating-->
  <!--   <script src="../Dashboard/js/lib/barRating/jquery.barrating.js"></script>
    <script src="../Dashboard/js/lib/barRating/barRating.init.js"></script> -->

    <!-- jRate -->
  <!--   <script src="../Dashboard/js/lib/rating1/jRate.min.js"></script>
    <script src="../Dashboard/js/lib/rating1/jRate.init.js"></script> -->

    <!-- Sweet Alert -->
    <script src="../Dashboard/js/lib/sweetalert/sweetalert.min.js"></script>
    <script src="../Dashboard/js/lib/sweetalert/sweetalert.init.js"></script><!-- 
 -->
    <!-- Toastr -->
    <!-- <script src="../Dashboard/js/lib/toastr/toastr.min.js"></script>
    <script src="../Dashboard/js/lib/toastr/toastr.init.js"></script> -->

    <script>
        //menu icon on Navbar
        $('#menu-btn').click(() => {
            /* $('#dash-container').css({
                zIndex: '-10'
            });
            $('header').css({
                zIndex: '-1'
            }); */
            $('#menu-modal').attr('transition-style', 'in:wipe:down')
            $('#menu-modal').css({
                display: 'block'
            })
            $('body').css({
                overflowY: "hidden"
            })
        })

        //close icon on modal
        $('#close').click(() => {

            $('#menu-modal').attr('transition-style', 'out:wipe:down')
            $('body').css({
                overflowY: "scroll"
            })

        }).queue(() => {
            /* $('#dash-container').css({
                zIndex: '1'
            });
            $('header').css({
                zIndex: '1'
            });
             */
        })
    </script>
</body>

</html>