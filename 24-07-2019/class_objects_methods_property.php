 <?php 

	//declare the class
	class Bakery {

		//properties
		public $company;
		public $color = "yellow";
		public $hasSunRoof = true;

		//Method that says hello
		public function welcome()
		{
			return "thankyou for shopping";
		}
	}
 	
 	//create an instance
 	$butt = new Bakery();
 	$ghous = new Bakery();



 	echo $butt -> welcome();
 	echo "<br>";
 	echo $ghous -> welcome();
 	echo "<br>";
	echo "<br>";
 	//Get the values
    echo $butt -> color;
    echo "<br>";
    echo $ghous -> color;
    echo "<br>";
    echo "<br>";

    //set
    	$ghous -> color = "PURPLE";
    	$ghous -> bakery = "GHOUS";
    	$butt -> bakery = "BUTT";
    	$butt -> color = "RED";

    //Get the values Again
    	echo $ghous -> color;
    	echo "<br>";
    	echo $ghous -> bakery;
    	echo "<br>";

    	echo "<br>";
    	echo $butt -> bakery;
    	echo "<br>";
    	echo $butt -> color;
 ?>

