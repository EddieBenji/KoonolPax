<?php
/**
 * Created by PhpStorm.
 * User: romarinpc
 * Date: 5/13/15
 * Time: 8:59 AM
 */

include 'actions/disco/buscar_todo_disco.php';

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

    <?php foreach ($resultados as $resultado): ?>
        <tr>
            <td><?php echo $resultado['nom_d'] ?></td>
            <td><?php echo $resultado['desc_i'] ?></td>
            <td><?php echo $resultado['desc_cat'] ?></td>
            <td><?php echo $resultado['desc_s'] ?></td>
            <td><?php echo $resultado['precio_d'] ?></td>
            <td><a href="../carrito.php?cod_d=<?php echo $resultado['cod_d'] ?>&cod_i=<?php echo $resultado['cod_i'] ?>">Comprar</a></td>
            <td><a href="../actions/disco/eliminar_disco.php?id=<?php echo $resultado['cod_d'] ?>">Eliminar</a></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>

<a href="../index.html">Ir a inicio</a>
</body>
</html>