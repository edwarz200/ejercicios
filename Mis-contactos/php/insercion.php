    <?php
// INSERT INTO nombre_tabla (campos_tabla) VALUES(valores_campos)
$conexion = new mysqli("localhost", "root", "", "mis_contactos") or die("<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>");
$conexion->set_charset("utf8");
$email = $_POST['email_txt'];
$nombre = $_POST['nombre_txt'];
$sexo = $_POST['sexo_txt'];
$nacimiento = $_POST['nacimiento_txt'];
$telefono = $_POST['telefono_txt'];
$pais = $_POST['pais_slt'];
$imagen = $_POST['imagen_txt'];
$sql = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES(\"$email\",\"$nombre\",\"$sexo\",\"$nacimiento\",\"$telefono\",\"$pais\",\"$imagen\")";
if ($conexion->query($sql) === TRUE) {
    $respuesta = "Se han insertados los datos en la Base de Datos =)";
    header("Location: operaciones_basicas_bd.php?respuesta1=.$respuesta"); 
} else {
    $respuesta= "\"Error:". $conexion->error."\"";
    header("Location: operaciones_basicas_bd.php?respuesta2=$respuesta"); 
    }
?>