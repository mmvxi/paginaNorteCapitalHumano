<?php

$pagina_actual = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Norte Capital Humano</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php" class="logo-nav-link">
                <img src="assets/img/logorecortado.png" alt="Inicio" class="logo-nav">
            </a>

            <ul>
                <li class="nav-principals">
                    <a href="nosotros.php" class="btn-minimalist <?php if($pagina_actual == 'nosotros.php') echo 'activo'; ?>">Nosotros</a>
                    <a href="servicios.php" class="btn-minimalist <?php if($pagina_actual == 'servicios.php') echo 'activo'; ?>">Servicios</a>
                    <a href="metodologia.php" class="btn-minimalist <?php if($pagina_actual == 'metodologia.php') echo 'activo'; ?>">Metodología</a>
                </li>
                <li>
                    <a href="contacto.php" class="btn-minimalist <?php if($pagina_actual == 'contacto.php') echo 'activo'; ?>">Contáctanos</a>
                </li>
            </ul>
        </nav>
    </header>