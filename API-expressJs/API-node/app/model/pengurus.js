var mongoose = require('mongoose');
var Schema = mongoose.Schema;
var pengurus_Schema = new Schema({
    nama: String,
    alamat: String,
    nohp: String
});

var pengurus = mongoose.model("Pengurus", pengurus_Schema);
module.exports.pengurus = pengurus;