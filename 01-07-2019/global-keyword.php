<!DOCTYPE html>
<html>

<body>

	<?php

		$x = 500;
		$y = 100;

		function mytest() {
			global $x , $y;
			$y = $x + $y;
		}


		mytest();
		//outputs 600
		echo $y;
	?>

</body>
</html>