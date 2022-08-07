<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Pratices days</title>
</head>
<body>
    <?php
    //This is practice of how to print "hello world" in PHP or check out about php syntax 
    echo "Hello World";
    /*this is example of multiple line comment
    in php */

    //Now practicting the variable
    //How to take variable? Variable always start with $ sign and variable name always start without number,symbol. 
    //Variable are case sencetive 

    $int_number = 1999;
    $float = 19.99;
    $string = "Subrato";
    $null = NULL;
    

    echo $int_number;
    echo "<br>";
    echo $float;
    echo "<br>";
    echo $string;
    echo "<br>";
    echo $null;
    
    //End of variable declearation

    //Local scope Variable
    /*is is local scoop Variable practices in this system you can access only local variable. Which variable are declear 
    in a function for the function those variable are local variable */
function firstTest(){
	$number = 99;
    echo "<p>There are Variable $number</p>";
}
firstTest();
	echo "<p>There are Variable $number</p>";

    //Global Scope Variable 
    $x = 5; // global scope
 
function mytest(){
    echo "<p>There ar x Variable: $x</p>";
}
mytest();
    echo "<p> There are x Variable: $x</p>";

    //End of Variable Scope

    //Different Data type and Object 
    // Data type praticing 
//There are eight data types avilable 
//1. Integer 2. Double/ Float 3. String 4. Boolean
//5. Object 6. Array 7. NULL 8. Resource

$intType = 99;
echo "This is integer type data  $intType";
echo "<br>";

$floatType = 19.00;
echo "This is float/double type data $floatType";
echo "<br>";

$stringType = "Demo of String";
echo "This is string type data". $stringType;
echo "<br>";

$arrayType = array("Hollo", "php", "learner", "Welcome!");
var_dump($arrayType);
echo "<br>";

$booleanT = true;
$booleanF = false;
echo "This is boolean example of $booleanT and $booleanF";

//For the object type example 

class food{
public $furits;
public $colors;
public function __construct($furits, $colors){
    $this->furits = $furits;
    $this->colors = $colors;
    
    
    
}
public function Massage(){

    return "My fruits is ". $this->furits ." and color is ". $this->colors ."!";
}
}
$myfood = new food("Mango", "Yellow");
echo $myfood ->Massage();
echo "<br>";
$myfood = new food("Drogon", "Red");
echo $myfood ->Massage();

    
    ?>
</body>
</html>