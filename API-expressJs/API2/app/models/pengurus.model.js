var mongoose = require('mongoose');
var pengurusSchame = mongoose.Schema({
    nama: String,
    alamat: String,
    nohp: String
}, {
    timestamps: true
});

module.exports = mongoose.model('Pengurus', pengurusSchame);