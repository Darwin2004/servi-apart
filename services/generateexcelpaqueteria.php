<?php

header("content-Type: application/xls");
header("content-Disposition: attachment; filename=reporte_paqueteria.xls");

?>

<table class="table table-hover ">
    <thead>
        <tr class="d-flex row border rounded-top rounded-3">
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                    <img style="width: 25px; height: 25px;" src="../../assets/icons/Building.png" alt="">
                </div>
                <span class="ms-2">Torre</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                    <img style="width: 25px; height: 25px;" src="../../assets/icons/Doorway.png" alt="">
                </div> <span class="ms-2">Apartamento</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                    <img style="width: 25px; height: 25px;" src="../../assets/icons/Calendar.png" alt="">
                </div>
                <span class="ms-2">Fecha</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                    <img style="width: 25px; height: 25px;" src="../../assets/icons/Truck.png" alt="">
                </div> <span class="ms-2">Remitente</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                    <img style="width: 25px; height: 25px;" src="../../assets/icons/User.png" alt="">
                </div> <span class="ms-2">Destinatario</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                    <img style="width: 25px; height: 25px;" src="../../assets/icons/Notification.png" alt="">
                </div>
                <span class="ms-2">Notificar</span>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php

            require_once "../Models/conexion.php";
            require_once "../Models/consultas.php";
            require_once "../Controllers/mostrarInfoAdmin.php";
            cargarPaquetes();

        ?>
    </tbody>
</table>