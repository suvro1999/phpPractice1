<?php

$t = date("H");

if ($t < "24") {
  echo "Have a good day!";
}

//this is if condition if 'hours=H' is gater than 24 than show Have a good day.

$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

//There if H is not gater than 20 print Good night. Using else

if ($t < "10") {
    echo "Have a good morning!";
  } elseif ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }

  //this is example of elseif and else and if together 

?>