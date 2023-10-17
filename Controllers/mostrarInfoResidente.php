<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");


function cargarPublicacionesRes(){


    $objConsultas = new Consultas();
    $result = $objConsultas->mostrarPublicaciones();

    if (!isset($result)) {
        echo '<h2> NO HAY PUBLICACIONES REGISTRADOS </h2>';

    } else {
        $count = 0;
        foreach ($result as $f) {
            if($count <= 2){
            echo '
                        <article id="art" class=" col-12 col-lg-4 col-md-6   p-4 mb-5 d-flex flex-column ms-2 justify-content-start h-auto border">
                            <header class=" p-2 d-flex " > 
                            <h2 class="fw-bold my-auto  w-100  text-wrap" style="font-size: 1rem; font-weight: 600 ">
                            '. $f['titulo'] .'
                            </h2>
                            <div id="go_to" role="button" class="p-2 d-flex justify-content-center align-items-center flex-shrink rounded-5 ">
                                <img id="diagonal-arrow" width="20" height="20" src="./icons/arrow.png" >
                            </div> 
                            </header>
                            <main class=" p-2 d-flex flex-column justify-content-center">
                                <p class=" my-auto" style="font-size: 1rem">'. $f['descripcion'] .'</p>
                            </main>
                            <footer class=" p-2 m-0">
                            <section class="w-100 m-0 p-0 d-flex align-items-center ">
                                    <img style="width: 20px; height: 20px" src="./icons/calendario.png">
                                    <small class="text-black-50 mx-2 " style="font-size: 0.875rem; font-weight: 300"> '. $f['fecha'] .'</small>
                                    <img style="width: 20px; height: 20px" src="./icons/reloj-bold.png">
                                    <small class="text-black-50 mx-2 " style="font-size: 0.875rem; font-weight: 300"> '. $f['hora'] .'</small>
                            </section>
                            </footer>
                        </article>
                    ';
                $count++;
            }
            
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

