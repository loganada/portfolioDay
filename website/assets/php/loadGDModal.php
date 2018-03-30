<?php
 include "loadData.php";
$q = $_REQUEST["q"];
$GD = array();
  for ($i=0; $i < 22; $i++) {
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
  $GDHead[$arrayGD[$i]['bio_last_name'].'.'.$arrayGD[$i]['bio_first_name']]=
//$GDHead[$i] =

   "<h1 class='modalText center'>" .  $arrayGD[$i]['bio_first_name'] . " ". $arrayGD[$i]['bio_last_name'] . "</h1>" .
   "<h3 class='modalText center'>" . $arrayGD[$i]['bio_program'] . "</h3> <h5 class='modalText center'> ". $arrayGD[$i]['bio_second_program']."</h5>".
 "<h3 class='modalText'>" . $arrayGD[$i]['bio_login_email'] . "</h3>".
  "<div class='bioLinks'><h4 class='modalText descrip'>Web Links</h4>".
  "<h5 class='modalText center'> ".$arrayGD[$i]['bio_email'] ."</h5>";
}
for ($i=0; $i < 22; $i++) {
if (empty($arrayGD[$i]['bio_website_address'])) {
  $GDWebLink[$arrayGD[$i]['bio_last_name'].'.'.$arrayGD[$i]['bio_first_name']]= '';
}
else {
  $GDWebLink[$arrayGD[$i]['bio_last_name'].'.'.$arrayGD[$i]['bio_first_name']]="<h5><a class='modalText center' href=" . $arrayGD[$i]['bio_website_address'] . ">View My Website</a></h5>";
}}
for ($i=0; $i < 22; $i++) {
if (empty($arrayGD[$i]['bio_second_web'])) {
  $GDWorkLink[$arrayGD[$i]['bio_last_name'].'.'.$arrayGD[$i]['bio_first_name']]= '';
}
else {
  $GDWorkLink[$arrayGD[$i]['bio_last_name'].'.'.$arrayGD[$i]['bio_first_name']]="<h5><a class='modalText center' href=" . $arrayGD[$i]['bio_second_web'] . ">View My Work</a></h5>";
}}
for ($i=0; $i < 22; $i++) {
if (empty($arrayGD[$i]['bio_linkedIn'])) {
  $GDLinkedinLink[$arrayGD[$i]['bio_last_name'].'.'.$arrayGD[$i]['bio_first_name']]= '';
}
else {
  $GDLinkedinLink[$arrayGD[$i]['bio_last_name'].'.'.$arrayGD[$i]['bio_first_name']]="<h5><a class='modalText center' href=" . $arrayGD[$i]['bio_linkedIn'] . ">View My Linkedin</a></h5>";
}}
for ($i=0; $i < 22; $i++) {
  $GDFooter[$arrayGD[$i]['bio_last_name'].'.'.$arrayGD[$i]['bio_first_name']]=
  "</div><h4 class='modalText descrip'>Hometown</h4>" .
   "<h5 class='modalText center'>" . $arrayGD[$i]['bio_hometown'] . "</h5>" .
  "<h4 class='modalText descrip'>Career Goals</h4>" .
 "<p class='modalText center'>" . $arrayGD[$i]['bio_career_goals'] . "</p>" .
  "<h4 class='modalText descrip' >Three Words That Describe Me</h4>" .
 "<h3 class='modalText center'>" . $arrayGD[$i]['bio_three_words'] . "</h3>" .
 "<img class='picture' id ='modalPhoto' src='assets/img/finalPicsGD/".$arrayGD[$i]['bio_last_name'] . ".". $arrayGD[$i]['bio_first_name'] .".jpg'/><br>" .
 "<span class='close' onclick='closeModal()'>X</span>";
}

