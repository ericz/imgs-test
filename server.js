var fs = require('fs');
var express = require('express');
var app = express.createServer();

var Imgs = require('imgs').Imgs;

app.use(express.static(__dirname + '/public'));
app.listen(8080);


// Start Binary.js server
var server = new Imgs({port: 8085, folder: 'static/'});

