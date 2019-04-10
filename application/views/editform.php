<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CodeIgniter Simple CRUD Tutorial</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Queen Beef Online Shop</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Update Item
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<?php extract($user); ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/update/<?php echo $id; ?>">
				<div class="form-group">
					<label>Item Name:</label>
					<input type="text" class="form-control" value="<?php echo $item; ?>" name="item">
				</div>
				<div class="form-group">
					<label>Description:</label>
					<input type="text" class="form-control" value="<?php echo $description; ?>" name="description">
				</div>
				<div class="form-group">
					<label>Price:</label>
					<input type="text" class="form-control" value="<?php echo $price; ?>" name="price">
				</div>
				<div class="form-group">
			      <label for="exampleInputFile">File input</label>
			      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" value = "<?php echo $img; ?>" name="img">
			      <small id="fileHelp" class="form-text text-muted"></small>
    			</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>