<?php
// $input= "3 10 12 5"; 
// $ar = explode(" ",$input);
// array_unshift($ar, "0");
// $counter = count($ar);
// $counter2 = $counter;
// print_r($ar);
// $d=0;
// for ($i=0;$i<$counter;$i++){
// 	$temp = 0;	
// 	$d=0;
// 	while ($d<$counter2){
// 	$temp = $temp + $ar[$d];
// 	echo $temp, "&nbsp";
// 	$d++; 
// 	}
// 	echo "<br>";

// }

// $ar = array("Zack"=>"Zara", "Anthony"=>"Any",  
//                   "Ram"=>"Rani", "Salim"=>"Sara",  
//                   "Raghav"=>"Ravina"); 
// $num = count($ar);
// echo $num;
// $keys = array_keys($ar);
// print_r($keys);
// $num = 0;
// $switch = false; 
// $i = 0;
// while (!$switch){
// 	if (isset($keys[$i])){
// 		$num++;
// 	} else {
// 		$switch = true;  
// 	}
// 	$i++; 
// }
// echo $num;
// $num = count($ar);
// echo $num;

// function bool($hello){
// 	if($hello == true){
// 		echo $hello; 
// 	} elseif(isset($hello) or $hello == false){
// 		echo "bye";
// 	}
// }
// function input_string($input){
// 	$sum = 0;
// 	$ar = explode(",",$input);
// 	for ($i=0;$i<count($ar);$i++){
// 		$sum += $ar[$i];
// 	}
// 	return $sum; 

// }
// echo input_string("1,2,3,4,5,6,7");

// function temp($list){
// 	$sum = 0;
// 	$ar = explode(",",$list);
// 	asort($ar);
// 	$ar = array_values($ar);
// 	$num = count($ar);
// 	for ($i=0;$i<$num;$i++){
// 		$sum += $ar[$i];
// 	}
// 	$average = intval($sum/$num);
// 	echo "average is $average";
// 	echo "<br>";
// 	print_r($ar);
// 	echo "<br>";
// 	for ($j=0;$j<5;$j++){
// 		echo $ar[$j];
// 	}
// 	echo "<br>";
// 	$limit = $num-5;
// 	for ($d=($num-1);$d>=$limit;$d--){
// 		echo $ar[$d];
// 	}
// 	echo "<br>";

// 	return implode(",",$ar);




// }
// $list = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
// echo temp($list);

// $n = 5;
// $h = $n*2; 

// for ($i=1;$i<=$n;$i++){
// 	for ($j=1;$j<=$i;$j++){
// 		echo "*";
// 	}
// 	echo "<br>";
// }
// for ($d=$n;$d>=1;$d--){
// 	for ($c=1;$c<=$d;$c++){
// 		echo "*";
// 	}
// 	echo "<br>";
// }
$word1 = "nurses run";
function palin($n){
	$num1 = preg_replace('/\s+/', '', $n);
	$num1 = strtolower($num1);
	$num2 = strrev($num1);
	if ($num1==$num2){
		echo "palin";
	} else {
		echo "not palin";
	}

}
palin($word1);




<?php
$word1 = "ababb";

$word2 = "aba*b";

$found_letter = false;

$count_star = 0; //1 error 

$count_carrot = 0;

for($i = 0; $i < strlen($word2); $i++) // 2 error 

{

if($word2[$i] == "*") $count_star++;

else

{

$found_letter = false;

for($j = 0; $j < strlen($word1); $j++)

{

if($word2[$i] == $word1[$j]) //3 error 

{
$word1 = substr_replace($word1,"^",$j,1); //5 error 
$count_carrot++; //4 error 

$found_letter = true;

echo $word1;

echo "\n"; 

break;

}

}

}

if($found_letter == false) {echo "N"; break;} 

}

if(( strlen($word1)-$count_carrot) == $count_star) echo "Y";

?>






<?php

//array whose sum is to be calculated 
$a = array(12, 24, 36, 48); 
  
//calculating sum 
echo (array_sum($a)); 



$num = "yo yo that yo";
$num = preg_replace(' ','', $num);
echo $num;


$a = array("a" => "india", "b" => "brazil", "c" => "china");

echo array_shift($a);

echo "<br>";

array_pop($a);

print_r($a);





$num = "1o 1o that 1o";
$num = preg_replace('/1/','t', $num);
echo $num;

$num = "1o 1o that 1o";
$num = preg_replace('/\s+/','', $num);
echo $num;




?>




