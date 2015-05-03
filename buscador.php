<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 03/05/2015
 * Time: 12:17 PM
 */
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscador</title>
</head>
<body>
<h1>Bienvenido al buscador de discos</h1>

<form action="actions/search_for_cds.php" method="get">

    <table border=".5">
        <tr>
            <td>Por palabra clave:</td>
            <td>
                <label><input type="text" name="key_word" required/></label>
            </td>
        </tr>
        <tr>
            <td>Nombre Disco:</td>
            <td>
                <select name="cd_name" id="cd_name" title="cd_name">
                    <option value="Todos">Todos los discos</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Artista:</td>
            <td>
                <select name="artist" id="artist" title="artist">
                    <option value="Todos">Todos los artistas</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Categoría</td>
            <td>
                <select name="category" id="category" title="category">
                    <option value="Todos">Todas las categorías</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button>Enviar consulta</button>
            </td>
        </tr>
    </table>
</form>

<a href="index.html">Ir a inicio</a>
</body>
</html>