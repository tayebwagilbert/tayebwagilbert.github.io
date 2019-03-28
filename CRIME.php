<?php
  $db = mysqli_connect('address_of_server','user_name','password','database_name')
  or die('Error connecting to MySQL server.');
  $query = "SELECT Longitude AS lng,Latitude AS lat, `Crime type` AS type FROM crime";
  $result = mysqli_query($db, $query) or die('Error querying database.');
  $myArray = array();
  while($row = $result->fetch_array(MYSQL_ASSOC)) {
      $myArray[] = $row;
  }
  echo json_encode($myArray);
  mysqli_close($db);
?>