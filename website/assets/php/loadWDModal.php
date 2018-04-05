<?php
include "loadData.php";
$q = $_REQUEST["q"];
$WD = array();

 for ($i=0; $i < 8; $i++) {
   if($arrayWD[$i]['bio_program'] == 'webDevelopment')
   {
     $arrayWD[$i]['bio_program'] = 'Web Development';
   }
   if($arrayWD[$i]['bio_second_program'] == 'none'){
     $arrayWD[$i]['bio_second_program'] = '';
   }
   if($arrayWD[$i]['bio_second_program'] == 'photography')
   {
       $arrayWD[$i]['bio_second_program'] = 'Photography';
   }
   if($arrayWD[$i]['bio_second_program'] == 'graphicDesign')
   {
       $arrayWD[$i]['bio_second_program'] = 'Graphic Design';
   }
   if($arrayWD[$i]['bio_second_program'] == 'videoProduction')
   {
       $arrayWD[$i]['bio_second_program'] = 'Video Production';
   }
   $WDHead[$arrayWD[$i]['bio_last_name'].'.'.$arrayWD[$i]['bio_first_name']]=
    "<h1 class='modalText center'>" .  $arrayWD[$i]['bio_first_name'] . " ". $arrayWD[$i]['bio_last_name'] . "</h1>" .
    "<h3 class='modalText center'>" . $arrayWD[$i]['bio_program'] . "</h3> <h5 class='modalText center'> ". $arrayWD[$i]['bio_second_program']."</h5>" .

 //  echo "<h3 class='modalText'>" . $arrayGD[6]['bio_login_email'] . "</h3>";
   "<div class='bioLinks'><h4 class='modalText descrip'>Web Links</h4>" .
   "<h5 class='modalText center'> ".$arrayWD[$i]['bio_email'] ."</h5>";
 }

 for ($i=0; $i < 8; $i++) {
 if (empty($arrayWD[$i]['bio_website_address'])) {
   $WDWebLink[$arrayWD[$i]['bio_last_name'].'.'.$arrayWD[$i]['bio_first_name']]= '';
 }
 else {
   $WDWebLink[$arrayWD[$i]['bio_last_name'].'.'.$arrayWD[$i]['bio_first_name']]="<h5><a class='modalText center' target='_blank' href=" . $arrayWD[$i]['bio_website_address'] . ">View My Website</a></h5>";
 }}
 for ($i=0; $i < 8; $i++) {
 if (empty($arrayWD[$i]['bio_second_web'])) {
   $WDWorkLink[$arrayWD[$i]['bio_last_name'].'.'.$arrayWD[$i]['bio_first_name']]= '';
 }
 else {
   $WDWorkLink[$arrayWD[$i]['bio_last_name'].'.'.$arrayWD[$i]['bio_first_name']]="<h5><a class='modalText center' target='_blank' href=" . $arrayWD[$i]['bio_second_web'] . ">View My Work</a></h5>";
 }}
 for ($i=0; $i < 8; $i++) {
 if (empty($arrayWD[$i]['bio_linkedIn'])) {
   $WDLinkedinLink[$arrayWD[$i]['bio_last_name'].'.'.$arrayWD[$i]['bio_first_name']]= '';
 }
 else {
   $WDLinkedinLink[$arrayWD[$i]['bio_last_name'].'.'.$arrayWD[$i]['bio_first_name']] ="<h5><a class='modalText center' target='_blank' href=" . $arrayWD[$i]['bio_linkedIn'] . ">View My Linkedin</a></h5>";
 }}
 for ($i=0; $i < 8; $i++) {
   $WDFooter[$arrayWD[$i]['bio_last_name'].'.'.$arrayWD[$i]['bio_first_name']]=
   "</div><h4 class='modalText descrip'>Hometown</h4>" .
    "<h5 class='modalText center'>" . $arrayWD[$i]['bio_hometown'] . "</h5>" .
   "<h4 class='modalText descrip'>Career Goals</h4>" .
  "<p class='modalText center'>" . $arrayWD[$i]['bio_career_goals'] . "</p>" .
   "<h4 class='modalText descrip' >Three Words That Describe Me</h4>" .
  "<h3 class='modalText center'>" . $arrayWD[$i]['bio_three_words'] . "</h3>" .
  "<img class='picture' id ='modalPhoto' src='assets/img/finalPicsWD/".$arrayWD[$i]['bio_last_name'] . ".". $arrayWD[$i]['bio_first_name'] .".jpg'/><br>" .
  "<span class='close' onclick='closeModal()'>X</span>";
}
if ($q == "Vance.Erin") {
  echo $WDHead['Vance.Erin'];
echo $WDWebLink['Vance.Erin'];
echo $WDWorkLink['Vance.Erin'];
echo $WDLinkedinLink['Vance.Erin'];
echo $WDFooter['Vance.Erin'];

}
 if ($q == "Schneider.Dan") {
   echo $WDHead['Schneider.Dan'];
 echo $WDWebLink['Schneider.Dan'];
 echo $WDWorkLink['Schneider.Dan'];
 echo $WDLinkedinLink['Schneider.Dan'];
 echo $WDFooter['Schneider.Dan'];
}
if ($q == "Hoang.Phuc") {
  echo $WDHead['Hoang.Phuc'];
echo $WDWebLink['Hoang.Phuc'];
echo $WDWorkLink['Hoang.Phuc'];
echo $WDLinkedinLink['Hoang.Phuc'];
echo $WDFooter['Hoang.Phuc'];
}
if ($q == "Jennings.Robin") {
  echo $WDHead['Jennings.Robin'];
echo $WDWebLink['Jennings.Robin'];
echo $WDWorkLink['Jennings.Robin'];
echo $WDLinkedinLink['Jennings.Robin'];
echo $WDFooter['Jennings.Robin'];
}
if ($q == "Logan.Adam") {
  echo $WDHead['Logan.Adam'];
echo $WDWebLink['Logan.Adam'];
echo $WDWorkLink['Logan.Adam'];
echo $WDLinkedinLink['Logan.Adam'];
echo $WDFooter['Logan.Adam'];
}
if ($q == "Kanauss.Joseph") {
  echo $WDHead['Kanauss.Joseph'];
echo $WDWebLink['Kanauss.Joseph'];
echo $WDWorkLink['Kanauss.Joseph'];
echo $WDLinkedinLink['Kanauss.Joseph'];
echo $WDFooter['Kanauss.Joseph'];
}
if ($q == "Macias.Andres") {
  echo $WDHead['Macias.Andres'];
echo $WDWebLink['Macias.Andres'];
echo $WDWorkLink['Macias.Andres'];
echo $WDLinkedinLink['Macias.Andres'];
echo $WDFooter['Macias.Andres'];
}
if ($q == "OToole.Noah") {
  echo $WDHead['OToole.Noah'];
echo $WDWebLink['OToole.Noah'];
echo $WDWorkLink['OToole.Noah'];
echo $WDLinkedinLink['OToole.Noah'];
echo $WDFooter['OToole.Noah'];
}

 ?>
