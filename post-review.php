<?
	include('./bl/validate-request.php');
	require("./config.php");
	require("./bl/db.php");
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
  </style>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="./js/openbox.js" type="text/javascript"></script>
  <title>PikReview!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/shop-homepage.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!--link href="css/3-col-portfolio.css" rel="stylesheet"-->
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
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="margin-top:10px;">Post a review<br /><small style="font-size:16px;">Hey <? echo $_SESSION['name']; ?>, share your product review with fellow PikReviewers!</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
	    <div class="row">
		  <div class="col-xs-2 col-lg-3"></div>
		  <div class="col-xs-8 col-lg-6">
		  <form id="frmPost" method="post" class="form-horizontal"
            data-bv-message="This value is not valid"
            data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
            data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
            data-bv-feedbackicons-validating="glyphicon glyphicon-refresh" action="./bl/manage-photo-gallery.php?method=ADD" enctype="multipart/form-data">
			<?
			if (isset($_GET[err])) {
			$err = $_GET[err]; ?>
			<div class="form-group">
			    <label class="col-xs-12 col-lg-8 control-label"style="color:#a94442;"><? switch($err) { case 1: echo "Invalid email/password!"; break; }?> </label>
			</div>
			<? } ?>
			<div class="form-group">
				<label class="col-xs-4 col-lg-3 control-label">Select Piks:</label>
				<div class="col-xs-8 col-lg-8">
					<input class="form-control" name="photos[]" type="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" multiple
                        data-bv-notempty="true"
						data-bv-notempty-message="Please select at least one pik to upload" />
				</div>
				<div class="col-lg-1"></div>
			</div>

			<div class="form-group">
				<label class="col-xs-4 col-lg-3 control-label">Product Link:</label>
				<div class="col-xs-8 col-lg-8">
					<input type="url" class="form-control" name="landing_url"
                data-fv-uri-message="The website address is not valid"
						placeholder="Link of the product you are posting for."
						data-bv-notempty="true"
						data-bv-notempty-message="Link is required and cannot be empty" />
				</div>
				<div class="col-lg-1"></div>
			</div>
			<div class="form-group">
				<label class="col-xs-4 col-lg-3 control-label">Description:</label>
				<div class="col-xs-8 col-lg-8">
					<textarea rows="5" class="form-control" name="descr" placeholder="Please provide details of how you feel about your purchase. You may add #HashTags to categorize it."
						data-bv-notempty="true"
						data-bv-notempty-message="A small descripion would add more value to the people viewing it :)" ></textarea>
				</div>
				<div class="col-lg-1"></div>
			</div>
			<div class="form-actions">
			    <label class="col-xs-3 col-lg-3 control-label">&nbsp;</label>
                <div class="col-xs-8 col-lg-7"><button type="submit" class="btn btn-success btn-large">Post</button>
				<div class="col-xs-1 col-lg-2"></div>
            </div>
          </form> 
		  </div>
		</div>
		</div>
        <hr>

        <!-- Pagination -->
        <!--div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div-->
        <!-- /.row -->

        <!-- Footer -->
        <? include("footer.php") ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <!--script src="js/jquery.js"></script-->

    <!-- Bootstrap Core JavaScript -->
    <!--script src="js/bootstrap.min.js"></script-->
</body>
<script src="./js/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="./js/bootstrapValidator.js"></script> 
<script>
$(document).ready(function() {
    $('#frmPost').bootstrapValidator();
});
</script>
</html>
