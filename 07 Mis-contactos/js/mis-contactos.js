;
$(document).ready(function efectosMisContactos() {
    $("#principal form").fadeIn(2000);
    // $('#img').click(function() {
    //     // Cuando le dás click muestra #content
    //     $('#enviar-altaimg').click(function() {
    //             $(location).attr('href', "?op=altaimg");
    //         })
    //         // Simular click
    //     $('#enviar-altaimg').click();
    // });

});

function validarExt() {
    var n = 0;
    var archivoInput = document.getElementById("imagen");
    var archuivoRuta = archivoInput.value;
    var extPermitidas = /(.PNG|.JPG)$/i;
    if (!extPermitidas.exec(archuivoRuta)) {
        alert("Solo imagenes png");
        archivoInput.value = "";
        return false;
    } else {
        if (archivoInput.files && archivoInput.files[0]) {
            var visor = new FileReader();
            visor.onload = function(e) {
                if (n === 0) {
                    var mostimgplus = document.getElementById("imgplus");
                    var oculimgpre = document.getElementById("imgpred");
                    mostimgplus.style.display = 'block';
                    oculimgpre.style.display = 'none';
                    var visorimg = document.getElementById("visorArchivo");
                    visorimg.style.display = 'block';
                    visorimg.innerHTML = '<embed src= "' + e.target.result + '">';
                    n++;
                } else {
                    var visorimg = document.getElementById("visorArchivo");
                    visorimg = '<embed src= "' + e.target.result + '">';
                }
                console.log(visorimg);
            };
            visor.readAsDataURL(archivoInput.files[0]);

        }
    }
};