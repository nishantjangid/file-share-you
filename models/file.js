const mongoose = require("mongoose");

const Schema = mongoose.Schema;

const fileSchema = new Schema({
    filename : {
        type : String,
        required: true
    },
    path : {
        type : String,
        required : true,
    },
    size : {
        type : Number,
        reuired : true
    },
    uuid : {
        type : String,
        reuired : true
    },
    sender : {
        type : String,
        required : false
    },
    receiver : {
        type : String,
        required : false
    }
}, {timestamp : true});

module.exports = mongoose.model('File', fileSchema);