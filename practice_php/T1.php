<?php  
$no_of_rows = 5; 
$array_store = array(); 
function get_element($r,$p){     
		global $array_store; 
	    if(isset($array_store[$r][$p])) { 
	        return $array_store[$r][$p]; 
	            }
	            if($r==1 and $p==1) { 
	               	 return 1;    
	                }
	            else if($p==0) {
	              	 return 0; 
	                }  
	            else if($p>$r) {  
	                 return 0; 
	                }  
 return get_element($r-1,$p-1)+get_element($r-1,$p);   
}
?>  
<pre>
<?php
for($i=1;$i<=$no_of_rows;$i++){
	for($j=1;$j<=$i;$j++){
		echo $array_store[$i][$j]=get_element($i,$j);
		if($i!=$j){
			echo ' ';
		}
	}
	echo '<br>';
}
?>
	
</pre>