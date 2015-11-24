<?

	include("./bl/db.php");
	include("./bl/util.php");
	//include("validaterequest.php");
	$email = $_POST['email'];
	$fname = $_POST['firstName'];
	$lname = $_POST['lastName'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$cpass = $_POST['confirmPassword'];
	$contact_no = "+91" . $_POST['contact-no'];

	if($pass != '' && $cpass != '') {
	    // Add server side validation.
	}
	$dated = getCurrentDate();
	$query="INSERT INTO user (username, password, first_name, last_name, contact_no, email_id, user_type, active, date_created) VALUES ('$email', '$pass', '$fname', '$lname', '$contact_no', '$email', 2, 1, '$dated')";
    $result = mysql_query($query) or die(mysql_error());
	header("Location: ./login.php?msg=1");	
?>