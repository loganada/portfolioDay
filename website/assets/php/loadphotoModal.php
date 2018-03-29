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
 if($arrayphoto[$i]['bio_second_program'] == 'graphicDesign')
 {
     $arrayphoto[$i]['bio_second_program'] = 'Graphic Design';
 }
 if($arrayphoto[$i]['bio_second_program'] == 'webDevelopment')
 {
     $arrayphoto[$i]['bio_second_program'] = 'Web Development';
 }
 if($arrayphoto[$i]['bio_second_program'] == 'videoProduction')
 {
     $arrayphoto[$i]['bio_second_program'] = 'Video Production';
 }

   $photoHead[$i]=
    "<h1 class='modalText center'>" .  $arrayphoto[$i]['bio_first_name'] . " ". $arrayphoto[$i]['bio_last_name'] . "</h1>" .
    "<h3 class='modalText center'>" . $arrayphoto[$i]['bio_program'] . "</h3> <h5 class='modalText center'> ". $arrayphoto[$i]['bio_second_program']."</h5>" .

 //  echo "<h3 class='modalText'>" . $arrayGD[6]['bio_email'] . "</h3>";
   "<div class='bioLinks'><h4 class='modalText descrip'>Web Links</h4>" .
   "<h5 class='modalText center'> ".$arrayphoto[$i]['bio_login_email'] ."</h5>";
}
   for ($i=0; $i < 11; $i++) {
   if (empty($arrayphoto[$i]['bio_website_address'])) {
     $photoWebLink[$i] = '';
   }
   else {
     $photoWebLink[$i] ="<h5><a class='modalText center' href=" . $arrayphoto[$i]['bio_website_address'] . ">View My Website</a></h5>";
   }}
   for ($i=0; $i < 11; $i++) {
   if (empty($arrayphoto[$i]['bio_second_web'])) {
     $photoWorkLink[$i] = '';
   }
   else {
     $photoWorkLink[$i] ="<h5><a class='modalText center' href=" . $arrayphoto[$i]['bio_second_web'] . ">View My Work</a></h5>";
   }}
   for ($i=0; $i < 11; $i++) {
   if (empty($arrayphoto[$i]['bio_linkedIn'])) {
     $photoLinkedinLink[$i] = '';
   }
   else {
     $photoLinkedinLink[$i] ="<h5><a class='modalText center' href=" . $arrayphoto[$i]['bio_linkedIn'] . ">View My Linkedin</a></h5>";
   }}
   for ($i=0; $i < 11; $i++) {
     $photoFooter[$i]=
   "</div><h4 class='modalText descrip'>Hometown</h4>" .
    "<h5 class='modalText center'>" . $arrayphoto[$i]['bio_hometown'] . "</h5>" .
   "<h4 class='modalText descrip'>Career Goals</h4>" .
  "<p class='modalText center'>" . $arrayphoto[$i]['bio_career_goals'] . "</p>" .
   "<h4 class='modalText descrip' >Three Words That Describe Me</h4>" .
  "<h3 class='modalText center'>" . $arrayphoto[$i]['bio_three_words'] . "</h3>" .
  "<img class='picture' id ='modalPhoto' src='assets/img/dpd-photos/photo-$i.jpg'/><br>" .
  "<span class='close' onclick='closeModal()'>X</span>";
}
if ($q == "photo 0") {
  echo $photoHead[0];
echo $photoWebLink[0];
echo $photoWorkLink[0];
echo $photoLinkedinLink[0];
echo $photoFooter[0];

}
 if ($q == "photo 1") {
   echo $photoHead[1];
 echo $photoWebLink[1];
 echo $photoWorkLink[1];
 echo $photoLinkedinLink[1];
 echo $photoFooter[1];
}
if ($q == "photo 2") {
  echo $photoHead[2];
echo $photoWebLink[2];
echo $photoWorkLink[2];
echo $photoLinkedinLink[2];
echo $photoFooter[2];
}
if ($q == "photo 3") {
  echo $photoHead[3];
echo $photoWebLink[3];
echo $photoWorkLink[3];
echo $photoLinkedinLink[3];
echo $photoFooter[3];
}
if ($q == "photo 4") {
  echo $photoHead[4];
echo $photoWebLink[4];
echo $photoWorkLink[4];
echo $photoLinkedinLink[4];
echo $GDFooter[4];
}
if ($q == "photo 5") {
  echo $photoHead[5];
echo $photoWebLink[5];
echo $photoWorkLink[5];
echo $photoLinkedinLink[5];
echo $photoFooter[5];
}
if ($q == "photo 6") {
  echo $photoHead[6];
echo $photoWebLink[6];
echo $photoWorkLink[6];
echo $photoLinkedinLink[6];
echo $photoFooter[6];
}
if ($q == "photo 7") {
  echo $photoHead[7];
echo $photoWebLink[7];
echo $photoWorkLink[7];
echo $photoLinkedinLink[7];
echo $photoFooter[7];
}
if ($q == "photo 8") {
  echo $photoHead[8];
echo $photoWebLink[8];
echo $photoWorkLink[8];
echo $photoLinkedinLink[8];
echo $photoFooter[8];
}
if ($q == "photo 9") {
  echo $photoHead[9];
echo $photoWebLink[9];
echo $photoWorkLink[9];
echo $photoLinkedinLink[9];
echo $photoFooter[9];
}
if ($q == "photo 10") {
  echo $photoHead[10];
echo $photoWebLink[10];
echo $photoWorkLink[10];
echo $photoLinkedinLink[10];
echo $photoFooter[10];
}
if ($q == "photo 11") {
 //echo $photo[11];
 echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}
if ($q == "photo 12") {
 // echo $photo[12];
 echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}
if ($q == "photo 13") {
 // echo $photo[13];
 echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}
if ($q == "photo 14") {
 // echo $photo[14];
 echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}
if ($q == "photo 15") {
 //echo $photo[15];
 echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}
if ($q == "photo 16") {
 //echo $photo[16];
 echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";

}
?>
