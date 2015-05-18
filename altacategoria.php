<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 08:35 AM
 */
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Alta Categoría</title>
</head>
<body>

<center>
<?php include "_menu.php" ?>
</center>
<br/>
<center>
    <form action="actions/alta_categoria.php" method="post">
        <label for="nombre_categoria">Nombre de la Categoría</label>
        <input type="text" name="nombre_categoria"/>
        <br/><br/>
        <input type="submit" value="Dar Alta" required/>
    </form>
</center>


</body>
</html>