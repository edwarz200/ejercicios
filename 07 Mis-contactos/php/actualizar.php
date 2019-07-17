<?php
// UPDATE nombre_tela SET nombre_campo = valor_campo, otro_campo = otro_valor WHERE campo = valor
// $conexion = new mysqli('localhost', 'root', '', 'mis_contactos') or die("<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>");
// $conexion->set_charset("utf8");
// $imagen = $_POST['imagen_txt'];
// $emailm = $_POST['email_txt'];
$email = $_POST['email_hdn'];
$nombre = $_POST['nombre_txt'];
$sexo = $_POST['sexo_rdo'];
$nacimiento = $_POST['nacimiento_txt'];
$telefono = $_POST['telefono_txt'];
$pais = $_POST['pais_slt'];
// echo ;
include("conexion.php");
$consulta = "SELECT * FROM contactos WHERE email = '$email'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if ($num_regs == 1) {
    if (empty($_FILES['Archivo_fls']['tmp_name'])) {
        $imagen = $_POST['foto_hdn'];
        echo("entro");
        echo $_POST['foto_hdn'];
    }else{
        echo("entro2");
        include("funciones.php");
        $tipo = $_FILES['Archivo_fls']['type'];
        $archivo = $_FILES['Archivo_fls']['tmp_name'];
        $se_subio_imagen = subir_imagen($tipo,$archivo,$email);
        $imagen = $se_subio_imagen;
    }
    $consulta2 = "UPDATE contactos SET nombre = '$nombre',  sexo = '$sexo', nacimiento = '$nacimiento', telefono = '$telefono', pais = '$pais', imagen = '$imagen' WHERE email = '$email' ";
    $ejecutar_consulta2 = $conexion->query($consulta2);
    if ($ejecutar_consulta2) {
        $mensaje = "Se han hecho los cambios en los datos del contacto con el email <b>$email</b> =)";
    } else {
        $mensaje= "No se pudieron hacer los cambios en los datos del contacto con el email <b>$email</b> :(, Error:". $conexion->error;
    }
} else{
    $mensaje = "No se pudieron hacer los cambios en los datos del contacto con el email <b>$email</b> por que no existe o esta duplicado";
}
include("cerrar_conexion.php");
header("Location: ../index.php?op=cambios&mensaje=$mensaje&AR=".$_FILES['Archivo_fls']);
?>
<input type="text" value="<?php echo $imagen;?>">