<?
	//include('./bl/validate-request.php');
	require("./config.php");
	//include("./bl/validaterequest.php");	
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
<script language="javascript">
	function submitform(elem) {
		var isAnySelected = false;
		for(var i = 0; i < elem.length; i++) {
			if (elem[i].type == "checkbox" && elem[i].checked == true) {
				isAnySelected = true;
			}
		}
		if (isAnySelected == false) {
			alert("Please select any news to delete");
		} else {
			var surity = confirm("Are you sure you want to delete the selected photos ?");
			if (surity == 1) {
				document.forms["frmMain"].submit();
			}
		}
	}
</script>
<script src="./js/lightbox-form.js" type="text/javascript"></script>
<script src="./js/frm.js" type="text/javascript"></script>
    <title>Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
	<link href="css/lightbox-form.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen">
<link href="css/comment-box.css" rel="stylesheet">
<script type="text/javascript">

	if (typeof(jQuery) != 'undefined') {

     	jQuery.noConflict();

	}

</script>
</head>

<body>

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Post a review
                </h1>
            </div>
        </div>
        <!-- /.row -->
<!--login modal-->
<!-- Large modal -->
<!-- Large modal -->
<button type="button" class="btn btn-primary showDialog" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="123">Large modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	<div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      <label><a class="btn btn-primary" href="#">Buy Now</a></label>
	    <label style="right: 0px;left:90%"><button class="btn btn-primary" type="button">Hits <span id="spanHits" class="badge">4</span></button></label>
    </div>
	<div class="modal-body">
    <div class="row">
	
    <div class="col-md-6">
	  <div><span></span></div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol id="totalSlide" class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div id="imageGallery" class="carousel-inner" role="listbox">
          <div class="item active"><img src="images/1.jpg" width="460" height="200"></div>
          <div class="item"><img src="images/2.png" width="460" height="200"></div>
          <div class="item"><img src="images/3.jpg" width="460" height="345"></div>
          <div class="item"><img src="images/2.png" width="460" height="345"></div>
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
      <h4>More by Ashish</h4>
	</div>
	<div class="col-md-6">
	<div class="detailBox">
      <div class="titleBox">
        <form id="idCommentFrm" class="form-inline" role="form" action="./bl/manage-review.php?f=sc" method="post">
            <div class="form-group">
                <input id="user_comment" class="form-control" type="text" name="comment" placeholder="Your comments" />
				<input id="txtReviewId" type="hidden" name="review_id" />
            </div>
            <div class="form-group">
				<input type="button" value="Add" class="btn btn-default" onclick="addNewComment()"  />
            </div>	
        </form>
      </div>
        <!--div class="commentBox">
          <p class="taskDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div-->
      <div class="actionBox">
        <ul id="commentUl" class="commentList">
          <li>
            <div class="commenterImage"><img src="http://lorempixel.com/50/50/people/6" /></div>
            <div class="commentText">
              <p class="">Hello this is a test comment.</p>
			  <span class="date sub-text">on March 5th, 2014</span>
            </div>
          </li>
		  <li>
            <div class="commenterImage"><img src="http://lorempixel.com/50/50/people/6" /></div>
            <div class="commentText">
              <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
            </div>
          </li>
		  <li>
            <div class="commenterImage">
              <img src="http://lorempixel.com/50/50/people/6" />
            </div>
            <div class="commentText">
              <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
            </div>
          </li>
		  <li>
            <div class="commenterImage">
              <img src="http://lorempixel.com/50/50/people/6" />
            </div>
            <div class="commentText">
              <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
            </div>
          </li>
          <li>
			<div class="commenterImage">
			  <img src="http://lorempixel.com/50/50/people/7" />
			</div>
			<div class="commentText">
			  <p class="">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span class="date sub-text">on March 5th, 2014</span>
			</div>
		</li>
		<li>
			<div class="commenterImage">
			  <img src="http://lorempixel.com/50/50/people/9" />
			</div>
			<div class="commentText">
			  <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
			</div>
		</li>
		<li>
            <div class="commenterImage"><img src="http://lorempixel.com/50/50/people/6" /></div>
            <div class="commentText">
              <p class="">Hello this is a test comment.</p>
			  <span class="date sub-text">on March 5th, 2014</span>
            </div>
          </li>
		  <li>
            <div class="commenterImage"><img src="http://lorempixel.com/50/50/people/6" /></div>
            <div class="commentText">
              <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
            </div>
          </li>
		  <li>
            <div class="commenterImage">
              <img src="http://lorempixel.com/50/50/people/6" />
            </div>
            <div class="commentText">
              <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
            </div>
          </li>
		  <li>
            <div class="commenterImage">
              <img src="http://lorempixel.com/50/50/people/6" />
            </div>
            <div class="commentText">
              <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
            </div>
          </li>
          <li>
			<div class="commenterImage">
			  <img src="http://lorempixel.com/50/50/people/7" />
			</div>
			<div class="commentText">
			  <p class="">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span class="date sub-text">on March 5th, 2014</span>
			</div>
		</li>
		<li>
			<div class="commenterImage">
			  <img src="http://lorempixel.com/50/50/people/9" />
			</div>
			<div class="commentText">
			  <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
			</div>
		</li>
        </ul>
      </div>
	</div>
	</div>
  </div>
  </div>
