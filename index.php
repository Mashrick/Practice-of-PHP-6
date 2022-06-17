


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practice</title>
</head>
<body>



	

			<!--	Print Fatorial Number using if..else..	-->



		<?php

			echo "Fatorial Number<br><br>";

			function factorial($number) {

			    if ($number < 2) {

			        return 1;

			    } else {

			        return ($number * factorial($number-1));

			    }
			}

			echo factorial(4);
	
			


		?>



		<br>
		<br>


			<!--	Print Star Pyramid using if..else..	-->



		<?php

			echo "Star Pyramid<br><br>";


			for($row = 1;$row <= 8; $row++){

			   for ($star = 1; $star <= $row; $star++){

			     echo " * ";

			    }

				echo "<br>";
			
			}


		?>



		<br>
		<br>


				<!--	Check Vote Age using if..else..		-->



		<?php


			echo "Check Vote Age<br><br>";

			function check_vote(){

			    $name = "Mashrick";
			    $age = 27;

			    if ($age >= 18){

			        echo $name . ", you Are Eligible For Vote";

			    } else {

			        echo $name . ", you are not eligible for vote. ";

			    }
			}

			check_vote(); 




		?>







		<br>
		<br>


			<!--	Check Number using if..elseif..else..	-->



		<?php

			echo "Check Number Positive Number, Negative Number, Numeric Value<br><br>";
			
			$number = 90;

			if ($number > 0) {

			    echo $number . " is a positive number";

			} else if ($number < 0){

			    echo $number . " is a negative number";

			} else if ($number == 0){

			    echo "You have entered zero";

			} else {

			    echo " please enter a numeric value";

			}



		?>



		<br>
		<br>




			<!--	Print (1-100) ODD Numbers using While Loop	-->



		<?php


			echo "Print (1-100) ODD Numbers<br><br>";
 
			$num = 1;

			while ( $num <= 100 ) {

			  print "$num, ";

			  $num += 2;

			}


		 
		?>




		<br>
		<br>




			<!--	Time's Table using while loop & if...	-->


		<?php

			echo "Time's Table<br><br>";

			$t = 5;


 			for ($i = 1; $i <= 10; $i++){
 
			$product = $t * $i;
			 
			echo $t . " x " . $i .": " .$product. "<br/>";

			}


		 
		?>




		

		

</body>
</html>







