<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 03/05/2015
 * Time: 01:28 PM
 */

include 'actions/searh_cd_for_buying.php';


?>
<!--A ESTA VISTA LE FALTA, YA QUE CUANDO GUARDE LA RELACIÓN DE COMPRA, DEBERÁ ACTUALIZAR LA BD. (PERO NO
SE HA HECHO) -->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito</title>
</head>
<body>

<form action="actions/end_shopping.php" method="post">
    <table border="1" cellpadding="2" cellspacing="2">
        <thead>
        <tr>
            <td>Disco</td>
            <td>Intérprete</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>Eliminar</td>
        </tr>
        <tr><input type="hidden" name="disc_id" value="<?php echo $cd['cod_d'] ?>"/>
            <td><input type="text" value="<?php echo $cd['nom_d'] ?>"/></td>
            <td><input type="text" value="<?php echo $cd['desc_i'] ?>"/></td>
            <td><input type="text" value="<?php echo $cd['precio_d'] ?>"/></td>
            <td><input type="text" name="disc_qty" value="<?php echo $cd['cant_d'] ?>"/></td>
            <td><input type="text"/></td>
        </tr>
        <tr>
            <td colspan="5">Total:</td>
        </tr>
        <tr>
            <td colspan="5">
                <button>Actualizar Cantidades</button>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <input type="submit" value="Terminar pedido"/>
            </td>
        </tr>
        </thead>
    </table>
</form>
<a href="index.php">Ir a inicio</a>


</body>
</html>