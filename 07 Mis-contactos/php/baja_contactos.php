<form action="php/borrar.php" id="baja-contacto" name="baja_frm" method="post"
    enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend>Baja de Contactos</legend>
        <div>
            <label for="email">Email:</label>
            <select id="email" class="cambio" name="email_slc" required>
                <option value="">Seleccionar...</option>
                <?php 
                    include("conexion.php");
                    include("select-email.php");
                    include("cerrar_conexion.php");
                ?>
            </select>
        </div>
        <div>
            <input type="submit" id="enviar-baja" class="cambio" name="enviar_btn" value="eliminar">
        </div>
        <?php include("mensajes.php");?>
    </fieldset>
</form>