<?php
include "loadData.php";

for ($i=0; $i < 16; $i++) {

	echo "<span class='imageBorder student-overlay'>
			<img class='picture' onclick='modalDisplay()'  id ='".$arrayphoto[$i]['bio_last_name'] . ".". $arrayphoto[$i]['bio_first_name'] ."'' width='200px'  src='assets/img/finalPicsPhoto/" . $arrayphoto[$i]['bio_last_name'] . ".". $arrayphoto[$i]['bio_first_name'] .
		".jpg'/>
			<span class='student-overlay-info student-overlay-bg'><h3>" . $arrayphoto[$i]['bio_first_name'] . " ". $arrayphoto[$i]['bio_last_name'] .
		"</h3></span></span>";
}

?>
