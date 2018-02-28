<?php
for ($i=1; $i < 12; $i++) {
echo "<span class='imageBorder student-overlay'>
		<img class='picture' onclick='modalDisplay()' id ='photo $i' width='200px'  src='assets/img/dpd-photos/photo-$i.jpg'/>
		<span class='student-overlay-info student-overlay-bg'><h3>Jane Doe</h3></span>
	   </span>";
}

?>
