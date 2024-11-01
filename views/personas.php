<!-- Inclusión header -->
<?php include('../templates/header.php'); ?>

<!-- Inclusión archivos -->
<?php include('../config.php'); ?>
<?php include(CONTROLLERS_PATH . 'personasCtrl.php'); ?>

<!-- Tabla personas -->
<main class="contenedor">
    <h1 class="titulo">Registros</h1>
    <hr>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ESTADO</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>EDAD</th>
                <th>FECHA REGISTRO</th>
                <th>SEDE</th>
                <th>AREA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Activo</td>
                <td>jhon deivid</td>
                <td>guevara beltran</td>
                <td>20</td>
                <td>05-11-2024</td>
                <td>Picaleña</td>
                <td>Compras</td>
            </tr>
        </tbody>
    </table>
    </div>
</main>



<!-- Inclusión footer -->
<?php include('../templates/footer.php'); ?>