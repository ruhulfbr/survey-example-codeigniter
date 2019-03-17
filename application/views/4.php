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
				<h3>Personal Survay Four</h3>
				<form action="<?php echo base_url('welcome/submit'); ?>" method="post">
					<label class="label-control">gender :</label> <input class="form-control" type="text" name="gender">
					<label class="label-control">Pesha :</label> <input class="form-control" type="text" name="pesha"><br>
					<input type="hidden" name="next" value="submit">
					<button type="submit" class="btn btn-success">Submit</button>
				</form>		
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>