<html>
<head>
	<title>dreamchasinger</title>
</head>
<body>
	<?php
	include("phpinfo.php");
	$mystring="mystring";
	$signature=md5($mystring);
	echo $signature;
	?>
</body>
</html>