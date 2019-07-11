// var mongoose = require('mongoose');
// var ZoneSchema = new mongoose.Schema({
//     name: { type: String, default: '' },
//     location: { type: Array, default: [] },
//     timestamp: { type: Date, default: Date.now }
// });

// module.exports = mongoose.model('ZoneSchema', ZoneSchema);

const mongoose = require('mongoose'),
    Schema = mongoose.Schema

const CategorySchema = new Schema({
    name: {
        type: String,
        required: [true]
    },
    location: {
        type: String,
        required: [true, "Category Describtion can't be blank"]
    },
}, {
    timestamps: true
});

module.exports = mongoose.model('Category', CategorySchema)