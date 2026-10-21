<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido recibido</title>
</head>
<body>
    <?php
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $pedido = $_POST["pedido"];

    echo "<h1>Pedido recibido en Salteneria El Horno</h1>";

    echo "<p>Nombre completo: "
        . htmlspecialchars($nombre, ENT_QUOTES, "UTF-8")
        . "</p>";

    echo "<p>Correo electronico: "
        . htmlspecialchars($correo, ENT_QUOTES, "UTF-8")
        . "</p>";

    echo "<p>Pedido: "
        . htmlspecialchars($pedido, ENT_QUOTES, "UTF-8")
        . "</p>";

    $carta = [
        "Saltena de pollo - Bs 6",
        "Docena de saltenas - Bs 65",
        "Refresco de mocochinchi - Bs 5"
    ];

    echo "<h2>Carta de la salteneria</h2>";
    echo "<ul>";

    foreach ($carta as $item) {
        echo "<li>" . $item . "</li>";
    }

    echo "</ul>";

    echo "<p>Te atiende Samuel Alfredo Amador Corimayo</p>";
    ?>
</body>
</html>