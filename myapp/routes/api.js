var express = require('express');
var router = express.Router();
var ZoneController = require('../controllers/ZoneController');

router.post('/zone/create', ZoneController.CreateZone)
router.get('/zone', ZoneController.findZone)
router.get('/zone/:id', ZoneController.findZoneById)

// router.get('/:resource/:id', function(req, res, next) {
//     var resource = req.params.resource;
//     var id = req.params.id;
//     if (resource == 'zone') {
//         ZoneController.findById(id, function(err, results) {
//             if (err) {
//                 res.json({
//                     confirmation: 'fail',
//                     message: "Not Found"
//                 });
//                 return;
//             }
//             res.json({
//                 confirmation: 'success',
//                 results: results
//             });
//             next();
//         });
//     }
// });


// var resource = req.params;
//     console.log(resource);
//     if (resource == 'zone') {
//         ZoneController.selelctAll(req.query, function(err, zone) {
//             console.log(err);
//             if (err) {
//                 res.json({
//                     confirmation: 'fail',
//                     message: err
//                 });
//                 return;
//             }
//             res.json({
//                 confirmation: 'success',
//                 results: zone
//             });
//         });
//     } else {
//         response.end("Contact Admin - Not Working\n")
//     }
module.exports = router