
const mongoose = require('mongoose');
const {Schema} = mongoose;

const userSchema = new Schema({
    eventId: { type: String, default: null },
    pantherId: String,
    first_name: String,
    last_name: String,
    department: { type: String, default: null },
    level: { type: String, default: null },
    campus: { type: String, default: null },
    degree: { type: String, default: null },
    email: { type: String, default: null },
    college: { type: String, default: null },
    year: { type: Number, default: null },
    check_in: { type: Boolean, default: false },
})

mongoose.model('users', userSchema);