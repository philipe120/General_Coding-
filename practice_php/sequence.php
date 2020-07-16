<?php
function sum_arithmetic($n,$a,$d){
$sum = 0;
$i = 1;
	while ($i<=$n){
		$sum += $a+($i-1)*$d;
		$i++;
	}
	return $sum;

}

// echo sum_arithmetic(6,4,4);
// echo "<br>";


function sum_geometric($n,$a,$r) {
$sum = 0;
$i = 1;
	while ($i<=$n){
		$sum += $a*($r**($i-1)); 
		$i++;
	}
	return $sum;

}

// echo sum_geometric(4,2,2);
?>

<?php
// function id($n){
// for ($i=0;$i<=$n;$i++){
	
// if ($i==0){
// 	$i = 1;
// } else {
// 	$i *= ($n-$i);
// 	echo $i;
// }
// }
// return $i; 

// }

// echo id(5); 
// echo "<br>"


// factorial ($n-1) *$n 

// function factorial($n){


//   if ($n==1){
//   	  return 1;
//   }
//   else {
//       return $n * factorial($n-1);
      
//   }
// }
// echo factorial(5);



function factorial($n){


  if (!$n){
  	  return 1;
  }
  else {
      return $n * factorial($n-1);
      
  }
}
echo factorial(5);
echo "<br>";


function id($n){
$sum = 1; 
for ($i=1;$i<=$n;$i++){
	$sum = $sum *$i;
}
return $sum;
}
echo id(5); 
echo "<br>"

not writing code tmr 
finding output 
given recursive functiona nd given output 

function factorial($n){
echo $n 
if($n==0) return 1;
else return $n*factorial($n-1);

}
}
factorial(5);



term 2 n-1 and n relationship


if($n==1) return 1;
else return $n*factorial($n-1)
echo $n;




if ($n==1) return 1;
else {
	return $n * factorial($n-1);
	echo $n;
}



remove the return statement 


sum(3,5);
if ($n==1) return 1
else return $n*factorial($n-1);

sum(3,5);
if ($n==1) return 1
else return $n*factorial($n-1);

output: 24 then TEST

function sum($x,$y){
	return $x+$y;
}


echo sum(3,5);
if($n==1) return 1
else echo $n*factorial($n-1);



func ($x,$y)

echo $x,$y; 
if ($x==0)  return $y;
else return fun1($x-1,$x-$y)

echo fun(5,6)

6 questions tmr

func ($x,$y)

echo $x,$y; 
if ($x==0) $y;
else return fun1($x-1,$x-$y)

echo fun(5,6)


func ($x,$y)

echo $x,$y; 
if ($x==0)  return 1;
else return fun1($x-1,$x-$y)

echo fun(5,6)


func ($x,$y)

echo $x,$y; 
if ($x==0) echo 1;
else return fun1($x-1,$x-$y)

echo fun(5,6)





function factorial($n){
	echo factorial($n-1);
	if($n==1){
		return 1; 
	}
}



1. 

<?php
function factorial($n){
if($n==1) return 1;
    else { 
echo $n;
return $n*factorial($n-1);
    }

}
echo factorial(5);

?>

1. 

<?php
function factorial($n){
if($n==1) return 1;
    else { 
echo $n;
echo $n*factorial($n-1);
    }

}
echo factorial(5);

?>

<?php
function factorial($n){    
echo sum(3,5);
if($n==1) return 1;
else echo $n*factorial($n-1); 
}
function sum($x,$y){    
return $x+$y;
}

echo factorial(4); 

?>

<?php
function fun1($x, $y){
echo $x,$y; 
if($x ==0) return $y;
else return fun1($x-1,$x-$y);
} 
echo fun1(5,6);
?>



?>


<?php

function factorial($n){
    echo sum(3,5);
    if($n==1) return 1;
    else print $n*factorial($n-1);
}
function sum($x,$y){
    return $x+$y;
}
echo factorial(9);

function factorial($n){
    echo sum(3,5);
    if($n==1) return 1;
    else return print($n*factorial($n-1));
}
function sum($x,$y){
    return $x+$y;
}
echo factorial(9);




















<?php
function arithmetic($n,$a,$d){
    if ($n==1){
      return $a; 
    } else {    
    return  $d + arithmetic(($n-1),$a,$d);
    }    

}
echo arithmetic(4,2,3);
    
function arithmetic($n,$a,$d){
    if ($n==1){
       return $a; 
    } else {
    return ($a + ($n-1)*$d) + arithmetic (($n-1),$a,$d);  
    }
    
    
}

echo arithmetic(4,2,3);

function geometric($n,$a,$r){
    if ($n==1){
       return $a;   
    } else {
     return $r * geometric(($n-1),$a,$r);  
    }
    
}
echo geometric(4,2,3);

function geometric($n,$a,$r){
    if ($n==1){
       return $a;   
    } else {
     return ($a*($r**($n-1))) + geometric(($n-1),$a,$r);  
    }
    
}
echo geometric(4,2,3);
?>














?>