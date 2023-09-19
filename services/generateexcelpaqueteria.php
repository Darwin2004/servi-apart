<?php

header("content-Type: application/xls");
header("content-Disposition: attachment; filename=reporte_paqueteria.xls");

?>

<table class="table table-hover ">
    <thead>
        <tr class="d-flex row border rounded-top rounded-3">
            <th class="d-flex col-md-2">
                <span class="ms-2">#</span>
            </th>
            <th class="d-flex col-md-2">
            
                <span class="ms-2">Torre</span>
            </th>
            <th class="d-flex col-md-2">
             <span class="ms-2">Apartamento</span>
            </th>
            <th class="d-flex col-md-2">
            
                <span class="ms-2">Fecha</span>
            </th>
            <th class="d-flex col-md-2">
             <span class="ms-2">Remitente</span>
            </th>
            <th class="d-flex col-md-2">
             <span class="ms-2">Destinatario</span>
            </th>
            
        </tr>
    </thead>
    <tbody>
        <?php

            require_once "../Models/conexion.php";
            require_once "../Models/consultas.php";
            require_once "../Controllers/mostrarInfoAdmin.php";
            cargarPaquetesPDF();

        ?>
    </tbody>
</table>