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

			//read from database
			$query = "select * from users where user_name = '$user_name 'limit 1";

				$result = mysqli_query($con, $query);

				if($result)
				{
					if($result && mysqli_num_rows($result) > 0)
					{
						$user_data = mysqli_fetch_assoc($result);

						if($user_data['password'] === $password)
						{
							$_SESSION['user_id'] = $user_data['user_id'];
							header("Location: index.php");
							die;
						}
					}
				}
			echo "<p style= 'color: red; background: #ccc; width: 250px; padding: 10px;'> Wrong username or password! </p>";
		}else
		{
			echo "<p style= 'color: red; background: #ccc; width: 250px; padding: 10px;'> Wrong username or password! </p>";		
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
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
		color: black;
		background-color: grey;
		border: none;
	}

	#box{

		background-color: rgba(0, 0, 0, 0.6);
		margin: auto;
		width: 300px;
		padding: 20px;
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
		background-image:url(image.jpg);
		background-size: cover;
		margin-top: 80px;
	}

	p{
		color: white;
		font-size: 15px; 
		font-family: Verdana; 
	}
		
	</style>	
	
	<div id="box">
		<form method="post">

			<div class="imgcontainer">
    		<img src="avatar.jpg" alt="Avatar" class="avatar">
			</div>

			<div style= "font-size: 20px;margin: 10px;color: white;">Log In</div>

			<input id="text" type="text" name="user_name" placeholder= "Username"><br><br>
			<input id="text" type="password" name="password" placeholder= "Password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<p>Create an Account. <a href="signup.php" style= "color: orange;" > SignUp</a></p>
		</form>
	</div>
</body>
</html>