</div>
</div>
</div>

<!-- Small modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      <label><a class="btn btn-primary" href="#">Buy Now</a></label>
	    <label style="right: 0px;left:90%"><button class="btn btn-primary" type="button">Hits <span id="spanHits" class="badge">4</span></button></label>
    </div>
	<div class="modal-body">
    <div class="row">
	
    <div class="col-md-6">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol id="totalSlide" class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div id="imageGallery" class="carousel-inner" role="listbox">
          <div class="item active"><img src="images/1.jpg" width="460" height="200"></div>
          <div class="item"><img src="images/2.png" width="460" height="200"></div>
          <div class="item"><img src="images/3.jpg" width="460" height="345"></div>
          <div class="item"><img src="images/2.png" width="460" height="345"></div>
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
      <h4>More by Ashish</h4>
	</div>
	<div class="col-md-6">
	<div class="detailBox">
      <div class="titleBox">
        <form id="idCommentFrm" class="form-inline" role="form" action="./bl/manage-review.php?f=sc" method="post">
            <div class="form-group">
                <input id="user_comment" class="form-control" type="text" name="comment" placeholder="Your comments" />
				<input id="txtReviewId" type="hidden" name="review_id" />
            </div>
            <div class="form-group">
				<input type="button" value="Add" class="btn btn-default" onclick="addNewComment()"  />
            </div>	
        </form>
      </div>
        <!--div class="commentBox">
          <p class="taskDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div-->
      <div class="actionBox">
        <ul id="commentUl" class="commentList">
          <li>
            <div class="commenterImage"><img src="http://lorempixel.com/50/50/people/6" /></div>
            <div class="commentText">
              <p class="">Hello this is a test comment.</p>
			  <span class="date sub-text">on March 5th, 2014</span>
            </div>
          </li>
		  <li>
            <div class="commenterImage"><img src="http://lorempixel.com/50/50/people/6" /></div>
            <div class="commentText">
              <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
            </div>
          </li>
		  <li>
            <div class="commenterImage">
              <img src="http://lorempixel.com/50/50/people/6" />
            </div>
            <div class="commentText">
              <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
            </div>
          </li>
		  <li>
            <div class="commenterImage">
              <img src="http://lorempixel.com/50/50/people/6" />
            </div>
            <div class="commentText">
              <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
            </div>
          </li>
          <li>
			<div class="commenterImage">
			  <img src="http://lorempixel.com/50/50/people/7" />
			</div>
			<div class="commentText">
			  <p class="">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span class="date sub-text">on March 5th, 2014</span>
			</div>
		</li>
		<li>
			<div class="commenterImage">
			  <img src="http://lorempixel.com/50/50/people/9" />
			</div>
			<div class="commentText">
			  <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
			</div>
		</li>
        </ul>
      </div>
	</div>
	</div>
  </div>
  </div>
    </div>
  </div>
</div>
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
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script>
	    $(document).ready(function(){
        $(".showDialog").click(function(){ // Click to only happen on announce links
        $("#cafeId").val($(this).data('id'));
        $('#createFormId').modal('show');
   });
});
	</script>
</body>

</html>