if ($q == "Connors.Steven") {
  echo $GDHead['Connors.Steven'];
echo $GDWebLink['Connors.Steven'];
echo $GDWorkLink['Connors.Steven'];
echo $GDLinkedinLink['Connors.Steven'];
echo $GDFooter['Connors.Steven'];
}
  if ($q == "Cooper.Allison") {
    echo $GDHead['Cooper.Allison'];
  echo $GDWebLink['Cooper.Allison'];
  echo $GDWorkLink['Cooper.Allison'];
  echo $GDLinkedinLink['Cooper.Allison'];
  echo $GDFooter['Cooper.Allison'];
}
if ($q == "DuPey.Ben") {
  echo $GDHead['DuPey.Ben'];
echo $GDWebLink['DuPey.Ben'];
echo $GDWorkLink['DuPey.Ben'];
echo $GDLinkedinLink['DuPey.Ben'];
echo $GDFooter['DuPey.Ben'];
}
if ($q == "Erdewyk.Brent Van") {
  echo $GDHead['Erdewyk.Brent Van'];
echo $GDWebLink['Erdewyk.Brent Van'];
echo $GDWorkLink['Erdewyk.Brent Van'];
echo $GDLinkedinLink['Erdewyk.Brent Van'];
echo $GDFooter['Erdewyk.Brent Van'];
}
if ($q == "Ewing.Meghan") {
  echo $GDHead['Ewing.Meghan'];
echo $GDWebLink['Ewing.Meghan'];
echo $GDWorkLink['Ewing.Meghan'];
echo $GDLinkedinLink['Ewing.Meghan'];
echo $GDFooter['Ewing.Meghan'];
}
if ($q == "Friedrichsen.Parker") {
  echo $GDHead['Friedrichsen.Parker'];
echo $GDWebLink['Friedrichsen.Parker'];
echo $GDWorkLink['Friedrichsen.Parker'];
echo $GDLinkedinLink['Friedrichsen.Parker'];
echo $GDFooter['Friedrichsen.Parker'];
}
if ($q == "Garcia.Siriaco") {
  echo $GDHead['Garcia.Siriaco'];
echo $GDWebLink['Garcia.Siriaco'];
echo $GDWorkLink['Garcia.Siriaco'];
echo $GDLinkedinLink['Garcia.Siriaco'];
echo $GDFooter['Garcia.Siriaco'];
}
if ($q == "Hill.Bree") {
  echo $GDHead['Hill.Bree'];
echo $GDWebLink['Hill.Bree'];
echo $GDWorkLink['Hill.Bree'];
echo $GDLinkedinLink['Hill.Bree'];
echo $GDFooter['Hill.Bree'];
}

