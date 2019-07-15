<?php
// foreach($_FILES["archivo_fls"]as $clave=> $valor){
//     echo"<li>Propiedad: $clave --- Valor: $valor </li>";
// }
// $archivo = $_FILES["archivo_fls"]["tmp_name"];
// $destino = "archivos/".$_FILES["archivo_fls"]["name"];
// $tipo = $_FILES["archivo_fls"]["type"];    
    
// if ($tipo == "image/jpeg"|| $tipo == "image/png" || $tipo == "image/wbpm" ) {
//     move_uploaded_file($archivo,$destino);
//     echo '<script>swal({
//             title: "Archivo Subido!",
//             icon: "success",
//             button: false,
//             timer: 1000,
//         });</script>'; 
//     echo("<img id=\"img\" src='archivos/".$_FILES["archivo_fls"]["name"]."'>");
// }else{
//     echo("<script>
//     swal({
//         title: \"Tipo de archivo incorrecto\",
//         text: \"solo se adminten archivos de imagen(png,jpg,jpeg,wbpm)\",
//         icon: \"warning\",
//         dangerMode: true,
//     }).then((willDelete) => {
//         if (willDelete) {
//         swal(\"Redirecionando\", { icon: \"success\",});
//         location.href = \"index.php\"
//         } else {
//         }
//     }); </script>");
// }
?>
2