<?php
    require_once ("../../Models/conexion.php");
    require_once ("../../Models/consultas.php");
    require_once ("../../Models/seguridadAdministrador.php");
    require_once ("../../Controllers/mostrarInfoAdmin.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Common -->
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/pack-styles.css">
    <title>Paqueteria</title>
</head>

<body class="position-relative">
    <?php
    include 'menu-include.php';
    ?>

    <div class="content-wrap">
        <div class="main">
            <div class="col-lg-12 w-100 p-l-0 title-margin-left ">
                <div class="page-header">
                    <div class="page-title">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#" style="color: #18d26e">Administrador</a>
                            </li>
                            <li class="breadcrumb-item active">Registro de paqueteria</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-4">

                <section class=" rounded-3 d-flex row">
                    <div class="col-md-6   p-2">
                        <h2 class="p-4 title  w-100">¡<span class="span-title">Registra</span>, luego,
                            comunica! </h2>
                        <p class="px-4 d-block ">Registra tu paquetería hoy mismo y comunica de manera eficiente con los
                            destinatarios
                            en nuestro exclusivo conjunto de propiedades horizontales! No esperes más para simplificar
                            tus
                            entregas y mantener a todos informados. ¡Actúa ahora y experimenta la comodidad de nuestro
                            servicio!
                        </p>
                    </div>
                    <div class="col-md-6  p-4 d-flex justify-content-center align-items-center">
                        <img class="w-75 xxl-w-50" src="../../assets/img/pacck.svg" alt="">
                    </div>
                </section>
                <section class="row mt-4 p-4">
                    <form action="../../Controllers/registrarPaquete.php" method="post"
                        class="d-inline-flex row box-cont">
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Destinatario</label>
                            <input type="text" class="form-control" name="destinatario" placeholder="EJ:Andrea Vargas"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Apartamento</label>
                            <input type="text" class="form-control" name="apartamento" placeholder="EJ:v-12"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Torre</label>
                            <input type="text" class="form-control" name="torre" placeholder="EJ:4"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Telefono destinatario</label>
                            <input type="text" class="form-control" name="tel-destinatario" placeholder="EJ:32198776"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Remitente</label>
                            <input type="text" class="form-control" name="remitente" placeholder="EJ:Group S.A.S"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-md-6 d-flex align-items-end">
                            <button id="btn-signup" type="submit" class="w-100 p-2 rounded">Registrar</button>
                        </div>
                    </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>