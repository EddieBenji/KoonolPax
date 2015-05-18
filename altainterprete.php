<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 08:56 AM
 */
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Alta Intérprete</title>
</head>
<body>

<center>
    <?php include "_menu.php" ?>
</center>
<br/>
<center>
    <form action="actions/alta_interprete.php" method="post">
        <label for="nombre_interprete">Nombre del Intérprete</label>
        <input type="text" name="nombre_interprete"/>
        <br/><br/>
        <input type="submit" value="Dar Alta" required/>
    </form>
</center>

</body>
</html>