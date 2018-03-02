<?php
$serverName = "localhost";
$database = "gullydsm_dmacc";
$username = "gullydsm_dmacc";
$password = "wdv341";


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

                  $stmt = "SELECT  bio_login_email, bio_first_name, bio_last_name, bio_program, bio_second_program, bio_website_address, bio_second_web, bio_linkedIn, bio_email, bio_hometown, bio_career_goals, bio_three_words FROM local_dpd_bio WHERE bio_program='graphicDesign'";
                  $arrayGD = array();

                  foreach ($conn->query($stmt) as $row) {
                    $arrayGD[] = $row;
                    // debug:
                    //print_r($arrayGD); // show all array data
                  //  echo $arrayGD[0]['bio_program']; // print the first rows username
                    /*
                    echo
                    "<tr><td> " .  $row['ID'] .  "</td>" .
                     " <td>" . $row['bio_first_name'] . "</td>"  .
                   " <td>" . $row['bio_last_name'] . "</td>"  .
                   "  <td>" . $row['bio_program'] . "</td>" .
                   "  <td> " . $row['bio_second_program'] .  "</td>" .
                   "   <td>" . $row['bio_website_address']  . "</td>" .
                     "   <td>" . $row['bio_second_web']  . "</td>" .
                     "   <td>" . $row['bio_linkedIn']  . "</td>" .
                       "   <td>" . $row['bio_email']  . "</td>" .
                       "   <td>" . $row['bio_hometown']  . "</td>" .
                       "   <td>" . $row['bio_career_goals']  . "</td>" .
                         "   <td>" . $row['bio_three_words']  . "</td></tr><br>";
                          */
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
