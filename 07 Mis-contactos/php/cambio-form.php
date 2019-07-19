<div id="divimg">
    <label id="img" for="imagen">
        <section id="img_contacto" title="Cambia esta imagen por la que desees subir">
        </section>
        <section id="loader"></section>
        <section id="visorArchivo">
        </section>
        <section id="imgplus" title="Cambia esta imagen por la que desees subir">
            <div>
                <i class="fas fa-sync-alt fa-7x"></i>
                <p>Modificar Imagen</p>
            </div>
        </section>
    </label>
    <input name="Archivo_fls" type="file" id="imagen" onchange="return validarExt(1)" class="cambio" title="Tu Foto"
        hidden>
    <input type="hidden" name="foto_hdn" value="<?php echo "$registro_contacto->imagen"; ?>">
</div>
<div>
    <label for="email">Email: </label>
    <input type="email" id="email" class="cambio" name="email_txt" placeholder="Escribe tu email" title="Tu email"
        value="<?php echo $registro_contacto->email; ?>" disabled required>
    <input type="hidden" name="email_hdn" id="email_hdn" value="<?php echo $registro_contacto->email;?>">
</div>
<div>
    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" class="cambio" name="nombre_txt"
        title="Escribe tu nombre (este campo solo acepta tildes y letras, minimio 4 letras)"
        placeholder="Escribe tu Nombre" value="<?php echo $registro_contacto->nombre; ?>"
        pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{1,15}" minlength="4" required>
</div>
<div>
    <label for="m">Sexo: </label>
    &nbsp;&nbsp;<input type="radio" id="m" class="cambio" name="sexo_rdo" value="M" title="Tu Sexo"
        <?php if ($registro_contacto->sexo == "M") { echo "checked"; }?> required>
    &nbsp;<label for="m">Masculino</label>
    &nbsp;&nbsp;&nbsp;<input type="radio" id="f" class="cambio" name="sexo_rdo" value="F" title="Tu Sexo"
        <?php if ($registro_contacto->sexo == "F") { echo "checked"; }?> required>
    &nbsp;<label for="f">Femenino</label>
</div>
<div>
    <label for="nacimiento">Fecha de nacimiento: </label>
    <input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" placeholder="Escribe tu fecha de nacimiento"
        title="Tu Cumpleaños" value="<?php echo $registro_contacto->nacimiento; ?>" required>
</div>
<div>
    <label for="telefono">Telefono: </label>
    <input type="number" id="telefono" class="cambio" name="telefono_txt" placeholder="Escribe tu telefono"
        title="Tu telefono" value="<?php echo $registro_contacto->telefono; ?>" required>
</div>
<div>
    <label for="pais">País: </label>
    <select name="pais_slt" id="pais" class="cambio" title="Tu pais" required>
        <option value="">Seleccionar... </option>
        <?php include("select-pais.php"); ?>
    </select>
</div>
<div>
    <input type="submit" id="enviar-alta" class="cambio" name="enviar_btn" value="Modificar">
</div>