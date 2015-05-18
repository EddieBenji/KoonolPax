<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 10:16 AM
 */

include 'actions/find_disco.php';


?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Actualizar Disco</title>
</head>
<body>

<center>
    <?php include "_menu.php" ?>
</center>
<br/>
<center>
    <form action="actions/disco/actualizar_disco.php" method="post">

        <input type="hidden" name="id_disco" value="<?php echo $disco['cod_d']; ?>"/>

        <label for="nombre">Nombre del Disco</label>
        <input type="text" name="nombre" value="<?php echo $disco['nom_d'] ?>"/>
        <br/>

        <label for="interprete">Interprete</label>
        <select name="artist" id="artist" title="artist">
            <?php foreach ($artistas as $artista): ?>
                <option value="<?php echo $artista["cod_i"]; ?>"><?php echo $artista["desc_i"]; ?></option>
            <?php endforeach ?>
        </select>
        <br/>

        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" min="0" value="<?php echo $disco["cant_d"] ?>"/>
        <br/>

        <label for="sello">Sello</label>
        <select name="sello" id="sello" title="sello">
            <?php foreach ($sellos as $sello): ?>
                <option value="<?php echo $sello["cod_s"]; ?>"><?php echo $sello["desc_s"]; ?></option>
            <?php endforeach ?>
        </select>
        <br/>

        <label for="precio">Precio</label>
        <input type="number" name="precio" min="0" value="<?php echo $disco["precio_d"] ?>"/>
        <br/>

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" value="<?php echo $disco['fec_d'] ?>"/>
        <br/>

        <label for="categoria">Categoría</label>
        <select name="category" id="category" title="category">
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?php echo $categoria["cod_cat"]; ?>"><?php echo $categoria["desc_cat"]; ?></option>
            <?php endforeach ?>
        </select>
        <br/>

        <input type="submit" value="Actualizar Disco" required/>

    </form>
</center>

<a href="index.php">Ir a Inicio</a>

</body>
</html>