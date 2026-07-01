<?php
$mensaje_estado = ""; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    include 'conexion.php';

    
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $empresa = $_POST['empresa'];

    
    $sql = "INSERT INTO contactos (nombre, telefono, correo, empresa) VALUES (?, ?, ?, ?)";
    
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssss", $nombre, $telefono, $correo, $empresa); 

    
    if ($stmt->execute()) {
        $mensaje_estado = "<p style='color: #ffffff; text-align: center; font-weight: bold; font-size: 1.2rem; margin-bottom: 20px;'>¡Tus datos fueron enviados con éxito!</p>";
    } else {
        $mensaje_estado = "<p style='color: red; text-align: center;'>Hubo un error al enviar los datos. Intenta nuevamente.</p>";
    }

    
    $stmt->close();
    $conexion->close();
}
?>
<?php include 'includes/header.php'; ?>

<main class="main-contacto">
    <div class="contacto-wrapper">
        
        
        <div class="contacto-card">

            <?php echo $mensaje_estado; ?>
            
            <form action="" method="POST" class="formulario-flex">
                
                <div class="campos-formulario">
                    <input type="text" name="nombre" class="input-contacto" placeholder="👤 Nombre" required>
                    <input type="tel" name="telefono" class="input-contacto" placeholder="📞 Teléfono" required>
                    <input type="email" name="correo" class="input-contacto" placeholder="✉️ Correo" required>
                    <input type="text" name="empresa" class="input-contacto" placeholder="🏢 Empresa (Opcional)">
                </div>

                <div class="boton-formulario">
                    <button type="submit" class="btn-enviar">Envía tus datos</button>
                </div>

            </form>
        </div>

    </div>
</main>

<?php include 'includes/footer.php'; ?>