<?
	//include('./bl/validate-request.php');
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
  <link rel="stylesheet" href="./css/err.style.css">
	<script>
		function openRegisterFormAndPrepareForSubmit(rowId) {
		    document.getElementById(rowId).style.display = "table-row";
			document.getElementById("btnSignup").style.display="none";
			document.getElementById("btnSubmitFrm").value="Register";
			document.getElementById("submitFrm").action="submit-register.php"
		}
	</script>
<script src="./js/openbox.js" type="text/javascript"></script>
    <title>PikReview!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/comment-box.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!--link href="css/3-col-portfolio.css" rel="stylesheet"-->
	<link href="css/lightbox-form.css" rel="stylesheet">
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
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 id="header-text" class="page-header">Login
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row form-horizontal">
		<form id="registration-form">
          <div class="form-control-group">
            <label class="control-label" for="name">Your Name</label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="name" id="name">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="name">User Name</label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="username" id="username">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="name">Password</label>
            <div class="controls">
              <input type="password" class="input-xlarge" name="password" id="password">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="name"> Retype Password</label>
            <div class="controls">
              <input type="password" class="input-xlarge" name="confirm_password" id="confirm_password">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="email">Email Address</label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="email" id="email">
            </div>
          </div>
          <div class="form-control-group">
            <label class="control-label" for="message">Your Address</label>
            <div class="controls">
              <textarea class="input-xlarge" name="address" id="address" rows="3"></textarea>
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="message"> Please agree to our policy</label>
            <div class="controls">
             <input id="agree" class="checkbox" type="checkbox" name="agree">
            </div>
          </div>
          
          <div class="form-actions">
            <button type="submit" class="btn btn-success btn-large">Register</button>
            <button type="reset" class="btn">Cancel</button>
          </div>
  
      </form>
			</div>
        <hr>

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
<script src="./js/jquery.validate.js"></script> 
<script src="./js/validate.js"></script> 
<script>
		$(document).ready(function(){
		$('pre').addClass('prettyprint linenums');
			});
		</script> 

</html>
