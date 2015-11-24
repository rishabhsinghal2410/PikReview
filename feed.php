<?
	require("./config.php");
	//include("./bl/validaterequest.php");	
	require("./bl/db.php");
	if (strcmp(phpversion(), "5.4.0") >= 0) {
	  if (session_status() == PHP_SESSION_NONE) {
	    session_start();  
	  }
	} else {
	  if (session_id() == '') {
	    session_start();
	  }
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  .item {
    display: inline-block;
    padding: .25rem;
    width: 100%;
  }
  
  .hide {
    display:none;
  }
  .show {
    display:block;
  }
  </style>
  <link rel="stylesheet" href="./css/tile-layout.css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="./js/openbox.js" type="text/javascript"></script>
  <title>PikReview</title>
    <!-- Bootstrap Core CSS -->
	<link href="css/comment-box.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script type="text/javascript">
	if (typeof(jQuery) != 'undefined') {
     	jQuery.noConflict();
	}
</script>
</head>
<body>
    <? include('header.php') ?>

    <!-- Page Content -->
    <div class="container main-container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="margin-top:10px;"><? if (!isset($_SESSION['header'])) { ?>What you see, Is What you get! <? } else { echo $_SESSION['header']; unset($_SESSION['header']); } ?> <br />
                    <small style="font-size:16px;">Real reviews...Real images...Curated by humans.</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
		<div class="prow" id="feed"></div>
		<div class="row">
		    <div class="col-md-5"></div>
			<div class="col-md-4 portfolio-item item" id="loadStatus"></div>
			<div class="col-md-3"></div>
		</div>
        <hr />
        <? include("footer.php") ?>

    </div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	<div class="modal-header">
	  <div id="viewPostHeader">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <label><a id="aBuyNow" class="btn btn-primary" href="#">Buy Now</a></label>
	    <label style="right: 0px;left:90%"><button class="btn" type="button" disabled>Views <span id="spanHits" class="badge">4</span></button></label>
		<? 
		   $editable = false;
		   if (isset($_SESSION['user']) && strcmp($_SESSION['user'], $_SESSION['uname']) == 0) {
              $editable = true;
           }
		   if ($editable) {
		?>
		<label><button class="btn btn-primary" type="button" onclick="postMode('edit')">Edit</button></label>
		<? } ?>
	  </div>
	  <? if ($editable) { ?>
      <div id="editPostHeader" class="hide">
	    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <label><a class="btn btn-primary">Save</a></label>
	    <label><button class="btn" type="button" onclick="postMode('view')">Cancel</button></label>
      </div>
	  <? } ?>
    </div>
	<div class="modal-body">
    <div class="row">
      <div id="viewPostBody">
		<div class="col-md-7">
		  <div><span></span></div>
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
			<ol id="totalSlide" class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div id="imageGallery" class="carousel-inner" role="listbox">
			  <div class="item active"><img src="images/spinner.gif" width="460" height="200"></div>
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only"></span>
			</a>
		  </div>
		  <h4>More by <a id="userUploaded" href="#"></a></h4>
		</div>
		<div class="col-md-5">
		<div class="detailBox">
		  <div class="titleBox">
			<form id="idCommentFrm" class="form-inline" role="form" action="./bl/manage-review.php?f=sc" method="post">
				<div class="form-group">
					<textarea id="user_comment" class="form-control" type="text" name="comment" placeholder="Your comments" rows="2"cols="30"></textarea>
					<input id="txtReviewId" type="hidden" name="review_id" />
				</div>
				<div class="form-group">
					<input type="button" value="Add" class="btn btn-primary" onclick="addNewComment()"  />
				</div>	
			</form>
		  </div>
		  <div class="actionBox">
			<ul id="commentUl" class="commentList">
			</ul>
		  </div>
		</div>
	   </div>
	  </div>
	  <? if ($editable) { ?>
	  <div id="editPostBody" class="hide">
	    <div class="row">
	      <div class="col-lg-6">
		    <div class="col-xs-3">
			  <div class="show-image">
		        <img class="img-responsive selected link" src="./images/1.jpg" />
				<span class="glyphicon glyphicon-remove-circle selected"></span>
				<span class="glyphicon glyphicon-repeat hide link"></span>
			  </div>
			</div>
		    <div class="col-xs-3">
			  <div class="show-image">
		        <img class="img-responsive link" src="./images/1.jpg" />
				<span class="glyphicon glyphicon-remove-circle"></span>
				<span class="glyphicon glyphicon-repeat hide link"></span>
			  </div>
			</div>
			<div class="col-xs-3">
			  <div class="show-image">
		        <img class="img-responsive link" src="./images/1.jpg" />
				<span class="glyphicon glyphicon-remove-circle"></span>
				<span class="glyphicon glyphicon-repeat hide link"></span>
			  </div>
			</div>
			<div class="col-xs-3">
			  <div class="show-image">
		        <img class="img-responsive link" src="./images/1.jpg" />
				<span class="glyphicon glyphicon-remove-circle"></span>
				<span class="glyphicon glyphicon-repeat hide link"></span>
			  </div>
			</div>
			<div class="col-xs-3">
			  <div class="show-image">
		        <img class="img-responsive link" src="./images/1.jpg" />
				<span class="glyphicon glyphicon-remove-circle"></span>
				<span class="glyphicon glyphicon-repeat hide"></span>
			  </div>
			</div>
		  </div>
		  <div class="col-lg-6">
		       <div class="form-group">
				<label class="col-xs-4 col-lg-3 control-label">Description:</label>
				<div class="col-xs-8 col-lg-8">
					<textarea rows="5" class="form-control" name="descr" placeholder="Please provide details of how you feel about your purchase. You may add #HashTags to categorize it."
						data-bv-notempty="true"
						data-bv-notempty-message="A small descripion would add more value to the people viewing it :)" ></textarea>
				</div>
				<div class="col-lg-1"></div>
			</div>
		  </div>
		</div>
		<br />
		<div class="row">
		  <div class="form-group">
		    <div class="col-lg-1"></div>
			<div class="col-xs-4 col-lg-2"><label class="control-label">Product Link:</label></div>
			<div class="col-xs-8 col-lg-8">
			  <input type="url" class="form-control" name="landing_url"
                        data-fv-uri-message="The website address is not valid"
						placeholder="Link of the product you are posting for."
						data-bv-notempty="true"
						data-bv-notempty-message="Link is required and cannot be empty" />
			</div>
			<div class="col-lg-1"></div>
		  </div>
        </div>
	   </div>
	   <? } ?>
	  </div>
    </div>
  </div>
</div>
</div>
</div>

</body>
  <script src="./js/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
function postMode(mode) {
 if (mode == "edit") {
   $('#editPostHeader').removeClass('hide');
   $('#viewPostHeader').addClass('hide');
   $('#editPostBody').removeClass('hide');
   $('#viewPostBody').addClass('hide');
 } else if (mode == "view") {
   $('#viewPostHeader').removeClass('hide');
   $('#editPostHeader').addClass('hide');
   $('#viewPostBody').removeClass('hide');
   $('#editPostBody').addClass('hide');
 }
}
$(window).scroll(function () {
	if ($(window).height() + $(window).scrollTop() == $(document).height()) {
		console.log("Event Fired");
		makeFeedRequest();
	}
});
makeFeedRequest();
$('img').click(function() {
  if (!$(this).hasClass('deleted')) {
     $('.selected').prop('title', 'Click to make it cover pik!');
     $('.selected').removeClass('selected');
     $(this).parent().children().addClass('selected');
     $(this).prop('title', '');
   }
});

$('span.glyphicon-remove-circle').click(function() {
    $(this).parent().children().addClass('deleted');
	$(this).next().removeClass('hide');
	$(this).next().removeClass('deleted');
});
</script>
</html>
