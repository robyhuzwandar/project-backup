const express = require('express');
const router = express.Router();

//get data from DB
router.get('/mahasiswa', function(req, res) {
    res.send({ type: 'GET' });
});

//add new data from DB
router.post('/mahasiswa', function(req, res) {
    res.send({ type: 'POST' });
});

//update data from DB
router.put('/mahasiswa/:id', function(req, res) {
    res.send({ type: 'PUT' });
});

//delete data from DB
router.delete('/mahasiswa/:id', function(req, res) {
    res.send({ type: 'DELETE' });
});

module.exports = router;