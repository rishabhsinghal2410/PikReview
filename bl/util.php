<?
	function defaultViewsIfNull($viewCount) {
	    if ($viewCount == null) {
		    return 1;
		}
		return $viewCount;
	}

    function generateLandingUrl($landingUrl, $affiliateKey, $affiliateId, $reviewId) {
	    $affiliateUrl = $landingUrl;
		if (!($affiliateKey==null || $affiliateId==null)) {
		    if (strpos($affiliateUrl,'?',0) != -1) {
		        $affiliateUrl .= "&";
			} else {
			    $affiliateUrl .= "?";
			}
			$affiliateUrl .= $affiliateKey . "=" . $affiliateId;
		}
        $gotoUrl = "./goto.php?rid=" . $reviewId . "&url=" . urlencode($affiliateUrl);
		return $gotoUrl;
	}

	function generateUniqueId($tableName) {
		$query = "select max(id) id from " . $tableName;
		$numresults = mysql_query($query);
		//echo $numresults
		$numrows = mysql_num_rows($numresults);
		$result = mysql_query($query) or die("Couldn't execute query");
		$row = mysql_fetch_array($result);
		if($row == 0) {
			return false;
		} else {
			return $row['id'] + 1;
		}
	}

	function getCurrentDate() {
        return date('Y-m-d h:m:s');
	}

	function getUserIpAddress() {
	    $_SERVER['REMOTE_ADDR'];
	}

?>