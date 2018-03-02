<?php
$serverName = "localhost";
$username = "gullydsm_dmacc";
$password = "wdv341";
$database = "gullydsm_dmacc";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


try {

  $stmt = "SELECT COUNT(*)  FROM local_dpd_bio";
  if ($res = $conn->query($stmt))
  {
        if ($res->fetchColumn() > 0) {

                  $stmt = "SELECT *  FROM gullydsm_dmacc";


                  foreach ($conn->query($stmt) as $row) {


                  }

                }
/* No rows matched -- do something else */
        else {
            print "No rows matched the query.";
              }
          }
        }
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
 ?>
