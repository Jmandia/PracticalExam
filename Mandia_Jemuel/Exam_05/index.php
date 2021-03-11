<!DOCTYPE html>
<html>
<body>
<h3>Reverse</h3>
	<form method="post" action="index.php">
		<input type="text" name="input" value="" />
		<input type="submit" name="submit" value="Submit" />
	</form>
	</br>
	<?php
	//checks if the input is not null	
	if(isset($_POST['input'])) {
		// reverse the string using strrev()
		//displays the reversed string 
		$input = $_POST['input'];
		echo "Input: $input";
		?><br><?php
		echo "Output: " .strrev($input);	
	}
?>
</body>
</html>
	
</body>
</html>