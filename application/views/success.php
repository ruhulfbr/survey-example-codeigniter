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
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>City</th>
						<th>Phone</th>
						<th>age</th>
						<th>gender</th>
						<th>nation</th>
						<th>pesha</th>
					</tr>
					
				</thead>
				<tbody>
					<?php foreach ($lists as $list){ ?>
					<tr>
						<td><?php echo $list->name ?></td>
						<td><?php echo $list->email ?></td>
						<td><?php echo $list->city ?></td>
						<td><?php echo $list->phone ?></td>
						<td><?php echo $list->age ?></td>
						<td><?php echo $list->gender ?></td>
						<td><?php echo $list->nation ?></td>
						<td><?php echo $list->pesha ?></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>