<link rel="stylesheet" href="<?php echo site_url('assets/css/message.css') ?>">
<script src="<?php echo base_url('node_modules/socket.io-client/dist/socket.io.js');?>"></script>
<div class="content-wrapper">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="container app">
      <div class="row app-one">
        <div class="col-sm-4 side">
          <div class="side-one">
            <div class="row heading">
              <div class="col-sm-3 col-xs-3 heading-avatar">
                <div class="heading-avatar-icon">
                  <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                </div>
              </div>
              <div class="col-sm-1 col-xs-1  heading-dot  pull-right">
                <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
              </div>
              <div class="col-sm-2 col-xs-2 heading-compose  pull-right">
                <i class="fa fa-comments fa-2x  pull-right" aria-hidden="true"></i>
              </div>
            </div>

            <div class="row searchBox">
              <div class="col-sm-12 searchBox-inner">
                <div class="form-group has-feedback">
                  <input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
            </div>

            <div class="row sideBar" id="listClient">
            </div>
          </div>
        </div>

        <div class="col-sm-8 conversation">
          <div class="row heading">
            <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
              <div class="heading-avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
              </div>
            </div>
            <div class="col-sm-8 col-xs-7 heading-name">
              <a class="heading-name-meta">John Doe
              </a>
              <span class="heading-online">Online</span>
            </div>
            <div class="col-sm-1 col-xs-1  heading-dot pull-right">
              <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
            </div>
          </div>

          <div class="row message" id="conversation">

          </div>

          <div class="row reply" id="chatPosition">
              <input type="text" id="txtMessage" data-room="whatever" placeholder="Type your message…" autofocus>
              <input type="button" id="btnSend" data-room="whatever" value="Send">
          </div>
        </div>
      </div>
    </div>
</div>


<div id="chatPosition" width="800px" style="position: fixed;right:15px;bottom:15px">
<div>

<script type="text/javascript">
    var socket = io("http://localhost:3000");


    var chatWindow = '<div id="live-chat">'+
                        '    <header class="clearfix">'+
                        '        <a href="#" class="chat-close">x</a>'+
                        '        <h4>John Doe</h4>'+
                        '        <span class="chat-message-counter">3</span>'+
                        '    </header>'+
                        '    <div class="chat">'+
                        '        <div class="chat-history" id="chatContent">'+
                        ''+
                        '        </div>'+
                        '        <p class="chat-feedback">Your partner is typing?</p>'+
                        '            <fieldset>'+
                        '                <input type="text" id="txtMessage" data-room="whatever" placeholder="Type your message" autofocus>'+
                        '                <input type="button" id="btnSend" data-room="whatever" value="Admin Send">'+
                        '            </fieldset>'+
                        '    </div>'+
                        '</div>';

    var message = '<div class="row message-body">'+
                        '              <div class="col-sm-12 message-main-sender">'+
                        '                <div class="sender">'+
                        '                  <div class="message-text">'+
                        '                    I am doing nothing man!'+
                        '                  </div>'+
                        '                  <span class="message-time pull-right">'+
                        '                    Sun'+
                        '                  </span>'+
                        '                </div>'+
                        '              </div>'+
                        '            </div>';



    socket.on("Server-send-list-rooms", function(data){
        $("#listClient").html("");
        data.map(function(room){
            $("#listClient").append(
                '<div class="row sideBar-body personal-room" id="' + room.socket_id + '">'+
                                '                <div class="col-sm-3 col-xs-3 sideBar-avatar">'+
                                '                  <div class="avatar-icon">'+
                                '                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png">'+
                                '                  </div>'+
                                '                </div>'+
                                '                <div class="col-sm-9 col-xs-9 sideBar-main">'+
                                '                  <div class="row">'+
                                '                    <div class="col-sm-8 col-xs-8 sideBar-name">'+
                                '                      <span class="name-meta">'+ room.name +
                                '                    </span>'+
                                '                    </div>'+
                                '                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">'+
                                '                      <span class="time-meta pull-right">18:18'+
                                '                    </span>'+
                                '                    </div>'+
                                '                  </div>'+
                                '                </div>'+
                                '              </div>'
            );
        });
    });

    socket.on("Server-send-message-to-room", function(data){
        $("#conversation").html("");
        data.map(function(item){
            $("#conversation").append(item.author + ": " + item.text + "<br>");
        });
    });

    $("#listClient").on("click", ".personal-room", function(event){
        var clientRoom = $(this).attr("id");
        $("#txtMessage").attr("data-room", clientRoom).next().attr("data-room", clientRoom);

        socket.emit("Client-send-room-id", {
            room: $(this).attr("id")
        });
    });

    $("#btnSend").click(function(){
        socket.emit("Client-send-message", {
            room: $(this).attr("data-room"),
            author: "Admin",
            text: $(this).prev().val()
        });
    });

</script>
