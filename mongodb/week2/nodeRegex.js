var MongoClient = require('mongodb').MongoClient;

MongoClient.connect('mongodb://localhost:27017/week2', function (err, db) {
    if (err) {
        throw err;
    }
    var query = { 'title' : { '$regex' : 'blacklist'} };
    var projection = { '_id' : false, 'title' : true };
    db.collection('reddit').find(query, projection).each(function (err, doc) {
        if (err) {
            throw err;
        }
        if (doc === null) {
            return db.close();
        }
        console.dir(doc.title);
    });
});