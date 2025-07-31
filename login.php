<?php require_once 'app/init.php'; 
if ($Ouser->is_login() != false) {
  header("location:index.php");
}
?>

<!DOCTYPE HTML>
<html lang="en-us">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/css/style.css" type='text/css' />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css" />
	    <title>Login Page</title>
	</head>

<body>

<div class="d-flex justify-content-center px-5" style="min-height: 60vh; padding-top: 100px;">
	<div class="bg-white p-4 rounded shadow w-100" style="max-width: 600px; margin: 0 auto;">
		<div class="text-center mb-5">
			<div class="authincation-content">
			
			<a class="login-logo d-block mb-4" href="">
				<img src="dist/img/log.png" alt="" height="110px" width="auto" >
			</a> 
			<div class="mb-4">
				
				</div>
					<form action="app/action/login.php" method="post">
						<?php 
								if (isset($_SESSION['login_error'])) {
									echo "<div class='alert alert-danger text-center'>".$_SESSION['login_error']."</div>";
								}
							 ?>
						<div class="form-group">	
							<label class="mb-2 tag">
							<strong class="">User Name</strong></label>
									<input type="text" name="username" placeholder="Enter your username"class="form-control  input " required />
								</div>

					
						<div class="form-group">
							<label class="mb-2 tag">
								<strong class="">Password</strong>
							</label>
							<input type="password" name="password" placeholder="Enter your password"class="form-control input " required/>
						</div>

						<div class="form-row d-flex justify-content-between mt-4 mb-2">
							<div class="form-group">
								<div class="custom-control custom-checkbox ml-1 ">
								<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
								<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
							</div>
						</div>
					</div>
					<div class="text-center">
						<button type="submit" name="admin_login" class="btn btn-primary px-4">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>			