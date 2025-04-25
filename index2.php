<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Envío por GET</h2>
    <form action="index2.php" method="GET">
        <label for="">Universidad:</label><br>
        <input type="text" name="universidad"><br>
        <label for="">Carrera:</label><br>
        <input type="text" name="carrera"><br>
        <label for="">Semestre:</label><br>
        <input type="text" name="semestre"><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
    <?php
    //var_dump($_GET);
    if ($_SERVER["REQUEST_METHOD"]=="GET"){
        if (isset($_GET["universidad"])){

            $u = $_GET["universidad"];
            echo $u;
        }
    }
    ?>
</body>
</html>