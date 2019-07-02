<!DOCTYPE html>
<html>

<body>
	<?php
		$x = 5;
		function mytest() {

			//LOCAL SCOPE
			$x = 500;

			echo " <p> Variable x inside function is : $x </p> ";
		}

		mytest();

		// Using x outside the function will generate an error message

		echo " <p> Variable x outside function is : $x </p> ";

	?>
</body>
</html>