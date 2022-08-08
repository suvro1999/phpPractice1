<?php declare(strict_types=1);
//Function 
//Function name always start with alphabet or underscoar 
function addNum(int $x, int $b){
    $z = $x + $b;
   return $z;
}
echo "The sum of 5 and 9=  ". addNum(5,9);
//this example show adding two variable x+b totall 14;

//Example of useing difult paramete 

// strict requirement work all the file 
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

//This example is float value adding and show in intger
function addNumbers(float $a, float $b) : int {
    return (int)($a + $b);
  }
  echo addNumbers(1.2, 5.2);
  

?>
