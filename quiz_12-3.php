<?php
	$hap = 0;
	
	for($i = 1; $i <= 10000; $i ++) {
		if($i % 3 == 0) {
			if($i % 9 != 0) {
				$hap += $i;
			}
		}
	}
	echo "result = ", $hap;
?>