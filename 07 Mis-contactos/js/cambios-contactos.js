window.onload = function() {
    var lista = document.getElementById("contacto-lista");
    lista.onchange = seleccionarContacto;

    function seleccionarContacto() {
        window.location = "?op=cambios&contacto_slc=" + lista.value;
    }
};

function traerimagen(j) {
    var visorimg = document.getElementById("img_contacto");
    var mostimgplus = document.getElementById("imgplus");
    mostimgplus.style.display = 'block';
    var phpimagen;
    phpimagen = j;
    visorimg.innerHTML = "<embed src='img/fotos/" + phpimagen + "'>";

    // return phpimagen;
}