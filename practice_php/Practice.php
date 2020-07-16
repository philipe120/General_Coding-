<?php
$x = 5;
$y = 20;
$row1 = "73 72 71 70 69 68 67 66 65";
$row2 = "74 43 42 41 40 39 38 37 64 99";
$row3 = "75 44 21 20 19 18 17 36 63 98";
$row4 = "76 45 22 7 6 5 16 35 62 97";
$row5 = "77 46 23 8 1 4 15 34 61 96";
$row6 = "78 47 24 9 2 3 14 33 60 95";
$row7 = "79 48 25 10 11 12 13 32 59 94";
$row8 = "80 49 26 27 28 29 30 31 58 93"; 
$row9 = "81 50 51 52 53 54 55 56 57 92";
$row10 = "82 83 84 85 86 87 88 89 90 91"; 

for($r=1;$r<=10;$r++){
	$row = ${"row$r"};
	$sl = strlen($row);
	for ($p=0;$p<$sl;$p++){
		$l = 0;
		while ($row[$p]!= " " and $p<$sl){
			$l++;
			$p++;
			if ($p==$sl){
				break;
			}
		}
		if((int)substr($row,$p-$l,$l)+$x-1<=$y){
			echo (int)substr($row,$p-$l,$l)+$x-1;
		} else {
			echo str_repeat("&nbsp&nbsp", strlen((int)substr($row,$p-$l,$l)+$x-1));
		}
		echo str_repeat("&nbsp&nbsp",4-strlen((int)substr($row,$p-$l,$l)+$x-1));
	}
	echo "<br>"; 
}
?> 