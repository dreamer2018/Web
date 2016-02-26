<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>dreamchasinger</title>
</head>
	<body>
		<table border="2">
			<tr>
				<th>purchase_id</th>
				<th>user_id</th>
				<th>title_id</th>
				<th>purchased</th>
			</tr>
			<?php
				include("db_login.php");
				$connection=mysql_connect($db_host,$db_username,$db_password);
				if(!$connection){
					die("connect ERROR<br />");
				}else{
					echo "connect SUCCESS<br />";
				}
				$db_database="zhoupan";
				$selection=mysql_select_db($db_database);
				if(!$selection){
					die("select ERROE<br />");
				}else{
					echo "selection SUCCESS<br />";
				}
				$query="select * from purchases;";
				$result=mysql_query($query);
				
				if(!$result){
					die("query ERROE<br />");
				}else{
					echo "query SUCCESS<br />";
				}
				/*
				while ($result_row=mysql_fetch_row($result)) {
					echo "<tr>";
					echo "<td>$result_row[0]</td>";
			 		echo "<td>$result_row[1]</td>";
					echo "<td>$result_row[2]</td>";
					echo "<td>$result_row[3]</td>";
					echo "</tr>";
					
				}
				*/
				while ($result_row=mysql_fetch_array($result,MYSQL_ASSOC)) {
					$purchase_id=$result_row["purchase_id"];
					$user_id=$result_row["user_id"];
					$title_id=$result_row["title_id"];
					$purchased=$result_row["purchased"];
					echo "<tr>";
					echo "<td>$purchase_id</td>";
			 		echo "<td>$user_id</td>";
					echo "<td>$title_id</td>";
					echo "<td>$purchased</td>";
					echo "</tr>";
					
				}
			?>
		</table>
	</body>
</html>