<?php
require_once "../../Models/User.php";
require_once "../../Models/EndUser.php";
require_once "../../Controllers/UserController.php";
require_once "../../Controllers/AuthController.php";
require_once "../../Controllers/Database.php";
    session_start();
if(!isset($_SESSION['user']))
{
    header("Location: login.php");
}



if (isset($_POST['submit']))
{

	$user= new EndUser;
	$authController= new AuthController;
	$userController= new UserController;
	$user->firstName=$_POST['firstname'];
	$user->userID=$_SESSION['user']->userID;
	$user->lastName=$_POST['lastname'];
	$user->email=$_POST['email'];
	$user->password=$_POST['oldpassword'];
	$newpassword=$_POST['newpassword'];
	  
	if(isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] == 0) {
		$target_dir = "../../uploads/";
		if(!is_dir($target_dir)) {
			mkdir($target_dir, 0777, true);
		}
		$target_file = $target_dir . basename($_FILES['profile_photo']['name']);
		if(move_uploaded_file($_FILES['profile_photo']['tmp_name'], $target_file)) {
			$user->profilePicture= $target_file;
		}
	}
	
	
	if($userController->updateUser($user,$newpassword))
	{
		$authController->login($user);
	}	

	header("Location: account.php");




}


?>




















<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Edit Account - Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="../assets/css/ready.css">
	<link rel="stylesheet" href="../assets/css/demo.css">
	<style>
		body {
			background-color: #f0f2f5;
			margin: 0;
			padding: 0;
			min-height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			font-family: 'Nunito', sans-serif;
		}
		.main-panel {
			width: 100%;
			padding: 40px 20px;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.content {
			width: 100%;
			max-width: 1200px;
			margin: 0 auto;
		}
		.page-title {
			color: #2c3e50;
			font-weight: 600;
			margin-bottom: 30px;
			text-align: center;
		}
		.card {
			border: none;
			border-radius: 15px;
			box-shadow: 0 0 30px rgba(0,0,0,0.1);
			margin-bottom: 30px;
			background-color: #ffffff;
			max-width: 800px;
			margin-left: auto;
			margin-right: auto;
		}
		.card-header {
			background-color: #fff;
			border-bottom: 1px solid #eee;
			padding: 25px;
			border-radius: 15px 15px 0 0;
		}
		.card-title {
			color: #2c3e50;
			font-size: 1.5rem;
			font-weight: 600;
			margin: 0;
			text-align: center;
		}
		.card-body {
			padding: 40px;
		}
		.form-group {
			margin-bottom: 25px;
		}
		.form-group label {
			color: #2c3e50;
			font-weight: 600;
			margin-bottom: 8px;
			display: block;
		}
		.form-control {
			border-radius: 8px;
			border: 1px solid #ddd;
			padding: 12px 15px;
			transition: all 0.3s ease;
			background-color: #f8f9fa;
			width: 100%;
			font-size: 14px;
		}
		.form-control:focus {
			border-color: #4CAF50;
			box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
			background-color: #fff;
			outline: none;
		}
		.form-control-file {
			padding: 10px 0;
			background-color: transparent;
		}
		.btn {
			padding: 12px 30px;
			border-radius: 8px;
			font-weight: 500;
			transition: all 0.3s ease;
			text-transform: uppercase;
			letter-spacing: 0.5px;
			font-size: 14px;
			cursor: pointer;
			border: none;
		}
		.btn-success {
			background-color: #4CAF50;
			border-color: #4CAF50;
			color: white;
		}
		.btn-success:hover {
			background-color: #45a049;
			border-color: #45a049;
			transform: translateY(-1px);
		}
		.btn-danger {
			background-color: #dc3545;
			border-color: #dc3545;
			color: white;
		}
		.btn-danger:hover {
			background-color: #c82333;
			border-color: #bd2130;
			transform: translateY(-1px);
		}
		.card-action {
			margin-top: 40px;
			display: flex;
			gap: 20px;
			justify-content: center;
		}
		.form-text {
			color: #6c757d;
			font-size: 0.875rem;
			margin-top: 8px;
		}
		@media (max-width: 768px) {
			.card-body {
				padding: 25px;
			}
			.card-action {
				flex-direction: column;
			}
			.btn {
				width: 100%;
				margin-bottom: 10px;
			}
			.main-panel {
				padding: 20px 15px;
			}
		}
	</style>
</head>
<body>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Account Settings</h4>
						<div class="row">
							<div class="col-md-8 mx-auto">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Edit Account Information</div>
									</div>
									<div class="card-body">
										<form id="editAccountForm" method="post" action="edit-profile.php" enctype="multipart/form-data">
											<div class="form-group">
												<label for="firstname">First Name</label>
												<input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $_SESSION['user']->firstName; ?>" required>
											</div>
											<div class="form-group">
												<label for="lastname">Last Name</label>
												<input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $_SESSION['user']->lastName; ?>" required>
											</div>
											<div class="form-group">
												<label for="email">Email Address</label>
												<input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['user']->email; ?>" required>
											</div>
											<div class="form-group">
												<label for="password">old Password</label>
												<input type="password" class="form-control" id="password" name="oldpassword" placeholder="Enter old password">
											</div>
											<div class="form-group">
												<label for="password">new Password</label>
												<input type="password" class="form-control" id="password" name="newpassword" placeholder="Enter new password">
												<small class="form-text text-muted">Leave blank if you don't want to change the password</small>
											</div>
											<div class="form-group">
												<label for="profile_photo">Profile Photo</label>
												<input type="file" class="form-control-file" id="profile_photo" name="profile_photo" accept="image/*">
												<small class="form-text text-muted">Upload a new profile photo </small>
											</div>
											<div class="card-action">
												<button type="submit" name="submit" class="btn btn-success">Save Changes</button>
												<button href="account.php"  class="btn btn-danger">Cancel</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</body>
</html>
