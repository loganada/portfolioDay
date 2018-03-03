<?php
include "loadData.php";
$q = $_REQUEST["q"];
$WD = array();
 for ($i=0; $i < 8; $i++) {
 $WD[$i]=
  "<h1 class='modalText center'>" .  $arrayWD[$i]['bio_first_name'] . " ". $arrayWD[$i]['bio_last_name'] . "</h1>" .
  "<h3 class='modalText center'>" . $arrayWD[$i]['bio_program'] . " ". $arrayWD[$i]['bio_second_program']."</h3>" .
"<h4 class='modalText center'>" . $arrayWD[$i]['bio_email'] . "</h4>" .
//  echo "<h3 class='modalText'>" . $arrayGD[6]['bio_login_email'] . "</h3>";
 "<h4 class='modalText descrip'>Web Links</h4>" .
  "<h3 class='modalText center'>" . $arrayWD[$i]['bio_website_address'] . "</h3>" .
  "<h4 class='modalText center'>" . $arrayWD[$i]['bio_second_web'] . "</h4>" .
  "<h4 class='modalText center'>" . $arrayWD[$i]['bio_linkedIn'] . "</h4>" .
 "<h4 class='modalText descrip'>Hometown</h4>" .
  "<h4 class='modalText center'>" . $arrayWD[$i]['bio_hometown'] . "</h4>" .
 "<h4 class='modalText descrip'>Career Goals</h4>" .
"<p class='modalText center'>" . $arrayWD[$i]['bio_career_goals'] . "</p>" .
 "<h4 class='modalText descrip' >Three Words That Describe Me</h4>" .
"<h3 class='modalText center'>" . $arrayWD[$i]['bio_three_words'] . "</h3>" .
"<img class='picture' id ='modalPhoto' src='assets/img/dpd-photos/WD-$i.jpg'/><br>" .
"<span class='close'>X</span>";
}
if ($q == "WD 0") {
 echo $WD[0];

}
 if ($q == "WD 1") {
   echo $WD[1];
}
if ($q == "WD 2") {
 echo $WD[2];
}
if ($q == "WD 3") {
 echo $WD[3];
}
if ($q == "WD 4") {
 echo $WD[4];
}
if ($q == "WD 5") {
 echo $WD[5];
}
if ($q == "WD 6") {
 echo $WD[6];
}
if ($q == "WD 7") {
 echo $WD[7];
}
if ($q == "WD 8") {
 echo $WD[8];
}

 ?>
