<?php
include "loadData.php";

for ($i=0; $i < 4; $i++) {
echo "<span class='imageBorder student-overlay'>
		<img class='picture' onclick='modalDisplay()'  id ='".$arrayVideo[$i]['bio_last_name'] . ".". $arrayVideo[$i]['bio_first_name'] ."'' width='200px'  src='assets/img/finalPicsVideo/".$arrayVideo[$i]['bio_last_name'] . ".". $arrayVideo[$i]['bio_first_name'] .".jpg'/>
		<span class='student-overlay-info student-overlay-bg'><h3>" . $arrayVideo[$i]['bio_first_name'] . " ". $arrayVideo[$i]['bio_last_name'] ."</h3></span>
	   </span>";
}

?>
