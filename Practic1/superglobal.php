<?php
//Global variable $GLOBALS  Means super global variable.

$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;

//Thsi server variable hold header , path and etc
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


//Request variable 
// <html>
// <body>

// <form method="post" action="<?php echo $_SERVER['PHP_SELF'];
//   Name: <input type="text" name="fname">
//   <input type="submit">
// </form>

// <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // collect value of input field
//   $name = $_REQUEST['fname'];
//   if (empty($name)) {
//     echo "Name is empty";
//   } else {
//     echo $name;
//   }
// }




?>