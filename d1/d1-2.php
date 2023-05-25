<?php

	$data = file("php://stdin");
	$maxCalorieCount = [0, 0, 0];
	$calorieCount = 0;
	
	foreach ($data as $row) {
		if (!is_numeric($row)) {
			if ($calorieCount > min($maxCalorieCount)) {
				$index = array_search(min($maxCalorieCount), $maxCalorieCount);
				$maxCalorieCount[$index] = $calorieCount;
			}
			$calorieCount = 0;
		} else {
			$calorieCount += (int)$row;
		}
	}
	
	echo array_sum($maxCalorieCount);

?>