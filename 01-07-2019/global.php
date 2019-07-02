<!DOCTYPE html>
<html>

<body>
	
	<?php

		// GLOBAL SCOPE
		$x = 500;

		function mytest() {

			global $x;
			
			// Using x inside this function will generate an error message

			echo "<p> Variable x inside function is : $x </p>";
		}

			mytest();

			echo "<p> Variable x outside function is : $x </p>";

	?>

</body>
</html>