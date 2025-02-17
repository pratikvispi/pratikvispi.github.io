<?php 
	require 'files/connection.php';
	session_start();
	error_reporting(E_ERROR | E_PARSE);

	if(strlen($_SESSION['custid'])==0)
	{
	header('location:user-login.php');
	}
	else {		
?>
<!DOCTYPE html> 
<html>
<head>
	<title>FoodShala</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="index.css">
	
</head>
<body style="color:white;font-weight:900">

<header class="bg-image">
	<nav class="navbar navbar-inverse navbar-fixed-top" style="font-size: 16px;">
	  <div class="container">
	    <a class="navbar-brand active" href="welcome-user.php" style="font-size: 18px;">FoodShala</a>
        <a href="user-cart.php" class="navbar-brand active" >Basket</a>
        <a href="myorders.php"  class="navbar-brand active">My Orders</a>

        <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	      	<form method="get" action="files/logout.php"> 
		        <li><button name="logout" type="submit" class="btn btn-danger" style="margin-top: 8px;">Logout</button><li>
		    </form>
	      </ul>
	    </div>
	  </div>
	</nav>
	<br><br><br>
	<div class="container">
			<h1  style="font-weight:900;font-size:50px;color:white;text-decoration: underline;">
			Food-Shala
		</h1>
		</div>

	</header>
	
	<div class="container">
	   	<div class="content col-md-8 col-md-offset-2"><br>
	        <form action="files/order-save.php" method="post" enctype="multipart/form-data">
	        	<input type="hidden" name="total_price" value="<?php echo $_POST['cart_price']; ?>">
	        	<input type="hidden" name="res_id" value="<?php echo $_POST['res_id']; ?>">
	        	<div class="form-group">
					<label for="sel1">Payment Type<b>*</b></label>
					<select class="form-control" name="payment_type" id="sel1">
					<option>Select payment type</option>
					<option>Net Banking</option>
					<option>Paytm</option>
					<option>Phonepe</option>
					<option>Google pay</option>
					<option>Cash on Delivery</option>
					</select>
				</div>
				<div class="form-group">
				    <label for="item_desc">Address</label>
				    <input type="text" class="form-control" id="address" name="address" required/>
				</div>
				<div class="form-group">
				    <label for="item_price">Mobile Number</label>
				    <input type="text" class="form-control" id="mobile_number" name="mobile_number" required/>
				</div>
				<div class="form-group">
				    <button name="orderBtn" class="btn btn-success pull-right">SUBMIT <i class="fas fa-arrow-right"></i></button>
				</div>
			</form>
	    </div>
	    		    
	</div>
	</div>

</body>
</html>
<?php } ?>