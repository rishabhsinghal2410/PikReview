<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb"><head>
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
  </style>
          <style type="text/css">
            *, *:before, *:after {box-sizing:  border-box !important;}


.prow {
 -moz-column-width: 18em;
 -webkit-column-width: 18em;
 -moz-column-gap: .5em;
 -webkit-column-gap: .5em; 
  
}

.panel {
 display: inline-block;
 margin:  .5em;
 padding:  0; 
 width:98%;
}

.link {
    cursor:pointer;
}
        </style>
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
			<a href="./post-review.php"><span class="navbar-brand">PikReview!</span></a>
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
								<li>
					<a href="./logout.php">Logout</a>
				</li>
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
    <!-- Page Content -->
    <div class="container main-container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="margin-top:10px;">What you see, Is What you get!  <br>
                    <small style="font-size:16px;">Real reviews...Real images...Curated by humans.</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
		<div class="prow" id="feed">
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(32);"><img class="img-responsive" src="./images/14468425940_Koala.jpg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://twopik.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">3</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Uploaded  <a href="./search.php?tag=two">#two</a>  <a href="./search.php?tag=piks">#piks</a></p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(31);"><img class="img-responsive" src="./images/14467529900_image.png"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://google.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">14</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Hash  <a href="./search.php?tag=hash">#hash</a>  <a href="./search.php?tag=tag">#tag</a>  <a href="./search.php?tag=ios">#ios</a></p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(30);"><img class="img-responsive" src="./images/1446752494_1446752340990-122630590.jpg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://amazon.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">9</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Test  <a href="./search.php?tag=tag">#tag</a></p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(29);"><img class="img-responsive" src="./images/1446485766_10271308_945523298839919_8015032883705423803_o.jpg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://morganstanley.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">7</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>This is my test description from bootstrap upload form with  <a href="./search.php?tag=Multiple">#Multiple</a>  <a href="./search.php?tag=Hashtag">#Hashtag</a></p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(28);"><img class="img-responsive" src="./images/1446485732_image001.png"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://www.facebook.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">3</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>This is my test description from bootstrap upload form.</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(26);"><img class="img-responsive" src="./images/1446394897_image.jpeg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="Www.google.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">6</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p> This is test message this is really good well  <a href="./search.php?tag=TagHasH">#TagHasH</a> what is this why did I not know about this dictation is very nice but I would love this and send</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(25);"><img class="img-responsive" src="./images/1446379552_image.jpeg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="Test.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">13</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p> <a href="./search.php?tag=tag">#tag</a>  <a href="./search.php?tag=test">#test</a>  <a href="./search.php?tag=new">#new</a> ios</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(24);"><img class="img-responsive" src="./images/1446378257_image.jpeg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="Test" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">3</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p> <a href="./search.php?tag=test">#test</a>  <a href="./search.php?tag=tag">#tag</a>  <a href="./search.php?tag=hash">#hash</a>  <a href="./search.php?tag=hashtag">#hashtag</a></p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(23);"><img class="img-responsive" src="./images/1446378169_image.jpeg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="Htpp://google.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">3</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>This is  <a href="./search.php?tag=hashed">#hashed</a> comment  <a href="./search.php?tag=test">#test</a>  <a href="./search.php?tag=tag">#tag</a>  <a href="./search.php?tag=hashtag">#hashtag</a>  <a href="./search.php?tag=new">#new</a></p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(22);"><img class="img-responsive" src="./images/1446376822_image.jpeg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="Test" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">3</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>This is.  <a href="./search.php?tag=tag">#tag</a>  <a href="./search.php?tag=tags">#tags</a>  <a href="./search.php?tag=qee">#qee</a>  <a href="./search.php?tag=ftag">#ftag</a></p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(21);"><img class="img-responsive" src="./images/1446376661_Chrysanthemum.jpg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://www.facebook.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">1</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>This is first description after adding  <a href="./search.php?tag=hashtag">#hashtag</a> feature.
         Adding another  <a href="./search.php?tag=anotherhashtag">#anotherhashtag</a> to test if  <a href="./search.php?tag=multiple">#multiple</a> hastags works.
      </p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(20);"><img class="img-responsive" src="./images/1446376631_Chrysanthemum.jpg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://www.facebook.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">1</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>This is first description after adding  <a href="./search.php?tag=hashtag">#hashtag</a> feature.
         Adding another  <a href="./search.php?tag=anotherhashtag">#anotherhashtag</a> to test if  <a href="./search.php?tag=multiple">#multiple</a> hastags works.
      </p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(19);"><img class="img-responsive" src="./images/1446376598_Chrysanthemum.jpg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://www.facebook.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">1</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>This is first description after adding  <a href="./search.php?tag=hashtag">#hashtag</a> feature.
         Adding another  <a href="./search.php?tag=anotherhashtag">#anotherhashtag</a> to test if  <a href="./search.php?tag=multiple">#multiple</a> hastags works.
      </p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(18);"><img class="img-responsive" src="./images/1446375427_Jellyfish.jpg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://www.facebook.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">1</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>asd asd</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(17);"><img class="img-responsive" src="./images/1446374808_Chrysanthemum.jpg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://www.facebook.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">1</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p></p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(16);"><img class="img-responsive" src="./images/1446321620_image.jpeg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="Goog.lu" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">11</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Your account was logged into from a new browser or device. Review the login: https://fb.me/1U2ptI57fR3nvcS </p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(15);"><img class="img-responsive" src="./images/1446321390_image.jpeg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="Http://google.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">8</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>THis ia to test full max text in the desciption field of a pik review.
         This has been directly entered in DB and not taken from GUI.
      </p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(14);"><img class="img-responsive" src="./images/1446319385_IMG_20151027_121518.jpg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="Google.ogle.c" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">8</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Review Content 11</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(13);"><img class="img-responsive" src="./images/1446319136_image.jpeg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="S.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">23</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Review Content 10</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(12);"><img class="img-responsive" src="./images/1446316557_004.JPG"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://www.test.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">7</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Review Content 9</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(11);"><img class="img-responsive" src="./images/1446316489_002.JPG"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://www.abhimanyusingh.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">2</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Review Content 8</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(10);"><img class="img-responsive" src="./images/1446316371_image.jpeg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="A.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">3</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Review Content 7</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(9);"><img class="img-responsive" src="./images/1446316309_image.png"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="A.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">5</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Review Content 6</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(8);"><img class="img-responsive" src="./images/1446316216_image.jpeg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="Bozo.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">6</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Review Content 5</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(7);"><img class="img-responsive" src="./images/1446305467_144630534930160943675.jpg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="amazon.cim" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">24</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Review Content 4</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(6);"><img class="img-responsive" src="./images/1446305385_Koala.jpg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://www.mumbaicentral.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">7</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Review Content 3</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(5);"><img class="img-responsive" src="./images/1446303885_image.jpeg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="Amazon" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">33</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Review Content 2</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(4);"><img class="img-responsive" src="./images/1446303319_Chrysanthemum.jpg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://morganstanley.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">18</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Review Content 1</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(1);"><img class="img-responsive" src="./images/1.jpg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://www.google.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">69</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Test review content</p>
   </div>
   <div class="panel panel-default">
      <a class="showDialog link" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="%DATA_IID%" onclick="renderData(1);"><img class="img-responsive" src="./images/1.jpg"></a><br>
      <table width="100%">
         <tbody>
            <tr>
               <td width="50%" align="right"><label><a class="btn btn-primary" href="http://www.google.com" target="_blank">Buy Now</a></label></td>
               <td></td>
               <td width="50%">&nbsp;<label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span class="badge">69</span></button></label></td>
            </tr>
         </tbody>
      </table>
      <p>Test review content</p>
   </div>
