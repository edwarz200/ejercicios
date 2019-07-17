<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> -->
<?php
if (isset($_GET["mensaje"])) {
    $mensaje = $_GET["mensaje"];
    echo "<span class='mensajes'>$mensaje</span>";
}
?>