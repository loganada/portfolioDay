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
   $WDHead[$i]=
    "<h1 class='modalText center'>" .  $arrayWD[$i]['bio_first_name'] . " ". $arrayWD[$i]['bio_last_name'] . "</h1>" .
    "<h3 class='modalText center'>" . $arrayWD[$i]['bio_program'] . "</h3> <h5 class='modalText center'> ". $arrayWD[$i]['bio_second_program']."</h5>" .

 //  echo "<h3 class='modalText'>" . $arrayGD[6]['bio_login_email'] . "</h3>";
   "<div class='bioLinks'><h4 class='modalText descrip'>Web Links</h4>" .
   "<h5 class='modalText center'> ".$arrayWD[$i]['bio_email'] ."</h5>";
 }

 for ($i=0; $i < 8; $i++) {
 if (empty($arrayWD[$i]['bio_website_address'])) {
   $WDWebLink[$i] = '';
 }
 else {
   $WDWebLink[$i] ="<h5><a class='modalText center' href=" . $arrayWD[$i]['bio_website_address'] . ">View My Website</a></h5>";
 }}
 for ($i=0; $i < 8; $i++) {
 if (empty($arrayWD[$i]['bio_second_web'])) {
   $WDWorkLink[$i] = '';
 }
 else {
   $WDWorkLink[$i] ="<h5><a class='modalText center' href=" . $arrayWD[$i]['bio_second_web'] . ">View My Work</a></h5>";
 }}
 for ($i=0; $i < 8; $i++) {
 if (empty($arrayWD[$i]['bio_linkedIn'])) {
   $WDLinkedinLink[$i] = '';
 }
 else {
   $WDLinkedinLink[$i] ="<h5><a class='modalText center' href=" . $arrayWD[$i]['bio_linkedIn'] . ">View My Linkedin</a></h5>";
 }}
 for ($i=0; $i < 8; $i++) {
   $WDFooter[$i]=
   "</div><h4 class='modalText descrip'>Hometown</h4>" .
    "<h5 class='modalText center'>" . $arrayWD[$i]['bio_hometown'] . "</h5>" .
   "<h4 class='modalText descrip'>Career Goals</h4>" .
  "<p class='modalText center'>" . $arrayWD[$i]['bio_career_goals'] . "</p>" .
   "<h4 class='modalText descrip' >Three Words That Describe Me</h4>" .
  "<h3 class='modalText center'>" . $arrayWD[$i]['bio_three_words'] . "</h3>" .
  "<img class='picture' id ='modalPhoto' src='assets/img/dpd-photos/WD-$i.jpg'/><br>" .
  "<span class='close' onclick='closeModal()'>X</span>";
}
if ($q == "WD 0") {
  echo $WDHead[0];
echo $WDWebLink[0];
echo $WDWorkLink[0];
echo $WDLinkedinLink[0];
echo $WDFooter[0];

}
 if ($q == "WD 1") {
   echo $WDHead[1];
 echo $WDWebLink[1];
 echo $WDWorkLink[1];
 echo $WDLinkedinLink[1];
 echo $WDFooter[1];
}
if ($q == "WD 2") {
  echo $WDHead[2];
echo $WDWebLink[2];
echo $WDWorkLink[2];
echo $WDLinkedinLink[2];
echo $WDFooter[2];
}
if ($q == "WD 3") {
  echo $WDHead[3];
echo $WDWebLink[3];
echo $WDWorkLink[3];
echo $WDLinkedinLink[3];
echo $WDFooter[3];
}
if ($q == "WD 4") {
  echo $WDHead[4];
echo $WDWebLink[4];
echo $WDWorkLink[4];
echo $WDLinkedinLink[4];
echo $WDFooter[4];
}
if ($q == "WD 5") {
  echo $WDHead[5];
echo $WDWebLink[5];
echo $WDWorkLink[5];
echo $WDLinkedinLink[5];
echo $WDFooter[5];
}
if ($q == "WD 6") {
  echo $WDHead[6];
echo $WDWebLink[6];
echo $WDWorkLink[6];
echo $WDLinkedinLink[6];
echo $WDFooter[6];
}
if ($q == "WD 7") {
  echo $WDHead[7];
echo $WDWebLink[7];
echo $WDWorkLink[7];
echo $WDLinkedinLink[7];
echo $WDFooter[7];
}
if ($q == "WD 8") {
  echo $WDHead[8];
echo $WDWebLink[8];
echo $WDWorkLink[8];
echo $WDLinkedinLink[8];
echo $WDFooter[8];
}

 ?>
