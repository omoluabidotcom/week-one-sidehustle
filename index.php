<?php

// Function 
function betweenNum($start, $end) {

    $result = array();
    $first = $start;
    for($i = $first; $i <= $end; $i++) {

        array_push($result, $start[$i]);
    }

    return $result;
}

print_r(betweenNum(2, 10));

$list = array(2, 4, 6, 9, 10);

// Function to return sum of all numbers in an array
function sumFunc($list) {

    $counts = count($list);

    for($i = 0; $i <= $counts; $i++) {
   
        GLOBAL $result;
        $result += $list[$i];
  }

  return $result;
}

// echo sumFunc($list);

?>