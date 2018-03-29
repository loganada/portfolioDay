<?php
 include "loadData.php";
$q = $_REQUEST["q"];
$GD = array();
  for ($i=0; $i < 19; $i++) {
    if($arrayGD[$i]['bio_program'] == 'graphicDesign')
    {
      $arrayGD[$i]['bio_program'] = 'Graphic Design';
    }
    if($arrayGD[$i]['bio_second_program'] == 'none'){
      $arrayGD[$i]['bio_second_program'] = '';
    }
    if($arrayGD[$i]['bio_second_program'] == 'photography')
    {
        $arrayGD[$i]['bio_second_program'] = 'Photography';
    }
    if($arrayGD[$i]['bio_second_program'] == 'webDevelopment')
    {
        $arrayGD[$i]['bio_second_program'] = 'Web Development';
    }
    if($arrayGD[$i]['bio_second_program'] == 'videoProduction')
    {
        $arrayGD[$i]['bio_second_program'] = 'Video Production';
    }
  $GDHead[$i]=
   "<h1 class='modalText center'>" .  $arrayGD[$i]['bio_first_name'] . " ". $arrayGD[$i]['bio_last_name'] . "</h1>" .
   "<h3 class='modalText center'>" . $arrayGD[$i]['bio_program'] . "</h3> <h5 class='modalText center'> ". $arrayGD[$i]['bio_second_program']."</h5>".
 //"<h3 class='modalText'>" . $arrayGD[$i]['bio_login_email'] . "</h3>".
  "<div class='bioLinks'><h4 class='modalText descrip'>Web Links</h4>".
  "<h5 class='modalText center'> ".$arrayGD[$i]['bio_email'] ."</h5>";
}
for ($i=0; $i < 19; $i++) {
if (empty($arrayGD[$i]['bio_website_address'])) {
  $GDWebLink[$i] = '';
}
else {
  $GDWebLink[$i] ="<h5><a class='modalText center' href=" . $arrayGD[$i]['bio_website_address'] . ">View My Website</a></h5>";
}}
for ($i=0; $i < 19; $i++) {
if (empty($arrayGD[$i]['bio_second_web'])) {
  $GDWorkLink[$i] = '';
}
else {
  $GDWorkLink[$i] ="<h5><a class='modalText center' href=" . $arrayGD[$i]['bio_second_web'] . ">View My Work</a></h5>";
}}
for ($i=0; $i < 19; $i++) {
if (empty($arrayGD[$i]['bio_linkedIn'])) {
  $GDLinkedinLink[$i] = '';
}
else {
  $GDLinkedinLink[$i] ="<h5><a class='modalText center' href=" . $arrayGD[$i]['bio_linkedIn'] . ">View My Linkedin</a></h5>";
}}
for ($i=0; $i < 19; $i++) {
  $GDFooter[$i]=
  "</div><h4 class='modalText descrip'>Hometown</h4>" .
   "<h5 class='modalText center'>" . $arrayGD[$i]['bio_hometown'] . "</h5>" .
  "<h4 class='modalText descrip'>Career Goals</h4>" .
 "<p class='modalText center'>" . $arrayGD[$i]['bio_career_goals'] . "</p>" .
  "<h4 class='modalText descrip' >Three Words That Describe Me</h4>" .
 "<h3 class='modalText center'>" . $arrayGD[$i]['bio_three_words'] . "</h3>" .
 "<img class='picture' id ='modalPhoto' src='assets/img/dpd-photos/GD-$i.jpg'/><br>" .
 "<span class='close' onclick='closeModal()'>X</span>";
}

