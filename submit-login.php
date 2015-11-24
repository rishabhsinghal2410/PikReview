<?
	// Validate Login
	include("bl/db.php");
	session_start();
	$uname = $_POST['email'];
	$pass = $_POST['password'];
	
	$query = "SELECT * FROM user where username = '$uname' AND password = '$pass'";
	$numresults=mysql_query($query);
	$numrows=mysql_num_rows($numresults);
    $result = mysql_query($query) or die(mysql_error());
	$row= mysql_fetch_array($result);
	if($numrows == 0) {
		header("Location: ./login.php?err=1");
	} else {
		$_SESSION['login'] = 1;
		$_SESSION['uname'] = $row['username'];
		$_SESSION['name'] = $row['first_name'];
		$_SESSION['timeout']=time();
		header("Location: ./index.php");
	}
?>