</div>
		<div class="row">
		    <div class="col-md-5"></div>
			<div class="col-md-4 portfolio-item item" id="loadStatus"><h4><span class="label label-default">No more items to show!<span></span></span></h4></div>
			<div class="col-md-3"></div>
		</div>
        <hr>
        <footer>
	<div class="row">
		<div class="col-lg-12">
			<p>Copyright © PikReview.com 2015</p>
		</div>
	</div>
	<!-- /.row -->
</footer>
    </div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	<div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
      <label><a id="aBuyNow" class="btn btn-primary" href="#">Buy Now</a></label>
	    <label style="right: 0px;left:90%"><button class="btn" type="button" disabled="">Views <span id="spanHits" class="badge">4</span></button></label>
    </div>
	<div class="modal-body">
    <div class="row">
	
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
                <textarea id="user_comment" class="form-control" type="text" name="comment" placeholder="Your comments" rows="2" cols="30"></textarea>
				<input id="txtReviewId" type="hidden" name="review_id">
            </div>
            <div class="form-group">
				<input type="button" value="Add" class="btn btn-primary" onclick="addNewComment()">
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
  </div>
</div>
</div>
</div>


  <script src="./js/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
/*$(window).scroll(function () {
	if ($(window).height() + $(window).scrollTop() == $(document).height()) {
		console.log("Event Fired");
		makeFeedRequest();
	}
});
makeFeedRequest();*/
</script>

</body></html>