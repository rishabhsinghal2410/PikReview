<?
	/* Important COnfigurations to be made for database to function properly */
	$databasehost = 'localhost'; //Host of the mySQL database 
	$databaseuser = 'pikretmj_webuser';      //User name of the mySQL database. Its "root" by default 
	$databasepassword = 'Tarac-603';      //Password for the mySQL databse access to the databaseuser  
	$databasename = 'pikretmj_pikreview'; //Specify the database to use 
	function begin() {
		@mysql_query("BEGIN");
	}
	function commit() {
		@mysql_query("COMMIT");
	}
	function rollback() {
		@mysql_query("ROLLBACK");
	}
	$connection = mysql_connect("$databasehost","$databaseuser","$databasepassword") or die ("Cannot connect to the server. Please check database settings for rectification.");
	$db = mysql_select_db("$databasename", $connection) 
		or die("Cannot select database.");
?>