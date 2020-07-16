<?php
//If form not submitted, display form.
if (!isset($_POST['submit'])){
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p>Please enter an integer:  <br />
<input type="text" name="x" />
<p />
<input type="submit" name="submit" value="Go" />
</form>
 
<?php
//If form submitted, process input.
}else{
//Retrieve the date and location information.
$x = $_POST['x'];
if(is_prime($x) == 1) echo $x." is prime";
else echo $x." is not prime";
}
function is_prime($x)
{
    
    for($i=3; $i<$x; $i++)
    {
        if($x%$i == 0) return 0;
    }    
    return 1;
    
}
?>