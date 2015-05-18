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



    <table border="1">
        <thead>
        <tr>
            <td>Disco</td>
            <td>Intérprete</td>
            <td>Categoría</td>
            <td>Sello</td>
            <td>Precio</td>
            <td>Dar de Baja</td>
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
                <td><a href="actions/disco/eliminar_disco.php?id_disco=
                <?php echo $disco['cod_d'] ?>">Dar de baja</a>
                </td>
            </tr>
        <?php } ?>


        </tbody>
    </table>
</center>

</body>
</html>