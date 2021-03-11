<!DOCTYPE html>
<html>
<body>
<h3>Palindrome</h3>
	<form method="post" action="index.php">
		<input type="text" name="input" value="" />
		<input type="submit" name="submit" value="Submit" />
	</form>
	</br>
	<?php
	//checks if the input is not null	
	if(isset($_POST['input'])) {
		$input = $_POST['input'];
		//used strrev to reverse the string
		//if input is equal to reversed string then its a palindrome
		if(strrev($input) == $input)
			echo $input .' is a palindrome';
		else
			echo $input . ' is not a palindrome!';
	}
	?>
</body>
</html>
	
</body>
</html>