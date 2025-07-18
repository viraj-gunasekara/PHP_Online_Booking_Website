<?php

  $hname = 'localhost';
  $uname = 'root';
  $pass = 'admin333';
  $db = 'booking_website';
  $port = 3307;

  $con = mysqli_connect($hname, $uname, $pass, $db, $port);

  if(!$con){
    die("Cannot Connect to Database" .mysqli_connect_error());
  }

?>