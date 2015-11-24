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
        <form id="attributeForm" method="post" class="form-horizontal"
            data-bv-message="This value is not valid"
            data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
            data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
            data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
        <div class="form-group">
        <label class="col-lg-3 control-label">Full name</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" name="firstName" placeholder="First name"
                data-bv-notempty="true"
                data-bv-notempty-message="The first name is required and cannot be empty" />
        </div>
        <div class="col-lg-4">
            <input type="text" class="form-control" name="lastName" placeholder="Last name"
                data-bv-notempty="true"
                data-bv-notempty-message="The last name is required and cannot be empty" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label">Username</label>
        <div class="col-lg-5">
            <input type="text" class="form-control" name="username"
                data-bv-message="The username is not valid"

                data-bv-notempty="true"
                data-bv-notempty-message="The username is required and cannot be empty"

                data-bv-regexp="true"
                data-bv-regexp-regexp="[a-zA-Z0-9_\.]+"
                data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"

                data-bv-stringlength="true"
                data-bv-stringlength-min="6"
                data-bv-stringlength-max="30"
                data-bv-stringlength-message="The username must be more than 6 and less than 30 characters long"

                data-bv-different="true"
                data-bv-different-field="password"
                data-bv-different-message="The username and password cannot be the same as each other" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label">Email address</label>
        <div class="col-lg-5">
            <input class="form-control" name="email" type="email"
                data-bv-emailaddress="true"
                data-bv-emailaddress-message="The input is not a valid email address" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label">Password</label>
        <div class="col-lg-5">
            <input type="password" class="form-control" name="password"
                data-bv-notempty="true"
                data-bv-notempty-message="The password is required and cannot be empty"

                data-bv-identical="true"
                data-bv-identical-field="confirmPassword"
                data-bv-identical-message="The password and its confirm are not the same"

                data-bv-different="true"
                data-bv-different-field="username"
                data-bv-different-message="The password cannot be the same as username" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label">Retype password</label>
        <div class="col-lg-5">
            <input type="password" class="form-control" name="confirmPassword"
                data-bv-notempty="true"
                data-bv-notempty-message="The confirm password is required and cannot be empty"

                data-bv-identical="true"
                data-bv-identical-field="password"
                data-bv-identical-message="The password and its confirm are not the same"

                data-bv-different="true"
                data-bv-different-field="username"
                data-bv-different-message="The password cannot be the same as username" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label">Languages</label>
        <div class="col-lg-5">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="english"
                        data-bv-message="Please specify at least one language you can speak"
                        data-bv-notempty="true" /> English
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="french" /> French
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="german" /> German
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="russian" /> Russian
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="other" /> Other
                </label>
            </div>
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
<script src="./js/bootstrapValidator.js"></script> 

<script>
$(document).ready(function() {
    $('#attributeForm').bootstrapValidator();
});
</script>

</html>
