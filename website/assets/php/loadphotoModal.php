<?php
include "loadData.php";
$q = $_REQUEST["q"];
$photo = array();
 for ($i=0; $i < 11; $i++) {
   if($arrayphoto[$i]['bio_program'] == 'photography')
   {
     $arrayphoto[$i]['bio_program'] = 'Photography';
   }
   if($arrayphoto[$i]['bio_second_program'] == 'none'){
     $arrayphoto[$i]['bio_second_program'] = '';
   }
   $photo[$i]=
    "<h1 class='modalText center'>" .  $arrayphoto[$i]['bio_first_name'] . " ". $arrayphoto[$i]['bio_last_name'] . "</h1>" .
    "<h3 class='modalText center'>" . $arrayphoto[$i]['bio_program'] . "</h3> <h5 class='modalText center'> ". $arrayphoto[$i]['bio_second_program']."</h5>" .

 //  echo "<h3 class='modalText'>" . $arrayGD[6]['bio_login_email'] . "</h3>";
   "<div class='bioLinks'><h4 class='modalText descrip'>Web Links</h4>" .
   "<h5><a class='modalText center' href=mailto:".$arrayphoto[$i]['bio_login_email'] ."?Subject=Dmacc%20Portfolio%20Day%202018 target='_top'>Email Me</a></h5>" .
    "<h5><a class='modalText center' href=" . $arrayphoto[$i]['bio_website_address'] . ">My Website</a></h5>" .
    "<h5><a class='modalText center' href=" . $arrayphoto[$i]['bio_second_web'] . ">My Resources</a></h5>" .
    "<h5><a class='modalText center' href=" . $arrayphoto[$i]['bio_linkedIn'] . ">My Linkedin</a></h5>" .
    "</div>".
   "<h4 class='modalText descrip'>Hometown</h4>" .
    "<h5 class='modalText center'>" . $arrayphoto[$i]['bio_hometown'] . "</h5>" .
   "<h4 class='modalText descrip'>Career Goals</h4>" .
  "<p class='modalText center'>" . $arrayphoto[$i]['bio_career_goals'] . "</p>" .
   "<h4 class='modalText descrip' >Three Words That Describe Me</h4>" .
  "<h3 class='modalText center'>" . $arrayphoto[$i]['bio_three_words'] . "</h3>" .
  "<img class='picture' id ='modalPhoto' src='assets/img/dpd-photos/photo-$i.jpg'/><br>" .
  "<span class='close' onclick='closeModal()'>X</span>";
}
if ($q == "photo 0") {
 //echo $photo[0];

}
 if ($q == "photo 1") {
   //echo $photo[1];
}
if ($q == "photo 2") {
// echo $photo[2];
}
if ($q == "photo 3") {
 //echo $photo[3];
}
if ($q == "photo 4") {
/// echo $photo[4];
}
if ($q == "photo 5") {
 //echo $photo[5];
}
if ($q == "photo 6") {
 //echo $photo[6];
}
if ($q == "photo 7") {
 //echo $photo[7];
}
if ($q == "photo 8") {
 //echo $photo[8];
}
if ($q == "photo 9") {
 //echo $photo[9];
}
if ($q == "photo 10") {
 //echo $photo[10];
}
if ($q == "photo 11") {
 //echo $photo[11];
}
