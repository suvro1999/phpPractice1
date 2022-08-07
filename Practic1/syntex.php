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

    

    
    ?>
</body>
</html>