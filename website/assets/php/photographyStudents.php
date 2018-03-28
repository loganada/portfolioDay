<?php
include "loadData.php";

for ($i=0; $i < 11; $i++) {
	echo "<span class='imageBorder student-overlay'>
			<img class='picture' onclick='modalDisplay()' id ='photo $i' width='200px'  src='assets/img/dpd-photos/photo-$i.jpg'/>
			<span class='student-overlay-info student-overlay-bg'><h3>" . $arrayphoto[$i]['bio_first_name'] . " ". $arrayphoto[$i]['bio_last_name'] .
		"</h3></span></span>";

}

?>
