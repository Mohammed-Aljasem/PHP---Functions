<?php
//==============Q1=================
// function factorial($x)
// {

//   for ($i = 1; $i <= $x; $i++) {
//     $z = $x * $i;
//     for ($s = 1; $s <= $i; $s++) {
//       $a = $s * $z;
//     }
//   }
//   echo $a;
// }

// factorial(17);



//==============Q2=================

// function primeNumber($x)
// {

//   $a = 2;
//   while ($a < $x) {
//     global $z;
//     if ($x % $a == 0) {

//       $z = false;
//       echo $z;
//       break;
//     } else {
//       $z = true;
//     }
//     $a++;
//   }
//   if ($z = true) {
//     echo "is prime number " . $x;
//   } elseif ($z = false) {
//     echo "isn't prime number";
//   }
//   return;
// }

// primeNumber(18);

//==============Q3=================
// function reverseString($x)
// {
//   $a = strrev($x);
//   return $a;
// }


// echo reverseString("hello");

//==============Q4=================


//==============Q5=================

// $a = 'hHllO';

// function checkLower($x)
// {
//   $s = strlen($x);


//   $a = 0;
//   while ($a < $s) {
//     $w = substr($x, $a, 1);
//     if ($w >= chr(97) && $w <= chr(120)) {
//       $f = true;
//     } else {
//       echo "isn't lowercase  " . $w . "<br>";
//       $f = false;
//     }
//     $a++;
//   }
//   if ($f === true) {
//     echo "all text is lower";
//   }
// }

// checkLower($a);


//==============Q6=================
// function palindrome($x)
// {
//   $a = strrev($x);
//   if ($x == $a) {
//     echo "is palindrome text";
//   } else {
//     echo "isn't palindrome text";
//   }

//   return;
// }

// palindrome('');
//==============Q7=================
