var pengurus = require('../model/pengurus').pengurus;
var mongoose = require('mongoose');
var config = require('../../config/database');
var express = require('express');
var router = express.Router();

//konek to database
mongoose.connect(config.database);

//route + controller

router.get('/', function(req, res) {
    res.send('Selamat Datang di API Himpunan Pemuda Kuta');
});

router.get('/get/all', function(req, res) {
    pengurus.find({}, function(err, data) {
        if (err) {
            return res.send(err);
        } else {
            res.json(data);
        }
    });
});

router.get('/get/:nama', function(req, res) {
    pengurus.findOne({ "nama": req.params.nama }, function(err, data) {
        if (err) {
            return res.send(err);
        } else {
            res.json(data);
        }
    });
});

router.post('/save', function(req, res) {
    var p = new pengurus;
    p.nama = req.body.nama;
    p.alamat = req.body.alamat;
    p.nohp = req.body.nohp;

    p.save(function(err) {
        if (err) {
            return res.send(err);
        } else {
            res.json({
                "status": "200",
                "keterangan": "sukses"
            });
        }
    });
});

router.delete('/delete/:nama', function(req, res) {
    pengurus.remove({
        "nama": req.params.nama
    }, function(err) {
        if (err) {
            return res.send(err);
        } else {
            res.json({
                "status": "200",
                "keterangan": "sukses"
            });
        }

    });
});

router.put('/update/:nama', function(req, res) {
    pengurus.update({ "nama": req.params.nama }, { "nama": req.body.nama, "alamat": req.body.alamat, "nohp": req.body.nohp },
        function(err, data) {
            if (err) {
                return res.send(err);
            } else {
                res.json({
                    "status": "200",
                    "keterangan": "sukses"
                });
            }
        });
});

module.exports = router;