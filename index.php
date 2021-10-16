<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
		<title>Our Website</title>	
</head>
<body>
	<style type = "text/css">
		.container{
			width: 500px;
			margin: 100px auto;
			display: flex;
			flex-direction: row;
			justify-content: center;
		}

		.box{
			width: 200px;
			margin: 0 30px;
			box-shadow: 0 0 20px 2px rgba(0,0,0,0.9);
			transition: 3s;
			background-color: gray;
		}

		.box img{
			display: block;
			width: 200px;
			border-radius: 5px;
		}

		.box:hover img{
			transform: scale(1.4);
			z-index: 5;
		}

		body{
			background-color: lightgray;
		}

		p{
			font-size: 23px;
			text-align: justify;
			text-indent: 20px;
		}

	</style>

	<a href="logout.php">Logout</a>
	<p>Hello, <?php echo $user_data['user_name'];?> </p>
	
	<h1 style="text-align: center;">Welcome to "Raz and Alvarez" Website</h1>
	<h3 style="font-size: 20px; text-align: justify;">Every person falls in love with someone so deeply at some part of their lives that they can live rest of their life with that person. Love isn't like any other relationship as we know, If you get to ask some young lovers, they just says its more of a feeling of attachment of two understanding hearts than a kind of relationship. Many believe that love is the most gifted asset of anyone's life. And many believe that love does not have anything to do with the distance between two persons as long as the two hearts know how close they are.<br><br>
	Maybe God writes a lovestory in everyone's chapter of life. Its early for some and later for some other. But its definitely written. So now, a true heart says- "We, too had a love story". Why not travel in love for sometime with this story! Every love story is beautiful, but ours is my favorite.</h3>
	 
	<div class="container">
		<div class="box"><img src="photo1.jpeg"></div>
		<div class="box"><img src="photo2.jpeg"></div>
		<div class="box"><img src="photo3.jpeg"></div>
		<div class="box"><img src="photo4.jpeg"></div>
		<div class="box"><img src="photo5.jpeg"></div>
	</div>

	<center>
		<a href="https://www.youtube.com/watch?v=L5cIMuoTbPQ">How Do You Feel by: Ed Sheeran </a><br>
		<br>
	</center>
	
	<h1 style= "text-align: center;"> The Story of Us </h1>
	<p> Do you ever fall in love? You will never know when it will hit you. We often fall in love with the most unexpected person at the most unexpected time and do unexpected things. We met a year ago and started talking on October 8. As days passed by, everything turned into laughter and jokes. We still remember how fun we used to have before, and were both exciting that time in getting to know each other. We also amazed at each other because we have many similarities just like our favorite foods, places, hobbies and etc. Others say that it is called “Same Vibes.” We always stayed up all night and exchanging conversation. We didn't expect that everything will come this ways. As the saying goes "there is someone for anyone at any time in this life". We always cherish the good times or memories that we shared. We remember the first day that we met, its October 29 the day that we will never forgot. Nervous, shyness and awkward are the feelings that we had. The way we looked and talking to each other, it seem so perfect.  Starting a fresh relationship with someone is always fun and interesting. They might teach you new things throughout time and also bring out new things about yourself that you probably didn’t know. Everything felt so complete but we know that nothing is permanent except change. We might have misunderstanding, fights or anything that make the situation worse but we always end up in each other. Love always hope and endures. By God's grace we learn to follow his prompts, to behave differently, to be different. We focus in a loving way: worshipful and delightful. After all, <b>God is the center of our relationship.</b></p><br><br>

</body>
</html>