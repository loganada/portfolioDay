<?php
include "loadData.php";

for ($i=0; $i < 14; $i++) {
echo "<span class='imageBorder student-overlay'>
		<img class='picture'   onclick='modalDisplay()' id ='photo $i' width='200px'  src='assets/img/dpd-photos/photo-$i.jpg'/>
</span>";
}

?>
