<?
    include('./bl/validate-request.php');
	session_start();
	$_SESSION['user'] = $_SESSION['uname'];
	$_SESSION['header'] = "Awesome content shared by you!";
	$_SESSION['header_small'] = "";
	include('feed.php');
?>