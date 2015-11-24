<?
	/* Important COnfigurations to be made for database to function properly */
	$databasehost = 'localhost'; //Host of the mySQL database 
	$databaseuser = 'root';      //User name of the mySQL database. Its "root" by default 
	$databasepassword = 'asdf';      //Password for the mySQL databse access to the databaseuser  
	$databasename = 'template'; //Specify the database to use 
	$rooturl = "http://{$_SERVER['SERVER_NAME']}/saket/";// Server Name
	$rootdir = dirname(__FILE__); // Directory path
	function begin() {
		@mysql_query("BEGIN");
	}
	function commit() {
		@mysql_query("COMMIT");
	}
	function rollback() {
		@mysql_query("ROLLBACK");
	}
	$connection = mysql_connect("$databasehost","$databaseuser","$databasepassword")
		or die ("Cannot connect to the server. Please check database settings for rectification.");
	$db = mysql_select_db("$databasename", $connection)
		or die("Cannot select database.");
?>