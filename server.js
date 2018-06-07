var socket  = require( 'socket.io' );
var express = require('express');
var app     = express();
var server  = require('http').createServer(app);
var io      = socket.listen( server );
var port    = process.env.PORT || 3000;

server.listen(port, function () {
  console.log('Server listening at port %d', port);
});

class User{
    constructor(uid, name, email, phone){
        this.uid = uid;
        this.name = name;
        this.email = email;
        this.phone = phone;
    }
}

class Message{
    constructor(room, author, text){
        this.room = room;
        this.author = author;
        this.text = text;
    }
}

var rooms = [];
var conversations = [];

io.on('connection', function (socket) {

    socket.on( 'Client-send-register-data', function(data) {
        // socket.join(socket.id);
        socket.clientName = data.name;
        socket.clientEmail = data.email;
        socket.clientPhone = data.phone;

        rooms.push(
            new User(socket.id, data.name, data.email, data.phone)
        );

        io.sockets.emit("Server-send-list-rooms", rooms);

        if(data.phone != ""){
            socket.emit("Server-send-create-room-status", socket.id);
        }else{
            socket.emit("Server-send-create-room-status", false);
        }
    });

    socket.on("Admin-send-message", function(data){
        socket.join(data.room);
        io.sockets.in(data.room).emit("Server-send-message-to-room", data.message);
    });

    socket.on("Client-send-room-id", function(data){
        socket.join(data.room);
        var privateConversation = [];
        conversations.map(function(item){
            if(item.room == data.room){
                privateConversation.push(item);
            }
        });
        io.sockets.in(data.room).emit("Server-send-message-to-room", privateConversation);
    });

    socket.on("Client-send-message", function(data){
        var author = socket.clientName;
        if(socket.clientName == undefined){
            author = "Admin";
        }
        conversations.push(
            new Message(data.room, author, data.text)
        );
        var privateConversation = [];
        conversations.map(function(item){
            if(item.room == data.room){
                privateConversation.push(item);
            }
        });
        console.log(privateConversation);
        io.sockets.in(data.room).emit("Server-send-message-to-room", privateConversation);
    });
});
