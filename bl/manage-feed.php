<?
	// Manages Review Operations
	//include("validaterequest.php");
	require_once("./db.php");
	require_once("./util.php");
	session_start();

	/**
	 * 'gf' -> get main feed.
	 * 'vg' -> get view count on any review.
	 * 'gr' -> get review content as JSON.
	 * 'sc' -> save a comment.
	 */

	if ($_GET['f'] == "gf") {
		getMainFeed();
	}

	function getMainFeed() {
	    $startId = $_GET['sid'];
        $query = "SELECT rc.*, hc.cnt, rfl.affiliate_key, rfl.affiliate_id FROM review_content rc LEFT JOIN (SELECT COUNT(*) cnt, review_id FROM review_hits GROUP BY review_id) hc ON (rc.id = hc.review_id) LEFT JOIN ref_affiliate_link rfl on (rfl.affiliate_site=rc.parent_site) ";
		$whereClause = "";
		$includeWhere = 0;
		if ($startId > 0) {
		    $whereClause .= " where rc.id < $startId";
			$includeWhere = 1;
		}
		if (isset($_SESSION['user'])) {
		    unset($_SESSION['id']);
			$user = $_SESSION['user'];
		    if ($includeWhere == 1) {
			    $whereClause .= " and ";
			} else {
			    $whereClause .= " where ";
			}
			$whereClause .= " rc.user_created='$user'";
			$includeWhere = 1;
		} else if (isset($_SESSION['id'])) {
		    unset($_SESSION['user']);
		    $id = $_SESSION['id'];
			if ($includeWhere == 1) {
			    $whereClause .= " AND ";
			} else {
			    $whereClause .= " WHERE ";
			}
			$whereClause .= " rc.user_created IN (select username from user where id=$id)";
			$includeWhere = 1;
		}
		if (isset($_SESSION['tag'])) {
		    $tag = $_SESSION['tag'];
			if ($includeWhere == 1) {
			    $whereClause .= " and ";
			} else {
			    $whereClause .= " where ";
			}
			$whereClause .= " rc.id IN (select review_id from hashtags where hash_tag = '#$tag') ";
			$includeWhere = 1;
		}
		if ($includeWhere) {
		    $query .= $whereClause;
		}
		$query .= " order by rc.id desc LIMIT 0 , 8";
		//echo $query;
		mysql_query($query) or die(mysql_error());
		$numresults=mysql_query($query);
		$numrows=mysql_num_rows($numresults);
		$result = mysql_query($query) or die("Couldn't execute query");
		$arrFeed=array();
		if ($numrows == 0) {
		    array_push($arrFeed, array("Feed"=>array()));
		} else {
			$contentArr=array();
		    $i=0;
			while($i < $numrows) {
			    $row = mysql_fetch_array($result);
			    $rowArr=array("id"=>$row['id'], "description"=>preg_replace('/#(\w+)/', ' <a href="./search.php?tag=$1">#$1</a>', $row['review_content']), "coverPik"=>$row['cover_pic'], 
				"landingUrl"=>generateLandingUrl($row['landing_url'], $rowRQ['affiliate_key'], $rowRQ['affiliate_id'], $row['id']),
				"views"=>defaultViewsIfNull($row['cnt']));
				array_push($contentArr, $rowArr);
				$i++;
			}
			array_push($arrFeed, array("Feed"=>$contentArr));
		}
		echo json_encode($arrFeed);
	}

?>