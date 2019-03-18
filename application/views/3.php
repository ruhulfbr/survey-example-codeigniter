<!DOCTYPE html>
<html>
<head>
	<title>Survey</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
				<form action="<?php echo base_url('welcome/three'); ?>" method="post" id="form1">
					<label class="label-control">phone :</label> <input class="form-control" type="text" name="phone">
					<label class="label-control">Nationnationality :</label> <input class="form-control" type="text" name="nation"><br>
					<input type="hidden" name="next" value="four">
					<button type="submit" class="btn btn-success">Next</button>
				</form>

				
				
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

<script type="text/javascript">
	$("#form1").submit(function(event){
		var data = $(this).serializeArray();
		var json = JSON.parse(localStorage.getItem('formData'));
		$.each(data,function(){
			json[this.name] = this.value || '';
		});
		localStorage.setItem('formData', JSON.stringify(json));
	});
</script>
</body>
</html>