<?php
echo "<body style='font-family:Consolas'>";
$k = 3;
for ($r=1;$r<=3;$r++){
	for ($j=1;$j<=$k;$j++){
		//row three times//
		for ($i=0;$i<=$k-1;$i++){
			// column three times // 
			for ($b=1;$b<=$k;$b++){
				if ($r == 1){
					$row = "*X*";
				}	
				elseif ($r == 2){
					$row = " XX";
				}
				elseif ($r == 3){
					$row = "* *";
				}
				$c = substr($row, $i,1);
				if ($c == "*" or $c == "X"){
					echo $c; 
				}
				else {
				echo "&nbsp";
				}
			
			}
		}
	echo "<br>";
	}
}

?>