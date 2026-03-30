<?php
$jugador = "";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='UTF-8'>
    <title>Papu Batallas</title>
</head>
<body>
    <h1>Papu batallas</h1>
    <form method="POST" action="batalla.php">
        <h2>Nombra tu papu personaje:</h2>
        <label>Cual es tu papu nombre ? </label>
        <input type="text" name="nombre" required> <br>
            <h3>Empieza tu papu batalla!</h3>

        <button type="submit">Continuar</button> <br>
    </form>


</body>
</html>