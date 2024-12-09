<?php
require ('conexion.php');

$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$mensaje = $_POST['mensaje'];

/*
echo $nombre;
echo $cargo;
echo $mensaje;
*/

$conexion->query("INSERT INTO tabla_mensajes (id, nombre, cargo, mensaje) VALUES (NULL, '$nombre', '$cargo', '$mensaje')");

?>

<script language = javascript>
alert("Gracias <?php echo $nombre ?>, su mensaje se envió correctamente ♥");
self.location = "../contactenos.html";
</script>





