<?php
include "loadData.php";
$q = $_REQUEST["q"];
$photo = array();
 for ($i=0; $i < 16; $i++) {
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

   $photoHead[$arrayphoto[$i]['bio_last_name'].'.'.$arrayphoto[$i]['bio_first_name']]=
    "<h1 class='modalText center'>" .  $arrayphoto[$i]['bio_first_name'] . " ". $arrayphoto[$i]['bio_last_name'] . "</h1>" .
    "<h3 class='modalText center'>" . $arrayphoto[$i]['bio_program'] . "</h3> <h5 class='modalText center'> ". $arrayphoto[$i]['bio_second_program']."</h5>" .

 //  echo "<h3 class='modalText'>" . $arrayGD[6]['bio_email'] . "</h3>";
   "<div class='bioLinks'><h4 class='modalText descrip'>Web Links</h4>" .
   "<h5 class='modalText center'> ".$arrayphoto[$i]['bio_email'] ."</h5>";
}
   for ($i=0; $i < 16; $i++) {
   if (empty($arrayphoto[$i]['bio_website_address'])) {
     $photoWebLink[$arrayphoto[$i]['bio_last_name'].'.'.$arrayphoto[$i]['bio_first_name']] = '';
   }
   else {
     $photoWebLink[$arrayphoto[$i]['bio_last_name'].'.'.$arrayphoto[$i]['bio_first_name']] ="<h5><a class='modalText center' target='_blank' href=" . $arrayphoto[$i]['bio_website_address'] . ">View My Website</a></h5>";
   }}
   for ($i=0; $i < 16; $i++) {
   if (empty($arrayphoto[$i]['bio_second_web'])) {
     $photoWorkLink[$arrayphoto[$i]['bio_last_name'].'.'.$arrayphoto[$i]['bio_first_name']] = '';
   }
   else {
     $photoWorkLink[$arrayphoto[$i]['bio_last_name'].'.'.$arrayphoto[$i]['bio_first_name']] ="<h5><a class='modalText center' target='_blank' href=" . $arrayphoto[$i]['bio_second_web'] . ">View My Work</a></h5>";
   }}
   for ($i=0; $i < 16; $i++) {
   if (empty($arrayphoto[$i]['bio_linkedIn'])) {
     $photoLinkedinLink[$arrayphoto[$i]['bio_last_name'].'.'.$arrayphoto[$i]['bio_first_name']] = '';
   }
   else {
     $photoLinkedinLink[$arrayphoto[$i]['bio_last_name'].'.'.$arrayphoto[$i]['bio_first_name']] ="<h5><a class='modalText center' target='_blank' href=" . $arrayphoto[$i]['bio_linkedIn'] . ">View My Linkedin</a></h5>";
   }}
   for ($i=0; $i < 16; $i++) {
     $photoFooter[$arrayphoto[$i]['bio_last_name'].'.'.$arrayphoto[$i]['bio_first_name']]=
   "</div><h4 class='modalText descrip'>Hometown</h4>" .
    "<h5 class='modalText center'>" . $arrayphoto[$i]['bio_hometown'] . "</h5>" .
   "<h4 class='modalText descrip'>Career Goals</h4>" .
  "<p class='modalText center'>" . $arrayphoto[$i]['bio_career_goals'] . "</p>" .
   "<h4 class='modalText descrip' >Three Words That Describe Me</h4>" .
  "<h3 class='modalText center'>" . $arrayphoto[$i]['bio_three_words'] . "</h3>" .
  "<img class='picture' id ='modalPhoto' src='assets/img/finalPicsPhoto/".$arrayphoto[$i]['bio_last_name'] . ".". $arrayphoto[$i]['bio_first_name'] .".jpg'/><br>" .
  "<span class='close' onclick='closeModal()'>X</span>";
}
if ($q == "Agosti.Jami") {
  echo $photoHead['Agosti.Jami'];
echo $photoWebLink['Agosti.Jami'];
echo $photoWorkLink['Agosti.Jami'];
echo $photoLinkedinLink['Agosti.Jami'];
echo $photoFooter['Agosti.Jami'];

}
 if ($q == "Conrad.Molly") {
   echo $photoHead['Conrad.Molly'];
 echo $photoWebLink['Conrad.Molly'];
 echo $photoWorkLink['Conrad.Molly'];
 echo $photoLinkedinLink['Conrad.Molly'];
 echo $photoFooter['Conrad.Molly'];
}
if ($q == "Dawson.Jasminn") {
  echo $photoHead['Dawson.Jasminn'];
echo $photoWebLink['Dawson.Jasminn'];
echo $photoWorkLink['Dawson.Jasminn'];
echo $photoLinkedinLink['Dawson.Jasminn'];
echo $photoFooter['Dawson.Jasminn'];
}
if ($q == "Eaton.Allyson") {
  echo $photoHead['Eaton.Allyson'];
echo $photoWebLink['Eaton.Allyson'];
echo $photoWorkLink['Eaton.Allyson'];
echo $photoLinkedinLink['Eaton.Allyson'];
echo $photoFooter['Eaton.Allyson'];
}
if ($q == "Espinosa.Jacey") {
  echo $photoHead['Espinosa.Jacey'];
echo $photoWebLink['Espinosa.Jacey'];
echo $photoWorkLink['Espinosa.Jacey'];
echo $photoLinkedinLink['Espinosa.Jacey'];
echo $photoFooter['Espinosa.Jacey'];
}
if ($q == "Hemmingsen.Emily") {
  echo $photoHead['Hemmingsen.Emily'];
echo $photoWebLink['Hemmingsen.Emily'];
echo $photoWorkLink['Hemmingsen.Emily'];
echo $photoLinkedinLink['Hemmingsen.Emily'];
echo $photoFooter['Hemmingsen.Emily'];
}
if ($q == "Herrera.Elizabeth") {
  echo $photoHead['Herrera.Elizabeth'];
echo $photoWebLink['Herrera.Elizabeth'];
echo $photoWorkLink['Herrera.Elizabeth'];
echo $photoLinkedinLink['Herrera.Elizabeth'];
echo $photoFooter['Herrera.Elizabeth'];
}
if ($q == "Laugerman.Alex") {
  echo $photoHead['Laugerman.Alex'];
echo $photoWebLink['Laugerman.Alex'];
echo $photoWorkLink['Laugerman.Alex'];
echo $photoLinkedinLink['Laugerman.Alex'];
echo $photoFooter['Laugerman.Alex'];
}
if ($q == "Ruff.Liam") {
  echo $photoHead['Ruff.Liam'];
echo $photoWebLink['Ruff.Liam'];
echo $photoWorkLink['Ruff.Liam'];
echo $photoLinkedinLink['Ruff.Liam'];
echo $photoFooter['Ruff.Liam'];
}
if ($q == "Stender.Andraya") {
  echo $photoHead['Stender.Andraya'];
echo $photoWebLink['Stender.Andraya'];
echo $photoWorkLink['Stender.Andraya'];
echo $photoLinkedinLink['Stender.Andraya'];
echo $photoFooter['Stender.Andraya'];
}
if ($q == "Swick.Brittany") {
  echo $photoHead['Swick.Brittany'];
echo $photoWebLink['Swick.Brittany'];
echo $photoWorkLink['Swick.Brittany'];
echo $photoLinkedinLink['Swick.Brittany'];
echo $photoFooter['Swick.Brittany'];
}
if ($q == "Sternquist.Jake") {
  echo $photoHead['Sternquist.Jake'];
echo $photoWebLink['Sternquist.Jake'];
echo $photoWorkLink['Sternquist.Jake'];
echo $photoLinkedinLink['Sternquist.Jake'];
echo $photoFooter['Sternquist.Jake'];
}
if ($q == "Enos.Lawrence") {
  echo $photoHead['Enos.Lawrence'];
echo $photoWebLink['Enos.Lawrence'];
echo $photoWorkLink['Enos.Lawrence'];
echo $photoLinkedinLink['Enos.Lawrence'];
echo $photoFooter['Enos.Lawrence'];
}
if ($q == "Bullock.Abbigail") {
  echo $photoHead['Bullock.Abbigail'];
echo $photoWebLink['Bullock.Abbigail'];
echo $photoWorkLink['Bullock.Abbigail'];
echo $photoLinkedinLink['Bullock.Abbigail'];
echo $photoFooter['Bullock.Abbigail'];
}
if ($q == "Priest.Jillian") {
  echo $photoHead['Priest.Jillian'];
echo $photoWebLink['Priest.Jillian'];
echo $photoWorkLink['Priest.Jillian'];
echo $photoLinkedinLink['Priest.Jillian'];
echo $photoFooter['Priest.Jillian'];
}
if ($q == "Lamm.Amy") {
  echo $photoHead['Lamm.Amy'];
echo $photoWebLink['Lamm.Amy'];
echo $photoWorkLink['Lamm.Amy'];
echo $photoLinkedinLink['Lamm.Amy'];
echo $photoFooter['Lamm.Amy'];
//echo "<h1 class = 'center'>NO STUDENT INFO AVAILABLE</h1>";
}
?>
