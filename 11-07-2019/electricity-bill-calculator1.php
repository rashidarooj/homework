<!DOCTYPE html>
<html>

	<?php

		$t = $x = '';
		if (isset($_POST['unit-result']))
		{
			$units = $_POST['units'];
			if (!empty($units))
			{
				$x = calculate($units);
				$t = 'Total amount of ' . $units . ' - ' . $x;
			}
		}
		
		//units
		function calculate($units)
		{
			$unit_first = 3.50;
			$unit_second = 4.00;
			$unit_third = 5.20;
			$unit_above= 6.50;

			if($units <=50)
			{
				$bill = $units * $unit_first;
			}

			else if($units > 50 && $units <=100)
			{
				$temp = 50 * $unit_first;
				$remain_units = $units - 50;
				$bill = $temp + ($remain_units * $unit_second);
			}

			else if($units > 100 && $units <= 200)
			{
				$temp = (50 * 3.50) + (100 * $unit_second);
				$remain_units = $units -150;
				$bill = $temp + ($remain_units * $unit_third);
			}

			else {
				$temp = (50 * 3.50) + (100 * $unit_second) + (100 * $unit_third);
				$remain_units = $units - 250;
				$bill = $temp + ($remain_units * $unit_above);
			}
			return number_format((float) $bill, 2 , '.' ,'');
		}		
	
	?>
	<body>
	<div id="page-wrap">
		<h1>Php Electricity Bill Calculator</h1>

		<form action="" method="post" id="quiz-form">            
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />            
            	<input type="submit" name="unit-result" id="unit-submit" value="Submit" />		
		</form>

		<div>
			<?php
				echo '<br>' . $t;
			?>
		</div>
	</div>

</body>
</html>