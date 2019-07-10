<!DOCTYPE html>
<html>

<body>
	
	<?php

		echo $t = date("l");
		echo "<br>";

		if ($t == "Tuesday")
		{
			echo "biryani";
		}

		elseif ($t == "Wednesday")
		{
			echo "chicken karahi";
		}

		elseif ($t == "Thursday")
		{
			echo "tikkay";
		}

		elseif ($t == "Friday")
		{
			echo "qorma";
		}

		elseif ($t == "Saturday")
		{
			echo "turnip";
		}

		elseif ($t == "Sunday")
		{
			echo "haleem";
		}

		else {
    		echo "Default";
		}

	?>

</body>
</html>