<?php 
include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];

$query ="INSERT INTO usario(nombre_completo, correo, usuario, contra) 
        VALUES ('$nombre_completo', '$correo', '$usuario', '$contra')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>  alert ("usuario almacenando exitosamente");
    window.location ="../login.php";
    </script>
    
    ';
    
}
else {
    echo '
    <script>  alert ("intentalo de nuevo, usuario no almacenado");
    window.location ="../login.php";
    </script>
    
    ';
}
mysqli_close($conexion);
?>


