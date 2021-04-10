<?php

// Performing operations on matrices

$m1 = [
    [2,4,9],
    [1,8,4],
    [7,3,6]
];

$m2 = [
    [5,6,1],
    [7,0,3],
    [6,2,1]
];

function mat_mul($m1, $m2){
    if (count($m1) != count($m2)){
        echo "Matrices must be of the same size and shape\n";
        return;
    };

    $result = array();
    for($i = 0; $i < count($m1); $i++){
        $result[$i] = array();
        for($j = 0; $j < count($m1[$i]); $j++){
            $result[$i][$j] = $m1[$i][$j] * $m2[$i][$j];
        }
    }

    return $result;
};

function mat_add($m1, $m2){
    if (count($m1) != count($m2)){
        echo "Matrices must be of the same size and shape\n";
        return;
    };

    $result = array();
    for($i = 0; $i < count($m1); $i++){
        $result[$i] = array();
        for($j = 0; $j < count($m1[$i]); $j++){
            $result[$i][$j] = $m1[$i][$j] + $m2[$i][$j];
        }
    }

    return $result;
};

$val = mat_add($m1, $m2);
var_dump($val);

?>