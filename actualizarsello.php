<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 11:15 AM
 */

include 'actions/find_sello.php';

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Actualizar Sello</title>
</head>
<body>

<center>
<?php include "_menu.php" ?>
</center>
<br/>
<center>
    <form action="actions/actualizar_sello.php" method="post">

        <input type="hidden" name="id_sello" value="<?php echo $sello['cod_s']; ?>"/>

        <label for="nombre_sello">Nombre del Sello</label>
        <input type="text" name="nombre_sello" value="<?php echo $sello['desc_s']; ?>"/>
        <br/><br/>
        <input type="submit" value="Actualizar" required/>
    </form>
</center>


</body>
</html>