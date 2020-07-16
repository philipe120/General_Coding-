<?php
session_start();
?>

<html>
  <body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
  Number Of Integers: <input type="text" name="integers"><br>
  <input type="submit" name="submit" value="submit">
  </form>

  </body>

</html>

<?php
if (isset($_POST['submit'])){ 
	$num_of_int = $_POST['integers'];
	$_SESSION['num'] = $num_of_int; 
	echo "$num_of_int";
}
if (isset($num_of_int)){
	$i=0;
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >


<?php	
	while ($i<=$num_of_int){
		if($i<$num_of_int){
?>
	Character and associated binary sequence <input type="text" name="<?php echo "d$i"?>"><br>

<?php
		} else {
?>


	Binary Sequence <input type="text" name="binary">
	<input type="submit" name="decode" value="decode">
</form>

<?php
	
		}

$i=$i+1;

	}
}
$i=0;
if (isset($_POST['decode'])){
	echo "hello";
	echo $_SESSION['num'];
	while($i<=$_SESSION['num']){
		if ($i<$_SESSION['num']){
			$k = $_POST["d$i"];
			echo $k;
			$sequence = preg_replace('/[^0-9]/', '', $k);
			// echo $sequence;
			$character = preg_replace('/[^a-zA-Z]/', '', $k);
			// echo $character; 
			$arry["$character"] = "$sequence";

		}
		$i++;
	}
	print_r($arry);
	$binary = $_POST['binary'];

	$length = strlen($binary);
	$j = 0;
	$start = 0;
	$outstr = "";
	while($j<$length){
		$l = ($j-$start)+1;
		$current_val = substr($binary, $start, $l);
		$char = array_search($current_val, $arry, true); 
		if ($char===false){
			$j++; 
		} else {
			$outstr .= $char;
			$char = "";
			$j++;
			$start = $j;
		}

	}
	echo $outstr;
}





?> 
array sorting