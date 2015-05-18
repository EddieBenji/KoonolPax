<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 09:50 AM
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
    <form action="actions/categoria/baja_categoria.php" method="post">
        <table>
            <thead>
            <tr>
                <td>
                    Nombre
                </td>
                <td>
                    Dar de baja
                </td>
            </tr>
            </thead>

            <tbody>
            <?php foreach($categorias as $categoria): ?>
                <tr>
                    <td><?php echo $categoria['desc_cat']?></td>
                    <td><input name="options[]" type="checkbox" value="<?php echo $categoria['cod_cat'] ?>"/></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        <br/>
        <input type="submit" value="Dar baja"/>

    </form>
</center>

</body>
</html>