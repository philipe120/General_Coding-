<!-- <html>
  <body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
  Position Shift: <input type="text" name="shift"><br>
  Message: <input type="text" name="message"><br>
  <input type="submit" name="decode" value="decode">
  </form>

  </body>

</html> -->


<?php
$str = "8,9,12,8";
$start = 0;
$counter = 0;
$char = "";
$output = "";
for ($i=0;$i<strlen($str);$i++){
	if ($str[$i] != ","){
		$char .= $str[$i];
	} elseif ($str[$i] == ","){
		if ($char = "8"){
			

		}
		$start = $i;
	}

}
echo $i;

?> 