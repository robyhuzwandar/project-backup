var express = require('express');
var router = express.Router();
var pengurus = require('../controllers/pengurus.controller');


//get All data
router.get('/', function(req, res) { pengurus.list(req, res); });
// //single data
// router.get('/get/:nama', function(req, res) { pengurus.show(req, res); });
// //save data
// router.post('/save', function(req, res) { pengurus.save(req, res); });
// //update data
// router.put('/update/:nama', function(req, res) { pengurus.update(req, res); });
// //delete data
// router.delete('/delete/:nama', function(req, res) { pengurus.list(req, res); });