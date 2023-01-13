<?php

//simple Lambda function
$add = function ($a, $b) {
    return $a + $b;
};

echo $add(22, 22);
echo "<br/ >";

//Assigning Lambda/Anonymous function to an Array
$add = function ($a, $b) {
    return $a + $b;
};

$myArray = [$add(22, 22),2,3];
print_r($myArray);
echo "<br/ >";

//Passing closure/anonymous function as parameter - 1
$add = function ($a, $b) {
    return $a + $b;
};
function myAdd($x,$y,$z){
    return $x($y,$z);
}
echo myAdd($add,2,3);
echo "<br/ >";

//Passing closure/anonymous function as parameter - 2
function myAdd2($x,$y,$z){
    return $x($y,$z);
}

echo myAdd2(
    function($a, $b) {
        return $a + $b;
    },2,3);
echo "<br/ >";

//array_map
$myArray1=array(1,2,3,4,5);
$myArray2=array(1,2,3,4,5);
$salt = 2;
$mynewArray1 = array_map(function($myA1,$myA2)use($salt){
    return $myA1*$myA2*$salt;
},$myArray1,$myArray2);
print_r($mynewArray1);
?>
