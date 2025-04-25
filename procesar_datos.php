<?php
//Procesar infromación
echo "Estamos procesando sus datos.....";
echo "<br>";
//var_dump($_SERVER);
echo "<br>";
echo "Revisando el array POST";
echo "<br><br>";
//var_dump($_POST);
//Sacamos la información
$nombre = $_POST["nombre"];
$dir = $_POST["direccion"];
$telefono = $_POST["telefono"];

echo "Nombre: " .$nombre."<br>";
echo "Dirección: " . $dir . "<br>";
echo "Teléfono: " . $telefono . "<br>";

?>