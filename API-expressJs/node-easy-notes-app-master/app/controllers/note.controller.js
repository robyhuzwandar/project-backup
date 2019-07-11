var Note = require('../models/note.model.js');

exports.create = function(req, res) {
    // Create and Save a new Note
    // if (!req.body.content) {
    //     return res.status(400).send({ message: "Note can not be empty" });
    // }

    var note = new Note({ nama: req.body.nama, alamat: req.body.alamat, nohp: req.body.nohp });

    note.save(function(err, data) {
        if (err) {
            console.log(err);
            res.status(500).send({ message: "Some error occurred while creating the Note." });
        } else {
            res.send(data);
        }
    });
};

exports.findAll = function(req, res) {
    // Retrieve and return all notes from the database.
    Note.find(function(err, notes) {
        if (err) {
            console.log(err);
            res.status(500).send({ message: "Some error occurred while retrieving notes." });
        } else {
            res.send(notes);
        }
    });
};

exports.findOne = function(req, res) {
    // Find a single note with a noteId
    Note.findOne(req.params.nama, function(err, note) {
        if (err) {
            console.log(err);
            if (err.kind === 'ObjectId') {
                return res.status(404).send({ message: "Note not found with id " + req.params.nama });
            }
            return res.status(500).send({ message: "Error retrieving note with id " + req.params.nama });
        }

        if (!note) {
            return res.status(404).send({ message: "Note not found with id " + req.params.nama });
        }

        res.send(note);
    });
};

exports.update = function(req, res) {
    // Update a note identified by the noteId in the request
    Note.findOne(req.params.nama, function(err, note) {
        if (err) {
            console.log(err);
            if (err.kind === 'ObjectId') {
                return res.status(404).send({ message: "Note not found with id " + req.params.nama });
            }

            return res.status(500).send({ message: "Error finding note with id " + req.params.nama });
        }

        if (!note) {
            return res.status(404).send({ message: "Note not found with id " + req.params.nama });
        }

        note.nama = req.body.nama;
        note.alamat = req.body.alamat;
        note.nohp = req.body.nohp;

        note.save(function(err, data) {
            if (err) {
                res.status(500).send({ message: "Could not update note with id " + req.params.noteId });
            } else {
                res.send(data);
            }
        });
    });
};

exports.delete = function(req, res) {
    // Delete a note with the specified noteId in the request
    Note.findOneAndRemove(req.params.nama, function(err, note) {
        if (err) {
            console.log(err);
            if (err.kind === 'ObjectId') {
                return res.status(404).send({ message: "Note not found with id " + req.params.nama });
            }
            return res.status(500).send({ message: "Could not delete note with id " + req.params.nama });
        }

        if (!note) {
            return res.status(404).send({ message: "Note not found with id " + req.params.nama });
        }
        res.send({ message: "Note deleted successfully!" })
    });
};