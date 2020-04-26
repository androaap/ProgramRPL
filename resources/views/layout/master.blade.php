<!DOCTYPE html>
<html lang="en">
	<head>
    <link rel="icon" href="{{ URL::asset('/css/logo.jpg') }}" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">
		<meta charset="utf-8">
		<title>iBox Store</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="shortcut icon" href="./startup-ui-kit/images/logo.png">
		<link rel="stylesheet" href="./startup-ui-kit/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="./startup-ui-kit/css/font-awesome.min.css">
		<link rel="stylesheet" href="./startup-ui-kit/css/style.css">
		<link href="./startup-ui-kit/https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	</head>
	<body>
		<!-- source code navbar -->
		<section class="cover-1 text-center">
			<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
				<div class="container">
                    <h2 class="navbar-brand" href="./"></h2> 
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse pull-xs-right justify-content-end" id="navbarSupportedContent">
						<ul class="navbar-nav mt-2 mt-md-0">
							<li class="nav-item active">
								<a class="nav-link active" href="{{ url('/iphone') }}">iphone <span class="sr-only"></span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url ('/mackbook') }}">Macbook</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./">ipad</a>
							</li>
							<li class="nav-item"> 
								<a class="nav-link" href="./startup-ui-kit"></a>
							</li>
							<!--<li class="nav-item">
								<a class="btn btn-outline-white btn-outline" href="./startup-ui-kit/#">Buy Now</a>
                            </li>-->
                         <!-- Search form -->
                        <form class="form-inline ">
                             <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                             aria-label="Search">
                             
                        </form>
						</ul>
					</div>
				</div>
			</nav>
			<div class="cover-container pb-5">
				<div class="cover-inner container">
					<h1 class="jumbotron-heading">Ibox Store<em></em> <strong></strong></h1>
					<p class="lead">A collection of many Apple product, happy to surfing this page</p>
					<p>
						<a href="#" class="btn btn-outline-white btn-lg mb-2 mr-2 ml-2">Watch product</a>
						<a href="#" class="btn btn-outline-white btn-lg mb-2 ml-2 ml-2">Buy product</a>
					</p>
				</div>
			</div>
		</section>
		@yield('content')
			
		<footer class="footer-2">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center text-md-left">
				</div>
			</div>
		</footer>
		

        </footer>
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>