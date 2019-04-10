<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title> 	
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/minty/bootstrap.css">
</head>
<body>
<div class="container">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'users/login';?>">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br/>
	<h1 class="page-header text-center">Queen Beef Online Shop</h1>
	<div class="row">
		<div class="col-sm-12">
			<a href="<?php echo base_url(); ?>index.php/users/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New Item</a><br><br>
			<table class="table table-hover">
 				 <thead>
   					<tr class="table-primary">
						<th class="text-center">ID</th>
						<th class="text-center">Item Image</th>
						<th class="text-center">Item Name</th>
					    <th class="text-center">Description</th>
					    <th class="text-center">Price</th>
					    <th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($users as $user){
						?>
						<tr>
							<td class="text-center"><?php echo $user->id; ?></td>
							<td class="text-center"><img height="100" src="<?php echo base_url('assets/img/product/').$user->img; ?>"></td>
							<td class="text-center"><?php echo $user->item; ?></td>
							<td class="text-center"><?php echo $user->description; ?></td>
							<td class="text-center"><?php echo $user->price; ?></td>
							<td class="text-center"><a href="<?php echo base_url(); ?>index.php/users/edit/<?php echo $user->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>index.php/users/delete/<?php echo $user->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>

			<div>
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
		</div>
		</div>
		<div>
		<br/>
  <ul class="pagination pagination-sm" style="padding-left: 900px" >
    <li class="page-item disabled">
      <a class="page-link" href="#">&laquo;</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">&raquo;</a>
    </li>
  </ul>
</div>
	</div>
</div>
</body>
</html>