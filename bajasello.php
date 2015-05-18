<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 10:03 AM
 */

include 'actions/search_all_sellos.php'

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Baja Sello</title>
</head>
<body>

<?php include 'menu.php' ?>

<br/>

<center>
    <form action="actions/sello/baja_sello.php" method="post">
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
            <?php foreach($sellos as $sello): ?>
                <tr>
                    <td><?php echo $sello['desc_s']?></td>
                    <td><input name="options[]" type="checkbox" value="<?php echo $sello['cod_s'] ?>"/></td>
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