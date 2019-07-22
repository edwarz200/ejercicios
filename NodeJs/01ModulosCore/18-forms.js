'use strict'

var http = require('http').createServer(webServer),
    form = require('fs').readFileSync('assets/form.html'),
    util = require('util'),
    dataString = '',
    querystring = require('querystring');


function webServer(req, res) {
    if (req.method == 'GET') {
        res.writeHead(200, { 'Content-Type': 'text/html' });
        res.end(form);
    }

    if (req.method == 'POST') {
        req
            .on('data', function(data) {
                dataString += data;
            })
            .on('end', function() {
                var dataObject = querystring.parse(dataString),
                    dataJSON = util.inspect(dataObject),
                    templateString = `
Los datos que enviaste por POST como Srting son: ${dataString}
Los datos que enviaste por POST como objeto son: ${JSON.stringify(dataObject)}
Los datos que enviaste por POST como objeto JSON son: ${dataJSON}`;
                console.log(templateString);
                res.end(templateString);
            })
    }
}

http
    .on('request', webServer)
    .listen(3000)

console.log('Servidor corriendo en http://localhost:3000/')