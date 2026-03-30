<?php
$jugador = "";

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $jugador = $_POST["nombre"] ?? "";

    }
    

$bot = mt_rand(1,3);
$movimiento = "" ;
$vida = 50;
$outPut="";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='UTF-8'>
    <title>Papu Batallas</title>
</head>
<body>
    <h1>Papu batallas</h1>
    <form method="POST">
       <h2><?= $jugador ?> selecciona tu movimiento:</h2>

       <h3>Reglas: <br> amarillo > azul <br> azul > rojo <br> rojo > amarillo</h3>

       <input type="hidden" name="nombre" value="<?= ($jugador) ?>">

       <label>rojo</label>
       <input type="radio" name="movimiento" value="1" required> <br>
       <label>azul</label>
       <input type="radio" name="movimiento" value="2"> <br>
       <label>amarillo</label>
       <input type="radio" name="movimiento" value="3"> <br>

       <button type="submit">Accion</button> <br>

    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["movimiento"])) {
        $movimiento = (int)$_POST["movimiento"];

        $outPut = match (true) {
        $movimiento == 1 && $bot == 1 => "empate" ,
        $movimiento == 2 && $bot == 2 => "empate" ,
        $movimiento == 3 && $bot == 3 => "empate" ,

        $movimiento == 1 && $bot == 3 => "ganaste" ,
        $movimiento == 2 && $bot == 1 => "ganaste" ,
        $movimiento == 3 && $bot == 2 => "ganaste" ,

        $movimiento == 1 && $bot == 2 => "perdiste" ,
        $movimiento == 2 && $bot == 3 => "perdiste" ,
        $movimiento == 3 && $bot == 1 => "perdiste" ,

        default => "Error al seleccionar",
        };

        echo "<h3>Resultado: ¡$outPut!</h3>";
        
        $colores = [1 => "Rojo", 2 => "Azul", 3 => "Amarillo"];
        echo "<p>El bot eligió: " . $colores[$bot] . "</p>";
    }
    ?>


</body>
</html>