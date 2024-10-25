<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css?v=1.0">
    <title>Register</title>
</head>

<body>
    <main class="contenedor">
        <h1 class="titulo">FORMULARIO</h1>
        <hr>

        <div class="contenedor_form">
            <form class="formulario" action="">
                <h2 class="subtitulo">Datos Persona</h2>

                <div class="campos">
                    <div class="campos_div">
                        <label class="label" for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div class="campos_div">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" required>
                    </div>
                    <div class="campos_div">
                        <label for="edad">Edad</label>
                        <input type="number" id="edad" name="edad" min="0" required>
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
                    <button>Enviar</button>
                </div>
            </form>
        </div>


    </main>
</body>

</html>