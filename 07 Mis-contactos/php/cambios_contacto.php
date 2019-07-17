<form action="php/actualizar.php" method="post" name="cambio_frm" enctype="multipar/form-data">
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
<script>
window.onload = function() {
    var lista = document.getElementById("contacto-lista");
    lista.onchange = seleccionarContacto;

    function seleccionarContacto() {
        window.location = "?op=cambios&contacto_slc=" + lista.value;
    }
};
var visorimg = document.getElementById("img_contacto");
var mostimgplus = document.getElementById("imgplus");
mostimgplus.style.display = 'block';

visorimg.innerHTML = '<embed src= "<?php echo "img/fotos/".$registro_contacto->imagen; ?>">';
</script>