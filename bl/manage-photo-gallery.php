<?
	// Manages PhotoGallery Operations
	//include("validaterequest.php");
	require_once("./db.php");
	require_once("./util.php");
	extract($_POST);
    session_start();	
	if ($_GET['method'] == "ADD") {
		addNewPhoto();
	} else if ($_GET['method'] == "UPDATE") {
		editExistingPhoto();
	} else if ($_GET['method'] == "DELETE") {
		deletePhoto();
	}

	function getHashtags($string) {  
        $hashtags= FALSE;  
        preg_match_all("/(#\w+)/u", $string, $matches);  
        if ($matches) {
            $hashtagsArray = array_count_values($matches[0]);
            $hashtags = array_keys($hashtagsArray);
        }
        return $hashtags;
    }
	
	function addNewPhoto() {
		$id = generateUniqueId("review_content");
		
		$path = "./bl/images/" . $fileName;
		$title = $_POST['title'];
		$descr = $_POST['descr'];
		$hashTags = getHashtags($descr);
		$landing_url = $_POST['landing_url'];
		$user=$_SESSION['uname'];
		$myFile = $_FILES['photos'];
		$fileCount = count($myFile["name"]);
		$fileNames = array();
		for ($i=0;$i<$fileCount;$i++) {
		    $fileName = time() . $i . "_" . $myFile['name'][$i];
			$path = dirname(__FILE__) . "/../images/" . $fileName;
			move_uploaded_file($myFile['tmp_name'][$i], $path);
			$path = "./images/" . $fileName;
			array_push($fileNames, $path);
		}
		$user_uploaded = $_SESSION['uname'];
		$reviewId = insertReviewContent($review_header, $descr, $landing_url, $fileNames[0], $user_uploaded);
		insertReviewPiks($reviewId, $fileNames);
		saveHashTags($reviewId, $hashTags);
		header("Location: ../index.php?msg=Added Successfully");
	}

	function saveHashTags($reviewId, $hashTags) {
        $query = "INSERT INTO hashtags (review_id, hash_tag, created_date, is_deleted) VALUES ";
		$dated=getCurrentDate();
		for ($i=0;$i<sizeof($hashTags);$i++) {
		    $hashTag = $hashTags[$i];
			$query .= "($reviewId, '$hashTag', '$dated', 0)";
			if (($i+1) != sizeof($hashTags)) {
			    $query .= ", ";
			}
			
		}
		if (sizeof($hashTags) > 0) {
		    mysql_query($query) or die(mysql_error());
	    }
	}

	function insertReviewContent($review_header, $description, $landing_url, $cover_pic, $user_uploaded) {
	    $id = generateUniqueId("review_content");
		$dated=getCurrentDate();
		$user=$_SESSION['uname'];
		$parentSite=str_replace('.com', '', str_ireplace('www.', '', parse_url($landing_url, PHP_URL_HOST)));
		$query = "INSERT INTO review_content (id, review_header, review_content, landing_url, cover_pic, user_created, date_uploaded, parent_site) VALUES ($id, '$title', '$description', '$landing_url', '$cover_pic', '$user', '$dated', '$parentSite')";
		mysql_query($query) or die(mysql_error());
		return $id;
	}

	function insertReviewPiks($reviewId, $fileNames) {
	    $query = "INSERT INTO review_pic (review_id, pic_url, uploaded_date, is_deleted) VALUES ";
		$dated=getCurrentDate();
		for ($i=0;$i<sizeof($fileNames);$i++) {
		    $fileName = $fileNames[$i];
			$query .= "($reviewId, '$fileName', '$dated', 0)";
			if (($i+1) != sizeof($fileNames)) {
			    $query .= ", ";
			}
			
		}
		if (sizeof($fileNames) > 0) {
		    mysql_query($query) or die(mysql_error());
	    }
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

?>