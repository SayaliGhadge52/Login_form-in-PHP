<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
 <div class="container">
 	 <div class="row">
 	 	<div class="col-lg-6">
 	 		<h2>Login Form</h2>

 	 		<form action="validation.php" method="post">
 	 			
 	 		<div class="form-group">
 	 			<label>Username</label>
 	 			<input type="text" name="user" class="form-control">
 	 		</div>
 	 	   <br>
            <div class="form-group">
 	 			<label>Password</label>
 	 			<input type="Password" name="password" class="form-control">
 	 		</div><br>
 	 		  <button type="submit" class="btn btn-primary">Login</button>
 	 		</form>
   </div>
        <div class="col-lg-6">
 	 	
 	 		<h2>Sign In</h2>

 	 		<form action="registration.php" method="post">
 	 			
 	 		<div class="form-group">
 	 			<label>Username</label>
 	 			<input type="text" name="user" class="form-control">
 	 		</div>
 	 	   <br>
            <div class="form-group">
 	 			<label>Password</label>
 	 			<input type="Password" name="password" class="form-control">
 	 		</div><br>
 	 		  <button type="submit" class="btn btn-primary">Signin</button>
 	 		</form>

 	 	</div>
 	 </div>
 </div>
</body>
</html>