<!-- Inclusión header -->
<?php include('../templates/header.php'); ?>

<!-- Inclusión archivos -->
<?php include('../config.php'); ?>
<?php include(CONTROLLERS_PATH . 'personasCtrl.php'); ?>

<!-- Formulario para registrar personas -->
<main class="contenedor">
    <h1 class="titulo">FORMULARIO</h1>
    <hr>

    <div class="contenedor_form">
        <form class="formulario" action="" method="post">
            <h2 class="subtitulo">Datos Persona</h2>

            <div class="campos">
                <div class="campos_div">
                    <label class="label" for="nombres">Nombres</label>
                    <input type="text" id="nombres" name="nombres" required>
                </div>
                <div class="campos_div">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" required>
                </div>
                <div class="campos_div">
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" name="edad" min="0" max="90" required>
                </div>
            </div>

            <hr class="separador">

            <h2 class="subtitulo">Rol Persona</h2>
            <div class="campos">
                <div class="campos_div">
                    <label for="sede">Sede</label>
                    <select id="sede" name="sede" required>
                        <option value="">Seleccionar</option>
                        <option value="1">limonar</option>
                        <option value="2">picaleña</option>
                    </select>
                </div>
                <div class="campos_div">
                    <label for="area">Area</label>
                    <select id="area" name="area" required>
                        <option value="">Seleccionar</option>
                        <option value="1">Administrativa</option>
                        <option value="2">Compras</option>
                    </select>
                </div>
            </div>

            <hr class="separador">

            <div class="form_buttons">
                <button>Reset</button>
                <button name="accion" value="enviar" type="submit">
                    Enviar
                </button>
            </div>
        </form>
    </div>
</main>

<!-- Tabla personas -->
<h1>formulario:</h1>

<!-- Inclusión footer -->
<?php include('../templates/footer.php'); ?>