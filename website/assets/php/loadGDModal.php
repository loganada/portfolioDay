<?php
 include "loadData.php";
$q = $_REQUEST["q"];
  if ($q == "GD 1") {
  //echo "<h1>" .  $arrayGD[14]['bio_first_name'] . " ". $arrayGD[14]['bio_last_name'] . "</h1>";
//echo "<h1>" .  $arrayGD[15]['bio_first_name'] . " ". $arrayGD[15]['bio_last_name'] . "</h1>";
    echo "<h1 class='modalText'>" .  $arrayGD[6]['bio_first_name'] . " ". $arrayGD[6]['bio_last_name'] . "</h1>";
    echo "<h2 class='modalText'>" . $arrayGD[6]['bio_program'] . " ". $arrayGD[6]['bio_second_program']."</h2>";
    echo "<h3 class='modalText'>" . $arrayGD[6]['bio_login_email'] . "</h3>";
    echo "<h4 class='modalText'>" . $arrayGD[6]['bio_email'] . "</h4>";
    echo "<h3 class='modalText'>" . $arrayGD[6]['bio_website_address'] . "</h3>";
    echo "<h4 class='modalText'>" . $arrayGD[6]['bio_second_web'] . "</h4>";
    echo "<h4 class='modalText'>" . $arrayGD[6]['bio_linkedIn'] . "</h4>";
    echo "<h4 class='modalText'>" . $arrayGD[6]['bio_hometown'] . "</h4>";
    echo "<p class='modalText'>" . $arrayGD[6]['bio_career_goals'] . "</p>";
    echo "<h3 class='modalText'>" . $arrayGD[6]['bio_three_words'] . "</h3>";
    echo "<img class='picture' id ='modalPhoto'
            src='assets/img/dpd-photos/GD-1.jpg'/><br>";
  }
  if ($q == "GD 2") {
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-2.jpg'/>";

  }

  if ($q == "GD 3") {
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-3.jpg'/>";

  }
  if ($q == "GD 4") {
    echo "<h1 class='modalText'>" .  $arrayGD[0]['bio_first_name'] . " ". $arrayGD[0]['bio_last_name'] . "</h1>";
    echo "<h2 class='modalText'>" . $arrayGD[0]['bio_program'] . " ". $arrayGD[0]['bio_second_program']."</h2>";
    echo "<h3 class='modalText'>" . $arrayGD[0]['bio_login_email'] . "</h3>";
    echo "<h4 class='modalText'>" . $arrayGD[0]['bio_email'] . "</h4>";
    echo "<h3 class='modalText'>" . $arrayGD[0]['bio_website_address'] . "</h3>";
    echo "<h4 class='modalText'>" . $arrayGD[0]['bio_second_web'] . "</h4>";
    echo "<h4 class='modalText'>" . $arrayGD[0]['bio_linkedIn'] . "</h4>";
    echo "<h4 class='modalText'>" . $arrayGD[0]['bio_hometown'] . "</h4>";
    echo "<p class='modalText'>" . $arrayGD[0]['bio_career_goals'] . "</p>";
    echo "<h3 class='modalText'>" . $arrayGD[0]['bio_three_words'] . "</h3>";
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-4.jpg'/>";
  }
  if ($q == "GD 5") {

            echo "<h1 class='modalText'>" .  $arrayGD[12]['bio_first_name'] . " ". $arrayGD[12]['bio_last_name'] . "</h1>";
            echo "<h2 class='modalText'>" . $arrayGD[12]['bio_program'] . " ". $arrayGD[12]['bio_second_program']."</h2>";
            echo "<h3 class='modalText'>" . $arrayGD[12]['bio_login_email'] . "</h3>";
            echo "<h4 class='modalText'>" . $arrayGD[12]['bio_email'] . "</h4>";
            echo "<h3 class='modalText'>" . $arrayGD[12]['bio_website_address'] . "</h3>";
            echo "<h4 class='modalText'>" . $arrayGD[12]['bio_second_web'] . "</h4>";
            echo "<h4 class='modalText'>" . $arrayGD[12]['bio_linkedIn'] . "</h4>";
            echo "<h4 class='modalText'>" . $arrayGD[12]['bio_hometown'] . "</h4>";
            echo "<p class='modalText'>" . $arrayGD[12]['bio_career_goals'] . "</p>";
            echo "<h3 class='modalText'>" . $arrayGD[12]['bio_three_words'] . "</h3>";
            echo "<img class='picture' id ='modalPhoto' width='200px'
                    src='assets/img/dpd-photos/GD-5.jpg'/>";
  }
  if ($q == "GD 6") {
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-6.jpg'/>";

  }
  if ($q == "GD 7") {
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-7.jpg'/>";


  }
  if ($q == "GD 8") {


    echo "<h1 class='modalText'>" .  $arrayGD[13]['bio_first_name'] . " ". $arrayGD[13]['bio_last_name'] . "</h1>";
    echo "<h2 class='modalText'>" . $arrayGD[13]['bio_program'] . " ". $arrayGD[13]['bio_second_program']."</h2>";
    echo "<h3 class='modalText'>" . $arrayGD[13]['bio_login_email'] . "</h3>";
    echo "<h4 class='modalText'>" . $arrayGD[13]['bio_email'] . "</h4>";
    echo "<h3 class='modalText'>" . $arrayGD[13]['bio_website_address'] . "</h3>";
    echo "<h4 class='modalText'>" . $arrayGD[13]['bio_second_web'] . "</h4>";
    echo "<h4 class='modalText'>" . $arrayGD[13]['bio_linkedIn'] . "</h4>";
    echo "<h4 class='modalText'>" . $arrayGD[13]['bio_hometown'] . "</h4>";
    echo "<p class='modalText'>" . $arrayGD[13]['bio_career_goals'] . "</p>";
    echo "<h3 class='modalText'>" . $arrayGD[13]['bio_three_words'] . "</h3>";
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-8.jpg'/>";
  }
  if ($q == "GD 9") {

            echo "<h1 class='modalText'>" .  $arrayGD[16]['bio_first_name'] . " ". $arrayGD[16]['bio_last_name'] . "</h1>";
            echo "<h2 class='modalText'>" . $arrayGD[16]['bio_program'] . " ". $arrayGD[16]['bio_second_program']."</h2>";
            echo "<h3 class='modalText'>" . $arrayGD[16]['bio_login_email'] . "</h3>";
            echo "<h4 class='modalText'>" . $arrayGD[16]['bio_email'] . "</h4>";
            echo "<h3 class='modalText'>" . $arrayGD[16]['bio_website_address'] . "</h3>";
            echo "<h4 class='modalText'>" . $arrayGD[16]['bio_second_web'] . "</h4>";
            echo "<h4 class='modalText'>" . $arrayGD[16]['bio_linkedIn'] . "</h4>";
            echo "<h4 class='modalText'>" . $arrayGD[16]['bio_hometown'] . "</h4>";
            echo "<p class='modalText'>" . $arrayGD[16]['bio_career_goals'] . "</p>";
            echo "<h3 class='modalText'>" . $arrayGD[16]['bio_three_words'] . "</h3>";
            echo "<img class='picture' id ='modalPhoto' width='200px'
                    src='assets/img/dpd-photos/GD-9.jpg'/>";
  }
  if ($q == "GD 10") {
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-10.jpg'/>";

  }
  if ($q == "GD 11") {

            echo "<h1 class='modalText'>" .  $arrayGD[9]['bio_first_name'] . " ". $arrayGD[9]['bio_last_name'] . "</h1>";
            echo "<h2 class='modalText'>" . $arrayGD[9]['bio_program'] . " ". $arrayGD[9]['bio_second_program']."</h2>";
            echo "<h3 class='modalText'>" . $arrayGD[9]['bio_login_email'] . "</h3>";
            echo "<h4 class='modalText'>" . $arrayGD[9]['bio_email'] . "</h4>";
            echo "<h3 class='modalText'>" . $arrayGD[9]['bio_website_address'] . "</h3>";
            echo "<h4 class='modalText'>" . $arrayGD[9]['bio_second_web'] . "</h4>";
            echo "<h4 class='modalText'>" . $arrayGD[9]['bio_linkedIn'] . "</h4>";
            echo "<h4 class='modalText'>" . $arrayGD[9]['bio_hometown'] . "</h4>";
            echo "<p class='modalText'>" . $arrayGD[9]['bio_career_goals'] . "</p>";
            echo "<h3 class='modalText'>" . $arrayGD[9]['bio_three_words'] . "</h3>";
            echo "<img class='picture' id ='modalPhoto' width='200px'
                    src='assets/img/dpd-photos/GD-11.jpg'/>";
  }
  if ($q == "GD 12") {

            echo "<h1 class='modalText'>" .  $arrayGD[8]['bio_first_name'] . " ". $arrayGD[8]['bio_last_name'] . "</h1>";
            echo "<h2 class='modalText'>" . $arrayGD[8]['bio_program'] . " ". $arrayGD[8]['bio_second_program']."</h2>";
            echo "<h3 class='modalText'>" . $arrayGD[8]['bio_login_email'] . "</h3>";
            echo "<h4 class='modalText'>" . $arrayGD[8]['bio_email'] . "</h4>";
            echo "<h3 class='modalText'>" . $arrayGD[8]['bio_website_address'] . "</h3>";
            echo "<h4 class='modalText'>" . $arrayGD[8]['bio_second_web'] . "</h4>";
            echo "<h4 class='modalText'>" . $arrayGD[8]['bio_linkedIn'] . "</h4>";
            echo "<h4 class='modalText'>" . $arrayGD[8]['bio_hometown'] . "</h4>";
            echo "<p class='modalText'>" . $arrayGD[8]['bio_career_goals'] . "</p>";
            echo "<h3 class='modalText'>" . $arrayGD[8]['bio_three_words'] . "</h3>";
            echo "<img class='picture' id ='modalPhoto' width='200px'
                    src='assets/img/dpd-photos/GD-12.jpg'/>";
  }
  if ($q == "GD 13") {

            echo "<h1 class='modalText'>" .  $arrayGD[11]['bio_first_name'] . " ". $arrayGD[11]['bio_last_name'] . "</h1>";
            echo "<h2 class='modalText'>" . $arrayGD[11]['bio_program'] . " ". $arrayGD[11]['bio_second_program']."</h2>";
            echo "<h3 class='modalText'>" . $arrayGD[11]['bio_login_email'] . "</h3>";
            echo "<h4 class='modalText'>" . $arrayGD[11]['bio_email'] . "</h4>";
            echo "<h3 class='modalText'>" . $arrayGD[11]['bio_website_address'] . "</h3>";
            echo "<h4 class='modalText'>" . $arrayGD[11]['bio_second_web'] . "</h4>";
            echo "<h4 class='modalText'>" . $arrayGD[11]['bio_linkedIn'] . "</h4>";
            echo "<h4 class='modalText'>" . $arrayGD[11]['bio_hometown'] . "</h4>";
            echo "<p class='modalText'>" . $arrayGD[11]['bio_career_goals'] . "</p>";
            echo "<h3 class='modalText'>" . $arrayGD[11]['bio_three_words'] . "</h3>";
            echo "<img class='picture' id ='modalPhoto' width='200px'
                    src='assets/img/dpd-photos/GD-13.jpg'/>";
  }
  if ($q == "GD 14") {
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-14.jpg'/>";

  }
  if ($q == "GD 15") {

echo "<h1 class='modalText'>" .  $arrayGD[4]['bio_first_name'] . " ". $arrayGD[4]['bio_last_name'] . "</h1>";
echo "<h2 class='modalText'>" . $arrayGD[4]['bio_program'] . " ". $arrayGD[4]['bio_second_program']."</h2>";
echo "<h3 class='modalText'>" . $arrayGD[4]['bio_login_email'] . "</h3>";
echo "<h4 class='modalText'>" . $arrayGD[4]['bio_email'] . "</h4>";
echo "<h3 class='modalText'>" . $arrayGD[4]['bio_website_address'] . "</h3>";
echo "<h4 class='modalText'>" . $arrayGD[4]['bio_second_web'] . "</h4>";
echo "<h4 class='modalText'>" . $arrayGD[4]['bio_linkedIn'] . "</h4>";
echo "<h4 class='modalText'>" . $arrayGD[4]['bio_hometown'] . "</h4>";
echo "<p class='modalText'>" . $arrayGD[4]['bio_career_goals'] . "</p>";
echo "<h3 class='modalText'>" . $arrayGD[4]['bio_three_words'] . "</h3>";
echo "<img class='picture' id ='modalPhoto' width='200px'
        src='assets/img/dpd-photos/GD-15.jpg'/>";
  }
  if ($q == "GD 16") {
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-16.jpg'/>";

  }
  if ($q == "GD 17") {

      echo "<h1 class='modalText'>" .  $arrayGD[10]['bio_first_name'] . " ". $arrayGD[10]['bio_last_name'] . "</h1>";
      echo "<h2 class='modalText'>" . $arrayGD[10]['bio_program'] . " ". $arrayGD[10]['bio_second_program']."</h2>";
      echo "<h3 class='modalText'>" . $arrayGD[10]['bio_login_email'] . "</h3>";
      echo "<h4 class='modalText'>" . $arrayGD[10]['bio_email'] . "</h4>";
      echo "<h3 class='modalText'>" . $arrayGD[10]['bio_website_address'] . "</h3>";
      echo "<h4 class='modalText'>" . $arrayGD[10]['bio_second_web'] . "</h4>";
      echo "<h4 class='modalText'>" . $arrayGD[10]['bio_linkedIn'] . "</h4>";
      echo "<h4 class='modalText'>" . $arrayGD[10]['bio_hometown'] . "</h4>";
      echo "<p class='modalText'>" . $arrayGD[10]['bio_career_goals'] . "</p>";
      echo "<h3 class='modalText'>" . $arrayGD[10]['bio_three_words'] . "</h3>";
      echo "<img class='picture' id ='modalPhoto' width='200px'
              src='assets/img/dpd-photos/GD-17.jpg'/>";
  }
  if ($q == "GD 18") {

            echo "<h1 class='modalText'>" .  $arrayGD[5]['bio_first_name'] . " ". $arrayGD[5]['bio_last_name'] . "</h1>";
            echo "<h2 class='modalText'>" . $arrayGD[5]['bio_program'] . " ". $arrayGD[5]['bio_second_program']."</h2>";
            echo "<h3 class='modalText'>" . $arrayGD[5]['bio_login_email'] . "</h3>";
            echo "<h4 class='modalText'>" . $arrayGD[5]['bio_email'] . "</h4>";
            echo "<h3 class='modalText'>" . $arrayGD[5]['bio_website_address'] . "</h3>";
            echo "<h4 class='modalText'>" . $arrayGD[5]['bio_second_web'] . "</h4>";
            echo "<h4 class='modalText'>" . $arrayGD[5]['bio_linkedIn'] . "</h4>";
            echo "<h4 class='modalText'>" . $arrayGD[5]['bio_hometown'] . "</h4>";
            echo "<p class='modalText'>" . $arrayGD[5]['bio_career_goals'] . "</p>";
            echo "<h3 class='modalText'>" . $arrayGD[5]['bio_three_words'] . "</h3>";
            echo "<img class='picture' id ='modalPhoto' width='200px'
                    src='assets/img/dpd-photos/GD-18.jpg'/>";
  }
  if ($q == "GD 19") {

    echo "<h1 class='modalText'>" .  $arrayGD[1]['bio_first_name'] . " ". $arrayGD[1]['bio_last_name'] . "</h1>";
    echo "<h2 class='modalText'>" . $arrayGD[1]['bio_program'] . " ". $arrayGD[1]['bio_second_program']."</h2>";
    echo "<h3 class='modalText'>" . $arrayGD[1]['bio_login_email'] . "</h3>";
    echo "<h4 class='modalText'>" . $arrayGD[1]['bio_email'] . "</h4>";
    echo "<h3 class='modalText'>" . $arrayGD[1]['bio_website_address'] . "</h3>";
    echo "<h4 class='modalText'>" . $arrayGD[1]['bio_second_web'] . "</h4>";
    echo "<h4 class='modalText'>" . $arrayGD[1]['bio_linkedIn'] . "</h4>";
    echo "<h4 class='modalText'>" . $arrayGD[1]['bio_hometown'] . "</h4>";
    echo "<p class='modalText'>" . $arrayGD[1]['bio_career_goals'] . "</p>";
    echo "<h3 class='modalText'>" . $arrayGD[1]['bio_three_words'] . "</h3>";
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-19.jpg'/>";
  }
  if ($q == "GD 20") {
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-20.jpg'/>";

  }
  if ($q == "GD 21") {
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-21.jpg'/>";

  }
  if ($q == "GD 22") {

    echo "<h1 class='modalText'>" .  $arrayGD[2]['bio_first_name'] . " ". $arrayGD[2]['bio_last_name'] . "</h1>";
    echo "<h2 class='modalText'>" . $arrayGD[2]['bio_program'] . " ". $arrayGD[2]['bio_second_program']."</h2>";
    echo "<h3 class='modalText'>" . $arrayGD[2]['bio_login_email'] . "</h3>";
    echo "<h4 class='modalText'>" . $arrayGD[2]['bio_email'] . "</h4>";
    echo "<h3 class='modalText'>" . $arrayGD[2]['bio_website_address'] . "</h3>";
    echo "<h4 class='modalText'>" . $arrayGD[2]['bio_second_web'] . "</h4>";
    echo "<h4 class='modalText'>" . $arrayGD[2]['bio_linkedIn'] . "</h4>";
    echo "<h4 class='modalText'>" . $arrayGD[2]['bio_hometown'] . "</h4>";
    echo "<p class='modalText'>" . $arrayGD[2]['bio_career_goals'] . "</p>";
    echo "<h3 class='modalText'>" . $arrayGD[2]['bio_three_words'] . "</h3>";
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-22.jpg'/>";
  }
  if ($q == "GD 23") {

    echo "<h1 class='modalText'>" .  $arrayGD[3]['bio_first_name'] . " ". $arrayGD[3]['bio_last_name'] . "</h1>";
    echo "<h2 class='modalText'>" . $arrayGD[3]['bio_program'] . " ". $arrayGD[3]['bio_second_program']."</h2>";
    echo "<h3 class='modalText'>" . $arrayGD[3]['bio_login_email'] . "</h3>";
    echo "<h4 class='modalText'>" . $arrayGD[3]['bio_email'] . "</h4>";
    echo "<h3 class='modalText'>" . $arrayGD[3]['bio_website_address'] . "</h3>";
    echo "<h4 class='modalText'>" . $arrayGD[3]['bio_second_web'] . "</h4>";
    echo "<h4 class='modalText'>" . $arrayGD[3]['bio_linkedIn'] . "</h4>";
    echo "<h4 class='modalText'>" . $arrayGD[3]['bio_hometown'] . "</h4>";
    echo "<p class='modalText'>" . $arrayGD[3]['bio_career_goals'] . "</p>";
    echo "<h3 class='modalText'>" . $arrayGD[3]['bio_three_words'] . "</h3>";
    echo "<img class='picture' id ='modalPhoto' width='200px'
            src='assets/img/dpd-photos/GD-23.jpg'/>";

  }
  if ($q == "GD 24") {

            echo "<h1 class='modalText'>" .  $arrayGD[17]['bio_first_name'] . " ". $arrayGD[17]['bio_last_name'] . "</h1>";
            echo "<h2 class='modalText'>" . $arrayGD[17]['bio_program'] . " ". $arrayGD[17]['bio_second_program']."</h2>";
            echo "<h3 class='modalText'>" . $arrayGD[17]['bio_login_email'] . "</h3>";
            echo "<h4 class='modalText'>" . $arrayGD[17]['bio_email'] . "</h4>";
            echo "<h3 class='modalText'>" . $arrayGD[17]['bio_website_address'] . "</h3>";
            echo "<h4 class='modalText'>" . $arrayGD[17]['bio_second_web'] . "</h4>";
            echo "<h4 class='modalText'>" . $arrayGD[17]['bio_linkedIn'] . "</h4>";
            echo "<h4 class='modalText'>" . $arrayGD[17]['bio_hometown'] . "</h4>";
            echo "<p class='modalText'>" . $arrayGD[17]['bio_career_goals'] . "</p>";
            echo "<h3 class='modalText'>" . $arrayGD[17]['bio_three_words'] . "</h3>";
            echo "<img class='picture' id ='modalPhoto' width='200px'
                    src='assets/img/dpd-photos/GD-24.jpg'/>";
  }



 ?>
