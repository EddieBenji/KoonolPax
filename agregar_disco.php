<?php
/**
 * Created by PhpStorm.
 * User: romarinpc
 * Date: 5/13/15
 * Time: 9:00 AM
 */
include 'actions/search_all.php';

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
    <form action="actions/disco/alta_disco.php" method="post">
        <label for="nombre">Nombre del Disco</label>
        <input type="text" name="nombre"/>
        <br/>

        <label for="interprete">Interprete</label>
        <select name="artist" id="artist" title="artist">
            <?php foreach ($artistas as $artista): ?>
                <option value="<?php echo $artista["cod_i"]; ?>"><?php echo $artista["desc_i"]; ?></option>
            <?php endforeach ?>
        </select>
        <br/>

        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" min="0"/>
        <br/>

        <label for="sello">Sello</label>
        <select name="sello" id="sello" title="sello">
            <?php foreach ($sellos as $sello): ?>
                <option value="<?php echo $sello["cod_s"]; ?>"><?php echo $sello["desc_s"]; ?></option>
            <?php endforeach ?>
        </select>
        <br/>

        <label for="precio">Precio</label>
        <input type="number" name="precio" min="0"/>
        <br/>

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha"/>
        <br/>

        <label for="categoria">Categoría</label>
        <select name="category" id="category" title="category">
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?php echo $categoria["cod_cat"]; ?>"><?php echo $categoria["desc_cat"]; ?></option>
            <?php endforeach ?>
        </select>
        <br/>

        <input type="submit" value="Guardar Disco" required/>
    </form>
</center>


</body>
</html>