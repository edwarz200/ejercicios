'use strict'

var http = require('http').createServer(),
    fs = require('fs'),
    index = fs.createReadStream('assets/index.html');

function webServer(req, res) {
    res.writeHead(200, { 'Content-Type': 'text/html' });
    index.pipe(res);
}

http
    .on("request", webServer)
    .listen(3000, 'localhost');

console.log('Servidor corriendo en http://localhost:3000/');