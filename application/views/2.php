<!DOCTYPE html>
<html>
<head>
	<title>Survey</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		.layout{
			border:1px solid silver;
			height: 500px;
			width: 360px;
			margin: 0 auto;
		}
	</style>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 layout">
				<h3>Personal Survay Two</h3>
				<form action="<?php echo base_url('welcome/two'); ?>" method="post">
					<label class="label-control">age </label>: <input class="form-control" type="text" name="age">
					<label class="label-control">city :</label> <input class="form-control" type="text" name="city"><br>
					<input type="hidden" name="next" value="three">
					<button type="submit" class="btn btn-success">Next</button>
				</form>

				
				
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>