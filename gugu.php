<?php
	for ($i = 2; $i <= 9; $i++) {
		echo "<b>", $i, "단</b>--------<br>";
		for ($j = 1; $j <= 9; $j++) {
			echo $i, " x ", $j, " = ", $i*$j, "<br>";
		}
		echo "<br>";
	}
?>