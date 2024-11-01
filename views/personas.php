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
            <?php foreach ($registros as $persona) { ?>
                <tr>
                    <td><?php echo $persona['id_persona']; ?></td>
                    <td><?php echo $persona['estado']; ?></td>
                    <td><?php echo $persona['nombres']; ?></td>
                    <td><?php echo $persona['apellidos']; ?></td>
                    <td><?php echo $persona['edad'];?></td>
                    <td><?php echo $persona['fecha_registro'];?></td>
                    <td><?php echo $persona['sede_id'];?></td>
                    <td><?php echo $persona['area_id'];?></td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
    </div>
</main>



<!-- Inclusión footer -->
<?php include('../templates/footer.php'); ?>