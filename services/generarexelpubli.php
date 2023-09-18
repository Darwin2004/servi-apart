<?php

header("content-Type: application/xls");
header("content-Disposition: attachment; filename=reporte_pUblicaciones.xls");

?>

<table class="table table-hover ">
    <thead>
        <tr class="d-flex row border rounded-top rounded-3">
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                    <img style="width: 25px; height: 25px;" src="../../assets/icons/Building.png" alt="">
                </div>
                <span class="ms-2">Titulo</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                    <img style="width: 25px; height: 25px;" src="../../assets/icons/Doorway.png" alt="">
                </div> <span class="ms-2">Descripcion</span>
            </th>
           
        </tr>
    </thead>
    <tbody>
        <?php

            require_once "../Models/conexion.php";
            require_once "../Models/consultas.php";
            require_once "../Controllers/mostrarInfoAdmin.php";
            cargarPUblicaciones();

        ?>
    </tbody>
</table>