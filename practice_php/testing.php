<?php
function sum_geometric($n,$a,$r) {
$sum = 0;
$i = 1;
	while ($i<=$n){
		$sum += $a*($r**($i-1)); 
		$i++;
	}
	return $sum;

}
echo sum_geometric(4,2,3);


function geometric($n,$a,$r){
    if ($n==1){
       return $a;   
    } else {
     return ($a*($r**($n-1))) + geometric(($n-1),$a,$r);  
    }
    
}
echo geometric(4,2,3);

?>

2 6 18 56 



<?php
function arithmetic($n,$a,$d){
$sum = 0; 
for ($i=1;$i<=$n;$i++){
	$sum += $a + (($i-1)*$d); 
}
return $sum; 


}
echo arithmetic(4,2,3);
?>


<?php
function geometric($n,$a,$r){
$sum = 0;
for ($i=1;$i<=$n;$i++){
	$sum += $a*($r**($i-1));
}
return $sum; 
}
echo geometric(4,2,3);





function arithmetic($n,$a,$d){
	if ($n==1){
		return $a; 
	} else {
		return ($a + (($n-1)*$d))  + arithmetic(($n-1),$a,$d); 
	}

}
echo arithmetic(4,2,3);
echo "<br>";


function geometric($n,$a,$r){
	if ($n==1){
		return $a;
	} else {
		return ($a*($r**($n-1))) + geometric(($n-1),$a,$r);
	}
}
echo geometric(4,2,3);
echo "<br>";


function natural($n){
	if($n==1){
		return 1;
	} else {
		return $n + natural($n-1);
	}
}
echo natural(4);


?>

