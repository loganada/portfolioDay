<?php
 include "loadData.php";
$q = $_REQUEST["q"];

  if ($q == "photo 1") {

                    echo "<h1 class='modalText'>" .  $arrayphoto[0]['bio_first_name'] . " ". $arrayphoto[0]['bio_last_name'] . "</h1>";
                    echo "<h2 class='modalText'>" . $arrayphoto[0]['bio_program'] . " ". $arrayphoto[0]['bio_second_program']."</h2>";
                    echo "<h3 class='modalText'>" . $arrayphoto[0]['bio_login_email'] . "</h3>";
                    echo "<h4 class='modalText'>" . $arrayphoto[0]['bio_email'] . "</h4>";
                    echo "<h3 class='modalText'>" . $arrayphoto[0]['bio_website_address'] . "</h3>";
                    echo "<h4 class='modalText'>" . $arrayphoto[0]['bio_second_web'] . "</h4>";
                    echo "<h4 class='modalText'>" . $arrayphoto[0]['bio_linkedIn'] . "</h4>";
                    echo "<h4 class='modalText'>" . $arrayphoto[0]['bio_hometown'] . "</h4>";
                    echo "<p class='modalText'>" . $arrayphoto[0]['bio_career_goals'] . "</p>";
                    echo "<h3 class='modalText'>" . $arrayphoto[0]['bio_three_words'] . "</h3>";
                    echo "<img class='picture' id ='modalPhoto'
                            src='assets/img/dpd-photos/photo-1.jpg'/>";
  }
  if ($q == "photo 2") {

                echo "<h1 class='modalText'>" .  $arrayphoto[1]['bio_first_name'] . " ". $arrayphoto[1]['bio_last_name'] . "</h1>";
                echo "<h2 class='modalText'>" . $arrayphoto[1]['bio_program'] . " ". $arrayphoto[1]['bio_second_program']."</h2>";
                echo "<h3 class='modalText'>" . $arrayphoto[1]['bio_login_email'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[1]['bio_email'] . "</h4>";
                echo "<h3 class='modalText'>" . $arrayphoto[1]['bio_website_address'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[1]['bio_second_web'] . "</h4>";
                echo "<h4class='modalText'>" . $arrayphoto[1]['bio_linkedIn'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[1]['bio_hometown'] . "</h4>";
                echo "<p class='modalText'>" . $arrayphoto[1]['bio_career_goals'] . "</p>";
                echo "<h3 class='modalText'>" . $arrayphoto[1]['bio_three_words'] . "</h3>";
                echo "<img class='picture' id ='modalPhoto'
                        src='assets/img/dpd-photos/photo-2.jpg'/>";
  }

  if ($q == "photo 3") {


                echo "<h1 class='modalText'>" .  $arrayphoto[2]['bio_first_name'] . " ". $arrayphoto[2]['bio_last_name'] . "</h1>";
                echo "<h2 class='modalText'>" . $arrayphoto[2]['bio_program'] . " ". $arrayphoto[2]['bio_second_program']."</h2>";
                echo "<h3 class='modalText'>" . $arrayphoto[2]['bio_login_email'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[2]['bio_email'] . "</h4>";
                echo "<h3 class='modalText'>" . $arrayphoto[2]['bio_website_address'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[2]['bio_second_web'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[2]['bio_linkedIn'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[2]['bio_hometown'] . "</h4>";
                echo "<p class='modalText'>" . $arrayphoto[2]['bio_career_goals'] . "</p>";
                echo "<h3 class='modalText'>" . $arrayphoto[2]['bio_three_words'] . "</h3>";
                echo "<img class='picture' id ='modalPhoto'
                        src='assets/img/dpd-photos/photo-3.jpg'/>";
  }
  if ($q == "photo 4") {

                echo "<h1 class='modalText'>" .  $arrayphoto[3]['bio_first_name'] . " ". $arrayphoto[3]['bio_last_name'] . "</h1>";
                echo "<h2 class='modalText'>" . $arrayphoto[3]['bio_program'] . " ". $arrayphoto[3]['bio_second_program']."</h2>";
                echo "<h3 class='modalText'>" . $arrayphoto[3]['bio_login_email'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[3]['bio_email'] . "</h4>";
                echo "<h3 class='modalText'>" . $arrayphoto[3]['bio_website_address'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[3]['bio_second_web'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[3]['bio_linkedIn'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[3]['bio_hometown'] . "</h4>";
                echo "<p class='modalText'>" . $arrayphoto[3]['bio_career_goals'] . "</p>";
                echo "<h3 class='modalText'>" . $arrayphoto[3]['bio_three_words'] . "</h3>";
                echo "<img class='picture' id ='modalPhoto'
                        src='assets/img/dpd-photos/photo-4.jpg'/>";
  }
  if ($q == "photo 5") {

                echo "<h1 class='modalText'>" .  $arrayphoto[4]['bio_first_name'] . " ". $arrayphoto[4]['bio_last_name'] . "</h1>";
                echo "<h2 class='modalText'>" . $arrayphoto[4]['bio_program'] . " ". $arrayphoto[4]['bio_second_program']."</h2>";
                echo "<h3 class='modalText'>" . $arrayphoto[4]['bio_login_email'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[4]['bio_email'] . "</h4>";
                echo "<h3 class='modalText'>" . $arrayphoto[4]['bio_website_address'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[4]['bio_second_web'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[4]['bio_linkedIn'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[4]['bio_hometown'] . "</h4>";
                echo "<p class='modalText'>" . $arrayphoto[4]['bio_career_goals'] . "</p>";
                echo "<h3 class='modalText'>" . $arrayphoto[4]['bio_three_words'] . "</h3>";
                echo "<img class='picture' id ='modalPhoto'
                        src='assets/img/dpd-photos/photo-5.jpg'/>";
  }
  if ($q == "photo 6") {

                echo "<h1 class='modalText'>" .  $arrayphoto[5]['bio_first_name'] . " ". $arrayphoto[5]['bio_last_name'] . "</h1>";
                echo "<h2 class='modalText'>" . $arrayphoto[5]['bio_program'] . " ". $arrayphoto[5]['bio_second_program']."</h2>";
                echo "<h3 class='modalText'>" . $arrayphoto[5]['bio_login_email'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[5]['bio_email'] . "</h4>";
                echo "<h3 class='modalText'>" . $arrayphoto[5]['bio_website_address'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[5]['bio_second_web'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[5]['bio_linkedIn'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[5]['bio_hometown'] . "</h4>";
                echo "<p class='modalText'>" . $arrayphoto[5]['bio_career_goals'] . "</p>";
                echo "<h3 class='modalText'>" . $arrayphoto[5]['bio_three_words'] . "</h3>";
                echo "<img class='picture' id ='modalPhoto'
                        src='assets/img/dpd-photos/photo-6.jpg'/>";
  }
  if ($q == "photo 7") {

                echo "<h1 class='modalText'>" .  $arrayphoto[6]['bio_first_name'] . " ". $arrayphoto[6]['bio_last_name'] . "</h1>";
                echo "<h2 class='modalText'>" . $arrayphoto[6]['bio_program'] . " ". $arrayphoto[6]['bio_second_program']."</h2>";
                echo "<h3 class='modalText'>" . $arrayphoto[6]['bio_login_email'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[6]['bio_email'] . "</h4>";
                echo "<h3 class='modalText'>" . $arrayphoto[6]['bio_website_address'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[6]['bio_second_web'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[6]['bio_linkedIn'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[6]['bio_hometown'] . "</h4>";
                echo "<p class='modalText'>" . $arrayphoto[6]['bio_career_goals'] . "</p>";
                echo "<h3 class='modalText'>" . $arrayphoto[6]['bio_three_words'] . "</h3>";
                echo "<img class='picture' id ='modalPhoto'
                        src='assets/img/dpd-photos/photo-7.jpg'/>";
  }
  if ($q == "photo 8") {

                echo "<h1 class='modalText'>" .  $arrayphoto[7]['bio_first_name'] . " ". $arrayphoto[7]['bio_last_name'] . "</h1>";
                echo "<h2 class='modalText'>" . $arrayphoto[7]['bio_program'] . " ". $arrayphoto[7]['bio_second_program']."</h2>";
                echo "<h3 class='modalText'>" . $arrayphoto[7]['bio_login_email'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[7]['bio_email'] . "</h4>";
                echo "<h3 class='modalText'>" . $arrayphoto[7]['bio_website_address'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[7]['bio_second_web'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[7]['bio_linkedIn'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[7]['bio_hometown'] . "</h4>";
                echo "<p class='modalText'>" . $arrayphoto[7]['bio_career_goals'] . "</p>";
                echo "<h3 class='modalText'>" . $arrayphoto[7]['bio_three_words'] . "</h3>";
                echo "<img class='picture' id ='modalPhoto'
                        src='assets/img/dpd-photos/photo-8.jpg'/>";
  }
  if ($q == "photo 9") {

                echo "<h1 class='modalText'>" .  $arrayphoto[8]['bio_first_name'] . " ". $arrayphoto[8]['bio_last_name'] . "</h1>";
                echo "<h2 class='modalText'>" . $arrayphoto[8]['bio_program'] . " ". $arrayphoto[8]['bio_second_program']."</h2>";
                echo "<h3 class='modalText'>" . $arrayphoto[8]['bio_login_email'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[8]['bio_email'] . "</h4>";
                echo "<h3 class='modalText'>" . $arrayphoto[8]['bio_website_address'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[8]['bio_second_web'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[8]['bio_linkedIn'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[8]['bio_hometown'] . "</h4>";
                echo "<p class='modalText'>" . $arrayphoto[8]['bio_career_goals'] . "</p>";
                echo "<h3 class='modalText'>" . $arrayphoto[8]['bio_three_words'] . "</h3>";
                echo "<img class='picture' id ='modalPhoto'
                        src='assets/img/dpd-photos/photo-9.jpg'/>";
  }
  if ($q == "photo 10") {

                echo "<h1 class='modalText'>" .  $arrayphoto[9]['bio_first_name'] . " ". $arrayphoto[9]['bio_last_name'] . "</h1>";
                echo "<h2 class='modalText'>" . $arrayphoto[9]['bio_program'] . " ". $arrayphoto[9]['bio_second_program']."</h2>";
                echo "<h3 class='modalText'>" . $arrayphoto[9]['bio_login_email'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[9]['bio_email'] . "</h4>";
                echo "<h3 class='modalText'>" . $arrayphoto[9]['bio_website_address'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[9]['bio_second_web'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[9]['bio_linkedIn'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[9]['bio_hometown'] . "</h4>";
                echo "<p class='modalText'>" . $arrayphoto[9]['bio_career_goals'] . "</p>";
                echo "<h3 class='modalText'>" . $arrayphoto[9]['bio_three_words'] . "</h3>";
                echo "<img class='picture' id ='modalPhoto'
                        src='assets/img/dpd-photos/photo-10.jpg'/>";
  }
  if ($q == "photo 11") {

                echo "<h1 class='modalText'>" .  $arrayphoto[10]['bio_first_name'] . " ". $arrayphoto[10]['bio_last_name'] . "</h1>";
                echo "<h2 class='modalText'>" . $arrayphoto[10]['bio_program'] . " ". $arrayphoto[10]['bio_second_program']."</h2>";
                echo "<h3 class='modalText'>" . $arrayphoto[10]['bio_login_email'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[10]['bio_email'] . "</h4>";
                echo "<h3 class='modalText'>" . $arrayphoto[10]['bio_website_address'] . "</h3>";
                echo "<h4 class='modalText'>" . $arrayphoto[10]['bio_second_web'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[10]['bio_linkedIn'] . "</h4>";
                echo "<h4 class='modalText'>" . $arrayphoto[10]['bio_hometown'] . "</h4>";
                echo "<p class='modalText'>" . $arrayphoto[10]['bio_career_goals'] . "</p>";
                echo "<h3 class='modalText'>" . $arrayphoto[10]['bio_three_words'] . "</h3>";
                echo "<img class='picture' id ='modalPhoto' 
                        src='assets/img/dpd-photos/photo-11.jpg'/>";
  }




 ?>