if ($q == "Hlima.Lalthiang") {
  echo $GDHead['Hlima.Lalthiang'];
echo $GDWebLink['Hlima.Lalthiang'];
echo $GDWorkLink['Hlima.Lalthiang'];
echo $GDLinkedinLink['Hlima.Lalthiang'];
echo $GDFooter['Hlima.Lalthiang'];
}
if ($q == "Kopecky.Griffin") {
  echo $GDHead['Kopecky.Griffin'];
echo $GDWebLink['Kopecky.Griffin'];
echo $GDWorkLink['Kopecky.Griffin'];
echo $GDLinkedinLink['Kopecky.Griffin'];
echo $GDFooter['Kopecky.Griffin'];
}
if ($q == "Mander.Caitlin") {
  echo $GDHead['Mander.Caitlin'];
echo $GDWebLink['Mander.Caitlin'];
echo $GDWorkLink['Mander.Caitlin'];
echo $GDLinkedinLink['Mander.Caitlin'];
echo $GDFooter['Mander.Caitlin'];
}
if ($q == "Meyer.Caleb") {
  echo $GDHead['Meyer.Caleb'];
echo $GDWebLink['Meyer.Caleb'];
echo $GDWorkLink['Meyer.Caleb'];
echo $GDLinkedinLink['Meyer.Caleb'];
echo $GDFooter['Meyer.Caleb'];
}
  if ($q == "Millard.Dallas") {
    echo $GDHead['Millard.Dallas'];
  echo $GDWebLink['Millard.Dallas'];
  echo $GDWorkLink['Millard.Dallas'];
  echo $GDLinkedinLink['Millard.Dallas'];
  echo $GDFooter['Millard.Dallas'];
}
if ($q == "Morgan.Kylie") {
  echo $GDHead['Morgan.Kylie'];
echo $GDWebLink['Morgan.Kylie'];
echo $GDWorkLink['Morgan.Kylie'];
echo $GDLinkedinLink['Morgan.Kylie'];
echo $GDFooter['Morgan.Kylie'];
}
if ($q == "Needham.Ariel") {
  echo $GDHead['Needham.Ariel'];
echo $GDWebLink['Needham.Ariel'];
echo $GDWorkLink['Needham.Ariel'];
echo $GDLinkedinLink['Needham.Ariel'];
echo $GDFooter['Needham.Ariel'];
}
if ($q == "Peterson.Isaiah Kinseth") {
  echo $GDHead['Peterson.Isaiah Kinseth'];
echo $GDWebLink['Peterson.Isaiah Kinseth'];
echo $GDWorkLink['Peterson.Isaiah Kinseth'];
echo $GDLinkedinLink['Peterson.Isaiah Kinseth'];
echo $GDFooter['Peterson.Isaiah Kinseth'];
}
if ($q == "Stenger.Brad") {
  echo $GDHead['Stenger.Brad'];
echo $GDWebLink['Stenger.Brad'];
echo $GDWorkLink['Stenger.Brad'];
echo $GDLinkedinLink['Stenger.Brad'];
echo $GDFooter['Stenger.Brad'];
}
if ($q == "Wright.Spencer") {
  echo $GDHead['Wright.Spencer'];
echo $GDWebLink['Wright.Spencer'];
echo $GDWorkLink['Wright.Spencer'];
echo $GDLinkedinLink['Wright.Spencer'];
echo $GDFooter['Wright.Spencer'];
}
if ($q == "Baker.Caleb") {
  echo $GDHead['Baker.Caleb'];
echo $GDWebLink['Baker.Caleb'];
echo $GDWorkLink['Baker.Caleb'];
echo $GDLinkedinLink['Baker.Caleb'];
echo $GDFooter['Baker.Caleb'];
}
if ($q == "GD 25") {
//   echo $GDHead['Bovenmyer.Matthew'];
// echo $GDWebLink['Bovenmyer.Matthew'];
// echo $GDWorkLink['Bovenmyer.Matthew'];
// echo $GDLinkedinLink['Bovenmyer.Matthew'];
// echo $GDFooter['Bovenmyer.Matthew'];
echo "<h1 class='center'>NO STUDENT INFO AVAILABLE</h1>";
}
if ($q == "Bullock.Samantha") {
  echo $GDHead['Bullock.Samantha'];
echo $GDWebLink['Bullock.Samantha'];
echo $GDWorkLink['Bullock.Samantha'];
echo $GDLinkedinLink['Bullock.Samantha'];
echo $GDFooter['Bullock.Samantha'];
}
if ($q == "Filzer.Zoe") {
  echo $GDHead['Filzer.Zoe'];
echo $GDWebLink['Filzer.Zoe'];
echo $GDWorkLink['Filzer.Zoe'];
echo $GDLinkedinLink['Filzer.Zoe'];
echo $GDFooter['Filzer.Zoe'];
}
if ($q == "GD 26") {
//   echo $GDHead['Lyon.Jill'];
// echo $GDWebLink['Lyon.Jill'];
// echo $GDWorkLink['Lyon.Jill'];
// echo $GDLinkedinLink['Lyon.Jill'];
// echo $GDFooter['Lyon.Jill'];
echo "<h1 class='center'>NO STUDENT INFO AVAILABLE</h1>";
}
if ($q == "GD 24") {
//   echo $GDHead['Pebsworth.Megan'];
// echo $GDWebLink['Pebsworth.Megan'];
// echo $GDWorkLink['Pebsworth.Megan'];
// echo $GDLinkedinLink['Pebsworth.Megan'];
// echo $GDFooter['Pebsworth.Megan'];
echo "<h1 class='center'>NO STUDENT INFO AVAILABLE</h1>";
}
if ($q == "GD 23") {
//   echo $GDHead['Passick.Kaitlynn'];
// echo $GDWebLink['Passick.Kaitlynn'];
// echo $GDWorkLink['Passick.Kaitlynn'];
// echo $GDLinkedinLink['Passick.Kaitlynn'];
// echo $GDFooter['Passick.Kaitlynn'];
echo "<h1 class='center'>NO STUDENT INFO AVAILABLE</h1>";
}
if ($q == "Wilson.Liz") {
  echo $GDHead['Wilson.Liz'];
echo $GDWebLink['Wilson.Liz'];
echo $GDWorkLink['Wilson.Liz'];
echo $GDLinkedinLink['Wilson.Liz'];
echo $GDFooter['Wilson.Liz'];
}
if ($q == "GD 22") {
//   echo $GDHead['Field.Tracey'];
// echo $GDWebLink['Field.Tracey'];
// echo $GDWorkLink['Field.Tracey'];
// echo $GDLinkedinLink['Field.Tracey'];
// echo $GDFooter['Field.Tracey'];
echo "<h1 class='center'>NO STUDENT INFO AVAILABLE</h1>";
}


 ?>
