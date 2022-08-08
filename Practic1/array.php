<?php

//Array 
//count of array element 


$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

//Indexing the array 
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

//Sorting array 
/*
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
*/
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

//
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

//
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
//
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);


?>