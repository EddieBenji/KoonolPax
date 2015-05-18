<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 11:04 AM
 */

include 'actions/search_all_interpretes.php'

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Modificar Intérprete</title>
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
        <?php foreach($artistas as $artista): ?>
            <tr>
                <td><?php echo $artista['desc_i']?></td>
                <td><a href="actualizarinterprete.php?id=<?php echo $artista['cod_i']?>">ver detalle</a></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>

</center>


</body>
</html>