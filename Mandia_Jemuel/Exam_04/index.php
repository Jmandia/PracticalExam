<!DOCTYPE html>
<html>
<body>
<h3>Date Subtract</h3>
	<form method="post" action="index.php">
		<input type="date" name="date1" value="" />
		<input type="date" name="date2" value="" />
		<input type="submit" name="submit" value="Compute" />
	</form>
	</br>
	<?php
	//check if inputs are not empty
	if(isset($_POST['date1']) && isset($_POST['date2'])) {
		$date1 = $_POST['date1'];
		$date2 = $_POST['date2'];
		// called the function getDiff and passed down the input dates
		$dateDiff = getDiff($date1 , $date2);	
		echo 'Output: ' . $dateDiff;		
	}
	function getDiff($date1 , $date2 )
	{
		// get the difference of the iput dates
		// using date_diff()
		// and format it to get the difference in years onths and dates
		$date1 = date_create($date1);
		$date2 = date_create($date2);
		$diff = date_diff($date1, $date2);
		$format = '%y Year(s) %m Month(s) %d Day(s)';	
	  
		return $diff->format($format);
	}
?>
</body>
</html>
	
</body>
</html>