<!DOCTYPE html>
<html>
<body>
<h3>Fibonacci</h3>
	<form method="post" action="index.php">
		<input type="text" name="input" value="" />
		<input type="submit" name="submit" value="Submit" />
	</form>
	</br>
	<?php
	//check if input is not empty
	if(isset($_POST['input'])) {
		$input = $_POST['input'];
		$isFibo = " not ";
		//check if input is number
		if(is_numeric($input)){
			echo "You Entered: $input.";?><br><?php 
			for($i = 1;$i <= $input; $i++){
				//A number is Fibonacci if and only if one or both of (5*n2 + 4) or (5*n2 – 4) is a perfect square.
				$num1 = (5*($i * $i) + 4);
				$num2 = (5*($i * $i)-4);
				
				//get the squareroot of the numbers
				$sqroot1 = sqrt($num1);
				$sqroot2 = sqrt($num2);
				
				//check if (5*n2 + 4) or (5*n2 – 4) is a perfect square.
				if(($sqroot1 - floor($sqroot1) == 0) ||($sqroot2 - floor($sqroot2) == 0))
					$isFibo = " ";
				else
					$isFibo = " not ";
			
				echo "$i is{$isFibo}a Fibonacci Number.";?><br><?php
			}
		}
		else {
			echo "Please enter a number!";
		}
	}
	?>
</body>
</html>
	
</body>
</html>