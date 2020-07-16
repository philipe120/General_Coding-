<?php
function val($n,$sum){
	if (empty($n[$sum])){
		return 0;
	} else {
	return $n[$sum] + val($n,($sum+1));
	}

}

echo val("45632",0);

function pattern($n,$a){
	if ($n<1){
		echo $n;
		return $n;
	} else {
		echo $n,",&nbsp";
		$num = $a + pattern(($n-$a),$a);
		echo ",&nbsp", $n;
		// return $num;
	}
72 56  



// } 
// pattern(10,5);

// $input;
// $second_half = intval($input/2);
// $first_half = $input-$second


function gcd($a,$b){
	if ($a%$b == 0 or $b%$a == 0 ){
		if ($a%$b == 0){
			return $b; 
		} elseif ($b%$a == 0) {
			return $a;
		}

	} else {
		if ($a>$b){
			return gcd($b,($a%$b));
		} elseif ($b>$a){
			return gcd(($b%$a),$b);
		}
	}


}
// echo gcd(19,21);

function lcm($c,$d){
	if ($c==$d or $d == $c){
		return $c; 
	} else {
		if ($c>$d){
			return ($c/gcd($c,$d)) * $d;
		} elseif ($d>$c){
			return ($d/gcd($c,$d)) * $c;
		}
	}


}

echo lcm(6,8);



// function sum($n){
//     if ($n==0){
//         return 0;
//     } else {
//        echo $n, "<br>";
//        echo $n % 10, "<br>";
        
//       return ($n % 10 + sum(intdiv($n,10)));
//     }
// }

// echo sum(56789); 


?>




