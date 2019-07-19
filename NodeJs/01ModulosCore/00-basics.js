// import flash.display.MoviClip;
// const READY_STATE_COMPLETE=4;
// NOT_FOUND = 404;
'use strict' //modo estricto para programar con buenas practicas

console.log('Hola Mundo desde Node.js, esto se vera en el terminal de comandos');

console.log(2 + 5);

// console.log(global);
var h = 5;
var m = 33;
var s = 50;
var r = s;
var am = "a.m";
var pm = "p.m";
var fh = pm;
var otroCero = '0';
setInterval(function() {
    r++;
    if (s == 60) {
        s = otroCero + r;
        m++;
        if (m == 60) {
            s = 0;
            m = 0;
            h++;
            if (h == 12 && fh == am) {
                fh = pm;
            } else {
                fh = am;
            }
            if (h == 13) {
                h = 1;
            }

        }
    }
    if (s == otroCero + 0) {
        console.log("entro1");
        s = otroCero + (s + 1);
    }
    if (s == otroCero + 10) {
        console.log("entro2");
        s = r;
    } else {
        console.log("entro3");
        s = r;
    }
    console.log(h + ":" + m + ":" + s + " " + fh);
}, 1000)