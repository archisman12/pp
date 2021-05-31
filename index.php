<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.3/firebase-app.js"></script>

<!--include firebase database -->
<script src="https://www.gstatic.com/firebasejs/8.6.3/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyB5I3jsrxs1E06S_eBGaiqZiq-c3aKmpyk",
    authDomain: "clear-doubt-8320b.firebaseapp.com",
    projectId: "clear-doubt-8320b",
    storageBucket: "clear-doubt-8320b.appspot.com",
    messagingSenderId: "962440269392",
    appId: "1:962440269392:web:8e11527c2dcb770bce0b55"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);


  var myName = prompt("Enter your name");

  function sendMessage() {
      var message = document.getElementById("message").value;
      firebase.database().ref("messages").push().set({
          "sender":myName,
          "message":message
      });
      return false
  }
</script>

<!-- create a form to send message -->
<form onsubmit="return sendMessage();">
  <input id="message" placeholder="Enter message" autocomplte="off">

  <input type="submit">
</form>