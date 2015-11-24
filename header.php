
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			  <a href="#"><span class="navbar-brand">PikReview!</span></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li>
					<a href="./index.php">Feed</a>
				</li>
				<li>
					<a href="./post-review.php">Post a review</a> <!--style="cursor:pointer" onclick="openbox('New Review', 1)"-->
				</li>
				<li>
					<a href="./my-post.php">My Post</a>
				</li>
				<?
				    if (isset($_SESSION['uname'])) { ?>
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">My Account<span class="caret"></span>
					<ul class="dropdown-menu">
				  <li><a href="./logout.php">Logout</a></li>
				</ul>
					</a>
				</li>
				<? } ?>
			</ul>
			<form class="navbar-form navbar-left" role="search" action="./search.php">
        <div class="form-group">
          <input type="text" class="form-control" name="tag" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>