// import flash.display.MoviClip;
// const READY_STATE_COMPLETE=4;
// NOT_FOUND = 404;
'use strict' //modo estricto para programar con buenas practicas

console.log('Hola Mundo desde Node.js, esto se vera en el terminal de comandos');

console.log(2 + 5);

// console.log(global);
var h = 12;
var m = 59;
var s = 48;
var am = 'a.m';
var pm = 'p.m';
var fh = pm;
setInterval(function() {
    s++;
    if (s >= 59) {
        s = 0;
        m++;
        if (m >= 59) {
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
    console.log(h + ':' + m + ':' + s + ' ' + fh);
}, 1000)