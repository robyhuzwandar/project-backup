var express = require('express');
var bodyParser = require('body-parser');
var app = express();

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

//koneksi ke database
var dbConfig = require('./config/database.config');
var mongoose = require('mongoose');

mongoose.Promise = global.Promise;
mongoose.connect(dbConfig.url);

mongoose.connection.on('error', function() {
    console.log('Koneksi ke Database Gagal');
    process.exit();
});

mongoose.connection.once('open', function() {
    console.log('Koneksi ke Database Berhasil');
});

var pengurus = require('./app/routes/pengurus.route');
app.use('/pengurus', pengurus);

app.listen(3000, function() {
    console.log("Server Berjalan di post 3000");
});

module.exports = app;