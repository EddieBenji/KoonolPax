<?php

include 'actions/search_all_interpretes.php'

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Baja Interprete</title>
</head>
<body>

    <?php include 'menu.php' ?>

    <br/>

    <center>
        <form action="actions/baja_interprete.php" method="post">
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
                    <?php foreach($artistas as $artista): ?>
                        <tr>
                            <td><?php echo $artista['desc_i']?></td>
                            <td><input name="options[]" type="checkbox" value="<?php echo $artista['cod_i'] ?>"/></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <br/>
            <input type="submit" value="Dar baja"/>

        </form>
    </center>

    <a href="index.php">Ir a Inicio</a>

</body>
</html>