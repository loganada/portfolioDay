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
  $GD[$i]=
   "<h1 class='modalText center'>" .  $arrayGD[$i]['bio_first_name'] . " ". $arrayGD[$i]['bio_last_name'] . "</h1>" .
   "<h3 class='modalText center'>" . $arrayGD[$i]['bio_program'] . "</h3> <h5 class='modalText center'> ". $arrayGD[$i]['bio_second_program']."</h5>" .

 //"<h3 class='modalText'>" . $arrayGD[$i]['bio_login_email'] . "</h3>".
  "<div class='bioLinks'><h4 class='modalText descrip'>Web Links</h4>" .
  "<h5 class='modalText center'> ".$arrayGD[$i]['bio_email'] ."</h5>" .
   "<h5><a class='modalText center' href=" . $arrayGD[$i]['bio_website_address'] . ">View My Website</a></h5>" .
   "<h5><a class='modalText center' href=" . $arrayGD[$i]['bio_second_web'] . ">View My Work</a></h5>" .
   "<h5><a class='modalText center' href=" . $arrayGD[$i]['bio_linkedIn'] . ">View My Linkedin</a></h5>" .
   "</div>".
  "<h4 class='modalText descrip'>Hometown</h4>" .
   "<h5 class='modalText center'>" . $arrayGD[$i]['bio_hometown'] . "</h5>" .
  "<h4 class='modalText descrip'>Career Goals</h4>" .
 "<p class='modalText center'>" . $arrayGD[$i]['bio_career_goals'] . "</p>" .
  "<h4 class='modalText descrip' >Three Words That Describe Me</h4>" .
 "<h3 class='modalText center'>" . $arrayGD[$i]['bio_three_words'] . "</h3>" .
 "<img class='picture' id ='modalPhoto' src='assets/img/dpd-photos/GD-$i.jpg'/><br>" .
 "<span class='close' onclick='closeModal()'>X</span>";

}
if ($q == "GD 0") {
  echo $GD[0];

}
  if ($q == "GD 1") {
    echo $GD[1];
}
if ($q == "GD 2") {
  echo $GD[2];
}
if ($q == "GD 3") {
  echo $GD[3];
}
if ($q == "GD 4") {
  echo $GD[4];
}
if ($q == "GD 5") {
  echo $GD[5];
}
if ($q == "GD 6") {
  echo $GD[6];
}
if ($q == "GD 7") {
  echo $GD[7];
}
if ($q == "GD 8") {
  //echo $GD[8];
}
if ($q == "GD 9") {
  echo $GD[9];
}
if ($q == "GD 10") {
  echo $GD[10];
}
if ($q == "GD 11") {
  echo $GD[11];
}
if ($q == "GD 12") {
  echo $GD[12];
  // print_r ($GD);
}
  if ($q == "GD 13") {
    echo $GD[13];
}
if ($q == "GD 14") {
  echo $GD[14];
}
if ($q == "GD 15") {
  echo $GD[15];
}
if ($q == "GD 16") {
  echo $GD[16];
}
if ($q == "GD 17") {
  echo $GD[17];
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
