<?php
 include "loadData.php";
$q = $_REQUEST["q"];
$video = array();
  for ($i=0; $i < 3; $i++) {
    $video[$i]=
     "<h1 class='modalText center'>" .  $arrayVideo[$i]['bio_first_name'] . " ". $arrayVideo[$i]['bio_last_name'] . "</h1>" .
     "<h3 class='modalText center'>" . $arrayVideo[$i]['bio_program'] . "</h3> <h5 class='modalText center'> ". $arrayVideo[$i]['bio_second_program']."</h5>" .

  //  echo "<h3 class='modalText'>" . $arrayGD[6]['bio_login_email'] . "</h3>";
    "<div class='bioLinks'><h4 class='modalText descrip'>Web Links</h4>" .
    "<h5><a class='modalText center' href=mailto:".$arrayVideo[$i]['bio_login_email'] ."?Subject=Dmacc%20Portfolio%20Day%202018 target='_top'>Email Me</a></h5>" .
     "<h5><a class='modalText center' href=" . $arrayVideo[$i]['bio_website_address'] . ">My Website</a></h5>" .
     "<h5><a class='modalText center' href=" . $arrayVideo[$i]['bio_second_web'] . ">My Resources</a></h5>" .
     "<h5><a class='modalText center' href=" . $arrayVideo[$i]['bio_linkedIn'] . ">My Linkedin</a></h5>" .
     "</div>".
    "<h4 class='modalText descrip'>Hometown</h4>" .
     "<h5 class='modalText center'>" . $arrayVideo[$i]['bio_hometown'] . "</h5>" .
    "<h4 class='modalText descrip'>Career Goals</h4>" .
   "<p class='modalText center'>" . $arrayVideo[$i]['bio_career_goals'] . "</p>" .
    "<h4 class='modalText descrip' >Three Words That Describe Me</h4>" .
   "<h3 class='modalText center'>" . $arrayVideo[$i]['bio_three_words'] . "</h3>" .
   "<img class='picture' id ='modalPhoto' src='assets/img/dpd-photos/video-$i.jpg'/><br>" .
   "<span class='close'>X</span>";

}
if ($q == "video 0") {
  echo $video[0];

}
  if ($q == "video 1") {
    echo $video[1];
}
if ($q == "video 2") {
  echo $video[2];
}
if ($q == "video 3") {
  echo $video[3];
}
if ($q == "video 4") {
  echo $video[4];
}
if ($q == "video 5") {
  echo $video[5];
}
if ($q == "video 6") {
  echo $video[6];
}
?>
