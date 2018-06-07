<style>
    /* html,
    body,
    div,
    span {
      height: 100%;
      width: 100%;
      overflow: hidden;
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    } */

    body {
      background: url("http://shurl.esy.es/y") no-repeat fixed center;
      background-size: cover;
    }

    .fa-2x {
      font-size: 1.5em;
    }

    .app {
      position: relative;
      overflow: hidden;
      top: 19px;
      height: 650px;
      margin: 0;
      padding: 0;
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .06), 0 2px 5px 0 rgba(0, 0, 0, .2);
    }

    .app-one {
      background-color: #f7f7f7;
      height: 100%;
      overflow: hidden;
      margin: 0;
      padding: 0;
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .06), 0 2px 5px 0 rgba(0, 0, 0, .2);
    }

    .side {
      padding: 0;
      margin: 0;
      height: 100%;
    }
    .side-one {
      padding: 0;
      margin: 0;
      height: 100%;
      width: 100%;
      z-index: 1;
      position: relative;
      display: block;
      top: 0;
    }

    .side-two {
      padding: 0;
      margin: 0;
      height: 100%;
      width: 100%;
      z-index: 2;
      position: relative;
      top: -100%;
      left: -100%;
      -webkit-transition: left 0.3s ease;
      transition: left 0.3s ease;

    }


    .heading {
      padding: 10px 16px 10px 15px;
      margin: 0;
      height: 60px;
      width: 100%;
      background-color: #eee;
      z-index: 1000;
    }

    .heading-avatar {
      padding: 0;
      cursor: pointer;

    }

    .heading-avatar-icon img {
      border-radius: 50%;
      height: 40px;
      width: 40px;
    }

    .heading-name {
      padding: 0 !important;
      cursor: pointer;
    }

    .heading-name-meta {
      font-weight: 700;
      font-size: 100%;
      padding: 5px;
      padding-bottom: 0;
      text-align: left;
      text-overflow: ellipsis;
      white-space: nowrap;
      color: #000;
      display: block;
    }
    .heading-online {
      display: none;
      padding: 0 5px;
      font-size: 12px;
      color: #93918f;
    }
    .heading-compose {
      padding: 0;
    }

    .heading-compose i {
      text-align: center;
      padding: 5px;
      color: #93918f;
      cursor: pointer;
    }

    .heading-dot {
      padding: 0;
      margin-left: 10px;
    }

    .heading-dot i {
      text-align: right;
      padding: 5px;
      color: #93918f;
      cursor: pointer;
    }

    .searchBox {
      padding: 0 !important;
      margin: 0 !important;
      height: 60px;
      width: 100%;
    }

    .searchBox-inner {
      height: 100%;
      width: 100%;
      padding: 10px !important;
      background-color: #fbfbfb;
    }


    /*#searchBox-inner input {
      box-shadow: none;
    }*/

    .searchBox-inner input:focus {
      outline: none;
      border: none;
      box-shadow: none;
    }

    .sideBar {
      padding: 0 !important;
      margin: 0 !important;
      background-color: #fff;
      overflow-y: auto;
      border: 1px solid #f7f7f7;
      height: calc(100% - 120px);
    }

    .sideBar-body {
      position: relative;
      padding: 10px !important;
      border-bottom: 1px solid #f7f7f7;
      height: 72px;
      margin: 0 !important;
      cursor: pointer;
    }

    .sideBar-body:hover {
      background-color: #f2f2f2;
    }

    .sideBar-avatar {
      text-align: center;
      padding: 0 !important;
    }

    .avatar-icon img {
      border-radius: 50%;
      height: 49px;
      width: 49px;
    }

    .sideBar-main {
      padding: 0 !important;
    }

    .sideBar-main .row {
      padding: 0 !important;
      margin: 0 !important;
    }

    .sideBar-name {
      padding: 10px !important;
    }

    .name-meta {
      font-size: 100%;
      padding: 1% !important;
      text-align: left;
      text-overflow: ellipsis;
      white-space: nowrap;
      color: #000;
    }

    .sideBar-time {
      padding: 10px !important;
    }

    .time-meta {
      text-align: right;
      font-size: 12px;
      padding: 1% !important;
      color: rgba(0, 0, 0, .4);
      vertical-align: baseline;
    }

    /*New Message*/

    .newMessage {
      padding: 0 !important;
      margin: 0 !important;
      height: 100%;
      position: relative;
      left: -100%;
    }
    .newMessage-heading {
      padding: 10px 16px 10px 15px !important;
      margin: 0 !important;
      height: 100px;
      width: 100%;
      background-color: #00bfa5;
      z-index: 1001;
    }

    .newMessage-main {
      padding: 10px 16px 0 15px !important;
      margin: 0 !important;
      height: 60px;
      margin-top: 30px !important;
      width: 100%;
      z-index: 1001;
      color: #fff;
    }

    .newMessage-title {
      font-size: 18px;
      font-weight: 700;
      padding: 10px 5px !important;
    }
    .newMessage-back {
      text-align: center;
      vertical-align: baseline;
      padding: 12px 5px !important;
      display: block;
      cursor: pointer;
    }
    .newMessage-back i {
      margin: auto !important;
    }

    .composeBox {
      padding: 0 !important;
      margin: 0 !important;
      height: 60px;
      width: 100%;
    }

    .composeBox-inner {
      height: 100%;
      width: 100%;
      padding: 10px !important;
      background-color: #fbfbfb;
    }

    .composeBox-inner input:focus {
      outline: none;
      border: none;
      box-shadow: none;
    }

    .compose-sideBar {
      padding: 0 !important;
      margin: 0 !important;
      background-color: #fff;
      overflow-y: auto;
      border: 1px solid #f7f7f7;
      height: calc(100% - 160px);
    }

    /*Conversation*/

    .conversation {
      padding: 0 !important;
      margin: 0 !important;
      height: 100%;
      /*width: 100%;*/
      border-left: 1px solid rgba(0, 0, 0, .08);
      /*overflow-y: auto;*/
    }

    .message {
      padding: 0 !important;
      margin: 0 !important;
      background: url("w.jpg") no-repeat fixed center;
      background-size: cover;
      overflow-y: auto;
      border: 1px solid #f7f7f7;
      height: calc(100% - 120px);
    }
    .message-previous {
      margin : 0 !important;
      padding: 0 !important;
      height: auto;
      width: 100%;
    }
    .previous {
      font-size: 15px;
      text-align: center;
      padding: 10px !important;
      cursor: pointer;
    }

    .previous a {
      text-decoration: none;
      font-weight: 700;
    }

    .message-body {
      margin: 0 !important;
      padding: 0 !important;
      width: auto;
      height: auto;
    }

    .message-main-receiver {
      /*padding: 10px 20px;*/
      max-width: 60%;
    }

    .message-main-sender {
      padding: 3px 20px !important;
      margin-left: 40% !important;
      max-width: 60%;
    }

    .message-text {
      margin: 0 !important;
      padding: 5px !important;
      word-wrap:break-word;
      font-weight: 200;
      font-size: 14px;
      padding-bottom: 0 !important;
    }

    .message-time {
      margin: 0 !important;
      margin-left: 50px !important;
      font-size: 12px;
      text-align: right;
      color: #9a9a9a;

    }

    .receiver {
      width: auto !important;
      padding: 4px 10px 7px !important;
      border-radius: 10px 10px 10px 0;
      background: #ffffff;
      font-size: 12px;
      text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
      word-wrap: break-word;
      display: inline-block;
    }

    .sender {
      float: right;
      width: auto !important;
      background: #dcf8c6;
      border-radius: 10px 10px 0 10px;
      padding: 4px 10px 7px !important;
      font-size: 12px;
      text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
      display: inline-block;
      word-wrap: break-word;
    }


    /*Reply*/

    .reply {
      height: 60px;
      width: 100%;
      background-color: #f5f1ee;
      padding: 10px 5px 10px 5px !important;
      margin: 0 !important;
      z-index: 1000;
    }

    .reply-emojis {
      padding: 5px !important;
    }

    .reply-emojis i {
      text-align: center;
      padding: 5px 5px 5px 5px !important;
      color: #93918f;
      cursor: pointer;
    }

    .reply-recording {
      padding: 5px !important;
    }

    .reply-recording i {
      text-align: center;
      padding: 5px !important;
      color: #93918f;
      cursor: pointer;
    }

    .reply-send {
      padding: 5px !important;
    }

    .reply-send i {
      text-align: center;
      padding: 5px !important;
      color: #93918f;
      cursor: pointer;
    }

    .reply-main {
      padding: 2px 5px !important;
    }

    .reply-main textarea {
      width: 100%;
      resize: none;
      overflow: hidden;
      padding: 5px !important;
      outline: none;
      border: none;
      text-indent: 5px;
      box-shadow: none;
      height: 100%;
      font-size: 16px;
    }

    .reply-main textarea:focus {
      outline: none;
      border: none;
      text-indent: 5px;
      box-shadow: none;
    }

    @media screen and (max-width: 700px) {
      .app {
        top: 0;
        height: 100%;
      }
      .heading {
        height: 70px;
        background-color: #009688;
      }
      .fa-2x {
        font-size: 2.3em !important;
      }
      .heading-avatar {
        padding: 0 !important;
      }
      .heading-avatar-icon img {
        height: 50px;
        width: 50px;
      }
      .heading-compose {
        padding: 5px !important;
      }
      .heading-compose i {
        color: #fff;
        cursor: pointer;
      }
      .heading-dot {
        padding: 5px !important;
        margin-left: 10px !important;
      }
      .heading-dot i {
        color: #fff;
        cursor: pointer;
      }
      .sideBar {
        height: calc(100% - 130px);
      }
      .sideBar-body {
        height: 80px;
      }
      .sideBar-avatar {
        text-align: left;
        padding: 0 8px !important;
      }
      .avatar-icon img {
        height: 55px;
        width: 55px;
      }
      .sideBar-main {
        padding: 0 !important;
      }
      .sideBar-main .row {
        padding: 0 !important;
        margin: 0 !important;
      }
      .sideBar-name {
        padding: 10px 5px !important;
      }
      .name-meta {
        font-size: 16px;
        padding: 5% !important;
      }
      .sideBar-time {
        padding: 10px !important;
      }
      .time-meta {
        text-align: right;
        font-size: 14px;
        padding: 4% !important;
        color: rgba(0, 0, 0, .4);
        vertical-align: baseline;
      }
      /*Conversation*/
      .conversation {
        padding: 0 !important;
        margin: 0 !important;
        height: 100%;
        /*width: 100%;*/
        border-left: 1px solid rgba(0, 0, 0, .08);
        /*overflow-y: auto;*/
      }
      .message {
        height: calc(100% - 140px);
      }
      .reply {
        height: 70px;
      }
      .reply-emojis {
        padding: 5px 0 !important;
      }
      .reply-emojis i {
        padding: 5px 2px !important;
        font-size: 1.8em !important;
      }
      .reply-main {
        padding: 2px 8px !important;
      }
      .reply-main textarea {
        padding: 8px !important;
        font-size: 18px;
      }
      .reply-recording {
        padding: 5px 0 !important;
      }
      .reply-recording i {
        padding: 5px 0 !important;
        font-size: 1.8em !important;
      }
      .reply-send {
        padding: 5px 0 !important;
      }
      .reply-send i {
        padding: 5px 2px 5px 0 !important;
        font-size: 1.8em !important;
      }
    }




    /* ---------- LIVE-CHAT ---------- */

    #live-chat {
        bottom: 0;
        font-size: 12px;
        right: 24px;
        width: 300px;
        display: inline-block;
    }

    #live-chat header {
        background: #293239;
        border-radius: 5px 5px 0 0;
        color: #fff;
        cursor: pointer;
        padding: 16px 24px;
    }

    #live-chat h4:before {
        background: #1a8a34;
        border-radius: 50%;
        content: "";
        display: inline-block;
        height: 8px;
        margin: 0 8px 0 0;
        width: 8px;
    }

    #live-chat h4 {
        font-size: 12px;
    }

    #live-chat h5 {
        font-size: 10px;
    }

    #live-chat form {
        padding: 24px;
    }

    #live-chat input[type="text"] {
        border: 1px solid #ccc;
        border-radius: 3px;
        padding: 8px;
        outline: none;
        width: 234px;
    }

    .chat-message-counter {
        background: #e62727;
        border: 1px solid #fff;
        border-radius: 50%;
        display: none;
        font-size: 12px;
        font-weight: bold;
        height: 28px;
        left: 0;
        line-height: 28px;
        margin: -15px 0 0 -15px;
        position: absolute;
        text-align: center;
        top: 0;
        width: 28px;
    }

    .chat-close {
        background: #1b2126;
        border-radius: 50%;
        color: #fff;
        display: block;
        float: right;
        font-size: 10px;
        height: 16px;
        line-height: 16px;
        margin: 2px 0 0 0;
        text-align: center;
        width: 16px;
    }

    .chat {
        background: #fff;
    }

    .chat-history {
        height: 252px;
        padding: 8px 24px;
        overflow-y: scroll;
    }

    .chat-message {
        margin: 16px 0;
    }

    .chat-message img {
        border-radius: 50%;
        float: left;
    }

    .chat-message-content {
        margin-left: 56px;
    }

    .chat-time {
        float: right;
        font-size: 10px;
    }

    .chat-feedback {
        font-style: italic;
        margin: 0 0 0 80px;
    }
</style>
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
                '<div class="row sideBar-body personal-room" id="' + room.uid + '">'+
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
    // $("#chatPosition").on("click", "#btnSend", function(event){
    //     console.log($(event.target).data("room"));
    //     socket.emit("Client-send-message", {
    //         room: $(event.target).data("room"),
    //         author: "Admin",
    //         text: $(event.target).prev().val()
    //     });
    // });

</script>
