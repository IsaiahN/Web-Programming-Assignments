
const mongoose = require('mongoose');
const {Schema} = mongoose;

const userSchema = new Schema({
    pantherId: String,
    first_name: String,
    last_name: String,
    department: String,
    level: String,
    campus: String,
    degree: String,
    email: String,
    college: String,
    year: Number,
    check_in: Boolean
})

mongoose.model('users', userSchema);