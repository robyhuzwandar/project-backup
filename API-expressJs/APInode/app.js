const express = require('express');
var mongoose = require("mongoose");

const app = express();
mongoose.connect("localhost:27017/mean");
app.use('/api', require('./routes/api'));

app.listen(3000, () => console.log('Exampple app Listening on port 3000!'));