<!DOCTYPE html>
<html>
<body>
<h3>File Maker</h3>
	
	<?php
	//used fopen to create a file
	$helloThere = fopen("Hello_there.php", "w") or die("Can't open file!");
	//set the content here
	$content = "
	<?php
	// This is a comment
	
	echo 'This is a test page!';
	echo 'Exam number two!';
	
	// This is the end of a comment
	?>";
	//write the content to the file created using fwrite
	fwrite($helloThere, $content);
	echo "File Created Successfully!"
	?>
</body>
</html>
	
</body>
</html>