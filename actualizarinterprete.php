<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 11:15 AM
 */

include 'actions/find_interprete.php';

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Actualizar Intérprete</title>
</head>
<body>

<center>
    <?php include "_menu.php" ?>
</center>
<br/>
<center>
    <form action="actions/interprete/actualizar_interprete.php" method="post">

        <input type="hidden" name="id_interprete" value="<?php echo $artista['cod_i']; ?>"/>

        <label for="nombre_interprete">Nombre del Intérprete</label>
        <input type="text" name="nombre_interprete" value="<?php echo $artista['desc_i'];?>" />
        <br/><br/>
        <input type="submit" value="Actualizar" required/>
    </form>
</center>

</body>
</html>