
const mongoose = require('mongoose');
const {Schema} = mongoose;

const eventSchema = new Schema({
    name: String,
    description: String,
    location: String,
    time: { type : Date, default: Date.now }
})

mongoose.model('events', eventSchema);