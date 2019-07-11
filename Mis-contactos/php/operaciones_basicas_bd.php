<?php
$conexion = new mysqli('localhost', 'root', '', 'mis_contactos') or die("<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>");
$conexion->set_charset("utf8");
?>
<ul>
    <?php
        echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
        echo "<h2>Base de datos: 'mis_contactos'</h2>";
        echo "<h1>Las 4 operaciones básicas a una BD</h1><br>";
?>
</ul>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BD</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <style>
    ul {
        text-align: center;
        margin: 0 auto;
    }

    li {
        list-style: none;
        padding: 10px;
    }

    span {
        font-size: 2em;
        color: #008f39;
    }
    </style>
</head>

<body>
    <?php 
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        $getr1= $_GET['respuesta1'];
        $getr2= $_GET['respuesta2'];
        if (isset($getr1)) {
            echo "<script>
                Swal.fire({
                    position: 'center',
                    type: 'success',
                    title: '$getr1' ,
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>";
        }else if (isset($getr2)) {
            echo "<script>
                Swal.fire({
                    title: 'Ocurrio un error inesperado:' ,
                    text: ".$getr2.",
                    type: 'warning',
                    confirmButtonColor: '#3085d6',
                    button: true,
                })

            </script>";
        }
    ?>
    <ul>
        <h1>1) Inserción de datos</h1>
        <hr><br>
        <form action="insercion.php" method="post" name="bdi_frm" enctype="application/x-www-form-urlencoded">
            <li><label>Email </label><input type="text" name="email_txt" required></li>
            <li><label>Nombre </label><input type="text" name="nombre_txt" required></li>
            <li><label>Sexo </label><input type="text" name="sexo_txt" required></li>
            <li><label>Nacimiento </label><input type="text" name="nacimiento_txt" required></li>
            <li><label>Telefono </label><input type="text" name="telefono_txt" required></li>
            <li><label>Pais </label> <select name="pais_slt">
                    <?php 
                $consulta = $conexion->query("SELECT * FROM pais");
                while($registro = $consulta->fetch_object()){
                    echo "<option value=\"".$registro->pais."\">".$registro->pais.'</option> <br/>';
                }
                mysqli_close($conexion);
            ?>
                </select></li>
            <li><label>Imagen </label><input type="text" name="imagen_txt" required></li>
            <li><input type="submit" name="btn_enviar" value="Enviar"></li>
        </form>
    </ul>
    <ul>
        <h1>2) Borrado de datos</h1>
        <hr><br>
        <form action="borrar.php" method="post" name="bdb_frm" enctype="application/x-www-form-urlencoded">
            <label>Selecciona los datos que deseas borrar </label><select name="email_slt">
                <?php 
                $conexion = new mysqli('localhost', 'root', '', 'mis_contactos') or die("<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>");
                $conexion->set_charset("utf8");
                $consulta = $conexion->query("SELECT * FROM contactos");
                while($registro = $consulta->fetch_object()){
                    $dato = $registro->email;
                    echo "<option value=\"".$registro->email."\">".$registro->email."<h1> - ".$registro->nombre." - ".$registro->sexo." - ".$registro->nacimiento." - ".$registro->telefono." - ".$registro->pais." - ".$registro->imagen."</h1></option><br/>";
                }
            ?>
            </select>
            <li><input type="submit" name="btn_enviar" value="Borrar"></li>
        </form>
    </ul>
    </ul>
    <ul>
        <h1>3) Modificación de datos</h1>
        <hr><br>
        <form action="actualizar.php" method="post" name="bdm_frm" enctype="application/x-www-form-urlencoded">
            <label>Selecciona los datos que deseas borrar </label><select name="email_slt">
                <option value="0">Seleccionar..</option>
                <?php 
                $conexion = new mysqli('localhost', 'root', '', 'mis_contactos') or die("<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>");
                $conexion->set_charset("utf8");
                $consulta = $conexion->query("SELECT * FROM contactos");
                while($registro = $consulta->fetch_object()){
                    $i= 1;
                    echo "<option value=\"".$registro->email."\">".$registro->email."<h1> - ".$registro->nombre." - ".$registro->sexo." - ".$registro->nacimiento." - ".$registro->telefono." - ".$registro->pais." - ".$registro->imagen."</h1></option><br/>";
                    $i++;
                }
            ?>
            </select>
            <?php
                echo "<script>;</script>";
            ?>
            <li><label>Email </label><input type="text" name="email_txt" required></li>
            <li><label>Nombre </label><input type="text" name="nombre_txt" required></li>
            <li><label>Sexo </label><input type="text" name="sexo_txt" required></li>
            <li><label>Nacimiento </label><input type="text" name="nacimiento_txt" required></li>
            <li><label>Telefono </label><input type="text" name="telefono_txt" required></li>
            <li><label>Pais </label> <select name="pais_slt">
                    <?php 
                $consulta = $conexion->query("SELECT * FROM pais");
                while($registro = $consulta->fetch_object()){
                    echo "<option value=\"".$registro->pais."\">".$registro->pais.'</option> <br/>';
                }
                mysqli_close($conexion);
            ?>
                </select></li>
            <li><label>Imagen </label><input type="text" name="imagen_txt" required></li>
            <li><input type="submit" name="btn_enviar" value="Modificar"></li>
        </form>
    </ul>
</body>

</html>