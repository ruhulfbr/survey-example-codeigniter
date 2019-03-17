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
				<h3>Personal Survay Three</h3>
				<form action="<?php echo base_url('welcome/three'); ?>" method="post">
					<label class="label-control">phone :</label> <input class="form-control" type="text" name="phone">
					<label class="label-control">Nationnationality :</label> <input class="form-control" type="text" name="nation"><br>
					<input type="hidden" name="next" value="four">
					<button type="submit" class="btn btn-success">Next</button>
				</form>

				
				
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>