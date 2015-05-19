<?php include 'actions/ventas.php' ?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Ventas del mes</title>
</head>
<body>

    <?php include 'menu.php' ?>

    <table align="center" border="1">
        <thead>
            <tr>
                <td>Mes</td>
                <td>Año</td>
                <td>Ventas</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($ventas_del_mes as $ventas): ?>
                <tr>
                    <td><?php echo $ventas['monthname(fec_p)']?></td>
                    <td><?php echo '2015'?></td>
                    <td><?php echo $ventas['no_pedidos']?> </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>
</html>