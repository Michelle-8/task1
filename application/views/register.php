<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
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
        <a class="nav-link" href="#"></a>
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

<div class="container">
	<br />
	<h3 align="center"> Register Account </h3>
	<br />
	<div class="panel panel-primary">
		<div class="panel-heading"> Registration </div>
		<div class="panel-body">
			<form method="post" action="<?php echo base_url();?> register/validation">
				<div class="form-group">
					<label>Enter Your First Name: </label>
					<input type="text" name="firstname" class="form-control" value="<?php echo set_value('firstname');?>">
					<span class="text-danger"><?php echo form_error(); ?></span>
				</div>
				<div class="form-group">
					<label>Enter Your Last Name: </label>
					<input type="text" name="lastname" class="form-control" value="<?php echo set_value('lastname');?>">
					<span class="text-danger"><?php echo form_error(); ?></span>
				</div>
				<div class="form-group">
					<label>Enter Username: </label>
					<input type="text" name="username" class="form-control" value="<?php echo set_value('username');?>">
					<span class="text-danger"><?php echo form_error(); ?></span>
				</div>
				<div class="form-group">
					<label>Enter Password: </label>
					<input type="password" name="password" class="form-control" value="<?php echo set_value('password');?>">
					<span class="text-danger"><?php echo form_error(); ?></span>
				</div>
				<div class="form-group">
					<input type="submit" name="register" value="Register" class="btn btn-info">
				</div>
			</form>
		</div>
	</div>
	
</div>


</body>
</html>