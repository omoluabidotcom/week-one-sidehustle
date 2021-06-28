<?php

// function that takes two arguments, start and end, and returns an array containing all the numbers from start up to (and including) end
function betweenNum($start, $end) {

    $answer = array();
    $end = $end + 1;

    for($i = $start; $i < $end; $i++) {

        $answer[] = $i;
    }

    return $answer;
}

// the function above is called
print_r(betweenNum(2, 10));

// array of numbers
$list = array(2, 4, 6, 9, 10);

// function that takes an array of numbers and returns the sum of these numbers
function sumFunc($list) {

    $counts = count($list);

    for($i = 0; $i <= $counts; $i++) {
   
        GLOBAL $result;
        $result += $list[$i];
  }

  return $result;
}

// the function above is called
echo sumFunc($list);

?>