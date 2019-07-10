<!DOCTYPE html>
<html>

<body>

	<?php

		$days =[
					"Monday" , 
					"Tuesday" , 
					"Wednesday" , 
					"Thursday" , 
				    "Friday" , 
					"Saturday" , 
					"Sunday"
				];

	    echo $day = date("l");
	    echo "<br>";

		if ($day == $days [0])
		{
			echo "biryani";
		}

		elseif ($day == $days[1])
		{
			echo "chicken karahi";
		}

		elseif ($day == $days[2])
		{
			echo "tikkay";
		}

		elseif ($day == $days[3])
		{
			echo "qorma";
		}

		elseif ($day == $days[4])
		{
			echo "turnip";
		}

		elseif ($day == $days[5])
		{
			echo "haleem";
		}

		elseif ($day == $days[6])
		{
			echo "haleem";
		}

		else {
    		echo "you have not a day";
		}

	?>
	
</body>
</html>