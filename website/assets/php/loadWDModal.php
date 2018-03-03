<?php
include "loadData.php";
$q = $_REQUEST["q"];

  if ($q == "WD 1") {
    echo "<img class='picture' id ='modalWD 1' width='200px'
            src='assets/img/dpd-photos/WD-1.jpg'/>";

            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
                echo "<h1>" .  $arrayWD[7]['bio_first_name'] . " ". $arrayWD[7]['bio_last_name'] . "</h1>";
                echo "<h2>" . $arrayWD[7]['bio_program'] . " ". $arrayWD[7]['bio_second_program']."</h2>";
                echo "<h3>" . $arrayWD[7]['bio_login_email'] . "</h3>";
                echo "<h4>" . $arrayWD[7]['bio_email'] . "</h4>";
                echo "<h3>" . $arrayWD[7]['bio_website_address'] . "</h3>";
                echo "<h4>" . $arrayWD[7]['bio_second_web'] . "</h4>";
                echo "<h4>" . $arrayWD[7]['bio_linkedIn'] . "</h4>";
                echo "<h4>" . $arrayWD[7]['bio_hometown'] . "</h4>";
                echo "<p>" . $arrayWD[7]['bio_career_goals'] . "</p>";
                echo "<h3>" . $arrayWD[7]['bio_three_words'] . "</h3>";
                echo "</div></div>";
  }
  if ($q == "WD 2") {
    echo "<img class='picture' id ='modalWD 2' width='200px'
            src='assets/img/dpd-photos/WD-2.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
                echo "<h1>" .  $arrayWD[4]['bio_first_name'] . " ". $arrayWD[4]['bio_last_name'] . "</h1>";
                echo "<h2>" . $arrayWD[4]['bio_program'] . " ". $arrayWD[4]['bio_second_program']."</h2>";
                echo "<h3>" . $arrayWD[4]['bio_login_email'] . "</h3>";
                echo "<h4>" . $arrayWD[4]['bio_email'] . "</h4>";
                echo "<h3>" . $arrayWD[4]['bio_website_address'] . "</h3>";
                echo "<h4>" . $arrayWD[4]['bio_second_web'] . "</h4>";
                echo "<h4>" . $arrayWD[4]['bio_linkedIn'] . "</h4>";
                echo "<h4>" . $arrayWD[4]['bio_hometown'] . "</h4>";
                echo "<p>" . $arrayWD[4]['bio_career_goals'] . "</p>";
                echo "<h3>" . $arrayWD[4]['bio_three_words'] . "</h3>";
                echo "</div></div>";

  }

  if ($q == "WD 3") {
    echo "<img class='picture' id ='modalWD 3' width='200px'
            src='assets/img/dpd-photos/WD-3.jpg'/>";
                echo "<div class='col-lg-6 col-12'>";
                echo "<div id='modalText'>";
                    echo "<h1>" .  $arrayWD[0]['bio_first_name'] . " ". $arrayWD[0]['bio_last_name'] . "</h1>";
                    echo "<h2>" . $arrayWD[0]['bio_program'] . " ". $arrayWD[0]['bio_second_program']."</h2>";
                    echo "<h3>" . $arrayWD[0]['bio_login_email'] . "</h3>";
                    echo "<h4>" . $arrayWD[0]['bio_email'] . "</h4>";
                    echo "<h3>" . $arrayWD[0]['bio_website_address'] . "</h3>";
                    echo "<h4>" . $arrayWD[0]['bio_second_web'] . "</h4>";
                    echo "<h4>" . $arrayWD[0]['bio_linkedIn'] . "</h4>";
                    echo "<h4>" . $arrayWD[0]['bio_hometown'] . "</h4>";
                    echo "<p>" . $arrayWD[0]['bio_career_goals'] . "</p>";
                    echo "<h3>" . $arrayWD[0]['bio_three_words'] . "</h3>";
                    echo "</div></div>";
  }
  if ($q == "WD 4") {
    echo "<img class='picture' id ='modalWD 4' width='200px'
            src='assets/img/dpd-photos/WD-4.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
                echo "<h1>" .  $arrayWD[5]['bio_first_name'] . " ". $arrayWD[5]['bio_last_name'] . "</h1>";
                echo "<h2>" . $arrayWD[5]['bio_program'] . " ". $arrayWD[5]['bio_second_program']."</h2>";
                echo "<h3>" . $arrayWD[5]['bio_login_email'] . "</h3>";
                echo "<h4>" . $arrayWD[5]['bio_email'] . "</h4>";
                echo "<h3>" . $arrayWD[5]['bio_website_address'] . "</h3>";
                echo "<h4>" . $arrayWD[5]['bio_second_web'] . "</h4>";
                echo "<h4>" . $arrayWD[5]['bio_linkedIn'] . "</h4>";
                echo "<h4>" . $arrayWD[5]['bio_hometown'] . "</h4>";
                echo "<p>" . $arrayWD[5]['bio_career_goals'] . "</p>";
                echo "<h3>" . $arrayWD[5]['bio_three_words'] . "</h3>";
                echo "</div></div>";

  }
  if ($q == "WD 5") {
    echo "<img class='picture' id ='modalWD 5' width='200px'
            src='assets/img/dpd-photos/WD-5.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
                echo "<h1>" .  $arrayWD[1]['bio_first_name'] . " ". $arrayWD[1]['bio_last_name'] . "</h1>";
                echo "<h2>" . $arrayWD[1]['bio_program'] . " ". $arrayWD[1]['bio_second_program']."</h2>";
                echo "<h3>" . $arrayWD[1]['bio_login_email'] . "</h3>";
                echo "<h4>" . $arrayWD[1]['bio_email'] . "</h4>";
                echo "<h3>" . $arrayWD[1]['bio_website_address'] . "</h3>";
                echo "<h4>" . $arrayWD[1]['bio_second_web'] . "</h4>";
                echo "<h4>" . $arrayWD[1]['bio_linkedIn'] . "</h4>";
                echo "<h4>" . $arrayWD[1]['bio_hometown'] . "</h4>";
                echo "<p>" . $arrayWD[1]['bio_career_goals'] . "</p>";
                echo "<h3>" . $arrayWD[1]['bio_three_words'] . "</h3>";
                echo "</div></div>";

  }
  if ($q == "WD 6") {
    echo "<img class='picture' id ='modalWD 6' width='200px'
            src='assets/img/dpd-photos/WD-6.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
                echo "<h1>" .  $arrayWD[2]['bio_first_name'] . " ". $arrayWD[2]['bio_last_name'] . "</h1>";
                echo "<h2>" . $arrayWD[2]['bio_program'] . " ". $arrayWD[2]['bio_second_program']."</h2>";
                echo "<h3>" . $arrayWD[2]['bio_login_email'] . "</h3>";
                echo "<h4>" . $arrayWD[2]['bio_email'] . "</h4>";
                echo "<h3>" . $arrayWD[2]['bio_website_address'] . "</h3>";
                echo "<h4>" . $arrayWD[2]['bio_second_web'] . "</h4>";
                echo "<h4>" . $arrayWD[2]['bio_linkedIn'] . "</h4>";
                echo "<h4>" . $arrayWD[2]['bio_hometown'] . "</h4>";
                echo "<p>" . $arrayWD[2]['bio_career_goals'] . "</p>";
                echo "<h3>" . $arrayWD[2]['bio_three_words'] . "</h3>";
                echo "</div></div>";

  }
  if ($q == "WD 7") {
    echo "<img class='picture' id ='modalWD 7' width='200px'
            src='assets/img/dpd-photos/WD-7.jpg'/>";
            echo "<div class='col-lg-6 col-12'>";
            echo "<div id='modalText'>";
                echo "<h1>" .  $arrayWD[6]['bio_first_name'] . " ". $arrayWD[6]['bio_last_name'] . "</h1>";
                echo "<h2>" . $arrayWD[6]['bio_program'] . " ". $arrayWD[6]['bio_second_program']."</h2>";
                echo "<h3>" . $arrayWD[6]['bio_login_email'] . "</h3>";
                echo "<h4>" . $arrayWD[6]['bio_email'] . "</h4>";
                echo "<h3>" . $arrayWD[6]['bio_website_address'] . "</h3>";
                echo "<h4>" . $arrayWD[6]['bio_second_web'] . "</h4>";
                echo "<h4>" . $arrayWD[6]['bio_linkedIn'] . "</h4>";
                echo "<h4>" . $arrayWD[6]['bio_hometown'] . "</h4>";
                echo "<p>" . $arrayWD[6]['bio_career_goals'] . "</p>";
                echo "<h3>" . $arrayWD[6]['bio_three_words'] . "</h3>";
                echo "</div></div>";
  }
  if ($q == "WD 8") {
    echo "<img class='picture' id ='modalWD 8' width='200px'
            src='assets/img/dpd-photos/WD-8.jpg'/>";
            echo "<div id='modalText'>";
                echo "<h1>" .  $arrayWD[3]['bio_first_name'] . " ". $arrayWD[3]['bio_last_name'] . "</h1>";
                echo "<h2>" . $arrayWD[3]['bio_program'] . " ". $arrayWD[3]['bio_second_program']."</h2>";
                echo "<h3>" . $arrayWD[3]['bio_login_email'] . "</h3>";
                echo "<h4>" . $arrayWD[3]['bio_email'] . "</h4>";
                echo "<h3>" . $arrayWD[3]['bio_website_address'] . "</h3>";
                echo "<h4>" . $arrayWD[3]['bio_second_web'] . "</h4>";
                echo "<h4>" . $arrayWD[3]['bio_linkedIn'] . "</h4>";
                echo "<h4>" . $arrayWD[3]['bio_hometown'] . "</h4>";
                echo "<p>" . $arrayWD[3]['bio_career_goals'] . "</p>";
                echo "<h3>" . $arrayWD[3]['bio_three_words'] . "</h3>";
                echo "</div></div>";

  }


 ?>
