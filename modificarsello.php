<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 11:04 AM
 */

include 'actions/search_all_sellos.php'

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Modificar Sellos</title>
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
        <?php foreach($sellos as $sello): ?>
            <tr>
                <td><?php echo $sello['desc_s']?></td>
                <td><a href="actualizarsello.php?id=<?php echo $sello['cod_s']?>">ver detalle</a></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>

</center>

</body>
</html>