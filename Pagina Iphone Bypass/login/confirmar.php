<?php

$conn = mysqli_connect("localhost","root","","database_duende");

$usuarios = $_POST['name'];
$contra = $_POST['pass'];

$query = "SELECT * FROM login WHERE name ='".$usuarios."' and password='".$contra."' ";

$result = mysqli_query($conn,$query);
$cont = mysqli_fetch_array($result);

if($cont==1){
        echo "Usuario correcto";
    }else{
        echo "No se encontro este usuario";
}
?>