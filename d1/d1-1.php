<?php

	$data = file("php://stdin");
	$maxCalorieCount = 0;
	$calorieCount = 0;
	
	foreach ($data as $row) {
		if (!is_numeric($row)) {
			if ($calorieCount > $maxCalorieCount) {
				$maxCalorieCount = $calorieCount;
			}
			$calorieCount = 0;
		} else {
			$calorieCount += (int)$row;
		}
	}
	
	echo $maxCalorieCount;

?>