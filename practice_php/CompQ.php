
<?php
// *Just a reminder that I used the <br> to make the output more neater as it has no correlation with my answers // 
// I did <?php echo "<br>" to seperate each answer's output// 
?>

<?php 
// Diagram 1 //
// For Loop // 
for ($num=1;$num<=10;$num++){
	echo "$num &nbsp "; 
}
?> 

<?php
echo "<br>";
?>


<?php 
// Diagram 1 //
// While Loop //
$num = 1;
while ($num <=10){
	echo "$num &nbsp ";
	$num++;
}
?> 

<?php
echo "<br>";
?>

<?php
// Diagram 1 // 
// Do While Loop // 
$num = 1;
do {
	echo "$num &nbsp ";
	$num++;
} while ($num <=10);

?>

<?php
echo "<br>";
?>




<?php
// Diagram 2 //
// For Loop //
for ($num=1;$num<=5;$num++){
	echo "hello world". "</br>";
}
?>

<?php
echo "<br>";
?>

<?php
// Diagram 2 //
// While Loop //
$num = 1;
while ($num <=5){
	echo "hello world". "</br>";
	$num++;
}
?>

<?php
echo "<br>";
?>

<?php
// Diagram 2 //
// Do While Loop // 
$num = 1;
do {
	echo "hello world". "</br>";
	$num++;
} while ($num <=5);
?>

<?php
echo "<br>";
?>




<?php 
// Diagram 3 //
// For Loop //
for ($num=1;$num<=10;$num++){
	echo $num. "</br>";
}
?>

<?php
echo "<br>";
?>

<?php
// Diagram 3 // 
// While Loop // 
$num = 1;
while ($num <=10){
	echo $num. "</br>";
	$num++;
}
?> 

<?php
echo "<br>";
?>

<?php
// Diagram 3 //
// Do While Loop // 
$num = 1;
do {
	echo $num. "</br>";
	$num++;
} while ($num <=10);
?>

<?php
echo "<br>";
?>






<?php
// Diagram 4 //
// Using a For Loop to solve // 
$sum = 0;
for ($x=1;$x<=30;$x++){
	$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n"; 
?>

<?php
echo "<br>";
?>



<?php
// Diagram 5 //
// Using a For Loop to solve // 
for ($x=1;$x<=10;$x++){
	if ($x<10){
		echo "$x-";
	}
	else {
		echo "$x"."\n";
	}
}
?>

<?php
echo "<br>";
?>



<?php
// Diagram 6 //
// Using mutiple For Loops to solve // 
// added echo "<table>" in order to display the table as without it, the code doesn't work // 
echo "<table>";
for ($row=1;$row<=9;$row++){
	echo "<tr>";
	for ($col=1;$col<=8;$col++) {
		$total=$row+$col; 
		if ($total%2==0){
			echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
		}
		else {
			echo "<td height=30px width=30px bgcolor=#000000></td>";
		}
	}
	echo "</tr>";	
} 		
echo "<table>";
?>