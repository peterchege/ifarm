<?php include 'server.php'; ?>
<!doctype html>
<html><head>
<meta charset="utf-8">
<title>LOGIN</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/e-coins.png" rel="icon">
  <link href="img/e-coins.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
  <!-- Main Stylesheet File -->
  <link href="css/login.css" rel="stylesheet">
  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<!-- Morris graph charts -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<link href="lib/morris.js/morris.js" >

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#"><b>G-FARM</b></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact Us</a>
				</li>
		
			</ul>
			<form method="POST" action="index.php">
				<!--display validation errors here-->
                                    <?php include('errors.php'); ?>
				<div class="form-row align-items-center">
					<p>SIGN IN:</p>
					<div class="col-auto">
						<label class="sr-only" for="inlineFormInput">Username</label>
						<input name="firstname" type="text" class="form-control mb-2 mb-sm-0" id="inlineFormInput" placeholder="username">
					</div>
					<div class="col-auto">
						<label class="sr-only" for="inlineFormInputGroup">password</label>
						<div class="input-group mb-2 mb-sm-0">
							<div class="input-group-addon"></div>
							<input name="password" type="password" class="form-control" id="inlineFormInputGroup" placeholder="password">
						</div>
					</div>
					<div class="col-auto">
						<div class="form-check mb-2 mb-sm-0">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox"> Remember me
							</label>
						</div>
					</div>
					<div class="col-auto">
						<button name="login" type="submit" class="btn btn-success btn-log">LOGIN</button>
					</div>
				</div>
			</form>
		</div>
	</nav>

	<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="box-cow">
						<img class="img-responsive img-cow" src="img/cow2.jpg">
						<p>A farm is an area of land that is devoted primarily to 
						agricultural processes with the primary objective of producing 
						food and other crops; it is the basic facility in food production.
					 The name is used for specialised units such as arable farms, vegetable farms, fruit farms, dairy, pig and poultry farms, 
					 and land used for the production of natural fibres, biofuel and other commodities.</p>
					</div>
				</div>

				<div class="col-md-6 col-sm-12">
					<h1 class="text-center">CREATE ACCOUNT</h1>
					<form class="form-two" method="POST" action="index.php">
									<!--display validation errors here-->
                                    <?php include('errors.php'); ?>
						<div class="form-group row">
							<label for="inputText" class="col-sm-2 col-form-label">Firstname:</label>
							<div class="col-sm-10">
								<input type="text" name="firstname" class="form-control" id="inputEmail3" placeholder="Alfred">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputText"  class="col-sm-2 col-form-label">Lastname:</label>
							<div class="col-sm-10">
								<input type="text" name="lastname" class="form-control" id="inputEmail3" placeholder="Mwangi">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputText" class="col-sm-2 col-form-label">Phone No:</label>
							<div class="col-sm-10">
								<input type="text" name="phone" class="form-control" id="inputEmail3" placeholder="0722 *** 029">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
							<div class="col-sm-10">
								<input type="text" name="email" class="form-control" id="inputEmail3" placeholder="almwangi@gmail.com">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Password:</label>
							<div class="col-sm-10">
								<input type="password" name="password_1" class="form-control" id="inputPassword3" placeholder="Password">
							</div>
						</div>	

						<div class="form-group row">
							<label for="inputPassword4" class="col-sm-2 col-form-label">Confirm Password:</label>
							<div class="col-sm-10">
								<input type="password" name="password_2" class="form-control" id="inputPassword4" placeholder="Confirm Password">
							</div>
						</div>	
						
					
						<div class="form-group row">
							<div class="col-sm-2">Checkbox</div>
							<div class="col-sm-10">
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox"> I have agreed to the <b>Term & Condition</b>
									</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-10">
								<button name="register" type="submit" class="btn btn-success btn-reg">Register</button>
							</div>
						</div>
					</form>
				</div>
			</div>
	</div>



<!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
</body>
</html>
