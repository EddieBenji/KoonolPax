<?php
/**
 * Created by PhpStorm.
 * User: lalo
 * Date: 15/05/15
 * Time: 03:26 PM
 */
include "actions/buscar_discos_para_eliminar.php"

?>


<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Baja Disco</title>
</head>
<body>

<center>
    <?php include "_menu.php" ?>

    <form action="actions/disco/baja_disco.php" method="post">
    <table border="1">
        <thead>
        <tr>
            <td>Disco</td>
            <td>Precio</td>
            <td>Interprete</td>
            <td>Categoría</td>
            <td>Sello</td>
            <td>Dar de baja</td>
        </tr>
        </thead>


        <tbody>
            <?php while ($disco = $results->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $disco['nom_d'] ?></td>
                    <td><?php echo $disco['precio_d'] ?></td>
                    <td><?php echo $disco['desc_i'] ?></td>
                    <td><?php echo $disco['desc_cat'] ?></td>
                    <td><?php echo $disco['desc_s'] ?></td>
                    <td><input name="options[]" type="checkbox" value="<?php echo $disco['cod_d'] ?>"</td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
        <br/>
        <input type="submit" value="Dar baja"/>
    </form>

</center>

</body>
</html>