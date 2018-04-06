<?php
include "loadData.php";

for ($i=0; $i <31; $i++) {
	if ($i==12) {

	}
	else{
echo "<span class='imageBorder student-overlay'>
		<img class='picture' onclick='modalDisplay()' id ='".$arrayGD[$i]['bio_last_name'] . ".". $arrayGD[$i]['bio_first_name'] ."'' width='200px'  src='assets/img/finalPicsGD/".$arrayGD[$i]['bio_last_name'] . ".". $arrayGD[$i]['bio_first_name'] .".jpg'/>
		<span class='student-overlay-info student-overlay-bg'><h3>" . $arrayGD[$i]['bio_first_name'] . " ". $arrayGD[$i]['bio_last_name'] .
	"</h3></span></span>";
}
}


?>
