<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 10:16 AM
 */

include 'actions/categoria/find_categoria.php';

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Actualizar Categoría</title>
</head>
<body>

<center>
    <?php include "_menu.php" ?>
</center>
<br/>
<center>
    <form action="actions/categoria/actualizar_categoria.php" method="post">

        <input type="hidden" name="id_categoria" value="<?php echo $categoria['cod_cat']; ?>"/>

        <label for="nombre_categoria">Nombre de la Categoría</label>
        <input type="text" name="nombre_categoria" value="<?php echo $categoria['desc_cat']; ?>"/>
        <br/><br/>
        <input type="submit" value="Actualizar" required/>
    </form>
</center>

</body>
</html>