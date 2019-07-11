var express = require('express');
var body_parser = require('body-parser');
var pengurus = require('./app/Controller/pengurusController');
var app = express();

app.use(body_parser.urlencoded({ extended: true }));
app.use(body_parser.json());

app.use('/pengurus', pengurus);

module.exports = app;
app.listen(3000, function() {
    console.log("Server is listening on port 3000");
});