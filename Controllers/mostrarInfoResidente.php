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
                 
                            <section class=" p-2 border-end border-primary" style="display:flex; flex-direction:column ">
                                <p class=" d-inline-flex fs-6 " style="position:relative; top: 5px; color: #ffc451";><b>Anuncios</b></p>
                                    <div style="display: flex" class=" border justify-content-between p-2 px-3">
                                        <div class"w-50 d-flex p-2" style="align-items: center;">
                                            <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                                <p class="fs-6" style="position:relative; top: 9px">' . $f['titulo'] . '</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="display: flex" class=" border justify-content-between p-2 px-3">
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['descripcion'] . '</p>
                                        </div>
                                    </div>
                                    <div style="display: flex" class=" border justify-content-between p-2 px-3">
                                        <div class"w-50 p-2 border d-flex justify-content-center" style="margin-right: 40px">
                                            <p class="fs-6" style="position:relative; top: 9px">' . $f['fecha'] . '</p>
                                        </div>
                                    </div>
                                    

                            </section>
                       
            </article>
          ';
        }
    }
}
function cargarInfoUsuarios(){
    $objConsultas = new Consultas();
   
    $identificacion = $_SESSION['id']; // Reemplaza 'valor_de_identificacion' con el ID que deseas buscar

    $result = $objConsultas->mostrarUsuarioRes($identificacion);

    if (!isset($result)) {
        echo '<h2> NO HAY USUARIOS REGISTRADOS </h2>';
    } else {
        foreach ($result as $f) {
            echo '
            <tr>
                
                <td>' . $f['nombres'] . '</td>
                <td>' . $f['apellidos'] . '</td>
            </tr>';
        }
    }
}



?>

