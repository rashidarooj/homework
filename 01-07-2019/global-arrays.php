<!DOCTYPE html>
<html>

<body>
 
	<?php

		$x = 100;
		$y = 1000;

		function mytest() {
			$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
		}

		mytest();
		// OUTPUT 1100 
		echo $y;

	?>

</body>
</html>