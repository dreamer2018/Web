<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>dreamchasinger</title>
    </head>
	<body>
		<?php
			include('db_login.php');
			$connection=mysql_connect($db_host,$db_username,$db_password);
			if(!$connection){
			    die("Could not connect to the database<br />".mysql_error());
			}else{
			    echo "connect success";
			}
			$db_select=mysql_select_db($db_database);
			if(!$db_select){
			    die("Could not to select $db_database <br />".mysql_error());
			}else{
			    echo "<br />select success";
			}
			$query="select * from books;";
			$result=mysql_query($query);
			if(!$result){
				die("<br />Could not query: $query<br />".mysql_error());
			}else{
				echo "<br />success query<br />";
			}
			while ($result_row=mysql_fetch_row($result)){
				echo "<br />title_id: $result_row[0] <br />";
				echo "title: $result_row[1] <br />";
				echo "pages: $result_row[2] <br />";
			}
			mysql_close($connection);
		?>
	</body>
</html>
