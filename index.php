<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="asset1/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">LOGIN</h3>
            <?php if (isset($_GET['error'])) { ?>
           		<p class="error"><?php echo $_GET['error']; ?></p>
           	<?php } ?>
						<form action="login.php" class="login-form" method="post">
		      		<div class="form-group">
		      			<label>User Name</label>
                <input type="text" name="uname" placeholder="User Name" required>
		      		</div>
	            <div class="form-group d-flex">
                <label>Password      </label>
	              <input type="password" name="password" placeholder="Password" required>
	            </div>
	            <div class="form-group d-md-flex">
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="asset1/js/jquery.min.js"></script>
  <script src="asset1/js/popper.js"></script>
  <script src="asset1/js/bootstrap.min.js"></script>
  <script src="asset1/js/main.js"></script>

	</body>
</html>