<!DOCTYPE html>
<html>

<body>
	
	<?php

		class Car {
			function Car(){
				$this -> model1 = "Corolla" ;
				$this -> model2 = "Engine No" ;
				$this -> model3 = "Color" ;
			}
		}

		// Create an Object 
		$a = new Car();

		// Show Object Properties
		echo $a ->model1;
		echo "<br>";
		echo $a ->model2;
		echo "<br>";
		echo $a ->model3;
	?>

</body>
</html>