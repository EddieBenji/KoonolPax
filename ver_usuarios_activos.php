<?php
/**
 * Created by PhpStorm.
 * User: romarinpc
 * Date: 5/15/15
 * Time: 6:21 PM
 */

include 'actions/usuarios_activos.php';

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php include 'menu.php' ?>

<center>
    <br/><br/><br/>
    <table border="2">
        <thead>
        <tr>
            <th>Usuario</th>
            <th>Pedidos realizados</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($usuarios_activos as $usuario_activo): ?>
            <tr>
                <td><?php echo $usuario_activo['nick_u'] ?></td>
                <td><?php echo $usuario_activo['pedidos_realizados'] ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</center>
</body>
</html>