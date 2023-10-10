<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");


function cargarPublicacionesRes(){


    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarPublicaciones();

    if (!isset($result)) {
        echo '<h2> NO HAY PUBLICACIONES REGISTRADOS </h2>';

    } else {
        foreach ($result as $f) {
            echo '
            <article class="box-cont p-4 px-4 mb-3" style="-webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px; ">
                <header class="w-100 p-2 border-2 border-bottom border-dark">
                    <h3>' . $f['id_publi'] . '</h3>
                </header>
                <div class="h-auto row d-flex p-2">
                                <section class="col p-2 border-end border-primary">
                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/titulo.png"  alt="building" class="imgSC" style="width: 30px; height: 30px;" >
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Titulo</p>
                                        </div>
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['titulo'] . '</p>
                                        </div>
                                    </div>

                                    <div style="display: flex" class="border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <img  src="../../assets/icons/descripcion.png" alt="building" class="imgSC" style="width: 30px; height: 30px;">
                                            <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px">Descripcion</p>
                                        </div>
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['descripcion'] . '</p>
                                        </div>
                                    </div>

                                </section>
                        </div>
            </article>
          ';
        }
    }
}
?>

