<?php
 include "loadData.php";
$q = $_REQUEST["q"];
$video = array();
  for ($i=0; $i < 4; $i++) {
    if($arrayVideo[$i]['bio_program'] == 'videoProduction')
    {
      $arrayVideo[$i]['bio_program'] = 'Video Production';
    }
    if($arrayVideo[$i]['bio_second_program'] == 'none'){
      $arrayVideo[$i]['bio_second_program'] = '';
    }
    if($arrayVideo[$i]['bio_second_program'] == 'photography')
    {
        $arrayVideo[$i]['bio_second_program'] = 'Photography';
    }
    if($arrayVideo[$i]['bio_second_program'] == 'webDevelopment')
    {
        $arrayVideo[$i]['bio_second_program'] = 'Web Development';
    }
    if($arrayVideo[$i]['bio_second_program'] == 'graphicDesign')
    {
        $arrayVideo[$i]['bio_second_program'] = 'Graphic Design';
    }
    $videoHead[$arrayVideo[$i]['bio_last_name'].'.'.$arrayVideo[$i]['bio_first_name']]=
     "<h1 class='modalText center'>" .  $arrayVideo[$i]['bio_first_name'] . " ". $arrayVideo[$i]['bio_last_name'] . "</h1>" .
     "<h3 class='modalText center'>" . $arrayVideo[$i]['bio_program'] . "</h3> <h5 class='modalText center'> ". $arrayVideo[$i]['bio_second_program']."</h5>" .

  //  echo "<h3 class='modalText'>" . $arrayGD[6]['bio_login_email'] . "</h3>";
    "<div class='bioLinks'><h4 class='modalText descrip'>Web Links</h4>" .
    "<h5 class='modalText center'> ".$arrayVideo[$i]['bio_email'] ."</h5>";
  }

  for ($i=0; $i < 4; $i++) {
  if (empty($arrayVideo[$i]['bio_website_address'])) {
    $videoWebLink[$arrayVideo[$i]['bio_last_name'].'.'.$arrayVideo[$i]['bio_first_name']]= '';
  }
  else {
    $videoWebLink[$arrayVideo[$i]['bio_last_name'].'.'.$arrayVideo[$i]['bio_first_name']] ="<h5><a class='modalText center' target='_blank' href=" . $arrayVideo[$i]['bio_website_address'] . ">View My Website</a></h5>";
  }}
  for ($i=0; $i < 4; $i++) {
  if (empty($arrayVideo[$i]['bio_second_web'])) {
    $videoWorkLink[$arrayVideo[$i]['bio_last_name'].'.'.$arrayVideo[$i]['bio_first_name']]= '';
  }
  else {
    $videoWorkLink[$arrayVideo[$i]['bio_last_name'].'.'.$arrayVideo[$i]['bio_first_name']] ="<h5><a class='modalText center' target='_blank' href=" . $arrayVideo[$i]['bio_second_web'] . ">View My Work</a></h5>";
  }}
  for ($i=0; $i < 4; $i++) {
  if (empty($arrayVideo[$i]['bio_linkedIn'])) {
    $videoLinkedinLink[$arrayVideo[$i]['bio_last_name'].'.'.$arrayVideo[$i]['bio_first_name']] = '';
  }
  else {
    $videoLinkedinLink[$arrayVideo[$i]['bio_last_name'].'.'.$arrayVideo[$i]['bio_first_name']] ="<h5><a class='modalText center' target='_blank' href=" . $arrayVideo[$i]['bio_linkedIn'] . ">View My Linkedin</a></h5>";
  }}
  for ($i=0; $i < 4; $i++) {
    $videoFooter[$arrayVideo[$i]['bio_last_name'].'.'.$arrayVideo[$i]['bio_first_name']]=
    "</div><h4 class='modalText descrip'>Hometown</h4>" .
     "<h5 class='modalText center'>" . $arrayVideo[$i]['bio_hometown'] . "</h5>" .
    "<h4 class='modalText descrip'>Career Goals</h4>" .
   "<p class='modalText center'>" . $arrayVideo[$i]['bio_career_goals'] . "</p>" .
    "<h4 class='modalText descrip' >Three Words That Describe Me</h4>" .
   "<h3 class='modalText center'>" . $arrayVideo[$i]['bio_three_words'] . "</h3>" .
   "<img class='picture' id ='modalPhoto' src='assets/img/finalPicsVideo/".$arrayVideo[$i]['bio_last_name'] . ".". $arrayVideo[$i]['bio_first_name'] .".jpg'/><br>" .
   "<span class='close' onclick='closeModal()'>X</span>";

}
if ($q == "Bandy.Aaron") {
  echo $videoHead['Bandy.Aaron'];
echo $videoWebLink['Bandy.Aaron'];
echo $videoWorkLink['Bandy.Aaron'];
echo $videoLinkedinLink['Bandy.Aaron'];
echo $videoFooter['Bandy.Aaron'];


}
  if ($q == "Isolini.Jamie") {
    echo $videoHead['Isolini.Jamie'];
  echo $videoWebLink['Isolini.Jamie'];
  echo $videoWorkLink['Isolini.Jamie'];
  echo $videoLinkedinLink['Isolini.Jamie'];
  echo $videoFooter['Isolini.Jamie'];

}
if ($q == "Bellile.Kennoniah") {
  echo $videoHead['Bellile.Kennoniah'];
echo $videoWebLink['Bellile.Kennoniah'];
echo $videoWorkLink['Bellile.Kennoniah'];
echo $videoLinkedinLink['Bellile.Kennoniah'];
echo $videoFooter['Bellile.Kennoniah'];

}
if ($q == "Stevens.Caleb") {
  echo $videoHead['Stevens.Caleb'];
echo $videoWebLink['Stevens.Caleb'];
echo $videoWorkLink['Stevens.Caleb'];
echo $videoLinkedinLink['Stevens.Caleb'];
echo $videoFooter['Stevens.Caleb'];
}
// if ($q == "video 4") {
//   echo $video[4];
// }
// if ($q == "video 5") {
//   echo $video[5];
// }
// if ($q == "video 6") {
//   echo $video[6];
// }
?>
