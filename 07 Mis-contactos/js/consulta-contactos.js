window.onload = function() {
    var lista = document.getElementById("consulta-lista");
    lista.onchange = function() {
        window.location = "?op=consultas&consulta_slc=" + lista.value;
    }
}

function mostrarimg(p, j) {
    var div = document.querySelector("#sectionImg" + p + " .transformdiv");
    var sectimg = document.getElementById("sectionImg" + p);
    if (j == 0) {
        div.style.transform = "scale(0)";
        setTimeout(function() {
            document.querySelector("body").style.overflowX = "visible";
            document.querySelector("body").style.overflowY = "visible";
            sectimg.style.display = "none";
        }, 350);
    } else {
        sectimg.style.display = "block";
        document.querySelector("body").style.overflowX = "hidden";
        document.querySelector("body").style.overflowY = "hidden";
        setTimeout(function() {
            div.style.transform = "scale(1)";
        }, 1);
        // setTimeout(quitaropacity, 1000);
    }

}