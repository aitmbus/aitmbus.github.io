<?php
$deviceId = $_GET["d"];
$latitude = $_GET["la"];
$longitude= $_GET["ln"];


echo $latitude ;
echo $longitude;

?>


<script src="https://www.gstatic.com/firebasejs/5.9.0/firebase.js"></script>
<script>

var latitude=1111;
var longitude=2222;
document.write(latitude);
document.write(longitude);

  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyARcmtv2AxUR7PcwsV3fCD2kD-p4vgUym4",
    authDomain: "abus-b1c9c.firebaseapp.com",
    databaseURL: "https://abus-b1c9c.firebaseio.com",
    projectId: "abus-b1c9c",
    storageBucket: "abus-b1c9c.appspot.com",
    messagingSenderId: "391065252444"
  };
  firebase.initializeApp(config);

  
  var database = firebase.database();
  
  firebase.database().ref('/bus/1/').set({
    lat: latitude,
    lng: longitude
  });


</script>
