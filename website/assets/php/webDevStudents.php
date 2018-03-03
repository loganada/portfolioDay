<?php
include "loadData.php";

for ($i=0; $i < 6; $i++) {
echo "<span class='imageBorder student-overlay'>
		<img class='picture' onclick='modalWDContent()' id ='WD $i' width='200px'  src='assets/img/dpd-photos/WD-$i.jpg'/>
		<span class='student-overlay-info student-overlay-bg'><h3>" . $arrayWD[$i]['bio_first_name'] . " ". $arrayWD[$i]['bio_last_name'] ."</h3></span>
	   </span>";
}

?>
