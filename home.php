<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register for Services</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="js/bootstrap.min.js"></script>
		<style type="text/css">
			body{
				background-image: url(images/img.jpg);
			}
			#form{
			/*	background-color: #0000FF; */
				min-height: 700px;
				width: 600px;
				padding-top: 5px;
				padding-right: 20px;
				padding-left: 20px;
				padding-bottom: 20px;
			}

			.registration{
				font-size:55px;
				font-family: Agency FB;
				font-weight: 700l;
				border-bottom-style: ridge;

			}
			.text{
				height: 23px;
				font-family: Agency FB;
			}
			label{
				font-size: 25px;
				width: 240px;
				display: inline-block;
				text-align: left;
				padding: 5px 10px 10px 10px 10px;
				font-family: Agency FB;
			}
		</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="form">
				<center><b class="registration">Register Your Service Details</b>
				</center>
				<form>
					<div class="form-group">
						<label> Service Name :</label>
						<input type="text" name="name" class="form-control text" placeholder="Enter Service">
					</div>

					<div class="form-group">
						<label> Address :</label>
						<input type="address" name="Address" class="form-control text" placeholder="Enter Address">
					</div>

					<div class="form-group">
						<label> E-Mail :</label>
						<input type="email" name="email" class="form-control text" placeholder="Enter E-Mail">
					</div>


					<div class="form-group">
						<label> Mobile No. :</label>
						<input type="text" name="mobile" class="form-control text" placeholder="Enter mobile number">
					</div>

					<div class="form-group">
						<label> Active Since :</label>
						<input type="date" name="date" class="form-controld text" placeholder="Enter Date">
					</div>

					<div class="form-group">
						<label>Select Category :</label>
						<select class="form-control text">
						<option value="No choice"> No choice</option>
						<option value="Food"> Food & Restraunt</option>
						<option value="books"> Books & Stationary</option>
						<option value="education"> Educational</option>
						<option value="sports"> Sports</option>
						<option value="service"> Service Center</option>
						<option value="shop"> Shopping</option>
						<option value="others"> Others</option>


						</select>
					</div>
						<button type="submit">Submit</button>

				</form>
			</div>
		</div>
	</div>

</body>
</html>