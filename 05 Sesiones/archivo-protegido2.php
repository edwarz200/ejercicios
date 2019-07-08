<?php include("sesion.php");?>
Bienvenido
<?php echo $_SESSION["usuario"]; ?>
<br><br>
Estas en otra página segura con sesiones en PHP
<br><br>
<a href="archivo-protegido.php">Ir a la primer pagina segura</a>
<br><br>
<a href="salir.php">Cerrar Sesión</a>
<a href="http://localhost/ejercicio01/" title="Volver a http://localhost/ejercicio01/" style="position: fixed; bottom: 0; text-decoration: none; color: white; background-color: black; padding:5px 20px; border-radius: 3px;";><i class="fas fa-chevron-left"></i></a></body>