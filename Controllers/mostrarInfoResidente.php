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
            <article class="box-cont p-4 mb-5 mx-3 d-flex flex-column justify-content-start h-auto" style="-webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px; max-width: 500px; ">
                 <header class=" p-2" > <h2 class="fw-bold my-auto" style="font-size: 1rem; font-weight: 600 ">'. $f['titulo'] .'</h2> </header>
                 <main class=" p-2 d-flex flex-column justify-content-center">
                    <p class=" my-auto" style="font-size: 1rem">'. $f['descripcion'] .'</p>
                 </main>
                 <footer class=" p-2 m-0">
                 <section class="w-100 m-0 p-0 ">
                 <img style="width: 20px; height: 20px" src="./icons/calendario.png">
                 <small class="text-black-50 " style="font-size: 14px; font-weight: 600"> '. $f['fecha'] .'</small>
                 <img style="width: 20px; height: 20px" src="./icons/reloj-bold.png">
                 <small class="text-black-50 " style="font-size: 14px; font-weight: 600"> '. $f['hora'] .'</small>
                 </section>
                 </footer>
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

