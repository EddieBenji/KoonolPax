<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Alta Sello</title>
</head>
<body>

<center>
<?php include "_menu.php" ?>
</center>
<br/>
<center>
<form action="actions/sello/alta_sello.php" method="post">
    <label for="nombre_sello">Nombre del Sello</label>
    <input type="text" name="nombre_sello"/>
    <br/><br/>
    <input type="submit" value="Dar Alta" required/>
</form>
</center>


</body>
</html>