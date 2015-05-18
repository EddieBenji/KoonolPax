<?php
/**
 * Created by PhpStorm.
 * User: romarinpc
 * Date: 5/13/15
 * Time: 8:59 AM
 */

include '../actions/buscar_discos_para_eliminar.php';

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Discos</title>
</head>
<body>


<table border="1" cellspacing="6" cellpadding="10">
    <!--    Deberá haber un for para llenar esta vista -->
    <thead>
    <tr>
        <td>Disco</td>
        <td>Intérprete</td>
        <td>Categoría</td>
        <td>Sello</td>
        <td>Precio</td>
        <td>Comprar</td>
        <td>Operaciones</td>
    </tr>
    </thead>
    <tbody>
    <?php while ($disco = $results->fetch_assoc()) { ?>

        <tr>
            <td><?php echo $disco['nom_d'] ?></td>
            <td><?php echo $disco['desc_i'] ?></td>
            <td><?php echo $disco['desc_cat'] ?></td>
            <td><?php echo $disco['desc_s'] ?></td>
            <td><?php echo $disco['precio_d'] ?></td>
            <td><a href="carrito.php?cod_d=<?php echo $disco['cod_d'] ?>&cod_i=<?php echo $disco['cod_i'] ?>">Comprar</a></td>
            <td><a href="actions/disco/baja_disco.php?id=<?php echo $disco['cod_d'] ?>">Eliminar</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<a href="../index.html">Ir a inicio</a>
</body>
</html>