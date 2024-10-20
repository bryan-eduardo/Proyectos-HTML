<?php
include("db.php"); 

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];


$sql_verificar = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ?");
$sql_verificar->bind_param("s", $usuario);
$sql_verificar->execute();
$result = $sql_verificar->get_result();

if ($result->num_rows > 0) {

    include("registro.php");
    echo '<h4 class="bad" style="color: #cb1212ea; text-align: center;">El usuario ya está registrado, intente de nuevo.</h4>';
    $sql_verificar->close();
    $conexion->close();
} else {

    $contraseña_hashed = password_hash($contraseña, PASSWORD_DEFAULT);
    $sql_insertar = $conexion->prepare("INSERT INTO usuarios (nombre, correo, usuario, contraseña) VALUES (?, ?, ?, ?)");
    $sql_insertar->bind_param("ssss", $nombre, $correo, $usuario, $contraseña_hashed);

    if ($sql_insertar->execute()) {
        include("registro.php");
        echo '<h4 class="bad" style="color: #cb1212ea; text-align: center;">Usuario registrado con éxito</h4>';
    } else {
        include("registro.php");
        echo '<h4 class="bad" style="color: #cb1212ea; text-align: center;">Error de registro</h4>';
    }

    $sql_insertar->close();
    $sql_verificar->close();
    $conexion->close();
}
?>