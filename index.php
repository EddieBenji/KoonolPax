<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13/05/2015
 * Time: 12:16 PM
 */

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/pagina.css" title="style">
    <title>Koonol Paax</title>
</head>

<body>
<!-- Contenedor -->
<div id="contenedor">

    <!-- Cabecera -->
    <div id="cabecera">
        <div id="logo">
            <h1><span>Koonol Paax</span></h1>
        </div>

        <div id="buscador">
            <form action="buscador.php" method="post">
                <!--Buscar &nbsp; <input name="busqueda" type="text"/>-->
                <button>Buscar</button>
            </form>
        </div>

        <div class="clear"></div>
    </div>
    <!-- /Cabecera -->

    <!-- Menu principal -->
    <div id="menu">
        <ul id="menu_principal">
            <li><a href='login.php'>Ver Carrito</a></li>
            <?php if(isset($_SESSION["admin"])  && $_SESSION["admin"] == 1) {?>
            <li><a href="menu.php">Administrador</a></li>
            <?php } ?>
        </ul>

        <div class="clear"></div>
    </div>


    <!-- Lateral -->
    <div id="lateral">

        <!-- Noticias -->
        <div id="noticias">
            <h2>Discos</h2>

            <p><a href="buscador.php?modo=n">Novedades</a></p>

            <p><a href="buscador.php?modo=b">Los más vendidos</a></p>

            <p><a href="buscador.php?modo=i">Los artistas más vendidos</a></p>

            <h3><a href="#">Enlaces relacionados</a></h3>

        </div>
        <!-- /Noticias -->

        <!-- Publicidad -->
        <div id="publicidad">
            <h2>Publicidad</h2>

            <p>No olvide dejar de revisar la últimas ediciones de discos en nuestra página.</p>

            <p><a href="#">Seguir leyendo...</a></p>
        </div>
        <!-- /Publicidad -->

    </div>
    <!-- /Lateral -->

    <div id="contenido">

        <!-- Principal -->
        <div id="principal">

            <div class="articulo">
                <h2>Dream Chaser </h2>

                <img src="imagenes/sara.jpg" alt="Imagen gen?rica"/>

                <p>Sarah Brightman es una soprano, actriz y bailarina británica que interpreta música del género
                    denominado Classical Crossover. Ha cantado en inglés, español, francés, catalán, latín, alemán,
                    italiano, japonés, hindi, mandarín, ruso y occitano.</p>

                <p>Interprete: SARAH BRIGHTMAN</p>

                <p>Formato: CD</p>


                <p><a href="#">Seguir leyendo...</a></p>
            </div>

            <div class="articulo">
                <h2>ALIZEE</h2>

                <img src="imagenes/alize.jpg" alt="Imagen gen?rica"/>

                <p>Alizée Jacotey, conocida mundialmente como Alizée, es una cantante francesa nacida en Ajaccio,
                    Córcega. Su nombre se refiere a la forma femenina de los vientos alisios.</p>

                <p>Actualmente se encuentra promocionando su quinto álbum de estudio, titulado 5, que salió a la venta
                    el 25 de marzo de 2013. Del cual se desprende su primer sencillo llamado A cause de l'automne..</p>

                <p></p>

                <p>Interprete: ALIZZE</p>

                <p>Formato: CD</p>

                <p><a href="#">Seguir leyendo...</a></p>
            </div>

        </div>
        <!-- /Principal -->

        <!-- Secundario -->
        <div id="secundario">
            <h2>Promociones</h2>

            <p>Excelente disco!, la verdad Enjambre es uno de los mejores grupos con que se cuenta actualmente, tienen
                estilo propio, todo el apoyo!.</p>

            <p><a href="#">Seguir leyendo...</a></p>

            <h2>Eventos</h2>

            <p>Un lujo de disco! siempre evolucionando, no se estancan en lo de siempre. Lo mejor pop: dramas y
                comedias, desfachatez, electronica: peligros, errores garrafales, un robot no cree en dios.</p>

            <p><a href="#">Seguir leyendo...</a></p>
        </div>
        <!-- /Secundario -->

    </div>
    <!-- /Contenido -->

    <div class="clear"></div>

    <!-- Pie -->
    <div id="pie">
			<span class="enlaces">
				<a href="#">Preventas</a> |
				<a href="#">Entretenimiento</a> |
				<a href="#">Nuevos lanzamientos</a> |
			</span>
			
			<span class="copyright">
				&copy; Copyright Koonol Paax
			</span>

        <div class="clear"></div>
    </div>
    <!-- /Pie -->

</div>
<!-- /Contenedor -->

</body>
</html>