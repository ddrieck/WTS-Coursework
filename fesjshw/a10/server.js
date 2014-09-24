var express = require('express');
var app = express();

app.use(express.static(__dirname + '/'));

app.listen(process.env.PORT || 3000);
app.use(express.bodyParser());

var qs = require ('querystring');

app.post('/test', function(req, res) {
    console.log('Inside the post request!');

    console.log(req.body);

});