<?php
	function connect_db($db_database){
		require_once("db_login.php");
		$connect=mysql_connect($db_hos,$db_username,$db_password);
		if(!$connect){
			die("Connect Error".mysql_error()."<br />");
		}else{
			print("Connect Success<br />");
		}
		$select=mysql_select_db($db_database);
		if(!$select){
			die("Select Error".mysql_error()."<br />");
		}else{
			print("Select Success<br />");
		}
	}
	function insert_db(){
		connect_db("zhoupan");
		
		if(get_magic_quotes_gpc()){
			$title = stripcslashes($title);
			$pages = stripcslashes($pages);
		}

		$title = mysql_real_escape_string($title);
		$pages = mysql_real_escape_string($pages);
		
		$query = "insert into books values(null,'$title','$pages');";
		$result = mysql_query($query);
		if(!$result){
			die("Query Error".mysql_error()."<br />");
		}else{
			print("Insert OK.<br />");
		}
		
		$query = "select * from books;";
		$result = mysql_query($query);
		if(!$result){
			die("Query Error".mysql_error()."<br />");
		}
		echo "<table>";
		echo "<tr><th>Title</th><th>Pages</th></tr>";
		while($result_row = mysql_fetch_row($result)){
			echo "<tr><td>";
			echo $result_row[1]."</td><td>";
			echo $result_row[2]."</td></tr>";
		}
		echo "</table>";
		mysql_close($connect);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>dreamchasinger</title>
</head>
<body>
	<?php
		$title = htmlentities($_get["title"]);
		$pages = htmlentities($_get["pages"]);
		
		if(($title != null ) && ($pages != null )){
			insert_db($title,$pages);
		}else{
			echo '
				<h1>Enter a new title:</h1>
				<form action="'.$_server["php_self"].'" method="get">
					<label>Title:<input type="text" name="title" /> </label>
					<label>Pages:<input type="text" name="pages" /> </label>
				<input type="submit" value="Go!" />
				</form>';
		}
	?>
</body>
</html>