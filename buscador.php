<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 03/05/2015
 * Time: 12:17 PM
 */

include "actions/search_all.php"

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
                    <option value="0">Todos los discos</option>
                    <?php foreach($discos as $disco): ?>
                        <option value="<?php echo $disco["cod_d"]; ?>"><?php echo $disco["nom_d"]; ?></option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Artista:</td>
            <td>
                <select name="artist" id="artist" title="artist">
                    <option value="0">Todos los artistas</option>
                    <?php foreach($artistas as $artista): ?>
                        <option value="<?php echo $artista["cod_i"]; ?>"><?php echo $artista["desc_i"]; ?></option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Categoría</td>
            <td>
                <select name="category" id="category" title="category">
                    <option value="0">Todas las categorías</option>
                    <?php foreach($categorias as $categoria): ?>
                        <option value="<?php echo $categoria["cod_cat"]; ?>"><?php echo $categoria["desc_cat"]; ?></option>
                    <?php endforeach ?>
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