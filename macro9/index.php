<!doctype html>
<html>
  <head>
    <title>Let's Chat!</title>

    <!-- custom styles for this application -->
    <style>
      #messages {
        display: block;
        width: 500px;
        height: 300px;
      }
      .hidden {
        display: none;
      }

    </style>
  </head>
  <body>
    <h1>Let's Chat!</h1>

    <div id="panel_name">
      Name: <input type="text" id="name">
      <button id="savename">Chat</button>
    </div>

    <div id="panel_chat" class="hidden">
      <textarea id="messages" readonly></textarea>
      <input type="text" id="newmessage">
      <button id="sendmessage">Send Message</button>
      <br>
      <input type="text" id = "changeusername">
      <button id ="changename">Change username</button>
      <br>
      <a href="admin.php" class="button">Admin Page</a>

      <!-- <select id= "chatRoomNum">
        <option value="0">Pick a room</option>
        <option value="1">Chat Room 1</option>
        <option value="2">Chat Room 2</option>
        <option value="3">Chat Room 3</option>
      </select>
    </div> -->

    <!-- bring in the jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
  let messages = document.querySelector("#messages");
  let panel_name = document.querySelector("#panel_name");
  let panel_chat = document.querySelector("#panel_chat");
  let messagesArea = document.getElementById("messages");
  messagesArea.addEventListener("mouseleave", function(event){
    messagesArea.scrollTop = messagesArea.scrollHeight;
  })






</script>
    <?php
    if(isset ($_COOKIE['name'])){
      ?>

      <script>

      // grab some DOM refs

      let name = document.querySelector("#name");
      let savename = document.querySelector("#savename");
       let cookies = document.cookie;
       let username = cookies.slice(cookies.lastIndexOf('=') + 1);

       console.log(username)

      panel_chat.classList.remove('hidden');

      // hide this panel
      panel_name.classList.add('hidden');

      let newmessage = document.querySelector("#newmessage");
      let sendmessage = document.querySelector("#sendmessage");

      // when the user chooses to chat we need to send that data to the server to be stored
      sendmessage.onclick = function(event) {

        // package up this message and send it to the server to be stored for later use
        let msg = newmessage.value;

        $.ajax({

          type: 'POST',
          url: 'savemessage.php',
          data: {
            message: msg,
            nickname: username
          },
          success: function(data, status) {
            console.log("Success! Received this data from the server: ", data);

          },
          error: function(req, data, status) {

          }

        });

      }
      </script>



      <?php
    }
    else{
      ?>
      <!-- custom script for this application -->
      <script>
        // grab some DOM refs

        let name = document.querySelector("#name");
        let savename = document.querySelector("#savename");


        // when the user clicks on the save name we need to progress to the next phase of the program
        let username;
        savename.onclick = function(event) {

          // grab the name the user entered
          username = name.value;

          // make sure it has at least one character in it
          if (username.length > 0) {
            // show the chat panel_chat
            panel_chat.classList.remove('hidden');

            // hide this panel
            panel_name.classList.add('hidden');
          }
        }


         let newmessage = document.querySelector("#newmessage");
         let sendmessage = document.querySelector("#sendmessage");




         // when the user chooses to chat we need to send that data to the server to be stored
         sendmessage.onclick = function(event) {

           // package up this message and send it to the server to be stored for later use
           let msg = newmessage.value;

           $.ajax({

             type: 'POST',
             url: 'savemessage.php',
             data: {
               message: msg,
               nickname: username
             },
             success: function(data, status) {
               console.log("Success! Received this data from the server: ", data);

             },
             error: function(req, data, status) {

             }

           });

         }
         </script>


      <?php

    }
     ?>
     <script>

     function getData() {

       // contact the text file and grab its current value
       $.ajax({
         type: 'GET',
         url: 'data/messages.txt?nocache='+Math.random(),
         success: function(data, status) {
           console.log(data);
           messages.value = data;

           setTimeout( getData, 1000 );
         }
       });


     }
     getData();

     // var room = document.querySelector('#chatRoomNum')
     // room.onchange= function (event) {
     //   var roomSel = event.currentTarget.value
     //   if(roomSel == 1){
     //
     //     window.clearTimeout(getData2);
     //     window.clearTimeout(getData3);
     //
     //
     //
     //   }
     //   else if (roomSel == 2) {
     //
     //     window.clearTimeout(getData);
     //     window.clearTimeout(getData3);
     //
     //     // function to grab data from the server
     //     function getData2() {
     //
     //       // contact the text file and grab its current value
     //       $.ajax({
     //         type: 'GET',
     //         url: 'data/room2.txt?nocache='+Math.random(),
     //         success: function(data, status) {
     //           console.log(data);
     //           messages.value = data;
     //
     //           setTimeout( getData2, 1000 );
     //         }
     //       });
     //
     //
     //     }
     //     getData2();
     //
     //
     //   }
     //
     //   else if (roomSel == 3){
     //     // function to grab data from the server
     //
     //     function getData3() {
     //       window.clearTimeout(getData);
     //       window.clearTimeout(getData2);
     //
     //       // contact the text file and grab its current value
     //       $.ajax({
     //         type: 'GET',
     //         url: 'data/room3.txt?nocache='+Math.random(),
     //         success: function(data, status) {
     //           console.log(data);
     //           messages.value = data;
     //
     //           setTimeout( getData3, 1000 );
     //         }
     //       });
     //
     //
     //     }
     //     getData3();
     //
     //
     //   }
     //
     //   else{
     //     console.log("oops")
     //   }
     //
     //
     // }



     let saveNewName = document.querySelector("#changename");
     saveNewName.onclick = function(event){

       let newName = document.querySelector("#changeusername");

       let updateName = newName.value

       $.ajax({

         type: 'POST',
         url: 'changename.php',
         data: {
           update: updateName,

         },
         success: function(data, status) {
           console.log("updated");
           username = updateName
           console.log(username)

         },
         error: function(req, data, status) {

         }

       });

      }

   </script>
  </body>
</html>
