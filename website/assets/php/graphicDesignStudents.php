<?php
include "loadData.php";

for ($i=0; $i < 18; $i++) {
echo "<span class='imageBorder student-overlay'>
		<img class='picture' onclick='modalDisplay()' id ='GD $i' width='200px'  src='assets/img/dpd-photos/GD-$i.jpg'/>
		<span class='student-overlay-info student-overlay-bg'><h3>" . $arrayGD[$i]['bio_first_name'] . " ". $arrayGD[$i]['bio_last_name'] ."</h3></span>
	   </span>";
}

?>
