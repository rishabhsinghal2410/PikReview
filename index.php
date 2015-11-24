<?
	session_start();
	unset($_SESSION['id']);
	unset($_SESSION['tag']);
	unset($_SESSION['user']);
	include('feed.php');
?>
