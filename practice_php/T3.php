
<html>
<body>

<form method= "post" action="<?php $_SERVER['PHP_SELF'];?>">
Integer: <input type= "text" name="x">
<input type = "submit" name = "submit">
</form>
</body>
</html>


<?php
if (isset($_POST['submit'])){
$x = $_POST['x'];
echo $x; 
}
?>


