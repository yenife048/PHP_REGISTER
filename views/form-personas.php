<!-- Inclusión header -->
<?php include('../templates/header.php'); ?>

<!-- Inclusión archivos -->
<?php include('../config.php'); ?>
<?php include(CONTROLLERS_PATH . 'personasCtrl.php'); ?>

<main class="contenedor">
    <h1 class="titulo">Formulario Personas</h1>
    <hr>

    <div class="contenedor_form">
        <form class="formulario-personas" action="" method="post">
            <h2>Datos Persona</h2>

            <div class="formulario-personas_campos">
                <div>
                    <label for="nombres">Nombres</label>
                    <input type="text" id="nombres" name="nombres" required>
                </div>
                <div>
                    <label for="apellidos">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" required>
                </div>
                <div>
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" name="edad" min="0" max="90" required>
                </div>
            </div>

            <hr>

            <h2>Rol Persona</h2>
            <div class="formulario-personas_campos">
                <div>
                    <label for="sede">Sede</label>
                    <select id="sede" name="sede" required>
                        <option value="">Seleccionar</option>
                        <option value="1">limonar</option>
                        <option value="2">picaleña</option>
                    </select>
                </div>
                <div>
                    <label for="area">Area</label>
                    <select id="area" name="area" required>
                        <option value="">Seleccionar</option>
                        <option value="1">Administrativa</option>
                        <option value="2">Compras</option>
                    </select>
                </div>
            </div>

            <hr>

            <div class="formulario-personas_buttons">
                <button>Reset</button>
                <button name="accion" value="enviar" type="submit">
                    Enviar
                </button>
            </div>
        </form>
    </div>
</main>

<!-- Inclusión footer -->
<?php include('../templates/footer.php'); ?>