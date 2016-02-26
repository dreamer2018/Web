<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>dreamchasinger</title>
</head>
<body>
    <?php
		include('db_login.php');
        $connection = mysql_connect($db_host,$db_username,$db_password);
        if(!$connection){
            die("connect Error<br />".DB::errorMessage());
        }else{
            echo "connect Success<br />";
        }
        $db_database="zhoupan";
        $select=mysql_select_db($db_database); 
        if(!$select){
            die("select Error<br />".mysql_error());
        }else{
            echo "select Success<br />";
        }
        $query="create table purchases(
            	purchase_id int(11) not null auto_increment,
            	user_id varchar(10) not null,
            	title_id int(11) not null,
            	purchased timestamp null,
            primary key (purchase_id) )";
        $result=mysql_query($query);
        if(!$result){
        	die("query Error".mysql_error());
        }else{
        	echo "query Success";
        }
	?>
</body>
</html>
