var http = require('http').Server();
var io = require('socket.io')(http);
var Redis = require('ioredis');

var redis = new Redis();
redis.psubscribe('news-action.*');
redis.on('pmessage', function (pattern, channel, message) {
    console.log('message received ' + message);
    console.log('Channel ' + channel);
    message = JSON.parse(message);
    io.emit(channel + ":" + message.event, message.data)
});

http.listen(3000, function () {
    console.log('Listenin on port: 3000');
});