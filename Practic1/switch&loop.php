<?php

//For switch use case and break, Every case will be checked untill find the answer
//if answer find function will break by break tag;

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
  }

    //Now the loop practices 
    //For while loop : What is while loop?
    //The while loop executes a block of code as long as the specified condition is true.
    $x = 2;

    while($x <= 8) {
      echo "The number is: $x <br>";
      $x++;
    } 
    //Example no 2
    $x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}
//End of While loop

//Now Do...While looop
//There condition will be outside and what to do or function in the DO;
$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

//For loop 
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}

//Foreach loop 
//foreach loop only work on array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
//break and continue loop 
//continue 
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
//There skip the value of 4;
//break;
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
//there jump out the loop when find x==4;




?>