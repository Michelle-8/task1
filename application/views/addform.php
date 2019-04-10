<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Queen Beef Online Shop</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Add Item
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/insert">
				<div class="form-group">
					<label>Item Name:</label>
					<input type="text" class="form-control" name="item">
				</div>
				<div class="form-group">
					<label>Description:</label>
					<input type="text" class="form-control" name="description">
				</div>
				<div class="form-group">
					<label>Price:</label>
					<input type="text" class="form-control" name="price">
				</div>
				<div class="form-group">
			      <label for="exampleInputFile">File input</label>
			      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="img">
			      <small id="fileHelp" class="form-text text-muted"></small>
    			</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>