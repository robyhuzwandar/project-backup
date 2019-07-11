var Zone = require('../models/Zone');

exports.CreateZone = function(req, res) {

    Zone.save(function(err, zones) {
        if (err) {
            res.status(500).send({
                success: false,
                msg: "Some error occurred while retrieving category."
            })
        } else {
            res.send({
                success: true,
                msg: "Success !",
                data: zones
            })
        }
    })

}
exports.findZone = function(req, res) {
    Zone.find(function(err, zones) {
        if (err) {
            res.status(500).send({
                success: false,
                msg: "Some error occurred while retrieving category."
            })
        } else {
            res.send({
                success: true,
                msg: "Success !",
                data: zones
            })
        }
    })
}

exports.findZoneById = function(req, res) {
    Zone.findById(req.params.id, function(err, zones) {
        if (err) {
            res.status(500).send({
                success: false,
                msg: "Some error occurred while retrieving Zone."
            })
        } else {
            res.send({
                success: true,
                msg: "Success !",
                data: zones
            })
        }
    })
}