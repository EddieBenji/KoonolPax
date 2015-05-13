<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 03/05/2015
 * Time: 01:50 PM
 */


include 'actions/search_for_cds.php';


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
    </tr>
    </thead>
    <tbody>

    <?php foreach ($resultados as $resultado): ?>
        <tr>
            <td><?php echo $resultado['nom_d'] ?></td>
            <td><?php echo $resultado['desc_i'] ?></td>
            <td><?php echo $resultado['desc_cat'] ?></td>
            <td><?php echo $resultado['desc_s'] ?></td>
            <td><?php echo $resultado['precio_d'] ?></td>
            <td><a href="carrito.php?cod_d=<?php echo $resultado['cod_d'] ?>&cod_i=<?php echo $resultado['cod_i'] ?>">Comprar</a></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>

<a href="index.php">Ir a inicio</a>
</body>
</html>