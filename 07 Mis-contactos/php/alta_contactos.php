<form action="php/agregar-contacto.php" id="alta-contacto" name="alta_frm" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Alta de Contacto</legend>
        <div id="div">
            <label for="email">Email: </label>
            <input type="email" id="email" class="cambio" name="email_txt" placeholder="Escribe tu email"
                title="Tu email" required>
        </div>
        <div id="div">
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" class="cambio" name="nombre_txt" title="Tu Nombre"
                placeholder="Escribe tu Nombre" required>
        </div>
        <div id="div">
            <label for="m">Sexo: </label>
            &nbsp;&nbsp;<input type="radio" id="m" class="cambio" name="sexo_rdo" value="M" title="Tu Sexo" required>
            &nbsp;<label for="m">Masculino</label>
            &nbsp;&nbsp;&nbsp;<input type="radio" id="f" class="cambio" name="sexo_rdo" value="F" title="Tu Sexo"
                required>
            &nbsp;<label for="f">Femenino</label>
        </div>
        <div id="div">
            <label for="nacimiento">Fecha de nacimiento: </label>
            <input type="date" id="nacimiento" class="cambio" name="nacimiento_txt"
                placeholder="Escribe tu fecha de nacimiento" title="Tu Cumpleaños" required>
        </div>
        <div id="div">
            <label for="telefono">Telefono: </label>
            <input type="number" id="telefono" class="cambio" name="telefono_txt"
                placeholder="Escribe tu telefono" title="Tu telefono" required>
        </div>
        <div id="div">
            <label for="pais">País: </label>
            <select name="pais_slt" id="pais" class="cambio" title="Tu pais" required>
                <option value="">Seleccionar... </option>
                <?php include("select-pais.php")?>
            </select>
        </div>
        <div id="div">
            <label for="imagen">Foto: </label>
            <input type="file" value="hellowda" id="imagen" class="cambio" name="imagen_txt" title="Tu Foto" placeholder="Sube tu foto" required>
        </div>
        <div id="div">
            <input type="submit" id="enviar-alta" class="cambio" name="enviar_btn" value="Agregar">
        </div>
        <?php include("php/mensajes.php")?>
    </fieldset>
</form>