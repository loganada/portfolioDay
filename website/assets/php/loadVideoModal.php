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
    $videoHead[$i]=
     "<h1 class='modalText center'>" .  $arrayVideo[$i]['bio_first_name'] . " ". $arrayVideo[$i]['bio_last_name'] . "</h1>" .
     "<h3 class='modalText center'>" . $arrayVideo[$i]['bio_program'] . "</h3> <h5 class='modalText center'> ". $arrayVideo[$i]['bio_second_program']."</h5>" .

  //  echo "<h3 class='modalText'>" . $arrayGD[6]['bio_login_email'] . "</h3>";
    "<div class='bioLinks'><h4 class='modalText descrip'>Web Links</h4>" .
    "<h5 class='modalText center'> ".$arrayVideo[$i]['bio_email'] ."</h5>";
  }

  for ($i=0; $i < 4; $i++) {
  if (empty($arrayVideo[$i]['bio_website_address'])) {
    $videoWebLink[$i] = '';
  }
  else {
    $videoWebLink[$i] ="<h5><a class='modalText center' href=" . $arrayVideo[$i]['bio_website_address'] . ">View My Website</a></h5>";
  }}
  for ($i=0; $i < 4; $i++) {
  if (empty($arrayVideo[$i]['bio_second_web'])) {
    $videoWorkLink[$i] = '';
  }
  else {
    $videoWorkLink[$i] ="<h5><a class='modalText center' href=" . $arrayVideo[$i]['bio_second_web'] . ">View My Work</a></h5>";
  }}
  for ($i=0; $i < 4; $i++) {
  if (empty($arrayVideo[$i]['bio_linkedIn'])) {
    $videoLinkedinLink[$i] = '';
  }
  else {
    $videoLinkedinLink[$i] ="<h5><a class='modalText center' href=" . $arrayVideo[$i]['bio_linkedIn'] . ">View My Linkedin</a></h5>";
  }}
  for ($i=0; $i < 4; $i++) {
    $videoFooter[$i]=
    "</div><h4 class='modalText descrip'>Hometown</h4>" .
     "<h5 class='modalText center'>" . $arrayVideo[$i]['bio_hometown'] . "</h5>" .
    "<h4 class='modalText descrip'>Career Goals</h4>" .
   "<p class='modalText center'>" . $arrayVideo[$i]['bio_career_goals'] . "</p>" .
    "<h4 class='modalText descrip' >Three Words That Describe Me</h4>" .
   "<h3 class='modalText center'>" . $arrayVideo[$i]['bio_three_words'] . "</h3>" .
   "<img class='picture' id ='modalPhoto' src='assets/img/dpd-photos/video-$i.jpg'/><br>" .
   "<span class='close' onclick='closeModal()'>X</span>";

}
if ($q == "video 0") {
  echo $videoHead[0];
echo $videoWebLink[0];
echo $videoWorkLink[0];
echo $videoLinkedinLink[0];
echo $videoFooter[0];


}
  if ($q == "video 1") {
    echo $videoHead[1];
  echo $videoWebLink[1];
  echo $videoWorkLink[1];
  echo $videoLinkedinLink[1];
  echo $videoFooter[1];

}
if ($q == "video 2") {
  echo $videoHead[2];
echo $videoWebLink[2];
echo $videoWorkLink[2];
echo $videoLinkedinLink[2];
echo $videoFooter[2];

}
if ($q == "video 3") {
  echo $videoHead[3];
echo $videoWebLink[3];
echo $videoWorkLink[3];
echo $videoLinkedinLink[3];
echo $videoFooter[3];
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
