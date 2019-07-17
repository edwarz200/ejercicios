;

$(document).ready(function efectosMisContactos() {
    $("#imgpred > i").addClass("fas fa-camera fa-7x");
    $("#principal form").fadeIn(2000);
    $(".loaderp").fadeOut("slow", function() {
        $(".loaderp").css("opacity", "0");
    });
});

function quitaropacity() {
    var loader = document.getElementById("loader");
    var visorimg = document.getElementById("visorArchivo");
    // var oculimgpre = document.getElementById("imgpred");
    visorimg.style.opacity = "1";
    loader.style.opacity = "0";
    // oculimgpre.style.opacity = "1";
};

function validarExt(p) {
    var loader = document.getElementById("loader");
    var mostimgplus = document.getElementById("imgplus");
    var oculimgpre = document.getElementById("imgpred");
    var visorimg = document.getElementById("visorArchivo");
    var img_contacto = document.getElementById("img_contacto");
    var archivoInput = document.getElementById("imagen");
    var archuivoRuta = archivoInput.value;
    var extPermitidas = /(.PNG|.JPG|.GIF)$/i;
    var n = 0;
    loader.style.opacity = "1";
    if (!extPermitidas.exec(archuivoRuta)) {
        alert("Solo imagenes png");
        archivoInput.value = "";
        return false;
    } else {
        if (archivoInput.files && archivoInput.files[0]) {
            var visor = new FileReader();
            visor.onload = function(e) {
                if (n === 0) {
                    visorimg.style.opacity = "0";
                    if (p == 0) {
                        mostimgplus.style.display = 'block';
                        oculimgpre.style.opacity = "0";
                        oculimgpre.style.display = 'none';
                    }
                    if (p == 1) {
                        img_contacto.style.opacity = "0";
                        img_contacto.style.display = 'none';
                    }
                    visorimg.style.display = 'block';
                    visorimg.innerHTML = '<embed src= "' + e.target.result + '">';
                    n++;
                } else {
                    visorimg.innerHTML = '<embed src= "' + e.target.result + '">';
                    // console.log(e.target.result);
                }
            }
            visor.readAsDataURL(archivoInput.files[0]);
            setTimeout(quitaropacity, 1000);

        }
    }
};