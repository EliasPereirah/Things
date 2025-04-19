<?php
//Monty Hall Problem 
$max_simulations = 100;
$idx = 0;
$strategy = 'change'; // change or keep?
$gains = 0;
$loss = 0;
$max = 2;

while ($idx < $max_simulations) {
    $idx++;
    $car_door = mt_rand(0, $max);
    $open_door = mt_rand(0, $max);
    $first_choice = mt_rand(0, $max);

    while ($open_door == $car_door || $open_door == $first_choice) {
        $open_door = mt_rand(0, $max);
    }

    if($strategy == "keep"){
        if($first_choice == $car_door){
            $gains++;
        }else{
            $loss++;
        }
    }else{
        if($first_choice != $car_door){
            $gains++;
        }else{
            $loss++;
        }
    }

}
echo "Strategy: $strategy\n<br>";
echo "Gains: $gains <br>";
echo "Loss: $loss <br>";
