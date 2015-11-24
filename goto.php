<?
	require_once("./bl/db.php");
	require_once("./bl/util.php");
	session_start();
    $url=$_GET['url'];
	$reviewId=$_GET['rid'];
    $userVisited=$_SESSION['uname'];	
    $ipAddress = getUserIpAddress();
	$dated=getCurrentDate();
	$query="INSERT INTO review_site_visited (review_id, user_visited, ip_address, visit_date, is_deleted) VALUES ($reviewId, '$userVisited', '$ipAddress', '$dated', 0)";
	mysql_query($query) or die(mysql_error());

	header("Location: " . $url);
?>
