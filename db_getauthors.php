<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>dreamchasinger</title>
</head>
<body>
	<table border="2">
		<tr>
			<th>author_id</th>
			<th>title_id</th>
			<th>author</th>
		</tr>
		<?php
			include("db_login.php");
			$db_connect=mysql_connect($db_host,$db_username,$db_password);
			if(!$db_connect){
				die("connect error<br />");
			}else{
				echo "connect success<br />";
			}
			$db_select=mysql_select_db($db_database);
			if(!$db_select){
				die("select error<br />");
			}else{
				echo "select success<br />";
			}
			$query="select * from authors;";
			$db_query=mysql_query($query);
			if(!$db_query){
				die("query error : $query<br />");
			}else{
				echo "query success<br />";
			}
			echo "<br />";
			while ($result=mysql_fetch_array($db_query,MYSQL_ASSOC)) {
				$author_id=$result["author_id"];
				$title_id=$result["title_id"];
				$author=$result["author"];
				echo "<tr>";
				echo "<td>$author_id</td>";
				echo "<td>$title_id</td>";
				echo "<td>$author</td>";
				echo "</tr>";
			}

		?>
	</table>
</body>
</html>