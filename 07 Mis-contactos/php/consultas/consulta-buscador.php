<br>
<div>
    <input type="hidden" name="op" value="consultas">
    <label for="bucador">Buscar: </label>
    <input type="search" id="bucador" class="cambio" name="q" placeholder="Escribe tu busqueda"
        title="Escribe tu busqueda (minimo 4 caracteres)" required>
</div>
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="Buscar">
<?php
    if ($_GET["q"]!=null) {
        if (strlen ( $_GET["q"] ) >= 4) {
            $q = $_GET["q"];
            $consulta = "SELECT * FROM contactos WHERE MATCH(email, nombre, sexo, telefono, pais) AGAINST('$q' IN BOOLEAN MODE)";
            include("tabla_resultados.php");
        }else{
            echo "<br><br> <span class='mensajes'>La busqueda es demasiado corta</span>";
        }
}
?>