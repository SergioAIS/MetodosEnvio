<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejemplo envio de información php</h2>
    <form action="index.php" method="POST">
        <label for="">Nombre Completo:</label><br>
        <input type="text" name="nombre"><br>
        <label for="">Dirección:</label><br>
        <input type="text" name="direccion"><br>
        <label for="">Teléfono:</label><br>
        <input type="text" name="telefono"><br>
        <input type="submit" value="Enviar"><br>
    </form>

    <?php
        //var_dump($_SERVER);
        if ($_SERVER["REQUEST_METHOD"] = "POST"){
            if(isset($_POST["nombre"])){
                $nombre = $_POST["nombre"];
                $dir = $_POST["direccion"];
                $telefono = $_POST["telefono"];
                
                echo "Nombre: " .$nombre."<br>";
                echo "Dirección: " . $dir . "<br>";
                echo "Teléfono: " . $telefono . "<br>";
            }else{
                echo "Coloque los datos porfavor";
            }
        
        }
    ?>
</body>
</html>