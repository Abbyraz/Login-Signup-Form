<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")

	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

				mysqli_query($con, $query);

				header("Location: login.php");
				die;
		}else
		{
			echo "<p style= 'color: red; background: #ccc; width: 300px; padding: 10px;'> Please enter some valid information! </p>";
		}
	}			
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>

	<style type="text/css">

	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
		
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: grey;
		border: none;
	}

	#box{
		background-color: rgba(0, 0, 0, 0.6);
		margin: auto;
		width: 300px;
		padding: 20px;
		position: center;
	}

	.imgcontainer {
  		text-align: center;
  		margin: 24px 0 12px 0;
	}

	img.avatar {
 		width: 40%;
  		border-radius: 50%;
	}

	body{
		background-image:url(image1.jpg);
		background-size: cover;
		margin-top: 80px;	

	}

	p{
		color: white;
		font-size: 15px; 
		font-family:Verdana; 
	}
			
	</style>	
	
	<div id="box">
		<form method="post">

			<div class="imgcontainer">
    		<img src="avatar.jpg" alt="Avatar" class="avatar">
			</div>

			<div style= "font-size: 20px;margin: 10px;color: white;">Sign Up</div>

			<input id="text" type="text" name="user_name" placeholder= "Username"><br><br>
			<input id="text" type="password" name="password" placeholder= "Password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<p>Already have an Account? <a href="login.php" style= "color: orange;"> Log In</a></p>
		</form>
	</div>
</body>
</html>
