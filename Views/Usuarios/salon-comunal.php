<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");


?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin Dashboard</title>
    <link href="../../assets/css/style.css" rel="stylesheet">

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="../../dashboard/css/style.css" rel="stylesheet">
</head>

<body>

    <?php
    include 'menu-include copy.php';
    ?>

    <!-- /# sidebar -->
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Bienvenido, <span>Johan</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">UC-Calendar</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Reserva Tu Dia</h4>

                                </div>
                                <div class="card-body">
                                    <div class="year-calendar">
                                        <div id="detalles-reservacion">
                                        </div>
                                    </div>
                                    <!-- no borrar esos div de arriba -->
                                    <!-- Aquí se mostrarán los detalles de la reserva seleccionada -->
                        <form action="../../Controllers/registrarDiaSC.php" method="post" autocomplete="off">
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="identificacion" name="identificacion" placeholder="0123456789" required>
                                            <label for="identificacion">Identificación</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Johan" required>
                                            <label for="nombre">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Castañeda" required>
                                            <label for="apellidos">Apellido</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="telefonos" name="telefonos" placeholder="3204031794" required>
                                            <label for="telefonos">Teléfono</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="correo" name="correo" placeholder="name@example.com" required>
                                            <label for="correo">Correo Electrónico</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="dia_reserva" name="dia_reserva" readonly required>
                                            <label for="dia_reserva">Día de Reserva</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="torre" name="torre" placeholder="3" required>
                                            <label for="torre">Torre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="apartamento" name="apartamento" placeholder="601" required>
                                            <label for="apartamento">Apartamento</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" required>
                                            <label for="hora_inicio">Hora de Inicio</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="time" class="form-control" id="hora_finalizacion" name="hora_finalizacion" value="03:00:00" required>
                                            <label for="hora_finalizacion">Hora de Finalización</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="mesas" name="mesas" required>
                                            <label for="mesas">Mesas</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="sillas" name="sillas" required >
                                            <label for="sillas">Sillas</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit">Enviar</button>
                                    </div>
                                </div>
                            </form>





                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
            </div>
            <!-- /# row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="footer">
                        <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </div>
    </div>

    </section>
    </div>
    </div>
    </div>
    <!-- jquery vendor -->
    <script src="../dashboard/js/lib/jquery.min.js"></script>
    <script src="../dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../dashboard/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>



    <script src="../dashboard/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="../dashboard/js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="../dashboard/js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="../dashboard/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="../dashboard/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="../dashboard/js/lib/calendar-2/pignose.init.js"></script>
   

    <!-- scripit init-->
    <script src="../dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../dashboard/js/scripts.js"></script>
    <!-- scripit init-->

    <!-- js del salon comunal -->
   <script src="../client-site/assets/js/salon-comunal.js"></script> 

</body>

</html>