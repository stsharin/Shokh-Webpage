<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="CSS/cn.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	  
	  
</head>
<body>
<!------------------------- Navbar ---------------------------------------->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <a class="navbar-brand" href="#">Shokh</a>
	    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="all.php">All Products</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="sold.php">Soldout Products</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="offers.php">Offers</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="contact.php">Contact</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="about.php">About</a>
	      </li>
	      
	    </ul>
	  </div>

	</nav>

<!------------------------------------ Form ------------------------------>

	<form action="userinfo.php" method="post">
		<h1 class="text-center">Cotact Us</h1>
<!----------------------------- Name -------------------------------------------->
				<div class="form-group was-validated">

					<label for="user">Your name</label>
					<input placeholder="Your Name" type="text" name="user" autocomplete="off" class="form-control" id="user">
					<div class="valid-feedback">Valid.</div>
		    		<div class="invalid-feedback">Please fill out this field.</div>
				</div>
<!----------------------------- Email -------------------------------------------->
				<div class="form-group was-validated">
					<input placeholder="Email" type="email" name="email" autocomplete="off" class="form-control">
					<div class="valid-feedback">Valid.</div>
		    		<div class="invalid-feedback">Please fill out this field.</div>
				</div>
<!----------------------------- Contact -------------------------------------------->
				<div class="form-group was-validated">
					
					<input placeholder="Contact No" type="number" name="contact" autocomplete="off" class="form-control">
					<div class="valid-feedback">Valid.</div>
		    		<div class="invalid-feedback">Please fill out this field.</div>
				</div>
<!----------------------------- Product id -------------------------------------------->
				<div class="form-group was-validated">
				
					<input placeholder="Product ID" type="text" name="pd" autocomplete="off" class="form-control" id="pd">
					<div class="valid-feedback">Valid.</div>
		    		<div class="invalid-feedback">Please fill out this field.</div>
				</div>
<!----------------------------- Message -------------------------------------------->
				<div class="form-group was-validated">
					<textarea placeholder="Message" class="form-control" name="msg" autocomplete="off" id="msg"></textarea>
				</div>
<!----------------------------- Submit btn -------------------------------------------->
				<button type="submit" class="btn btn-success" id="submit">Submit</button>
	</form>

	<div class="text-center">
		<h3>Follow us on</h3>
		<h4><a href="https://www.facebook.com/shokh.deshiponno/">Facebook</a>
			<!-- <a href="">Instagram</a> -->
			<!-- <a href="">YouTube</a> -->
		</h4>
	</div>

	<footer>
		<p class="p-3 bg-dark text-white text-center" id="mainFooter">
		Copyright &copy; 2020, shokh.deshiponno</p>
	</footer>

</body>
</html>