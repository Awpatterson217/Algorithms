<?php
/******************************************************
*
* I used these algorthms to find the 'weighted-average of a 
* two-dimensional Euclidean plane'.
*
* That is, a point belonging to an associative array where (the sum of all items)/2
* exists on either side of the key-value pair.
*
* Since this point represents a key-value pair in the associative array,
* it is called the mediod, versus the centroid or weighted-median. 
*
* If the information above is incorrect, please email me at awpatterson@gmail.com.
*
* I split up the associative array into an array of keys, and an array of values.
* 
* I created two functions instead of one for accuracy. 
*
* You can test these values by summing the total number of values 
* on either side of the key-value pair. 
*
******************************************************/
/***
*
*@author Adam Patterson
*
***/ 

// Decrease the partial sum incrementally until 
// it exceeds (the sum of all values)/2. 
function mediod($arrayOfValues, $arrayOfKeys){
    $sumofValues = array_sum($arrayOfValues);
    $testSum = $sumofValues;
    $counter = 0;
    while($testSum >= ($sumofValues/2)) {
        $output = array_slice($arrayOfValues, $counter, null, true);
        $testSum = array_sum($output);
        $counter++;
    }
    $mediod = $arrayOfKeys[$counter-1];
    return $mediod;
}

// Increase the partial sum incrementally until 
// it exceeds (the sum of all values)/2. 
function alternativeMediod($arrayOfValues, $arrayOfKeys){
    $sumofValues = array_sum($arrayOfValues);
    $testSum = $sumofValues/2;
    $arrayLength = count($arrayOfValues);
    $partialSum = 0;
    for($counter = 0; $counter < $arrayLength; $counter++) {
        $partialSum += $arrayOfValues[$counter];
        if($partialSum > $testSum) {
            $mediod = $arrayOfKeys[$counter];
            break;
        }
    }
    return $mediod;
}

?>
