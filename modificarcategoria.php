<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 10:11 AM
 */

include 'actions/search_all_categorias.php'

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Baja Categoría</title>
</head>
<body>

<?php include 'menu.php' ?>

<br/>

<center>

        <table>
            <thead>
            <tr>
                <td>
                    Nombre
                </td>
                <td>
                    Modificar
                </td>
            </tr>
            </thead>

            <tbody>
            <?php foreach($categorias as $categoria): ?>
                <tr>
                    <td><?php echo $categoria['desc_cat']?></td>
                    <td><a href="actualizarcategoria.php?id=<?php echo $categoria['cod_cat']?>">ver detalle</a></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>

</center>

<a href="index.php">Ir a Inicio</a>

</body>
</html>