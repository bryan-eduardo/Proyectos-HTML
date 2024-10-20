<?php
$usuario =$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESION['usuario']=$usuario;

include('db.php');

$consulta="SELECT * FROM usuarios where usuario= '$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  header("location:home.php");

}else{
  ?>
  <?php
  include("index.php");
  ?>
  <h4 class="bad"style="color: #cb1212ea; text-align: center;">Contraseña o Usuario Incorrectos</h4>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);  