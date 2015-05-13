<?php
/**
 * Created by PhpStorm.
 * User: romarinpc
 * Date: 5/13/15
 * Time: 9:00 AM
 */
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Alta Sello</title>
</head>
<body>

<center>
    <?php include "_menu.php" ?>
</center>
<br/>
<center>
    <form action="../actions/disco/alta-disco.php" method="post">
        <label for="nombre">Nombre del Disco</label>
        <input type="text" name="nombre"/>
        <br/>

        <label for="interprete">Interprete</label>
        <input type="number" name="interprete"/>
        <br/>

        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" min="0"/>
        <br/>

        <label for="sello">Sello</label>
        <input type="number" name="sello" min="0"/>
        <br/>

        <label for="precio">Precio</label>
        <input type="number" name="precio" min="0"/>
        <br/>

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha"/>
        <br/>

        <label for="categoria">Precio</label>
        <input type="number" name="categoria" min="0"/>
        <br/>

        <input type="submit" value="Guardar Disco" required/>
    </form>
</center>

<a href="../index.html">Ir a Inicio</a>

</body>
</html>