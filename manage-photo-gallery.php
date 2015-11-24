<?
	// Manages PhotoGallery Operations
	//include("validaterequest.php");
	require("../db.php");
	extract($_POST);
	
	if ($_GET['method'] == "ADD") {
		addNewPhoto();
	} else if ($_GET['method'] == "UPDATE") {
		editExistingPhoto();
	} else if ($_GET['method'] == "DELETE") {
		deletePhoto();
	}
	
	function addNewPhoto() {
		$id = generateUniqueId("jos_photo");
		$fileName = rand(1000, 100000000) . $_FILES['photo']['name'];
		$path = "./images/" . $fileName;
		$title = $_POST['title'];
		$descr = $_POST['desc'];
		$landing_url = $_POST['landing_url'];
		$query = "INSERT INTO review_pic (review_id, review_header, review_content, landing_url, pic_url, is_deleted) VALUES ($id, '$title', '$descr', '$landing_url', '$path', 0)";
		$path = dirname(__FILE__) . "\\images\\" . $fileName;
		move_uploaded_file($_FILES['photo']['tmp_name'], $path);
		mysql_query($query) or die("Couldn't execute query");
		header("Location: ../index.php?msg=Added Successfully");
	}
	
	function editExistingPhoto() {
	
	
	}
	
	function deletePhoto() {
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$query = "DELETE FROM jos_photo WHERE id = $id";
		} else {
			$query = "DELETE FROM jos_photo WHERE id IN (";
			$count = 0;
			for($i=0;$i<$_GET['totalPhotos'];$i++) {
				if (isset($_GET["chk" . $i])) {
					if ($count != 0) {
						$query .= ", ";
					}
					$query .= $_GET["chk" . $i];
					$count++;
				}
			}
			$query .= ")";
		}
		mysql_query($query) or die("Couldn't execute query");
		header("Location: ../manage/photo-gallery.php?msg=Deleted Successfully");
	}
	
	function generateUniqueId($tableName) {
		$query = "select max(id) id from " . $tableName;
		$numresults = mysql_query($query);
		$numrows = mysql_num_rows($numresults);
		$result = mysql_query($query) or die("Couldn't execute query");
		$row = mysql_fetch_array($result);
		if($row == 0) {
			return false;
		} else {
			return $row['id'] + 1;
		}
	}

?>