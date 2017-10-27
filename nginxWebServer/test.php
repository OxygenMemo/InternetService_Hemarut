<?php
  $conn = new mysqli("MySQL","root","admin@2017","dukdik");

  if($conn->connect_error){
    die("ERROR: Unable to connect : " . $conn->connect_error);
  }
  echo "Connected to the database.<br>";
  $result = $conn->query("SELECT * FROM hatori");

  foreach ($result as $row) {
    echo $row['id']." ".$row['name']."<br>";
  }
  $result->close();
  $conn->close();



  ?>
