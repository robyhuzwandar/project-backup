var mongoose = require('mongoose');

var NoteSchema = mongoose.Schema({
    nama: String,
    alamat: String,
    nohp: String
}, {
    timestamps: true
});

module.exports = mongoose.model('Note', NoteSchema);