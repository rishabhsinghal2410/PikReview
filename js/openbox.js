function populateCommentSection(comments) {
	commentStr="<li><div class=\"commenterImage\"><span>$userid$: </span></div><div class=\"commentText\"><p class=\"small-text\">$user_comment$</p></div><span class=\"date sub-text\">on March 5th, 2014</span></li>" //
	var list = "";
	for( i=0;i<comments.length;i++){
        var comment = comments[i];
        var str = commentStr;
		str=str.replace('$userid$', comment.userId);
		str=str.replace('$user_comment$', comment.text);
		list = list + str;
	}
	document.getElementById('commentUl').innerHTML=list;
}

function addNewComment() {
	commentStr="<li><div class=\"commenterImage\"><span>$userid$:</span></div><div class=\"commentText\"><p class=\"\">$user_comment$</p><span class=\"date sub-text\">on March 5th, 2014</span></div></li>" //
	var list = document.getElementById('commentUl').innerHTML;
	var str = commentStr;
	commentText = document.getElementById('user_comment').value;
	if (commentText == null || commentText.trim() == "") {
	    return;
	}
	reviewId = document.getElementById('txtReviewId').value;
	str=str.replace('$userid$', "You");
	str=str.replace('$user_comment$', commentText);
	list = list + str;
	var commentUl = document.getElementById('commentUl');
	//commentUl.style.background
	commentUl.innerHTML=list;
	//document.getElementById('idCommentFrm').submit();
	var url = "./bl/manage-review.php?f=sc&comment=" + commentText + "&review_id=" + reviewId;
	if (typeof XMLHttpRequest != "undefined") {
		xmlHttp= new XMLHttpRequest();
	}
	else if (window.ActiveXObject) {
		xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
	}
	if (xmlHttp==null){
		alert ("Browser does not support XMLHTTP Request");
		return;
	}
	xmlHttp.onreadystatechange = showLISaved;
	xmlHttp.open("GET", url, true);
	xmlHttp.send(null);
	document.getElementById('user_comment').value="";
	return true;
}

function showLISaved() {
    
}
var xmlHttp;

function makeRequest(url, callBackFn, params) {
	if (typeof XMLHttpRequest != "undefined") {
		xmlHttp= new XMLHttpRequest();
	}
	else if (window.ActiveXObject) {
		xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
	}
	if (xmlHttp==null){
		alert ("Browser does not support XMLHTTP Request");
		return;
	}
	xmlHttp.onreadystatechange = callBackFn;
	xmlHttp.open("GET", url, true);
	xmlHttp.send(null);

}

function renderData(reviewId) {
    var url = "./bl/manage-review.php?f=gr&rid=" + reviewId;
    makeRequest(url, function(){populateBox(reviewId);});
}

function populateBox(reviewId) {
    //content='{"ReviewContent":{"Comments":[{"userId":"ashish","text":"Another test comment from DB insert"},{"userId":"anuj","text":"Test comment from DB insert"}],"Images":[{"pikUrl":".\/bl\/images\/1,jpg"},{"pikUrl":".\/bl\/images\/1,jpg"}],"description":"Test review content","hits":"0","landingUrl":"http:\/\/www.google.com","reviewer":"anuj"}}';
	if (xmlHttp.readyState == 4 || xmlHttp.readyState==200) {
	    content = xmlHttp.responseText
        reviewContent=JSON.parse(content);
        populateCommentSection(reviewContent.ReviewContent.Comments);
		populateData('spanHits', reviewContent.ReviewContent.hits);
	    document.getElementById("txtReviewId").value=reviewId;
		renderImageGallery(reviewContent.ReviewContent.Images);
		var url = "./bl/manage-review.php?f=va&review_id=" + reviewId;
		buyNowBtn = document.getElementById('aBuyNow');
		buyNowBtn.setAttribute("href", reviewContent.ReviewContent.landingUrl);
        buyNowBtn.setAttribute("target", "_blank");
		var userUploadedLink = document.getElementById("userUploaded");
		userUploadedLink.innerHTML=reviewContent.ReviewContent.Reviewer.name;
		userUploadedLink.href="./search.php?id=" + reviewContent.ReviewContent.Reviewer.id;
        makeRequest(url, function(){return null;});
	}
}

