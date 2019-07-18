<form action="php/actualizar.php" method="post" name="cambio_frm" enctype="multipart/form-data">
    <fieldset>
        <legend>Cambios de contacto</legend>
        <div>
            <label for="contacto-lista">Contacto: </label>
            <select id="contacto-lista" class="cambio" name="contacto_slc"
                title="Selecciona el contacto que deseas modificar" required>
                <option value="">Seleccionar..</option>
                <?php
                    include("conexion.php");
                    include("select-email.php");
                ?>
            </select>
        </div>
        <?php
            if ($_GET["contacto_slc"]!=null) {
                $conexion2= conectarse();
                $contacto = $_GET["contacto_slc"];
                $consulta_contacto="SELECT * FROM contactos WHERE email='$contacto' ";
                $ejecutar_consulta_contacto = $conexion2->query($consulta_contacto);
                $registro_contacto = $ejecutar_consulta_contacto->fetch_object();

                include("php/cambio-form.php");
                include("php/cerrar_conexion.php");
            }
            include("php/mensajes.php");
        ?>
    </fieldset>
</form>
<script src="Js/cambios-contactos.js"></script>
<script> 
    var j = '<?php echo $registro_contacto->imagen; ?>';
    traerimagen(j);
</script>