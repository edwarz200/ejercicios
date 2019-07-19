<?php
include("php/funciones.php");
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
    if ($num_regs==0) {
        echo "<br><br> <span class='mensajes'>No se encontraron registros con esta busqueda :(</span>";
    }else {
        ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Contacto N.</th>
            <th scope="col">Email</th>
            <th scope="col">Nombre</th>
            <th scope="col">Sexo</th>
            <th scope="col">Nacimiento</th>
            <th scope="col">País</th>
            <th scope="col">Imagen</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i = 1;
            while ($registro = $ejecutar_consulta->fetch_object()) {
                
        ?>
        <tr>
            <th scope="row"><?php echo $i;?></th>
            <td><?php echo $registro->email; ?></td>
            <td><?php echo $registro->nombre; ?></td>
            <td><?php if($registro->sexo=="F"){echo"Mujer";}else{echo"Hombre";}; ?></td>
            <td><?php echo $registro->nacimiento; ?></td>
            <td><?php echo $registro->pais; ?></td>
            <td onclick="mostrarimg(<?php echo $i;?>,1);"><i class="fas fa-search"></i></td>
        </tr>
        <section class="sectionImg  cambio" id="sectionImg<?php echo $i;?>">
            <div class="divImg"></div>
            <div class="cambio transformdiv">
                <span class="cambio text-white " onclick="mostrarimg(<?php echo $i;?>,0);" ><i class="far fa-times-circle fa-lg"></i></span>
                <img class="w-100 h-100" src="img/fotos/<?php echo $registro->imagen;?>">
            </div>
        </section>
        <?php
        $i++;
            }
        ?>
    </tbody>
</table>
<?php
    }

?>