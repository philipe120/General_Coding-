<?php
// function stars($n){
// 	if ($n==1){
// 		echo "*";
// 		echo "<br>";
// 		return "*";
// 	} else {
// 		$num = "*" . stars($n-1); 
// 		echo $num;
// 		echo "<br>";
// 		return $num;
// 	}

// }

// stars(6);


?>

// PHP program to find GCD

// of two numbers



// Recursive function to

// return gcd of a and b



function gcd($a,$b)

{

// Everything divides 0

if ($a == 0)

return $b;

if ($b == 0)

return $a;

// base case

if($a == $b)

return $a;

// a is greater

if($a > $b)

return gcd( $a-$b , $b );
    
    

return gcd( $a , $b-$a );

}

// Driver code

$a = 56;

$b = 98;

echo "GCD of $a and $b is ", gcd($a , $b);

56 42  14 42    14 28  14 14 
