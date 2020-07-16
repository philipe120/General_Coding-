<?php
$fruit = array("apple", "pinapple", "kiwi");
foreach($fruit as $ob){
	echo $ob; 
}
echo "<br>";
?>

<?php
$fruit = array("pen"=> "1" , "apple" => "2", "pinapple" => "3");
foreach($fruit as $ob => $x){
	echo "I need" . $x . "maybe" . $ob; 
	echo "<br>"; 
}

?> 