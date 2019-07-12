<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<?php
$mensaje1= $_GET['mensaje1'];
$mensaje2= $_GET['mensaje2'];
if (isset($mensaje1)) {
    echo "<script>
        Swal.fire({
            position: 'center',
            type: 'success',
            title: '$mensaje1' ,
            showConfirmButton: false,
            timer: 1500
        })
    </script>";
}else if (isset($mensaje2)) {
    echo "<script>
        Swal.fire({
            title: 'Ocurrio un error inesperado:' ,
            text: ".$mensaje2.",
            type: 'warning',
            confirmButtonColor: '#3085d6',
            button: true,
        })

    </script>";
}
?>