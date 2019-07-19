<br>
<div id="div">
    <input type="hidden" name="op" value="consultas">
    <label for="pais">País: </label>
    <select name="pais_slc" id="pais" class="cambio" title="Tu pais" required>
        <option value="">---</option>
        <?php 
            include("php/select-pais.php");
        ?>
    </select>
</div>
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="Buscar">
<?php
    if ($_GET["pais_slc"]!=null) {
        $pais= $_GET["pais_slc"];
        $consulta = "SELECT * FROM contactos WHERE pais = '$pais'";
        include("tabla_resultados.php");
}
?>