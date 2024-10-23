<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
     $use = 'caramelo';
    ?>
    <h1>FORMULARIO</h1>

    <form action="">
        <div>
            <label for="">Nombre</label>
            <input type="text">
        </div>
        <div>
            <label for="">Apellido</label>
            <input type="text">
        </div>
        <div>
            <label for="">Edad</label>
            <input type="int">
        </div>
        <div>
            <label for="">Sede</label>
            <select id="sede" placeholder="Select a sede">
                <option
                    value="">Seleccionar</option>
                <option value="1">limonar</option>
                <option value="2">picaleña</option>
            </select>
        </div>
        <div>
            <label for="">Area</label>
            <select id="area" placeholder="Select a area">
                <option
                    value="">Seleccionar</option>
                <option value="1">Administrativa</option>
                <option value="2">Compras</option>
                <option value="2">
                    <?php echo $use; ?>
                </option>
            </select>
        </div>


        <div>
            <button>Reset</button>
            <button>Enviar</button>
        </div>
    </form>

</body>

</html>