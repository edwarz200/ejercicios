<form id="consulta-contacto" action="" name="consulta_frm" method="get">
    <fieldset>
        <legend>Consulta de contactos</legend>
        <label for="consulta-lista">Tipo de Consulta:</label>
        <select name="consulta_slc" id="consulta-lista" required>
            <option value="" <?php if(isset($_GET["consulta_slc"])){ echo " disabled";} ?> >---</option>
            <option value="todos" <?php if($_GET["consulta_slc"]== "todos"){ echo " selected";} ?> >Todos</option>
            <option value="email" <?php if($_GET["consulta_slc"]== "email"){ echo " selected";} ?> >Por Email</option>
            <option value="inicial" <?php if($_GET["consulta_slc"]== "inicial"){ echo " selected";} ?> >Por inicial</option>
            <option value="sexo" <?php if($_GET["consulta_slc"]== "sexo"){ echo " selected";} ?> >Por sexo</option>
            <option value="pais" <?php if($_GET["consulta_slc"]== "pais"){ echo " selected";} ?> >Por País</option>
            <option value="buscador" <?php if($_GET["consulta_slc"]== "buscador"){ echo " selected";} ?> >Tipo Buscador</option>
        </select>
        <?php
            include("php/conexion.php");
            switch($_GET["consulta_slc"]){
                case "todos":
                    include("php/consultas/consulta-todo.php");
                break;
                case "email":
                    include("php/consultas/consulta-email.php");
                break;
                case "inicial":
                    include("php/consultas/consulta-inicial.php");
                break;
                case "sexo":
                    include("php/consultas/consulta-sexo.php");
                break;
                case "pais":
                    include("php/consultas/consulta-pais.php");
                break;
                case "buscador":
                    include("php/consultas/consulta-buscador.php");
                break;
            }
            include("php/cerrar_conexion.php");
        ?>
    </fieldset>
</form>
<script src="Js/consulta-contactos.js"></script>