<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		$file_name="1.jpg";
		if(file_exists($file_name)){
			echo "$file_name:";
		}else{
			echo "$file_name not exist<br />";
			touch($file_name);
		}
		if(is_readable($file_name)){
			echo "r";
		}
		if(is_writable($file_name)){
			echo "w";
		}
		if(is_executable($file_name)){
			echo "x";
		}
	?>
</body>
</html>