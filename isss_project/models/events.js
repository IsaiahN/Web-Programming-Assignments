
const mongoose = require('mongoose');
const {Schema} = mongoose;

const eventSchema = new Schema({
    name: String,
    description: { type: String, default: null },
    location: { type: String, default: null },
    time: { type: Date, default: Date.now }
})

mongoose.model('events', eventSchema);