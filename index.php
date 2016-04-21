<!DOCTYPE html>
<html>
<head>
	<title>Javascript</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
<div class="container">
	<div class="jumbotron">
		<form name="orderform" action="index.php" method="POSt">
		<h2 class="site_heading">Ready to find a new house?</h2>
		<div class="form-group">
			<label for="name">Please Enter your name</label>
			<input type="text" id="name" name="name" value="" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="cakedonuts"># of cake Donuts</label>
			<input type="text" class="form-control" id="cakedonuts" name="cakedonuts" value="" onchange="updateOrder();" />
		</div>
		<div class="form-group">
			<label for="glazeddonuts"># of glazed Donuts</label>
			<input type="text" class="form-control" id="glazeddonuts" name="glazeddonuts" value="" onchange="updateOrder();" />
		</div>
		<div class="form-group">
			<label for="pickup">Minute's i will pickup</label>
			<input type="text" class="form-control" id="pickup" name="pickup" value="" />
		</div>	
			<div class="form-group">
			<label for="subtotal">Subtotal</label>
			<input type="text" class="form-control" id="subtotal" name="subtotal" value="" readonly="" />
		</div>
		<div class="form-group">
			<label for="tax">Tax</label>
			<input type="text" class="form-control" id="tax" name="tax" value="" readonly="" />
		</div>
		<div class="form-group">
			<label for="total">Your Total Amount</label>
			<input type="text" class="form-control" id="total" name="picktotalup" value="" readonly="" />
		</div>
		<div id="success" class="form-group">
		<input type="button" value="Place Order" class="btn btn-default center-block" onclick="placeOrder(this.form);"></input>
		</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="js/sweetalert.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>