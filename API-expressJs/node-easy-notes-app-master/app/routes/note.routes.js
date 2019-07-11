module.exports = function(app) {

    var notes = require('../controllers/note.controller.js');

    // Create a new Note
    app.post('/notes', notes.create);

    // Retrieve all Notes
    app.get('/notes/all', notes.findAll);

    // Retrieve a single Note with noteId
    app.get('/notes/:nama', notes.findOne);

    // Update a Note with noteId
    app.put('/notes/:nama', notes.update);

    // Delete a Note with noteId
    app.delete('/notes/:nama', notes.delete);
}