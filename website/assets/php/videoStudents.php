<?php
include "loadData.php";

for ($i=0; $i < 3; $i++) {
echo "<span class='imageBorder student-overlay'>
		<img class='picture' onclick='modalDisplay()' id ='video $i' width='200px'  src='assets/img/dpd-photos/video-$i.jpg'/>
		<span class='student-overlay-info student-overlay-bg'><h3>" . $arrayVideo[$i]['bio_first_name'] . " ". $arrayVideo[$i]['bio_last_name'] ."</h3></span>
	   </span>";
}

?>