function renderImageGallery(images) {
    var imageDiv = "<div class=\"item %CLASS_ACTIVE%\"><img src=\"%IMAGE_URL%\" width=\"460\" height=\"345\"></div>";
	var slideOl = "<li data-target=\"#myCarousel\" data-slide-to=\"%COUNT%\" class=\"%CLASS%\"></li>";
	var imageGallery = "";
	var slideIcons = "";
	for( i=0;i<images.length;i++){
        var image = images[i];
        var str = imageDiv;
		var str1 = slideOl;
		if (i==0) {
		    str=str.replace('%CLASS_ACTIVE%', "active");
			str1 = str1.replace('%CLASS%', "active");
		} else {
		    str=str.replace('%CLASS_ACTIVE%', "");
			str1 = str1.replace('%CLASS%', "");
		}
		str=str.replace('%IMAGE_URL%', image.pikUrl);
		str1 = str1.replace('%COUNT%', i);
		imageGallery = imageGallery + str;
		slideIcons = slideIcons + str1;
	}
	document.getElementById('imageGallery').innerHTML=imageGallery;
	document.getElementById('totalSlide').innerHTML=slideIcons;
}

function populateData(elementId, text) {
    //element = document.getElementById("elementId")
    document.getElementById(elementId).innerHTML=text
}

var startId = 0;
var loadingImageHtml = "<img src='./images/loading.gif' />";
function makeFeedRequest() {
    if (startId != -1) {
        var url="./bl/manage-feed.php?f=gf&sid=" + startId;
		$('#loadStatus').html(loadingImageHtml);
	    makeRequest(url, function(){handleFeedResponse();});
	}
}

function handleFeedResponse() {
    if (xmlHttp.readyState == 4 || xmlHttp.readyState==200) {
        content = xmlHttp.responseText
        feed=JSON.parse(content);
		appendFeed(feed);
	}
}

function appendFeed(feed) {
    var itemDiv = "<div class=\"panel panel-default\"><a class=\"showDialog link\" data-toggle=\"modal\" data-target=\".bs-example-modal-lg\" onclick=\"renderData(%DATA_ID%);\"><img class=\"img-responsive\" src=\"%IMAGE_URL%\" /></a><br><table width=\"100%\"><tbody><tr> <td width=\"50%\" align=\"right\"><label><a class=\"btn btn-primary\" href=\"%LANDING_URL%\" target=\"_blank\">Buy Now</a></label></td><td></td><td width=\"50%\">&nbsp;<label style=\"right: 0px;left:90%\"><button class=\"btn\" type=\"button\" disabled>Views <span class=\"badge\">%VIEWS%</span></button></label></td></tr></tbody></table><p>%DESCRIPTION%</p>";
    var emptyDiv = "<h4><span class=\"label label-default\">No more items to show!<span></h4>";
	var itemList = document.getElementById('feed').innerHTML;
	var loadStatus = document.getElementById('loadStatus');
	var feed=feed[0].Feed;
	var item;
	if (feed.length == 0) {
	    startId = -1;
		$('#loadStatus').html(emptyDiv);
	} else {
	    startId=feed[feed.length-1].id;
	    for( i=0;i<feed.length;i++) {
			var itemDivStr = itemDiv;
			item = feed[i];
			itemDivStr=itemDivStr.replace('%DATA_ID%', item.id);
			itemDivStr=itemDivStr.replace('%IMAGE_URL%', item.coverPik);
			itemDivStr=itemDivStr.replace('%LANDING_URL%', item.landingUrl);
			itemDivStr=itemDivStr.replace('%DESCRIPTION%', item.description);
			itemDivStr=itemDivStr.replace('%VIEWS%', item.views);
			$('#feed').append(itemDivStr);
	    }
		$('#loadStatus').html("");
    }
}