if ($q == "GD 0") {
  echo $GDHead[0];
echo $GDWebLink[0];
echo $GDWorkLink[0];
echo $GDLinkedinLink[0];
echo $GDFooter[0];
}
  if ($q == "GD 1") {
    echo $GDHead[1];
  echo $GDWebLink[1];
  echo $GDWorkLink[1];
  echo $GDLinkedinLink[1];
  echo $GDFooter[1];
}
if ($q == "GD 2") {
  echo $GDHead[2];
echo $GDWebLink[2];
echo $GDWorkLink[2];
echo $GDLinkedinLink[2];
echo $GDFooter[2];
}
if ($q == "GD 3") {
  echo $GDHead[3];
echo $GDWebLink[3];
echo $GDWorkLink[3];
echo $GDLinkedinLink[3];
echo $GDFooter[3];
}
if ($q == "GD 4") {
  echo $GDHead[4];
echo $GDWebLink[4];
echo $GDWorkLink[4];
echo $GDLinkedinLink[4];
echo $GDFooter[4];
}
if ($q == "GD 5") {
  echo $GDHead[5];
echo $GDWebLink[5];
echo $GDWorkLink[5];
echo $GDLinkedinLink[5];
echo $GDFooter[5];
}
if ($q == "GD 6") {
  echo $GDHead[6];
echo $GDWebLink[6];
echo $GDWorkLink[6];
echo $GDLinkedinLink[6];
echo $GDFooter[6];
}
if ($q == "GD 7") {
  echo $GDHead[7];
echo $GDWebLink[7];
echo $GDWorkLink[7];
echo $GDLinkedinLink[7];
echo $GDFooter[7];
}
if ($q == "GD 8") {
  //echo $GD[8]10
}
if ($q == "GD 9") {
  echo $GDHead[9];
echo $GDWebLink[9];
echo $GDWorkLink[9];
echo $GDLinkedinLink[9];
echo $GDFooter[9];
}
if ($q == "GD 10") {
  echo $GDHead[10];
echo $GDWebLink[10];
echo $GDWorkLink[10];
echo $GDLinkedinLink[10];
echo $GDFooter[10];
}
if ($q == "GD 11") {
  echo $GDHead[11];
echo $GDWebLink[11];
echo $GDWorkLink[11];
echo $GDLinkedinLink[11];
echo $GDFooter[11];
}
if ($q == "GD 12") {
  echo $GDHead[12];
echo $GDWebLink[12];
echo $GDWorkLink[12];
echo $GDLinkedinLink[12];
echo $GDFooter[12];
}
  if ($q == "GD 13") {
    echo $GDHead[13];
  echo $GDWebLink[13];
  echo $GDWorkLink[13];
  echo $GDLinkedinLink[13];
  echo $GDFooter[13];
}
if ($q == "GD 14") {
  echo $GDHead[14];
echo $GDWebLink[14];
echo $GDWorkLink[14];
echo $GDLinkedinLink[14];
echo $GDFooter[14];
}
if ($q == "GD 15") {
  echo $GDHead[15];
echo $GDWebLink[15];
echo $GDWorkLink[15];
echo $GDLinkedinLink[15];
echo $GDFooter[15];
}
if ($q == "GD 16") {
  echo $GDHead[16];
echo $GDWebLink[16];
echo $GDWorkLink[16];
echo $GDLinkedinLink[16];
echo $GDFooter[16];
}
if ($q == "GD 17") {
  echo $GDHead[17];
echo $GDWebLink[17];
echo $GDWorkLink[17];
echo $GDLinkedinLink[17];
echo $GDFooter[17];
}
if ($q == "GD 18") {
  //echo $GD[18];
echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}
if ($q == "GD 19") {
  //echo $GD[19];
echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}
if ($q == "GD 20") {
//  echo $GD[20];
echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}
if ($q == "GD 21") {
//  echo $GD[21];
echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}
if ($q == "GD 22") {
  //echo $GD[22];
echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}
if ($q == "GD 23") {
//  echo $GD[23];
echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}
if ($q == "GD 24") {
//  echo $GD[24];
echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}
if ($q == "GD 25") {
  //echo $GD[25];
echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}
if ($q == "GD 26") {
  //echo $GD[26];
echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}
if ($q == "GD 27") {
  //echo $GD[27];
  echo "<h1 class='center'>NO STUDENT INFORMATION</h1>";
}


 ?>
