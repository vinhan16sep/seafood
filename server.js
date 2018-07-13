var socket  = require( 'socket.io' );
var express = require('express');
var q       = require('q');
var app     = express();

var mysql = require('mysql');
var pool = mysql.createPool({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database : 'seafood_db'
});

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
    console.log("Client connected");
    // Fetch list room in database
    pool.getConnection(function(err, connection){
        if(err){
            throw err;
            console.log(err);
        }else{
            console.log(connection);
            connection.query("SELECT * FROM room", function(err, rows){
                if(err){
                    throw err;
                }else{
                    io.sockets.emit("Server-send-list-rooms", rows);
                }
            });
            connection.release();
        }
    });

    socket.on( 'Client-send-register-data', function(data) {
        // socket.join(socket.id);
        socket.clientName = data.name;
        socket.clientEmail = data.email;
        socket.clientPhone = data.phone;

        var registerData = {
            socket_id: socket.id,
            name: data.name,
            email: data.email,
            phone: data.phone
        };

        var promise = new Promise(function(resolve, reject){
            pool.getConnection(function(err, connection){
                if(err){
                    reject(err);
                }else{
                    resolve(connection);
                }
            });
        }).then(function(connection){
            var connected = new Promise(function(resolve, reject){
                connection.query("INSERT INTO room SET ?", registerData, function(err, result){
                    if(err){
                        reject(err);
                    }else{
                        resolve(result);
                    }
                });
            }).then(function(result){
                if(result){
                    connection.query("SELECT * FROM room", function(err, rows){
                        io.sockets.emit("Server-send-list-rooms", rows);
                    });
                }

                connection.release();
            }).catch(function(err){
                throw {error: err, queryRequest: queryRequest}
            });
        }).catch(function(err){
            throw {error: err, queryRequest: queryRequest}
        });

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
