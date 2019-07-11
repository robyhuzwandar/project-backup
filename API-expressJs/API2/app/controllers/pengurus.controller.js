var mongoose = require('mongoose');
var Pengurus = require('../controllers/pengurus.controller');

var pengurusController = {};

//show all pengurus
pengurusController.list = function(req, res) {
    Pengurus.find(function(err, pengurus) {
        if (err) {
            console.log(err);
            res.status(500).send({ message: "Gagal Menampilkan data" });
        } else {
            res.send(pengurus);
        }
    });
};