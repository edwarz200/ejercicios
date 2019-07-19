<br>
<div>
    <input type="hidden" name="op" value="consultas">
    <label for="email">Email: </label>
    <input type="text" id="email" class="cambio" name="email_txt" placeholder="Escribe tu email"
        title="Escribe el email que deseas buscar" required>
</div>
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="Buscar">
<?php
    if ($_GET["email_txt"]!=null) {
        $email = $_GET["email_txt"];
        $consulta = "SELECT * FROM contactos WHERE email LIKE '%$email%'";
        include("tabla_resultados.php");
}
?>